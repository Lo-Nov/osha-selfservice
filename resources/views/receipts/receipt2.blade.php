<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title>RevenueSure ePayments Portal</title>
<link rel="icon" type="image/jpg" href="'img/receipt-images/Untitledlogo2.png">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>


	<link rel="stylesheet" href="{{asset('css/print-btn.css')}}">

  <!-- ICON FONTS -->

<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft10{font-size:31px;font-family:Times;color:#000000;}
	.ft11{font-size:10px;font-family:Times;color:#000000;}
	.ft12{font-size:17px;font-family:Times;color:#000000;}
	.ft13{font-size:14px;font-family:Times;color:#000000;}
	.ft14{font-size:14px;font-family:Times;color:#000000;}
	.ft15{font-size:14px;font-family:Times;color:#000000;}
	
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page1-div" style="position:relative;width:629px;height:892px;">
<img width="629" height="892" src="img/target001.png" alt="background image"/>
<p style="position:absolute;top:46px;left:149px;white-space:nowrap" class="ft10"><b>NAIROBI CITY COUNTY</b></p>
<p style="position:absolute;top:94px;left:242px;white-space:nowrap" class="ft11"><i>Tel No: 020-344194,0725-624489,0735-825383</i></p>
<p style="position:absolute;top:115px;left:298px;white-space:nowrap" class="ft11"><i>Email: info@nairobi.go.ke</i></p>
<p style="position:absolute;top:136px;left:340px;white-space:nowrap" class="ft11"><i>Emergency</i></p>
<p style="position:absolute;top:158px;left:340px;white-space:nowrap" class="ft11"><i>Tel No: 020-2222181</i></p>
<p style="position:absolute;top:190px;left:149px;white-space:nowrap" class="ft12">{{strtoupper($receipt->billInfo->FeeDescription)}} RECEIPT&#160;</p>

<p style="position:absolute;top:244px;left:43px;white-space:nowrap" class="ft13"><b>Receipt No</b></p>
<p style="position:absolute;top:243px;left:213px;white-space:nowrap" class="ft14"><b>{{$receipt->receiptInfo->ReceiptNo}}</b></p>
<p style="position:absolute;top:244px;left:425px;white-space:nowrap" class="ft13"><b>Date</b></p>
<p style="position:absolute;top:243px;left:468px;white-space:nowrap" class="ft14"><b>{{$receipt->receiptInfo->ReceiptDate}}</b></p>
<p style="position:absolute;top:282px;left:43px;white-space:nowrap" class="ft13"><b>Payment received from</b></p>
<p style="position:absolute;top:277px;left:217px;white-space:nowrap" class="ft14"><b>{{$receipt->billInfo->Customer}}&#160;</b></p>
<p style="position:absolute;top:282px;left:425px;white-space:nowrap" class="ft13"><b>of KES&#160;</b></p>
<p style="position:absolute;top:277px;left:510px;white-space:nowrap" class="ft14"><b>{{number_format($receipt->receiptInfo->RecieptAmount)}}</b></p>
<p style="position:absolute;top:320px;left:43px;white-space:nowrap" class="ft13"><b>In words</b></p>
<p style="position:absolute;top:310px;left:162px;white-space:nowrap" class="ft14"><b>*** </b></p>
<p style="position:absolute;top:310px;left:187px;white-space:nowrap" class="ft14"><b>{{strtoupper($amount_in_words)}} &#160;only &#160; ***</b></p>
<p style="position:absolute;top:359px;left:43px;white-space:nowrap" class="ft13"><b>For</b></p>
<p style="position:absolute;top:355px;left:90px;white-space:nowrap" class="ft15"><b>{{$receipt->billInfo->Description}}</b></p>
<p style="position:absolute;top:397px;left:43px;white-space:nowrap" class="ft13"><b>Paid via</b></p>
<p style="position:absolute;top:398px;left:170px;white-space:nowrap" class="ft14"><b>{{$receipt->Source->PaymentMode}}</b></p>
<p style="position:absolute;top:392px;left:387px;white-space:nowrap" class="ft14"><b>Bill Amount</b></p>
<p style="position:absolute;top:392px;left:542px;white-space:nowrap" class="ft14"><b>{{number_format($receipt->billInfo->BillTotal)}}</b></p>
<p style="position:absolute;top:417px;left:387px;white-space:nowrap" class="ft14"><b>Amount Received</b></p>
<p style="position:absolute;top:417px;left:542px;white-space:nowrap" class="ft14"><b>{{number_format($receipt->receiptInfo->RecieptAmount)}}</b></p>
<p style="position:absolute;top:443px;left:387px;white-space:nowrap" class="ft14"><b>Balance</b></p>
<p style="position:absolute;top:443px;left:542px;white-space:nowrap" class="ft14"><b>{{number_format($receipt->billInfo->BillTotal - $receipt->receiptInfo->RecieptAmount)}}</b></p>
<p style="position:absolute;top:479px;left:43px;white-space:nowrap" class="ft11"><i>Served by {{explode(' ', Session::get('resource')['user_full_name'])[0]}}</i></p>
<p style="position:absolute;top:479px;left:106px;white-space:nowrap" class="ft11"><i></i></p>
<p style="position:absolute;top:479px;left:170px;white-space:nowrap" class="ft11"><i>Bill No&#160;{{$receipt->billInfo->BillNo}}</i></p>
<p style="position:absolute;top:479px;left:340px;white-space:nowrap" class="ft11"><i>printed <?php echo date('Y-m-d h:i:sa') ?></i></p>
</div>

<!-- <span class="print-receipt">
	<i class="ti-print" title="print this receipt"><img src="{{asset('img/print.svg')}}"></i>
</span>

/*   */ -->

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>


<script type="text/javascript">
$('.print-receipt').on('click', function(){
	window.print();
});
/* the function above gives printing functionality to the button */

</script>
</body>
</html>
