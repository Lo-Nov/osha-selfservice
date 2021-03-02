<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title>RevenueSure ePayments Portal</title>
<link rel="icon" type="image/jpg" href="img/receipt-images/Untitledlogo2.png">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>


	<link rel="stylesheet" href="css/print-btn.css">

  <!-- ICON FONTS -->

<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft10{font-size:31px;font-family:Times;color:#000000;}
	.ft11{font-size:10px;font-family:Times;color:#000000; 	}
	.ft12{font-size:17px;font-family:Times;color:#000000;}
	.ft13{font-size:14px;font-family:Times;color:#000000;}
	.ft14{font-size:14px;font-family:Times;color:#000000;}
	.ft15{font-size:14px;font-family:Times;color:#000000;}
	
			html{
				background: #9e9e9e29;
			}	
	#page1-div{
			background: white !important;
		}
		th,td
		{
			font-size:14px;
		}
		table, th, td {
			  border: 2px solid black;
			  border-collapse: collapse;
			  padding: 5px;
			}
			.underline{
			border-bottom: 1px solid black;
			width: 100%;
			display: block;
			}

	
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page1-div" style="position:relative;width:629px;height:992px;">
<!-- <img width="629" height="892" src="{{asset('img/target001.png')}}" alt="background image"/> -->
<p style="position:absolute;top:46px;left:149px;white-space:nowrap" class="ft10"><b>NAIROBI CITY COUNTY</b></p>
<img style="position:absolute;top:85px;left:132px;white-space:nowrap" src="{{asset('img/county.jpg')}}" height="110" width="110" alt="Nairobi-County-Logo">
<p style="position:absolute;top:94px;left:242px;white-space:nowrap" class="ft11"><i>Tel No: 020-344194,0725-624489,0735-825383</i></p>
<p style="position:absolute;top:115px;left:298px;white-space:nowrap" class="ft11"><i>Email: info@nairobi.go.ke</i></p>
<p style="position:absolute;top:136px;left:340px;white-space:nowrap" class="ft11"><i>Emergency</i></p>
<p style="position:absolute;top:158px;left:340px;white-space:nowrap" class="ft11"><i>Tel No: 020-2222181</i></p>
<p style="position:absolute;top:190px;left:149px;white-space:nowrap" class="ft12">{{strtoupper($receipt->payment_for)}} RECEIPT&#160;</p>

<p style="position:absolute;top:244px;left:43px;white-space:nowrap" class="ft13"><b>Receipt No</b></p>
<p class="underline" style="position:absolute;top:243px;left:120px;white-space:nowrap;width: 300px;" class="ft14"><b>{{$receipt->receipt_number}}</b></p>
<p style="position:absolute;top:244px;left:425px;white-space:nowrap" class="ft13"><b>Date</b></p>
<p class="underline" style="position:absolute;top:243px;left:468px;white-space:nowrap; width: 100px;" class="ft14"><b>{{$receipt->receiptDate}}</b></p>
<p style="position:absolute;top:282px;left:43px;white-space:nowrap" class="ft13"><b>Payment received from</b></p>
<div class="underline" style="position:absolute;top:277px;left:217px;white-space:nowrap; width: 200px;" class="ft14"><b>{{$receipt->payment_from}}&#160;</b></div>
<p style="position:absolute;top:282px;left:425px;white-space:nowrap" class="ft13"><b>of KES&#160;</b></p>
<p class="underline" style="position:absolute;top:277px;left:510px;white-space:nowrap;width: 100px;" class="ft14"><b>{{number_format($receipt->amount)}}</b></p>
<p style="position:absolute;top:320px;left:43px;white-space:nowrap" class="ft13"><b>In words</b></p>
<p class="underline" style="position:absolute;top:317px;left:162px;white-space:nowrap;width: 200px;" class="ft14"><b>*** </b></p>
<p class="underline" style="position:absolute;top:317px;left:187px;white-space:nowrap;width: 200px;" class="ft14"><b>{{strtoupper($amount_in_words)}} &#160;only &#160; ***</b></p>
<p style="position:absolute;top:359px;left:43px;white-space:nowrap" class="ft13"><b>For</b></p>
<p class="underline" style="position:absolute;top:355px;left:90px;white-space:nowrap;width: 200px;" class="ft15"><b>{{$receipt->payment_for}}</b></p>

<table style="position:absolute;top:379px;left:43px;white-space:nowrap">
	<tr>
	<th>Plate no</th>
	<th>Duration</th>
	<th>Category</th>
	<th>Amount</th>
	<th>Effective date</th>
	<th>Expiry date</th>
		</tr>
		@foreach($receipt->payment_details as $payment)
		<tr>
			<td>{{$payment->registration_number}}</td>
			<td>{{$payment->duration}}</td>
			<td>{{$payment->vehicle_category}}</td>
			<td>{{number_format($payment->amount)}}</td>
			
			<td>{{$payment->effective_date}}</td>
			<td>{{$payment->expiry_date}}</td>
		</tr>
		@endforeach
</table>
<!--  -->
<p style="position:absolute;top:509px;left:43px;white-space:nowrap; margin-top:20px;" class="ft11"><i>Served by</i></p>
<p style="position:absolute;top:509px;left:106px;white-space:nowrap; margin-top:20px;" class="ft11"><i></i>{{explode(' ', Session::get('resource')['user_full_name'])[0]}}</p>
<p style="position:absolute;top:509px;left:170px;white-space:nowrap; margin-top:20px;" class="ft11"><i>Bill No&#160;{{$receipt->receipt_number}}</i></p>
<p style="position:absolute;top:509px;left:320px;white-space:nowrap; margin-top:20px;" class="ft11"><i>printed <?php echo date('Y-M-D h:i:sa')?></i></p>
<img style="position:absolute;top:529px;left:500px; height: 40px;" src="{{asset('img/nbk-logo.svg')}}" class="ft11"><i></i></p>
<br>
</div>

<span class="print-receipt">
	<i class="ti-print" title="print this receipt"><img src="{{asset('img/print.svg')}}"></i>
</span>


<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

<script type="text/javascript">
$('.print-receipt').on('click', function(){
	window.print();
});

</script>
</body>
</html>
