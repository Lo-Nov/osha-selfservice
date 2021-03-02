@extends('layouts.app')
@section('content')
<!--form section-->
<!--  pay confirmation pop up-->
  <section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="pay-confirmation-pop">
  <div class="container p-md-5 p-sm-0">
    <div class="row p-5 d-flex justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-5 payment-pop-container m-5 m-sm-3 d-flex flex-column-md animated p-0">

        <div class="col-12 position-relative p-0">
            <span class="close-receipt-form position-absolute z-index-1 d-none transactions-actions animated text-white" id="close-pricepop"> <i data-feather="x"></i></span>

          <div class="">
        <div class="show-amount-loader">
          <center class="p-5 text-white">
          <div class="lds-roller animated"><div></div><div></div><fdiv></div><div></div><div></div><div></div><div></div><div></div></div>
          <div class="confirmed-pay d-none animated"><img src="img/icons/transactions-icons/check.svg"></div>
          <p class="text-center text-white m-0 p-0 mb-3  payment-status">pending daily parking payment</p>
          <h2 class="mb-5 pb-5   text-white"><sup class="font-14 text-uppercase">KES</sup>2,000</h2>
          </center>
        </div>
        <div class="col-12 p-lg-5 p-sm-3 ">
            <div class="col-12 p-0 transacton-instructions">
              <h5><strong class="  pb-3">payment procedure</strong></h5>
          <p class="font-12">follow the following payment procedure in order to complete the payment</p>

          <hr>
            <ul type="1" class="font-14 pb-5">
              <li>1.Wait for a <strong>payment pop </strong>up on your phone.</li>
              <li>2.Enter your <strong>M-PESA pin</strong> and click OK.</li>
              <li>3.An <strong>MPESA</strong> confimation SMS will be sent to you.</li>
              <li>4.Wait for upto <strong>45 secs</strong> as we process your transaction</li>
            </ul>
          </div>


          <div class="col-12 p-0 pb-3 d-none transactions-actions animated mt-5">
            <h5><strong class="  pb-3">Thank You!</strong></h5>
            <p class="font-14   m-0">Payment was succesfully received.</p>
             <p class="font-14">you can close the pop up or perform the actions below</p>
            <a href="#" class="btn btn-primary px-5 py-3 text-white text-uppercase font-12 font-sm-10 px-sm-4">Print Receipts</a>
            <a href="#" class="btn btn-secondary px-5 py-3 text-black text-uppercase font-12 font-sm-10 px-sm-4">add to assets</a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  pay confirmation pop up-->
<section id="service-form-section" class="">
  <div class="container">
    <div class="row p-5 ">
      <div class="service-form-container  d-flex flex-column-md animated col-12 p-0">
        <div class="col-lg-7 service-form-img-container" id="land-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">RevenueSure land rates</h2>
            <p class="font-14 mb-3  ">Fill in and remember to double check details to avoid any errors.</p>
          </div>
        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex">
           <div class="col-12 p-0 the-transaction-form animated">


				 <div class="">
            <p class="mb-5 pb-2  ">
				<span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your Transaction details</strong>
					 </p>
					 <hr class="mt-1 p-0">
					 <p><strong class=" ">Land details</strong></p>

					 <div class="transactions-details-container  ">
					 	<p class="m-0"><span>tenant</span></p>
						 <strong>{{$details->CustomerSupplierName}}</strong>
						 <hr>
						 <p class="m-0"><span>house</span></p>
						 <strong>{{$details->PlotNumber}}</strong>
						 <hr>

						<p class="m-0"> <span>monthly rent</span></p>
						 <strong class="text-uppercase">{{$details->LandRates}}</strong>
						 <hr>

						 <p class="m-0"> <span>last billed</span></p>
						 <strong class="text-uppercase">{{$details->LastBillDueDate}}</strong>
						 <hr>

						<div class=" text-right amount-container">
						 		 <p><span class="text-uppercase text-left">current balance</span> <strong> {{$details->CurrentBalance}}</strong>
           </p>
						 </div>
						 <hr>

			<form action="{{route('initiate-land-payment')}}">
				@csrf

			<div class="form-group col-sm-12 col-md-12 p-0">
              <label for="number-plate" class=" ">amount to pay</label>
              <input type="text" class="form-control" id="amount" placeholder="Enter amount to pay" name="amount" value="{{old('amount')}}">
            </div>

			<div class="form-group col-sm-12 col-md-12 p-0">
              <label for="mpesa-number" class=" ">M-PESA phone number</label>
              <input type="text" class="form-control" id="mpesa-number" placeholder="eg 0712..." name="phone_number" value="{{old('phone_number')}}">

              <input type="hidden" class="form-control" name="UPN" value="{{$details->UPN}}">
            </div>

							  <div class="col-12 p-0 text-uppercase mt-5">
              <button type="submit" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 confirm-btn">
				  <div class="btn-txt animated">
				  	<span class="btn-text text-uppercase font-12">pay KES 2,000</span>
				  <i data-feather="arrow-right" class="ml-2 float-right pull-right">
				  </i>
				  </div>
				  <div class="lds-ellipsis d-none animated"><div></div><div></div><div></div><div></div></div>
								  </button>
            </div>

						 </form>
					 </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!--form section-->
@endsection
