<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class MarketController extends Controller
{
    //
    public function getMarketRentForm()
    {
        if (Session::get('resource')['is_login'] != 1) {
          Session::put('url', url()->current());
            return redirect()->route('login');
        }else {

        $url=config('global.rent_url').'markets';
        $data=[];

        $markets_info = json_decode($this->get_curl($url));

        // dd($markets_info);

        $markets = $markets_info->response_data;
        // dd($markets);

        

    	return view('rents.markets.market-rents', ['markets' => $markets]);
    }
    }

public function generateHouseBill(Request $request)
    {

        // dd($request->all());
      $request_data = new Request;
      $request_data = $request->all();
      // dd($request_data);
        $HouseNumber = $request->house_number;
        $HouseTypeId = $request->house_type_id;
        $EstateID = $request->estate_id;
        $UHN = $request->UHN;
        $amount = $request->amount;
        $phone_number = $request->phone_number;


        $data = [
            'HouseNumber' => $HouseNumber,
            'HouseTypeId' => $HouseTypeId,
            'EstateID' => $EstateID,
            'UHN' => $UHN,
            'Amount' => $amount,
        ];
        // dd($data);

        $url = config('global.rent_url').'billing2';
        $bill_info = json_decode($this->bill_curl($url, $data));
        if(is_null($bill_info))
        {
          $bill_info = $this->tryHouseBill($request_data)->original;
        }
        else
        {
          Session::put('bill',$bill_info);
        }
        // dd($bill_info);
        

        return response()->json($bill_info);
        
    }

    public function tryHouseBill($request)
    {

        // dd($request);
        $HouseNumber = $request['house_number'];
        $HouseTypeId = $request['house_type_id'];
        $EstateID = $request['estate_id'];
        $UHN = $request['UHN'];
        $amount = $request['amount'];


        $data = [
            'HouseNumber' => $HouseNumber,
            'HouseTypeId' => $HouseTypeId,
            'EstateID' => $EstateID,
            'UHN' => $UHN,
            'Amount' => $amount,
        ];
        // dd($data);

        $url = config('global.rent_url').'billing';
        $bill_info = json_decode($this->bill_curl($url, $data));

        Session::put('bill', $bill_info);

        return response()->json($bill_info);
    }
    public function viewHouseBill()
    {
      return view('rents.bill');
    }
    

    function get_curl( $url) {
        // append the header putting the secret key and hash

        $request_headers = array();
        $request_headers[] = "application/json";
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

        curl_close($ch);
    }

     public function bill_curl($url, $data){
        $headers = array(
            'Content-Type: application/json',
//            'Authorization: Bearer ' .$header,
            
        );
 
        $ch = curl_init();
        curl_setopt_array($ch, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_SSL_VERIFYHOST => FALSE,
          CURLOPT_SSL_VERIFYPEER => FALSE,
          CURLOPT_POSTFIELDS => array('EstateID' => $data['EstateID'],'HouseTypeId' => $data['HouseTypeId'],'HouseNumber' => $data['HouseNumber'],'UHN' => $data['UHN'],'Amount' => $data['Amount']),

        ));
        $output = curl_exec($ch);
        // dd($output);
        $error = curl_error($ch);        
        
        curl_close($ch);
        return $output;
      }

}
