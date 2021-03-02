@extends('layouts.app')
@section('content')
<section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="pay-confirmation-pop">
    <div class="container p-md-5 p-sm-0">
      <div class="row p-5 d-flex justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 payment-pop-container m-5 m-sm-3 d-flex flex-column-md animated p-0">

          <div class="col-12 position-relative p-0">
                    <span class="close-receipt-form position-absolute z-index-1  transactions-actions animated text-white" id="close-pricepop"> <i data-feather="x"></i></span>

            <div class="">
                <div class="show-amount-loader">
                    <center class="p-5 text-white">
                      <div class="lds-roller animated d-none"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                      <div class="confirmed-pay d-none animated"><img src="{{asset('img/icons/transactions-icons/alert-circle.svg')}}"></div>
                      <p class="text-center text-white m-0 p-0 mb-3  payment-status">Pending Registration fee payment</p>
                      <!-- <h2 class="mb-5 pb-5 text-capitalize text-white"><sup class="font-14 text-uppercase">Kes</sup></h2> -->
                    </center>
                </div>
                <div class="col-12 p-lg-5 p-sm-3 ">
                        <div class="col-12 p-0 transacton-instructions d-none">
                            <h5><strong class="text-capitalize pb-3">payment procedure</strong></h5>
                    <p class="font-12">Follow the following payment procedure in order to complete the payment</p>

                    <hr>
                        <ul type="1" class="font-14 pb-5">
                            <li>1). Wait for a <strong>payment pop </strong>up on your phone.</li>
                            <li>2). Enter your <strong>M-PESA pin</strong> and click OK.</li>
                            <li>3). An <strong>MPESA</strong> confimation SMS will be sent to you.</li>
                            <li>4). Wait for upto <strong>45 secs</strong> as we process your transaction</li>
                        </ul>
                    </div>


                    <div class="col-12 p-0 pb-3 transactions-actions d-none animated mt-5">
                      <h5><strong class="  pb-3">Kindly follow the following instructions to pay for your seasonal parking.</strong></h5>
                      <li class="font-14 m-0">1). Go to the M-PESA menu on your SIM Toolkit</li>
                       <li class="font-14 m-0">2). Under the Lipa na M-PESA option, select Pay Bill and enter <strong>367776</strong>  as the business no.</li>
                       <li class="font-14 m-0">3). Enter <strong id="bill_pay"></strong>  as the account no.</li>
                       <li>4). Enter KES <b><span id="pay_amount"></span></b> as the amount</li>
                       <li class="font-14 m-0">5). You will receive a confirmation SMS that your payment has been received.</li>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<div class="col-12 p-5 notification-container vw-100 vh-100 animated d-none">
	<div >
		<div class="card animated delete-row">
			<div class="card-header bg-danger py-2 d-flex justify-content-between align-items-center align-content-center pr-3">
				<h2 class="card-title text-capitalize text-white m-0">remove car</h2>
				<div class="actions text-white float-right close-delete">

					<a  data-feather="x" href="#" class="actions__item text-white m-0 p-0 d-flex justify-content-center align-items-center close-dialogoue-delete" title="close noification"></a>
				</div>
			</div>
			<div class="card-body">
				<div class="row">

				<div class="col-12">
					<img src="img/icons/warning.svg" class=" icon float-left  mr-3">
					<h2 class="card-title mb-3 kev-capitalize font-weight-bold" id="record-name">Firm name</h2>
          <h2 class="card-title mb-3 kev-capitalize font-weight-bold d-none" id="p-code">Firm name</h2>
					<p>Are you sure you want to delete this car from the list of vehicles payable by this transaction?</p>
				</div>
				</div>
			</div>
			<div class="card-footer d-flex justify-content-end text-capitalize">
        <a class="card-link close-delete my-2">close</a>
        <a class="card-link text-danger glow my-2" id="remove-entry">remove from list</a>
      </div>
		</div>
	</div>
