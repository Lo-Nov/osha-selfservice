<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class WelcomeController extends Controller
{
    //branches

    public function index()
    {

    	// dd(Session::all());
        if(!Session::has('seasonal_token'))
        {
            $url = config('global.url'). 'Account/GetToken';

            $data = [
                'user_name' => 'PARKING',
                'password' => 'lockfree',
            ];

            $token_info = json_decode(stripslashes($this->token_curl($url,$data)));

            if(empty($token_info))
            {
                return view('welcome');
            }

            if($token_info->status_code !=200)
            {
                return view('welcome');
            }

            $token = $token_info->token;




            Session::put('seasonal_token', $token);
        }

    	return view('welcome');
    }

    public function branches()
    {

    	// dd(Session::all());
    	return view('branches');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }



    public function token_curl($url, $data){
        $headers = array(
            'Content-Type: application/json',
            'api-key:7935cf09148cbce9794db37be028260a',
            'Content-Length: ' . strlen(json_encode($data))
        );

        // dd($headers);
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
        if (curl_errno($ch))
        {
            print "Error: " . curl_error($ch);
        }
        else
        {
            return $output;
        }
    }
}
