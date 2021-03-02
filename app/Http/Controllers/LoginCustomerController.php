<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;


class LoginCustomerController extends Controller
{
    //
    public function resetPasswordForm()
    {
        Session::forget('forgot_url');
        return view('auth.passwords.email');
    }
    public function loginCustomer (Request $request)
    {

        $this->url = config('global.url');
        $url=$this->url. 'Account/GetToken';


        $data = $request->validate([
            'user_name' => ['required', 'string', 'max:255'],
            'password' => 'required'
        ]);

        // dd($data);

        $data= json_decode(stripslashes($this->to_curl($url,$data)));
        // dd($data);
        $status = $data->status_code;
        $message = $data->message;
        $auth = $data->authentication_status;
        $role = $data->roles;

        if (empty($data)){
            return Redirect::back()->withErrors(['There is a technical error encountered, Please try again ']);
        }else{
            if ($status == 200 && $role =="CUSTOMER" && $auth==true){

                $product =collect([
                    'is_login'=>1,
                    'token' => $data->token,
                    'roles' => $data->roles,
                    'user_id'=>$data->user_id,
                    'username' =>$data->username,
                    'email' => $data->email,
                    'national_id' => $data->national_id,
                    'user_full_name'=>$data->user_full_name,
                    'phone_number' => $data->msisdn,
                ]);

                // dd($product);
                Session::put('resource', $product);
                Session::put('token', $data->token);

                // dd(Session::all());


                    if(Session::has('forgot_url'))
                    {
                        return redirect()->route('reset-password');
                    }
                    else
                    {

                        $previous_url = Session::get('url');

                        // dd($previous_url);

                        if(is_null($previous_url))
                        {
                            return redirect()->route('welcome');

                        }
                        else
                        {
                           return redirect()->intended($previous_url); 
                        }
                
                    }
//                return Redirect::route('welcome')->withErrors(['Success']);
            }else{
                return Redirect::back()->withErrors($message);
            }
        }
    }

        function to_curl($url, $data){

        $headers = array
        (
            'Content-Type: application/json',
            'Content-Length: ' . strlen( json_encode($data) )
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST" );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1 );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER,  $headers );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $output = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        /*if($httpcode != 200)
            {
            $this->session->set_flashdata( "error", "An error has ocurred . Try again" );
            redirect('land');
            }
        */
        curl_close($ch);
        return $output;
    }

}