</div>
<section id="service-form-section" class="#">
  <div class="container">
    <div class="row p-5 ">
      <div class="service-form-container d-flex flex-column-md animated col-12 p-0 ">
        <div class="col-lg-7 service-form-img-container p-0" id="parking-img">
          <div class="col-lg-8 col-md-12 position-relative p-sm-4">
            <h2 class="mb-4 text-white">RevenueSure seasonal parking</h2>
            <p class="font-14 mb-3 ">Fill in and remember to double check details to avoid any errors.</p>
          </div>
        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex p-sm-4">
    	     <div class="col-12 p-0 the-transaction-form animated">
				 <div class="">
            <p class="mb-5 pb-2"><strong>Correctly fill in the form below to continue</strong></p>
          </div>
          <form class="transaction-form">

			  <p class="alert alert-danger d-none" id="errors"></p>

            <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="parking_duration" class="">Duration</label>
              <select class="form-control" id="parking_duration" name="duration_code">
                <option  value="">-- select parking duration --</option>
                @foreach($durations as $duration)
                @unless($duration->description == 'Daily')
                <option value="{{$duration->duration_code}}">{{$duration->description}}</option>
                @endunless
                @endforeach
              </select>
            </div>


            <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="car_type" class="text-capitalize">Vehicle types</label>
              <select class="form-control" id="car_type" name="vehicle_category_code">
                <option value="">-- select vehicle type --</option>
                @foreach($vehicle_categories as $vehicle_category)
                <option value="{{$vehicle_category->category_code}}">{{$vehicle_category->description}}</option>
                @endforeach
              </select>
            </div>

			   <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="number-plate" class="">Registration number</label>
              <input type="text" class="form-control" id="number-plate" placeholder="eg KAA 1..." name="registration_no" value="{{old('registration_no')}}">
            </div>


            <div class="col-12 p-4 center info-light-bg lighter-txt price d-none position-relative" >
				 <!-- <span class="close-price-container position-absolute"> <i data-feather="x"></i></span> -->
              <p class="text-uppercase m-0 font-14" id="total"><strong>Total</strong></p>
              <p class="text-uppercase m-0 font-12" id="show-price">KES <span id="pay-price"></span></p>
            </div>
            <div class="col-12 p-4 center info-light-bg lighter-txt rates d-none position-relative" >
				 <!-- <span class="close-price-container position-absolute"> <i data-feather="x"></i></span> -->
              <p class="text-uppercase m-0 font-14" id="total"><strong>Rates for that vehicle are not set</strong></p>

            </div>
            <br>
            <div class="col-12 text-uppercase p-0 col-lg-12 col-md-12">
              <button id="add_vehicle" type="button" class="btn btn-secondary text-white font-14 w-100 center mx-0 "><span class="btn-text text-uppercase font-12">Add vehicle</span></button>
            </div>

            <p id="p-code" class="d-none"></p>
			  <br>
        <div>
			  @if(!empty($vehicles->response_data->parking_entries))
			  <div class="col-12 p-0 cars-container mt-3">
			  	@foreach($vehicles->response_data as $vehicle)
			  	<span class="font-12 cars-add">
			  		<span class="number-plate" id="{{$vehicle->parking_code}}">{{$vehicle->vehicle_reg_no}}
			  		</span><i class="remove-car font-14 ml-2" data-feather="x"></i>

			  	</span>
			  @endforeach
			  </div>
			  @endif
        </div>
            @if(!empty($vehicles->response_data->parking_entries))
            <div class="col-12 p-0 text-uppercase mt-5">
              <button type="button" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 transaction-form-btn"><span class="btn-text text-uppercase font-12">Confirm parking details</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i></button>
            </div>
            @endif
          </form>
			</div>

			<div class="col-12 d-none p-0 animated details-confirm">
				 <div class="">
            <p class="mb-5 pb-2 text-capitalize">
				<span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your details</strong>
					 </p>
           <p class="text-danger">Removing or adding a vehicle after initiating payment will require you to get a new payment code.</p>
					 <hr class="mt-1 p-0">
					 <p><strong class="text-capitalize">transaction details</strong></p>



					 <div class="transactions-details-container text-capitalize ">
          @if(!empty($vehicles->response_data->parking_entries))
           @foreach($vehicles->response_data as $vehicle)
						<div class="col-12 d-flex p-0 single-listing justify-content-between">
						 	 <div>
						 	<strong id="{{$vehicle->parking_code}}">{{$vehicle->vehicle_reg_no}}</strong>
					 	<p class="m-0"><span>{{$vehicle->category_code}}</span></p>
						 </div>

						 <div class="amount-close d-flex align-items-center text-right">
						 	<div class="amount-duration">
							 	<strong class="text-uppercase">kes {{number_format($vehicle->parking_cost)}}</strong>
							 <p class="m-0"><span class="font-12">{{$vehicle->duration_code}}</span></p>
							 </div>
							 <span class="ml-3 remove-car"><i data-feather="x"></i></span>
						 </div>
						 </div>
						 <hr>
             @endforeach
             @endif
						@if(!empty($vehicles->response_data->parking_entries))
						<div class=" text-right amount-container">

              @php
                $total = 0;
                foreach($vehicles->response_data as $vehicle){
                  $total=$total + $vehicle->parking_cost;
                }
              @endphp
              <p><span class="text-uppercase text-left" >Total: </span> <strong> KES <span id="charges">{{number_format($total)}}</span></strong></p>

						 </div>
             @endif
						 <hr>

             <div class="col-sm-6 pl-0">

                      </div>

                      <!-- <div class="col-sm-6 pr-0">
                        <a target="_blank" id="pay-bank" href="" class="btn btn-secondary text-white font-14 w-100 center mx-0 ">
                      <div class="btn-txt animated">
                        <span class="btn-text text-uppercase font-12">Pay via bank</span>

                      </div>
                        </a>
                   </div>
 -->
						 <form class="mpesa">
							<div class="form-group col-sm-12 col-md-12 p-0 my-3">
              <p class="text-capitalize">payment options</p>
              <div class="col-12 p-0 pay-container">
                <label for="mpesa" class=" gray-bg w-100 row d-flex justify-content-center align-items-center align-content-center m-0 pay-method">
                <div class="col-lg-1 col-md-2 pr-0 radio-side">
                  <div class="radio-container col-12 p-0 w-100 h-100">
                    <input type="radio" class="form-check-input" name="method" required="" id="mpesa" checked>
                    <span class="checkmark"></span> </div>
                </div>
                <div class="col-md-10 col-lg-11 py-4">
                  <p class="m-0 font-12 text-capitalize"><strong> Mpesa</strong></p>
                  <p class="font-10px m-0">Pay instantly via mPesa. Enter your mpesa phone number and a payment request will be sent automatically to your phone</p>
                </div>
                <span class="checkmark"></span>
                </label>

              </div>

            </div>
							 <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="phone-number" class="">M-PESA phone number</label>
              <input type="text" class="form-control" id="phone-number" placeholder="eg 0712..." name="phone_number" value="{{old('phone_number')}}">
            </div>

							  <div class="col-12 p-0 text-uppercase mt-5">
              <button id="btn-pay" type="button" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0  ">
				  <div class="btn-txt animated">
				  	<span class="btn-text text-uppercase font-12">pay</span>
				  <i data-feather="arrow-right" class="ml-2 float-right pull-right">
				  </i>
				  </div>
				  <div class="lds-ellipsis d-none animated"><div></div><div></div><div></div><div></div></div>
								  </button>
            </div>

						 </form>

            <div class="pl-0 d-none" id="print-receipt">
                  <p><b>You can now proceed to print your receipt and sticker(s)</b></p>
                  <div class="col-sm-6">
               <a  href="" target="_blank" id="receipt-link" class="btn btn-secondary text-white font-14 w-100  center mx-0 ">
                <div class="btn-txt animated">
                  <span class="btn-text text-uppercase font-12" >Print receipt</span>

                </div>
                  </a>
                  </div>
                  <div class="col-sm-6">
                  <a  href="" target="_blank" id="stickers-link" class="btn btn-primary text-white font-14 w-100  center mx-0 ">
                <div class="btn-txt animated">
                  <span class="btn-text text-uppercase font-12" >Print stickers</span>

                </div>
                  </a>
                  </div>
              </div>

					 </div>
          </div>

			</div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">
  $("#car_type,#parking_duration").on("change paste keyup", function() {
      var vehicle_category_code = $("select[name=vehicle_category_code]").val();


      var duration_code = $("select[name=duration_code]").val();

      if(vehicle_category_code == "" || duration_code == "")
      {
        return;
      }

      $.ajax({

        url: "<?php echo url('get-parking-charges')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {vehicle_category_code:vehicle_category_code, duration_code:duration_code},

        success:function(data){
          if(data.status_code == 200)
          {
          	// console.log(data);
	          document.getElementById('pay-price').innerHTML = data.charges[0].amount.toLocaleString();
	          $('.price').removeClass('d-none');
	         $('.rates').addClass('d-none');
        }
        else
        {
        	$('.rates').removeClass('d-none');
          	$('.price').addClass('d-none');
        }

        }
});
    });
