<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class RegisterCustomerController extends Controller
{
    //




    public function register(Request $request)
    {

        $this->url = config('global.url');
        $url=$this->url. 'Account/Register';

    
    	$validatedData = $request->validate([
    		'full_name' => ['required', 'string', 'max:255'],
    		// 'middle_name' => ['required', 'string', 'max:255'],
    		'email' => ['required', 'email', 'max:255'],
    		'phone_number' => ['required'],
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
    		'password_confirmation' => ['required', 'min:6'],
    		'role' => ['required', 'string'],
    		// 'user_name' => ['required', 'string'],
    		'roles_List' => ['required'],
    	]);

        $name_array = explode(' ',$request->full_name);

        if(sizeof($name_array)<2)
        {
            return redirect()->back()->withErrors('Please enter your full name');
        }

        // dd($name_array);
        $data = [
            'first_name' => $name_array[0],
            'last_name' => $name_array[1],
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => $request->password,
            'role' => $request->role,
            'user_name' => $request->email,
            'roles_List' => $request->roles_List,
        ];


        $this->data['regData'] = json_decode(stripslashes($this->to_curl($url,$data)));
        //dd($this->data);
        $status = $this->data['regData']->status_code;
        $message = $this->data['regData']->message;

        if (empty($this->data['regData'])){
            return Redirect::back()->withErrors(['There is a technical error encountered, Please try again ']);
        }else{
            if ($status == 200){
                return Redirect::route('login')->with('success', 'You have been registered successfully. Log in to access services.');
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
