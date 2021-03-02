<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;
use App\Receipt;


class HouseRentController extends Controller
{
    //
    public function getHouseRentForm()
    {
        if (Session::get('resource')['is_login'] != 1) {
          Session::put('url', url()->current());
            return redirect()->route('login');
        }else {
            $url = config('global.rent_url') .'estates';
            // dd($url);
            $data = [];

            $estates_info = json_decode($this->get_curl($url));

            if(is_null($estates_info))
            {
              return redirect()->route('welcome')->withErrors('An error occured. Please try again later.');
            }

            if($estates_info->status_code !=200)
            {
              return redirect()->route('welcome')->withErrors($estates_info->message);
            }

            // dd($estates_info);
            $estates = $estates_info->response_data;
            
      return view('rents.houses.house-rents', ['estates' => $estates]);

      }
    }

    public function getHouseTypes(Request $request)
    {
        if (Session::get('resource')['is_login'] != 1) {
            return redirect()->route('login');
        } else {
            $id = $request->EstateID;
            $url = config('global.rent_url') . 'house_type';

            // dd($url);
            $data=[
                'EstateID'=>$id,
            ];

            $details = json_decode($this->house_type_curl($url, $data));

            return response()->json($details);
        }
    }

    public function getHouseNumbers(Request $request)
    {
        if (Session::get('resource')['is_login'] != 1) {
            return redirect()->route('login');
        } else {
            $url = config('global.rent_url') . 'house_no';

            $type = $request->houseTypeID;
            $id = $request->estateID;
            $data = [
                'HouseTypeId' => $type,
                'EstateID' => $id,
            ];

            $details = json_decode($this->house_numbers_curl($url, $data));

            return response()->json($details);
        }

      }


    
    public function confirmHouseDetails(Request $request)
    {
        // dd($request->all());
        $HouseNumber = $request->house_number;
        $UHN = $request->UHN;


        $data = [
            'HouseNumber' => $HouseNumber,
            'UHN' => $UHN,
        ];

        $url = $url=config('global.rent_url').'housedetails';
        $house_info = json_decode($this->house_curl($url, $data));
        // dd($house_info);
        $houseDetails = $house_info;

        // dd($houseDetails);
        return response()->json($houseDetails);
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

        $url = config('global.rent_url').'billing';
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

    public function printBill($bill_number) 
    {
      $url = config('global.bill_url').'billing/GetBill';

        // dd($url);

        $data = [
            'BillNumber' => $bill_number
        ];


        $bill_info = json_decode($this->check_bill_curl($url, $data));

        // dd($bill_info);
        $bill = $bill_info->response_data;

        // dd($bill);

        $data = [
                'bill' => $bill,
            ];

        $pdf = PDF::loadView('bill', $data);  
        return $pdf->stream('bill.pdf',array('Attachment'=>0));
        
        // return view('bill', ['bill' => $bill]);
    }

    public function initiateRentPayment(Request $request)
    {

        // dd($request->all());
        $url = config('global.rent_url'). 'payment';
        $data =
        [
          'BillNumber' => $request->bill_number,
          'PhoneNumber' => $request->phone_number,
        ];

        $payment = json_decode($this->pay_curl($url, $data));

        // dd($payment);
        return response()->json($payment);
    }
 
      public function generateHouseReceipt($bill_number)
      {
        if (Session::get('resource')['is_login'] != 1) {
            return redirect()->route('login');
        }else {

            $url = config('global.bill_url') . 'GetReceipt';
            $bill_number = $bill_number;
            $data = ['bill_number' => $bill_number];


            $receipt_info = json_decode($this->receipt_curl($url, $data));
            $receipt = $receipt_info;
      }
    }


    public function getHouseReceipt($id)
    {
        $url = config('global.bill_url').'billing/GetReceipt';
        // dd($url);

        $data = ['BillNumber' => $id];

        $receipt_info = json_decode($this->receipt_curl($url, $data));

        // dd($receipt_info);

        return response()->json($receipt_info);
    }

    public function viewHouseReceipt($id)
    {
        $url = config('global.bill_url').'billing/GetReceipt';

        $data = ['BillNumber' => $id];

        $receipt_info = json_decode($this->receipt_curl($url, $data));
        // dd($receipt_info);
        $receiptInfo = $receipt_info->response_data->receiptInfo;
        $receipt = $receipt_info->response_data->billInfo;

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
                'amount' => $receiptInfo->RecieptAmount ,
                'category' => 'Rent'  
            ] 
        );

        return view('rents.receipt', ['receipt' => $receipt, 'receiptInfo' => $receiptInfo]);
    }
    public function downloadReceiptPDF()
    {
      $pdf = PDF::loadView('rents.houses.house-rent-receipt', $data);
      return $pdf->download('receipt.pdf');
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
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
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

  public function house_type_curl($url, $data)
  {
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
          CURLOPT_POSTFIELDS => array('EstateID' => $data['EstateID']),

        ));
        $output = curl_exec($ch);
        // dd($output);
        $error = curl_error($ch);        
        
        curl_close($ch);
        return $output;
  }

  public function house_numbers_curl($url, $data)
  {
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
          CURLOPT_POSTFIELDS => array('EstateID' => $data['EstateID'], 'HouseTypeId' => $data['HouseTypeId']),

        ));
        $output = curl_exec($ch);
        // dd($output);
        $error = curl_error($ch);        
        
        curl_close($ch);
        return $output;
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


public function to_curl($url, $data){
    $headers = array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen(json_encode($data))
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $output = curl_exec($ch);
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

public function house_curl($url, $data)
  {
        $headers = array(
            'Content-Type: application/json',
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
      CURLOPT_POSTFIELDS => array('HouseNumber' => $data['HouseNumber'], 'UHN' => $data['UHN']
    )));
    $output = curl_exec($ch);
    $error = curl_error($ch);        
    
    curl_close($ch);
    return $output;
  }

public function pay_curl($url, $data)
  {
        $headers = array(
            'Content-Type: application/json',
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
      CURLOPT_POSTFIELDS => array('BillNumber' => $data['BillNumber'], 'PhoneNumber' => $data['PhoneNumber']
    )));
    $output = curl_exec($ch);
    $error = curl_error($ch);        
    
    curl_close($ch);
    return $output;
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