</script>
<script type="text/javascript">
    $("#add_vehicle").click(function(e){

      e.preventDefault();

      var registration_no = $("input[name=registration_no]").val();

      var duration_code = $("select[name=duration_code]").val();

      var vehicle_category_code = $("select[name=vehicle_category_code] ").val();

      var phone_number = "0728168078";

      var duration = $("select[name=duration_code] option:selected").text();

      var vehicle_type = $("select[name=vehicle_category_code] option:selected").text();

      var amount = $('#pay-price').text();


      if(registration_no == "")
      {
        $('#number-plate').addClass('border-danger');
        return;
      }

      if(vehicle_category_code == "")
      {
        $('#car_type').addClass('border-danger');
        return;
      }
      if(duration_code == "")
      {
        $('#parking_duration').addClass('border-danger');
        return;
      }

      $('#loader2').removeClass('d-none');
      $.ajax({

        url: "<?php echo url('add-seasonal-vehicle')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {registration_no:registration_no, duration_code:duration_code, vehicle_category_code:vehicle_category_code ,phone_number:phone_number, amount:amount, vehicle_type:vehicle_type, duration:duration},

        success:function(data){
        	// console.log(data);

          $('#loader2').addClass('d-none');

          if(data == "")
          {
            document.getElementById('errors').innerHTML = 'Your session has expired. Please log in again to continue.';
            $('#errors').removeClass('d-none');
          }

          if(data.status_code == 200)
          {
          	// console.log(data);
          	window.location = "seasonal-parking";


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
    $("#remove-entry").click(function(e){

      e.preventDefault();

      var parking_code = $('#p-code').text();

      // console.log(parking_code);


      $.ajax({

        url: "<?php echo url('remove-seasonal-vehicle')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {parking_code:parking_code},

        success:function(data){
        	// console.log(data);

          $('#loader2').addClass('d-none');

          if(data.status_code == 200)
          {
          	// console.log(data);
          	window.location = "seasonal-parking";
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
      e.preventDefault();

      var phone_number = $('input[name=phone_number]').val();
      var charges = $('#charges').text();

      // console.log(phone_number);
      $('#pay-confirmation-pop').removeClass('d-none');
      $('.lds-roller').removeClass('d-none');
      $('.transacton-instructions').removeClass('d-none');
      $('.payment-status').text('Awaiting payment');

      $.ajax({

        url: "<?php echo url('initiate-seasonal-payment')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {phone_number:phone_number},

        success:function(data){
          // console.log(data);

          if(data.status_code == 200)
          {
            document.getElementById('pay_amount').innerHTML = charges;
            var pay_id = data.response_data;
            // var pay_id = 'PKX2020041175519';
            checkagain(pay_id,recheck_count);
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

    function checkagain(pay_id,recheck_count)
    {

      if(recheck_count==12)
                {

                    $('#bill_pay').text(pay_id);

                  $('.btn-txt').removeClass('d-none');
                  $('.lds-ellipsis').addClass('d-none');
                  $('.transacton-instructions').addClass('d-none');
                  $('.transactions-actions').removeClass('d-none');
                  $('.lds-roller').addClass('d-none');
                  $('.confirmed-pay').removeClass('d-none');

                  $('.payment-status').text('Unable to validate payment!');                 ;

                }
                else
                {
                    recheck_count++;
                    setTimeout(function(){
                    $.ajax({

                    url :"get-seasonal-parking-receipt/"+pay_id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {
                      // console.log(data);

                        if(data.status_code == 200)
                        {
                          $('#pay-confirmation-pop').addClass('d-none');
                          $('.lds-ellipsis').addClass('d-none');
                           // $('#pay-mpesa').text('PAY VIA M-PESA');
                           // $('#pay-mpesa').removeClass('d-none');
                           // $('<a href="'view-receipt/'+ pay_id" target="blank"></a>')[0].click();
                           $('#btn-pay').addClass('d-none');
                           var a = document.getElementById('receipt-link');
                          a.href = "view-seasonal-parking-receipt/"+pay_id;

                          var b = document.getElementById('stickers-link');
                          b.href = "seasonal-stickers/"+pay_id;
                          $('.payment-actions').addClass('d-none');
                          $('#print-receipt').removeClass('d-none');
                           // win.location = "view-receipt/"+ pay_id;
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
  $('.cars-container').on('click','.remove-car', function () {
    $('.notification-container').addClass('fadeIn');

    $('.notification-container').removeClass('d-none');

    $('.notification-container').removeClass('fadeOut');
    $('.notification-container').removeClass('d-none');
    $('.notification-container .card').addClass('bounceUp');
    var title="lamba;";
    var title =$(this).siblings().text();
    var code = $(this).siblings().attr('id');
    $('#p-code').text(code);
    $('#record-name').text(title);

    // console.log(title);
    // console.log(code);
  });
</script>

<script type="text/javascript">
  $('.transactions-details-container').on('click','.remove-car', function () {
    $('.notification-container').addClass('fadeIn');
    $('.notification-container').removeClass('d-none');
    $('.notification-container').removeClass('fadeOut');
    $('.notification-container').removeClass('d-none');
    $('.notification-container .card').addClass('bounceUp');
    var title="lamba;";
    var title= $(this).parent().siblings().children("strong").text();
    var code = $(this).parent().siblings().children("strong").attr('id');
    $('#record-name').text(title);
    $('#p-code').text(code);

    // console.log(title);
    // console.log(code);
  });
</script>

<script type="text/javascript">
  $('.close-delete').on('click', function(){
    closedeletealert();
  });

</script>
<script type="text/javascript">
  function closedeletealert() {
    $('.notification-container').addClass('fadeOut');
    $('.notification-container').addClass('d-none');
    $('.notification-container .card').addClass('fadeOutDown');

    setTimeout(function () {
      $('.notification-container').removeClass('fadeOut');
      $('.notification-container .card').removeClass('fadeOutDown');
    }, 1000);
  }
</script>
<script type="text/javascript">
  $('#pay-mpesa').click(function(){

    var amount = $('input[name=amount]').val();
    if(amount > 150000)
      {
        document.getElementById('pay_errors').innerHTML = 'Amount is above M-PESA limit. Kindly Pay via the bank.';
        $('#pay_errors').removeClass('d-none');
        $('#pay').text('PAY');
      }
      else if (amount <= 0) {
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid amount.';
        $('#pay_errors').removeClass('d-none');
        $('#pay').text('PAY');
      }
      else
      {
    $('.mpesa').removeClass('d-none');
  }
  })
</script>
@endsection
