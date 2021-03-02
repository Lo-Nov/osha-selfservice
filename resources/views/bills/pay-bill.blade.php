@extends('layouts.app')
@section('content')
<!--form section-->
<!--	pay confirmation pop up-->
	<section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="pay-confirmation-pop">
  <div class="container p-md-5 p-sm-0">
    <div class="row p-5 d-flex justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-5 payment-pop-container m-5 m-sm-3 d-flex flex-column-md animated p-0">

        <div class="col-12 position-relative p-0">
			      <span class="close-receipt-form position-absolute z-index-1 transactions-actions animated text-white" id="close-pricepop"> <i data-feather="x"></i></span>

          <div class="">
			  <div class="show-amount-loader">
			  	<center class="p-5 text-white">
					<div class="lds-roller d-none animated"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
					<div class="confirmed-pay d-none animated"><img src="{{asset('img/icons/transactions-icons/alert-circle.svg')}}"></div>
					<p class="text-center text-white m-0 p-0 mb-3  payment-status">pending daily parking payment</p>
					<!-- <h2 class="mb-5 pb-5   text-white"><sup class="font-14 text-uppercase">KES</sup></h2> -->
			  	</center>
			  </div>
			  <div class="col-12 p-lg-5 p-sm-3 ">
			  		<div class="col-12 p-0 transacton-instructions d-none">
				  		<h5><strong class="  pb-3">Payment procedure</strong></h5>
				  <p class="font-12">Follow the payment procedure below in order to complete the payment</p>

				  <hr>
				  	<ul type="1" class="font-14 pb-5">
				  		<li>1). Wait for a <strong>payment pop </strong>up on your phone.</li>
				  		<li>2). Enter your <strong>M-PESA pin</strong> and click OK.</li>
				  		<li>3). An <strong>MPESA</strong> confimation SMS will be sent to you.</li>
				  		<li>4). Wait for upto <strong>45 secs</strong> as we process your transaction</li>
				  	</ul>
				  </div>


				  <div class="col-12 p-0 pb-3 transactions-actions d-none animated mt-5">
					  <h5><strong class="  pb-3">Kindly follow the following instructions to pay for the bill.</strong></h5>
					  <li class="font-14 m-0">1). Go to the M-PESA menu on your SIM Toolkit</li>
           <li class="font-14 m-0">2). Under the Lipa na M-PESA option, select Pay Bill and enter <strong>367776</strong>  as the business no.</li>
           <li class="font-14 m-0">3). Enter <strong id="bill_pay"></strong>  as the account no.</li>
           <li class="font-14 m-0">4) .Enter <b><span id="pay_amount"></span></b> as the amount.</li>
           <li class="font-14 m-0">5). You will receive a confirmation SMS that your payment has been received.</li>

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
        <div class="col-lg-7 service-form-img-container" id="bill-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">RevenueSure county bills</h2>
            <p class="font-14 mb-3  ">Fill in and remember to double check details to avoid any errors.</p>
          </div>
        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex">
    	     <div class="col-12 p-0 the-transaction-form animated">
				 <div class="">
            <p class="mb-5 pb-2  "><strong>Correctly fill in the form below to continue</strong></p>
          </div>
          <form class="transaction-form">
              <p id="errors" class="alert alert-danger d-none"></p>
            <div class="form-group col-sm-12 col-md-12 p-0 mt-2 mb-5">
                <label for="mpesa-phone" class=" ">Bill number</label>
                <input type="text" class="form-control" id="plot" placeholder="Enter the bill number" name="bill" value="{{old('bill_number')}}" required>
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
                    <input type="radio" class="form-check-input" name="method" id="mpesa" checked>
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
                    <input type="radio" class="form-check-input" name="method" id="airtel">
                    <span class="checkmark"></span> </div>
                </div>
                <div class="col-md-10 col-lg-11 py-4">
                  <p class="m-0 font-12  "><strong>airtel money</strong></p>
                  <p class="font-10px m-0">provide your <strong>aitel money phone number</strong> and a payment request will be sent to your phone</p>
                </div>
                <span class="checkmark"></span>
                </label>
              </div>
              <div id="error_message" class="alert alert-danger d-none"></div>
              <div class="form-group col-sm-12 col-md-12 p-0 my-2">
                <label for="mpesa-phone" class=" ">M-PESA phone number</label>
                <input type="text" class="form-control" id="mpesa-phone" placeholder="eg 07123...">
              </div>
            </div>
            <div class="col-sm-2 float-right d-none" id="loader2" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>

            <div class="col-12 px-0 text-uppercase mt-5 pt-5">
              <button type="button" id="btn-confirm" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 "><span class="btn-text text-uppercase font-12">Get bill details</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i></button>
            </div>
          </form>
			</div>

			<div class="col-12 d-none p-0 animated details-confirm">
				 <div class="">
            <p class="mb-5 pb-2  ">
				<span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your transaction details</strong>
					 </p>
					 <hr class="mt-1 p-0">
					 <p><strong class=" ">Bill details</strong></p>

					 <div class="transactions-details-container  ">
					 	<p class="m-0"><span>Client name</span></p>
						 <strong id="client"></strong>
						 <hr>
						 <p class="m-0"><span>Description</span></p>
						 <strong id="description"></strong>
						 <hr>

						<p class="m-0"> <span>Bill number</span></p>
						 <strong class="text-uppercase" id="bill-number"></strong>
						 <hr>

						 <!-- <p class="m-0"> <span>Date Created</span></p>
						 <strong class="text-uppercase" id="date"></strong>
						 <hr> -->
						<div class=" text-right amount-container">
						 		 <p><span class="text-uppercase text-left">Amount: </span> <strong id="amount_billed"> </strong></p>
						 </div>
						 <hr>

						 <form>

			<!-- <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="number-plate" class=" ">amount to pay</label>
              <input type="text" class="form-control" id="amount" placeholder="Enter amount to pay" name="amount" value="{{old('amount')}}">
            </div> -->
            <div class="col-sm-12 pl-0 d-none" id="print-receipt">
                  <p><b>You can now proceed to print your receipt</b></p>
               <a href="" target="_blank" id="receipt-link" class="btn btn-secondary text-white font-14 w-100  center mx-0 ">
                <div class="btn-txt animated">
                  <span class="btn-text text-uppercase font-12" >Print receipt</span>

                </div>
                  </a>
              </div>
              <div class="payment-actions">
							 <p class="alert alert-danger d-none" id="pay_errors"></p>
							 <div class="form-group col-sm-12 col-md-12 p-0" id="pay-mpesa">
              <label for="mpesa-number" class=" ">M-PESA phone number</label>
              @if(Session::has('resource'))
              <input type="text" class="form-control" id="mpesa-number" placeholder="eg 0712..." name="phone_number" value="{{Session::get('resource')['phone_number']}}">
              @else
              <input type="text" class="form-control" id="mpesa-number" placeholder="eg 0712..." name="phone_number" value="{{old('phone_number')}}">
              @endif
            </div>

              <!-- <button type="button" id="btn-pay" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 "> -->



                <div class="col-sm-6 pl-0">
               <a href="" target="_blank" id="pay-bank" class="btn btn-secondary text-white font-14 w-100  center mx-0 ">
                <div class="btn-txt animated">
                  <span class="btn-text text-uppercase font-12" >Print bank bill</span>

                </div>
                  </a>
              </div>
                <div class="col-sm-6 pr-0">
                  <button id="btn-pay" class="btn btn-primary text-white font-14 w-100  center mx-0 ">
                <div class="btn-txt animated">
                  <span class="btn-text text-uppercase font-12" >Pay via MPESA</span>

                </div>
                  </button>
             </div>
             </div>
				  <!-- <div class="btn-txt animated">
				  	<span class="btn-text text-uppercase font-12" id="pay">Pay via M-PESA</span>

				  </div>
          <div class="col-sm-6 col-md-6">
               <button id="pay-bank" class="btn btn-secondary text-white font-14 w-100 p-4 center mx-0 ">
                <div class="btn-txt animated">
                  <span class="btn-text text-uppercase font-12">Pay via bank</span>

                </div>
                  </button>
              </div> -->

								 <!--  </button>
                   <div class="lds-ellipsis d-none animated" id="loader"><div></div><div></div><div></div><div></div></div>
            </div> -->
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
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

