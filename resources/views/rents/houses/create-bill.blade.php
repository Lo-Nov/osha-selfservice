@extends('layouts.app')
@section('content')
<!--form section-->
<!--	pay confirmation pop up-->
	<section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="pay-confirmation-pop">
  <div class="container p-md-5 p-sm-0">
    <div class="row p-5 d-flex justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-5 payment-pop-container m-5 m-sm-3 d-flex flex-column-md animated p-0">

        <div class="col-12 position-relative p-0">
			      <span class="close-receipt-form position-absolute z-index-1 d-none transactions-actions animated text-white" id="close-pricepop"> <i data-feather="x"></i></span>

          <div class="">
			  <div class="show-amount-loader">
			  	<center class="p-5 text-white">
					<div class="lds-roller animated"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
					<div class="confirmed-pay d-none animated"><img src="img/icons/transactions-icons/check.svg"></div>
					<p class="text-center text-white m-0 p-0 mb-3  payment-status">generating ...</p>
					<h5 class="text-white">Bill No. : ###</h5>
			  	</center>
			  </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!--	pay confirmation pop up-->
<section id="service-form-section" class="">
  <div class="container">
    <div class="row p-5 ">
      <div class="service-form-container  d-flex flex-column-md animated col-12 p-0">
        <div class="col-lg-7 service-form-img-container" id="bill-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">RevenueSure bills</h2>
            <p class="font-14 mb-3  ">Fill in and remember to double check details to avoid any errors.</p>
          </div>
        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex">
    	     <div class="col-12 p-0 the-transaction-form animated">
				 <div class="">
            <p class="mb-5 pb-2  "><strong>Correctly fill in the form below to continue</strong></p>
          </div>
          <form class="transaction-form">
            <div class="form-group col-sm-12 col-md-12 p-0 mt-2 mb-5">
                <label for="mpesa-phone" class=" ">Full names</label>
                <input type="text" class="form-control" id="plot" placeholder="eg John Doe">

				<label for="mpesa-phone" class=" ">Your Id/Pass Number</label>
                <input type="text" class="form-control" id="plot" placeholder="eg John Doe">

				<label for="mpesa-phone" class=" ">Bill Amount</label>
                <input type="text" class="form-control" id="plot" placeholder="Enter amount chargable">
              </div>

            <div class="col-12 p-4 center danger-light-bg lighter-txt price-container position-relative">
				 <span class="close-price-container position-absolute"> <i data-feather="x"></i></span>
              <p class="text-uppercase m-0 font-14"><strong>Total</strong></p>
              <p class="text-uppercase m-0 font-12">KES 2,000</p>
            </div>
            <div class="form-group col-sm-12 col-md-12 p-0 my-3 d-none">
              <p class=" ">Pay via:</p>
              <div class="col-12 p-0 pay-container">
                <label for="mpesa" class=" gray-bg w-100 row d-flex justify-content-center align-items-center align-content-center m-0 pay-method">
                <div class="col-lg-1 col-md-2 pr-0 radio-side">
                  <div class="radio-container col-12 p-0 w-100 h-100">
                    <input type="radio" class="form-check-input" name="method" required="" id="mpesa" checked>
                    <span class="checkmark"></span> </div>
                </div>
                <div class="col-md-10 col-lg-11 py-4">
                  <p class="m-0 font-12  "><strong> Mpesa</strong></p>
                  <p class="font-10px m-0">Pay instantly via mPesa. Enter your <strong>mpesa phone number</strong> and a payment request will be sent automatically to your phone</p>
                </div>
                <span class="checkmark"></span>
                </label>
                <label for="airtel" class=" w-100 row d-flex justify-content-center align-items-center align-content-center m-0 pay-method">
                <div class="col-lg-1 col-md-2 pr-0 radio-side">
                  <div class="radio-container col-12 p-0 w-100 h-100">
                    <input type="radio" class="form-check-input" name="method" required="" id="airtel">
                    <span class="checkmark"></span> </div>
                </div>
                <div class="col-md-10 col-lg-11 py-4">
                  <p class="m-0 font-12  "><strong>airtel money</strong></p>
                  <p class="font-10px m-0">provide your <strong>aitel money phone number</strong> and a payment request will be sent to your phone</p>
                </div>
                <span class="checkmark"></span>
                </label>
              </div>
              <div class="form-group col-sm-12 col-md-12 p-0 my-2">
                <label for="mpesa-phone" class=" ">mpesa phone number</label>
                <input type="text" class="form-control" id="mpesa-phone" placeholder="eg 07123...">
              </div>
            </div>

            <div class="col-12 px-0 text-uppercase mt-5 pt-5">
              <button type="button" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 transaction-form-btn"><span class="btn-text text-uppercase font-12">check bill details</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i></button>
            </div>
          </form>
			</div>

			<div class="col-12 d-none p-0 animated details-confirm">
				 <div class="">
            <p class="mb-5 pb-2  ">
				<span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your Transaction details</strong>
					 </p>
					 <hr class="mt-1 p-0">
					 <p><strong class=" ">personal details</strong></p>

					 <div class="transactions-details-container  ">
					 	<p class="m-0"><span>full names</span></p>
						 <strong>john doe</strong>
						 <hr>
						 <p class="m-0"><span>id-pass number</span></p>
						 <strong>2123132123</strong>
						 <hr>

						<div class=" text-right amount-container">
						 		 <p><span class="text-uppercase text-left">amount billed </span> <strong> KES 2,000</strong></p>
						 </div>
						 <hr>

						 <form>




							  <div class="col-12 p-0 text-uppercase mt-5">
              <button type="button" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 confirm-btn">
				  <div class="btn-txt animated">
				  	<span class="btn-text text-uppercase font-12">generate bill</span>
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
  </div>
</section>
<!--form section-->
@endsection
