<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Receipt;

class SeasonalParkingController extends Controller
{

    //
    protected $url;

    public function __construct()
    {
    	$this->url = config('global.seasonal_url');
    }

    public function seasonalParking() 
    {
      // if (Session::get('resource')['is_login'] != 1) {
      //       Session::put('url', url()->current());
      //       return redirect()->route('login');
      //   }
        $vehicle_categories = $this->getCategories()->response_data;

        // Session::flush('vehicle');

        if(is_null($vehicle_categories))
        {
          return redirect()->back()->withErrors("We're having trouble retrieving vehicle categories. Please try again later.");
        }

        
        return view('parking.seasonal.seasonal-parking', ['vehicle_categories' => $vehicle_categories]);

    }

    public function getCategories()
    {
    	$url = $this->url . 'VehicleCategory';

    	$categories = json_decode($this->get_curl($url));

    	return $categories;

    }

    public function getDurations(Request $request)
    {
    	$url  = $this->url . 'duration';

    	$data = [
    		'CategoryId' => $request->CategoryId,
    	];

    	$durations  = json_decode($this->durations_curl($url, $data));

    	return response()->json($durations);
    }

    public function getSeasonalCharges(Request $request)
    {
    	$url = $this->url . 'charges';

    	$data = [
    		'DurationId' => $request->DurationId,
    	];

    	$charges = json_decode($this->charges_curl($url, $data));

    	return response()->json($charges);
    }

    public function addVehicle(Request $request)
    {

      // dd($request->all());
    	$url  = $this->url . 'AddVehicle';

    	$data = [
    		'PlateNumber' => $request->PlateNumber,
    		'DurationId' => $request->DurationId,
    		'CategoryId' => $request->CategoryId,
    	];
    
    	$vehicle_info = json_decode($this->vehicle_curl($url, $data));

      // dd($vehicle_info);

      $vehicle = collect([
        'PlateNumber' => $request->PlateNumber,
        'Duration' => $request->Duration,
        'Category' => $request->Category,
        'Charges' => $request->charges,
        'BillNumber' => $vehicle_info->response_data->bill_number,
      ]);

      // dd($vehicle);

      Session::put('vehicle', $vehicle);



    	return response()->json($vehicle_info);
    }

    public function payment(Request $request)
    {

    	// dd($request->all());
    	$url = $this->url . 'payment';

    	$data = [
    		'BillNumber' => $request->bill_number,
    		'PhoneNumber' => $request->phone_number,
    	];

    	$payment = json_decode($this->pay_curl($url, $data));

    	return response()->json($payment);
    }

    public function getReceipt($id)
    {

        $url = config('global.bill_url').'billing/GetReceipt';

        $data = ['BillNumber' => $id];

        $receipt_info = json_decode($this->receipt_curl($url, $data));

        // dd($receipt_info);

        return response()->json($receipt_info);

    }

    public function viewReceipt($id)
    {

        $url = config('global.bill_url'). '/billing/GetReceipt';

        $data = ['BillNumber' => $id];

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
                'category' => 'Seasonal'  
            ] 
        );

 
        return view('parking.seasonal.receipt', ['receipt' => $receipt, 'receiptInfo' => $receiptInfo]);

    }

    public function printBill($bill_number) 
    {
      $url = config('global.bill_url').'billing/GetBill';

        // dd($url);

        $data = [
            'BillNumber' => $bill_number
        ];


        $bill_info = json_decode($this->check_bill_curl($url, $data));

        // dd($bill_info);

        if(empty($bill_info))
        {
          return redirect()->back()->withErrors("We're having trouble retrieving your bill. Please try again later.");
        }

        if($bill_info ->status_code !=200)
        {
          return redirect()->back()->withErrors($bill_info->message);
        }


        $bill = $bill_info->response_data;

        return view('parking.seasonal.bill', ['bill' => $bill]);
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
    function get_curl( $url) {
        // append the header putting the secret key and hash
        $headers = array(
            'Content-Type: application/json',
            // 'Authorization: Bearer ' .$this->token,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
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

    public function durations_curl($url, $data){
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
          CURLOPT_POSTFIELDS => array('CategoryId' => $data['CategoryId']),
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

    public function charges_curl($url, $data){
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
          CURLOPT_POSTFIELDS => array('DurationId' => $data['DurationId']),
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

    public function vehicle_curl($url, $data){
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
          CURLOPT_POSTFIELDS => array('DurationId' => $data['DurationId'], 'PlateNumber' => $data['PlateNumber'], 'CategoryId' => $data['CategoryId']),
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

    public function pay_curl($url, $data){
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
          CURLOPT_POSTFIELDS => array('BillNumber' => $data['BillNumber'], 'PhoneNumber' => $data['PhoneNumber']),
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
