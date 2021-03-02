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
                      <div class="lds-roller animated d-none"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                      <div class="confirmed-pay  animated"><img src="img/icons/transactions-icons/check.svg"></div>
                      <p class="text-center text-white m-0 p-0 mb-3  payment-status">Pending Registration fee payment</p>
                      <h2 class="mb-5 pb-5 text-capitalize text-white"><sup class="font-14 text-uppercase">Kes</sup>2,000</h2>
                    </center>
                </div>
                <div class="col-12 p-lg-5 p-sm-3 ">
                        <div class="col-12 p-0 transacton-instructions d-none">
                            <h5><strong class="text-capitalize pb-3">payment procedure</strong></h5>
                    <p class="font-12">follow the following payment procedure in order to complete the payment</p>

                    <hr>
                        <ul type="1" class="font-14 pb-5">
                            <li>1.Wait for a <strong>payment pop </strong>up on your phone.</li>
                            <li>2.Enter your <strong>M-PESA pin</strong> and click OK.</li>
                            <li>3.An <strong>MPESA</strong> confimation SMS will be sent to you.</li>
                            <li>4.Wait for upto <strong>45 secs</strong> as we process your transaction</li>
                        </ul>
                    </div>


                    <div class="col-12 p-0 pb-3 transactions-actions animated mt-5">
                      <h5><strong class="  pb-3">Kindly follow the following instructions to pay for the bill.</strong></h5>
                      <p class="font-14   m-0">Go to the M-PESA menu on your SIM Toolkit</p>
                       <p class="font-14">Under the Lipa na M-PESA option, select Pay Bill and enter <strong>367776</strong>  as the business no.</p>
                       <p class="font-14">Enter your bill number <strong id="bill_pay">367776</strong>  as the account no.</p>
                       <p class="font-14">You will receive a confirmation SMS that your payment has been received.</p>
                    </div>
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
        <div class="col-lg-7 service-form-img-container" id="biz-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">RevenueSure Business Permit</h2>
            <p class="font-14 mb-3  ">Fill in and remember to double check details to avoid any errors.</p>
          </div>
        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex">
    	     <div class="col-12 p-0 the-transaction-form animated">
				 <div class="">
            <p class="mb-5 pb-2  "><strong>Correctly fill in the form below to continue</strong></p>
          </div>
          @if($errors->any())
          <p class="alert alert-danger">{{$errors->first()}}</p>
          @endif
          <form class="transaction-form" action="{{route('get-permit')}}" target="new">
            <div ><p id="id_errors" class="d-none alert alert-danger"></p></div>
            <div class="form-group col-sm-12 col-md-12 p-0 mt-2 mb-5">
                <label for="mpesa-phone" class=" ">Enter business number</label>
                <input type="text" class="form-control" id="businessID" placeholder="Business No." name="businessID" value="{{old('businessID')}}" required>
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
              <div class="col-sm-2 float-right d-none" id="loader" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
          </div>
              <button type="submit" class="btn btn-primary text-white font-14 w-100 center mx-0 "><span class="btn-text text-uppercase font-12">View Permit</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i></button>
            </div>
          </form>
			</div>

			<div class="col-12 d-none p-0 animated details-confirm">
				 <div class="">
            <p class="mb-5 pb-2  ">
				<span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your Transaction details</strong>
					 </p>
					 <hr class="mt-1 p-0">
					 <p><strong class=" ">Business details</strong></p>

					 <div class="transactions-details-container  ">
					 	<p class="m-0"><span>Business name</span></p>
						 <strong id="business_name"></strong>
						 <hr>
						 <p class="m-0"><span>Business ID</span></p>
						 <strong id="business_number"></strong>
						 <hr>

						<p class="m-0"> <span>Business activities</span></p>
						 <strong class="text-uppercase" id="business_activities"></strong>
						 <hr>

						 <p class="m-0"> <span>Year of the active permit</span></p>
						 <strong class="text-uppercase" id="calendar_year"></strong>
						<div class=" text-right amount-container d-none">
						 		 <p><span class="text-uppercase text-left">print permit</span></p>
						 </div>
						 <hr>

						 <form target="new" action="{{route('business-permit')}}">

							 <div class="form-group col-sm-12 col-md-12 p-0 d-none">
              <label for="number-plate" class=" ">Amount to pay</label>
              <input type="text" class="form-control" id="amount" placeholder="Enter amount to pay">
              <input type="hidden" name="business_identifier" id="business_identifier">
              <input type="hidden" name="business_year" id="business_year">
            </div>

							 <div class="form-group col-sm-12 col-md-12 p-0 d-none">
              <label for="mpesa-number" class=" ">M-PESA phone number</label>
              <input type="text" class="form-control" id="mpesa-number" placeholder="eg 0712...">
            </div>

							  <div class="col-12 p-0 text-uppercase mt-5">
              <button type="submit" class="btn btn-primary text-white font-14 w-100 center mx-0">print permit <i data-feather="arrow-right" class="ml-2 float-right pull-right">
          </i></button>
				  <div class="btn-txt animated">
				  	<span class="btn-text text-uppercase font-12"></span>

				  </div>
				  <div class="lds-ellipsis d-none animated"><div></div><div></div><div></div><div></div></div>
								  </a>
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
@section('scripts')
<script type="text/javascript">
    $("#btn-confirm").click(function(e){

      e.preventDefault();
      $('#btn-confirm').text('Checking details...');
      $('#loader').removeClass('d-none');

      var business_id = $("input[name=business_id]").val();
      var year = $("select[name=year]").val();


      $.ajax({

        url: "<?php echo url('get-sbp')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {business_id:business_id, year:year},

        success:function(data){
          $('#loader').addClass('d-none');
          $('#btn-confirm').text('CHECK STATUS');
            // console.log(data);
            if(data.success == true){
            document.getElementById("business_name").innerHTML = data.data.business_name;
            document.getElementById("business_number").innerHTML = data.data.business_id;
            document.getElementById("business_activities").innerHTML = data.data.business_activity_description;
            document.getElementById("calendar_year").innerHTML = data.data.calendar_year;
            document.getElementById('business_identifier').value = data.data.business_id;
            document.getElementById('business_year').value = data.data.calendar_year;

            $('.details-confirm').removeClass('fadeOutRight');
            $('.details-confirm').removeClass('d-none');
            $('.the-transaction-form').removeClass('fadeInLeft');
            $('.the-transaction-form').addClass('fadeOutLeft');
            $('.the-transaction-form').addClass('d-none');
            $('.details-confirm').addClass('fadeInRight');
          }

          else
          {
            document.getElementById('id_errors').innerHTML = data.msg;
            $('#id_errors').removeClass('d-none');
          }
        }
        });
    } );
</script>
<script type="text/javascript">
  $('#close-pricepop').on('click',function(){
  $('#pay-confirmation-pop').addClass('d-none');
    $('#pay-confirmation-pop').removeClass(' zoomOut');
});
</script>
@endsection