<script type="text/javascript">
    $("#btn-confirm").click(function(e){

      e.preventDefault();

      var bill_number = $("input[name=bill]").val();
      //alert(bill_number);

      if(bill_number === "")
      {
        $('#plot').css( "border-color", "red" );
        return;
      }

      $('#btn-confirm').text('Checking details...');
      $('#loader2').removeClass('d-none');


      $.ajax({

        url: "<?php echo url('get-bill-details')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {bill_number:bill_number},
          
        success:function(data){
            console.log(data)

          $('#loader2').addClass('d-none');
          $('#btn-confirm').text('CHECK STATUS');
        	// console.log(data);
          if(data === "")
          {
            document.getElementById('errors').innerHTML = "We are having trouble retrieving your bill details. Please try again later.";
          $('#errors').removeClass('d-none');
          }
        	if(data.status_code == 200){
            document.getElementById("client").innerHTML = data.response_data.client_name;
            document.getElementById("description").innerHTML = data.response_data.brief_description;
            document.getElementById("bill-number").innerHTML = data.response_data.bill_number;
            // document.getElementById("date").innerHTML = data.DateIssued;
            document.getElementById("amount_billed").innerHTML ="KES " +parseInt(data.response_data.bill_amount).toLocaleString();
            document.getElementById("pay_amount").innerHTML =parseInt(data.response_data.bill_amount).toLocaleString();


            if(data.response_data.bill_amount > 150000)
            {
              $('#btn-pay').addClass('d-none');
              $('#pay-mpesa').addClass('d-none');
            }

            $('.details-confirm').removeClass('fadeOutRight');
            $('.details-confirm').removeClass('d-none');
            $('.the-transaction-form').removeClass('fadeInLeft');
            $('.the-transaction-form').addClass('fadeOutLeft');
            $('.the-transaction-form').addClass('d-none');
            $('.details-confirm').addClass('fadeInRight');

            var a = document.getElementById('pay-bank');
            a.href = "print-bill/"+ bill_number;
        }
        else
        {
          document.getElementById('errors').innerHTML = data.message;
          $('#errors').removeClass('d-none');
        }

        }
        });
    } );
