<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Receipt;
use Illuminate\Pagination\Paginator;

class ProfileController extends Controller
{
    public function client_profile(){
        // dd(Session::all());
        $user_id = Session::get('resource')['user_id'];
        $url = config('global.url'). 'Account/GetUserProfile';
        $token = Session::get('token');
        $data = [
            'user_id' => Session::get('resource')['user_id'], 'token' => $token
        ]
        ;

        $user_info = json_decode($this->to_curl($url,$data));
        if(empty($user_info))
        {
            return redirect()->back()->withErrors("We're having trouble retrieving your details.Please try again later.");
        }

        if($user_info->status_code !=200)
        {
            return redirect()->back()->withErrors($user_info->message);
        }

        $user = $user_info->response_data;

        $national_id = Session::get('resource')['national_id'];

        $recent_transactions = Receipt::orderBy('date','desc')->where('user_id', $user_id)->get()->take(5);

        // dd($user);

        $transactions = Receipt::orderBy('date','desc')->where('user_id', $user_id)->simplePaginate(10); 
        return view('profile.profile', ['user' => $user, 'recent_transactions' => $recent_transactions, 'transactions' => $transactions, 'national_id' => $national_id]);
    }

    public function change_pswd(Request $request){
        if (Session::get('resource')['is_login'] != 1) {
            return redirect()->route('login');
        }else{

            $user_id= $request->user_id;
            $old_password= $request->old_password;
            $new_password = $request->new_password;
            $token = Session::get('token');

            $data=[
                'user_id'=>$user_id,
                'old_password' =>$old_password,
                'new_password'=>$new_password,
                'token' => $token
            ];
            $this->url = config('global.url');
            $url = $this->url . 'Account/ChangePassword';

            $status=json_decode($this->to_curl($url, $data));

           // dd($status->status_code);
            if(empty($status))
        {
            return redirect()->back()->withErrors("We're having trouble retrieving your details.Please try again later.");
        }
            if ($status->status_code == 200){
                return response()->json($status);
            }else{
                return response()->json($status);
            }


        }
    }
    public function forgot_password(){
        return view('auth.forgot');
    }

    public function get_password(Request $request){

            $username= $request->username;
            $token = Session::get('token');
            $data=[
                'username'=>$username,
                'token' => $token
            ];
            $this->url = config('global.url');
            $url = $this->url . 'Account/ForgotPassword';

            $status=json_decode($this->to_curl($url, $data));
            Session::put('forgot_url', url()->current());

            //dd($status);
            if(empty($status))
            {
                return redirect()->back()->withErrors("We're having trouble retrieving your details.Please try again later.");
            }

            if ($status->status_code == 200){


                return response()->json($status);

            }else{
                return response()->json($status);
            }



    }

    public function updateProfile(Request $request)
    {
        // dd($request->all());

        $data = [
            'user_id' => $request->user_id,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'account_email_address' => $request->email,
            'id_no' => $request->national_id,
            'token' => Session::get('token'),
        ];

        $url = 'https://www.revenuesure.co.ke/RevenueSure/api/Account/UpdateProfileDetails';

        // dd($url);

        $updatedProfile = json_decode($this->to_curl($url, $data));

        // dd($updatedProfile);
        
        if(empty($updatedProfile))
        {
            return redirect()->back()->withErrors("We're having trouble updating your details. Please try again later");
        }
        if ($updatedProfile->status_code == 200){
            return response()->json($updatedProfile);
        }else{
            return response()->json($updatedProfile);
        }
    }

    public function getReceipts($user_id)
    {
        $receipts = Receipt::where('user_id', $user_id)->get();

        // dd($receipts);

        if($receipts->isEmpty())
        {
            $data = [
                'status_code' => 400,
                'message' => 'You have no transactions',
                'response_data' => null,
            ];
            return $data;
        }

        else
        {
            $data = [
                'status_code' => 200,
                'message' => 'Receipts retrieved successfully',
                'response_data' => $receipts,
            ];
            return $data;
        } 
    }
    public function getCategoryReceipts($category, $user_id)
    {
        $receipts = Receipt::where('user_id', $user_id)->where('category', $category)->get();

        // dd($receipts);

        if($receipts->isEmpty())
        {
            $data = [
                'status_code' => 400,
                'message' => 'Receipts could not be retrieved',
                'response_data' => null,
            ];
            return $data;
        }

        else
        {
            $data = [
                'status_code' => 200,
                'message' => 'Receipts retrieved successfully',
                'response_data' => $receipts,
            ];
            return $data;
        } 
    }


    function get_curl( $url) {
        // append the header putting the secret key and hash

        $request_headers = array();
        $request_headers[] = ["application/json", 'Authorization: Bearer/ ' .$data['token'],];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $output = curl_exec($ch);

        if (curl_errno($ch))
        {
            print "Error: " . curl_error($ch);
        }
        else
        {
            // Show me the result
            return $output;



        }
    }
    public function to_curl($url, $data){
        $headers = array(
            'Content-Type: application/json',
           'Authorization: Bearer ' .$data['token'],
            'Content-Length: ' . strlen(json_encode($data))
        );
        //dd($headers);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $output = curl_exec($ch);

        // dd($output);
        /* $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
         if($httpcode != 200)
             {
             $this->Session::flash('error', "An error has ocurred . Try again");
             redirect('registerbusiness');
           }
        */
        curl_close($ch);
        return $output;
    }
}
