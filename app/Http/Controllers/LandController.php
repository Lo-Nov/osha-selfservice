<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receipt;
use Illuminate\Support\Facades\Session;
use PDF;

class LandController extends Controller
{
    //

    public function getPlotNumber(Request $request)
    {
        if ((is_null(Session::get('resource')))) {
            Session::put('url', url()->current());
            return redirect()->route('login');
        }else{
    	
    	return view('land.land-rates');
        }
    }

    public function getLandDetails(Request $request)
    {

    	$url = config('global.land_url'). 'Registration/SearchLand';
      $token = Session::get('token');
    	$data = ['search_string' => $request->plot_number, 'token' => $token];
        
      $land = json_decode($this->to_curl($url, $data));

      return response()->json($land);     
    }

        public function getLandDetails2(Request $request)
    {

      $url = 'https://biller.revenuesure.co.ke/api/landRate/getplotdetails';

      $plot_number = str_replace(' ', '', $request->plot_number);

      $data = ['plotNumber' => $plot_number];
        
        $land = json_decode($this->land_curl($url, $data));

        return response()->json($land);    
    }


    public function landRatePayment(Request $request)
    {

        // dd($request->all());
        $url = config('global.url'). 'Land/InitiateLandRatePaymentBiller';
        $token = Session::get('token');

        $data = [
              'UPN' => $request->plot_number,
              'amount' => (int)$request->amount,
              'phone_number' => $request->phone_number,
              'specify_amount' => true,
              'token' => $token
          ];

          // dd($data);

          $payment = json_decode($this->to_curl($url, $data));
          // dd($payment);
          return response()->json($payment);

    }

    public function generateBill(Request $request)
    {
      // dd($request->all());
      $token = Session::get('token');
      $data = [
              'UPN' => $request->plot_number,
              'amount' => (int)$request->amount,
              'specify_amount' => true,
              'token' => $token,
          ];

      $url = config('global.url'). 'Land/GenerateLandRateBillBiller';

      Session::put('plot_number', $request->UPN);

      $bill_info = json_decode($this->to_curl($url, $data));

      return response()->json($bill_info);
    }

        public function generateBill2(Request $request)
    {
      $token = Session::get('token');
      $data = [
              'upn' => $request->upn,
              'amount' => (int)$request->amount,
              'plotNumber' => $request->plot_number,
              'token' => $token,
          ];

          // dd($data);

      $url = 'https://biller.revenuesure.co.ke/api/landRate/generatebill';

      Session::put('plot_number', $request->plot_number);

      $bill_info = json_decode($this->generate_land_bill_curl($url, $data));

      // dd($bill_info);

      return response()->json($bill_info);
    }

    public function printBill($bill_number)
    {
        $url = config('global.bill_url').'billing/GetBill';
        $token = Session::get('token');

        // dd($url);

        $data = [
            'BillNumber' => $bill_number,
            'token' => $token,
        ];


        $bill_info = json_decode($this->check_bill_curl($url, $data));

        // dd($bill_info);
        $bill = $bill_info->response_data;

        $data = [
                'bill' => $bill,
            ];

        $pdf = PDF::loadView('bill', $data);  
        return $pdf->stream('bill.pdf',array('Attachment'=>0));

        // return view('bill', ['bill' => $bill]);
    }

    public function getLandReceipt($id)
    {

        $url = config('global.bill_url').'billing/GetReceipt';

        $data = ['BillNumber' => $id];

        $receipt_info = json_decode($this->receipt_curl($url, $data));

        // dd($receipt_info);

        return response()->json($receipt_info);

    }

    public function viewLandReceipt($id)
    {

        $url = config('global.bill_url'). '/billing/GetReceipt';
        $token = Session::get('token');

        $data = ['BillNumber' => $id, 'token' => $token];

        $receipt_info = json_decode($this->receipt_curl($url, $data))->response_data;
        // dd($receipt_info);
        $receiptInfo = $receipt_info->receiptInfo;
        $receipt = $receipt_info->billInfo;

        if(Session::has('resource'))
        {
            $receipt_user_id = Session::get('resource')['user_id'];
        }
        else
        {
            $receipt_user_id = null;
        }

        $receipt_entry = Receipt::firstOrCreate(  
            [ 
                'identifier' => $receiptInfo->BillNo  
            ],  
            [ 
                'brief_description' => $receipt->Description, 
                'description' => $receipt->FeeDescription,  
                'receipt_no' => $receiptInfo->ReceiptNo,  
                'customer' => $receipt->Customer, 
                'identifier' => $receiptInfo->BillNo, 
                'date' => $receiptInfo->ReceiptDate,  
                'user_id' => $receipt_user_id,  
                'amount' => $receiptInfo->RecieptAmount,  
                'category' => 'Land'  
            ] 
        );
        return view('land.receipt', ['receipt' => $receipt, 'receiptInfo' => $receiptInfo]);

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

        if (curl_errno($ch))
        {
            print "Error: " . curl_error($ch);
        }
        else
        {
            return $output;
        }

        curl_close($ch);
       
        
    }

        public function generate_land_bill_curl($url, $data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_SSL_VERIFYHOST => FALSE,
          CURLOPT_SSL_VERIFYPEER => FALSE,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => array('plotNumber' => $data['plotNumber'], 'amount' => $data['amount'], 'upn' => $data['upn']),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return $response;
        }
    }

    public function land_curl($url, $data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_SSL_VERIFYHOST => FALSE,
          CURLOPT_SSL_VERIFYPEER => FALSE,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => array('plotNumber' => $data['plotNumber']),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return $response;
        }
    }

    public function receipt_curl($url, $data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_SSL_VERIFYHOST => FALSE,
          CURLOPT_SSL_VERIFYPEER => FALSE,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => array('BillNumber' => $data['BillNumber']),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return $response;
        }
    }

    public function check_bill_curl($url, $data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
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
          CURLOPT_POSTFIELDS => array('BillNumber' => $data['BillNumber']),
        ));

        $response = curl_exec($curl);

        // dd($response);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return $response;
        }
    }
}