</script>

<script type="text/javascript">
    $("#btn-pay").click(function(e){
      var recheck_count = 1;
      var regex = /(\+?254|0|^){1}[-. ]?[7]{1}([0-2]{1}[0-9]{1}|[9]{1}[0-9]{1}|[4]{1}[0-9]{1})[0-9]{6}/;
      e.preventDefault();

      $('#pay').text('Initiating payment...');

      var bill_number = $("input[name=bill]").val();

      var phone_number = $("input[name=phone_number]").val();

      // var amount = $("input[name=amount]").val()
      if(regex.test(phone_number) == false)
      {
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid Safaricom number';
        $('#pay_errors').removeClass('d-none');
        $('#btn-pay').text('PAY');
        $('#btn-pay').removeClass('d-none');
        $('#loader').addClass('d-none');
        return;
      }

      $('#pay-confirmation-pop').removeClass('d-none');
      $('.lds-roller').removeClass('d-none');
      $('.transacton-instructions').removeClass('d-none');
      $('.payment-status').text('Awaiting payment');


      $.ajax({

        url: "<?php echo url('initiate-bill-payment')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {bill_number:bill_number, phone_number:phone_number},
        success:function(data){
          // console.log(data);

          var res = JSON.parse(data);

          if(res['status_code'] == 200){
            $('#pay').text('Awaiting payment...');
            var pay_id = bill_number;
            checkagain(pay_id,recheck_count);
          }
          else{
            document.getElementById("error_message").innerHTML = res.message;

            $("#error_message").removeClass('d-none');
            $('#pay').text('PAY');
            $('#pay').removeClass('d-none');
            $('.lds-ellipsis').addClass('d-none');
            $('#payment-pop-container').addClass('d-none');
          }
            if(data == "")
          {
            document.getElementById('pay_errors').innerHTML = 'We are having trouble initiating payment. Please try again later.';
            $('#pay_errors').removeClass('d-none');
            $('#pay').text('PAY');
            $('#pay').removeClass('d-none');
            $('.lds-ellipsis').addClass('d-none');
            $('#payment-pop-container').addClass('d-none');
            return;
          }
        }
        });
    } );
</script>
<script type="text/javascript">

    function checkagain(pay_id,recheck_count)
    {

      if(recheck_count==11)
                {
                  $('#bill_pay').text(pay_id);
                  $('#pay').text('PAY');
                  $('.btn-txt').removeClass('d-none');
                  $('.lds-ellipsis').addClass('d-none');
                  $('.transacton-instructions').addClass('d-none');
                  $('.transactions-actions').removeClass('d-none');
                  $('.lds-roller').addClass('d-none');
                  $('.confirmed-pay').removeClass('d-none');

                  $('.payment-status').text('Unable to validate payment!');




                }
                else
                {
                    recheck_count++;
                    setTimeout(function(){
                    $.ajax({

                    url :"get-receipt/" +pay_id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {
                      // console.log(data);
                      if(data == "")
                        {
                          document.getElementById('pay_errors').innerHTML = 'We are having trouble retrieving the receipt. Please try again later.';
                          $('#pay_errors').removeClass('d-none');
                          $('#pay').text('PAY');
                          $('#pay').removeClass('d-none');
                          $('.lds-ellipsis').addClass('d-none');
                          return;
                        }

                        if(data.status_code == 200)
                        {
                          $('.lds-ellipsis').addClass('d-none');
                          $('#pay').text('PAY');
                          $('#pay-confirmation-pop').addClass('d-none');

                          var a = document.getElementById('receipt-link');
                          a.href = "view-receipt/"+pay_id;
                          $('.payment-actions').addClass('d-none');
                          $('#print-receipt').removeClass('d-none');
                          // window.open("view-receipt/"+ pay_id);
                        }

                        else
                        {
                          checkagain(pay_id,recheck_count);
                        }


                    }
                });
                  }, 3000);

            }
}
</script>
<script type="text/javascript">
  $('#close-pricepop').on('click',function(){
  $('#pay-confirmation-pop').addClass('d-none');
    $('#pay-confirmation-pop').removeClass(' zoomOut');
});
</script>

<!-- <script type="text/javascript">
  $('#pay-bank').click(function(){
    var bill_number = $("input[name=bill]").val();


    window.open('print-bill/' +bill_number);


  });
</script> -->
@endsection
