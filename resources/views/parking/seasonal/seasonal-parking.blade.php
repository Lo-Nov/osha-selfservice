@extends('layouts.app')
@section('content') 
<!--form section-->
<!--	pay confirmation pop up-->
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
                      <div class="confirmed-pay  animated"><img src="{{asset('img/icons/transactions-icons/x-octagon.svg')}}"></div>
                      <p class="text-center text-white m-0 p-0 mb-3  payment-status">Pending Registration fee payment</p>
                      <h2 class="mb-5 pb-5 text-capitalize text-white"><sup class="font-14 text-uppercase">Kes</sup><span id="pay_amount"></span></h2>
                    </center>
                </div>
                <div class="col-12 p-lg-5 p-sm-3 ">
                        <div class="col-12 p-0 transacton-instructions d-none">
                            <h5><strong class="text-capitalize pb-3">payment procedure</strong></h5>
                    <p class="font-12">follow the following payment procedure in order to complete the payment</p>
                          
                    <hr>
                        <ul type="1" class="font-14 pb-5">
                            <li>1.Check on a <strong>payment pop </strong>up on your phone.</li>
                            <li>2.Input your <strong>M-pesa pin</strong> and click OK.</li>
                            <li>3.An <strong>MPESA</strong> confimation SMS will be sent to you.</li>
                            <li>4.Wait for upto <strong>45 secs</strong> as we process your transaction</li>
                        </ul>
                    </div>
                    
                    
                    <div class="col-12 p-0 pb-3 transactions-actions animated mt-5">
                      <h5><strong class="  pb-3">Kindly follow the following instructions to pay for the bill.</strong></h5>
                      <p class="font-14   m-0">Go to the M-PESA menu on your SIM Toolkit</p>          
                       <p class="font-14">Under the Lipa na M-PESA option, select Pay Bill and enter <strong>367776</strong>  as the business no.</p>
                       <p class="font-14">Enter your bill number <strong id="bill_pay">367776</strong>  as the account no.</p>
                       <p class="font-14">You will receive a confirmation sms that your payment has been received.</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section><section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="pay-confirmation-pop">
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
					<p class="text-center text-white m-0 p-0 mb-3  payment-status">pending daily parking payment</p>
					<h2 class="mb-5 pb-5   text-white"><sup class="font-14 text-uppercase">KES</sup></h2> 
			  	</center>
			  </div>
			  <div class="col-12 p-lg-5 p-sm-3 ">
			  		<div class="col-12 p-0 transacton-instructions">
				  		<h5><strong class="  pb-3">payment procedure</strong></h5>
				  <p class="font-12">follow the following payment procedure in order to complete the payment</p>
						
				  <hr>
				  	<ul type="1" class="font-14 pb-5">
				  		<li>1.Check on a <strong>payment pop </strong>up on your phone.</li>
				  		<li>2.Input your <strong>M-pesa pin</strong> and click OK.</li>
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
<!--	pay confirmation pop up-->
		<!--delete car dialogue -->
<div class="col-12 p-5 notification-container vw-100 vh-100 animated d-none">
	<div >
		<div class="card animated delete-row">
			<div class="card-header bg-danger py-2 d-flex justify-content-between align-items-center align-content-center pr-3">
				<h2 class="card-title   text-white m-0">remove car</h2>
				<div class="actions text-white float-right close-delete">
					
					<a  data-feather="x" href="#" class="actions__item text-white m-0 p-0 d-flex justify-content-center align-items-center close-dialogoue-delete" title="close noification"></a> 
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					
				<div class="col-12">
					<img src="img/icons/warning.svg" class=" icon float-left  mr-3">
					<h2 class="card-title mb-3 kev-capitalize font-weight-bold" id="record-name">Firm name</h2>
					<p>Are you sure you want to delete this car from the list of vehicles payable by this transaction</p>
				</div>
				</div>
			</div>
			<div class="card-footer d-flex justify-content-end  ">
        <a class="card-link close-delete my-2" href="#">discard</a>
        <a class="card-link text-danger glow my-2" href="#">remove from list</a>
      </div>
		</div>
	</div>
</div>
<!--delete car dialogue-->
<section id="service-form-section" class="#">
  <div class="container">
    <div class="row p-5 ">
      <div class="service-form-container d-flex flex-column-md animated col-12 p-0 ">
        <div class="col-lg-7 service-form-img-container p-0" id="parking-img">
          <div class="col-lg-8 col-md-12 position-relative p-sm-4">
            <h2 class="mb-4   text-white">Nakuru County Government seasonal parking</h2>
            <p class="font-14 mb-3  ">Fill in and remember to double check details to avoid any errors.</p>
          </div>
        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex p-sm-4">
    	     <div class="col-12 p-0 the-transaction-form animated">
				 <div class="">
            <p class="mb-5 pb-2  "><strong>Correctly fill in the form below to continue</strong></p>
          </div>
          <p class="alert alert-danger d-none" id="vehicle_errors"></p>
          <form class="transaction-form">
			  
			<div class="form-group col-sm-12 col-md-12 p-0">
              <label for="car_type" class=" ">Vehicle type</label>
              <select class="form-control" id="car_type" name="car_type">
                <option >-- select vehicle type --</option>
                 @foreach($vehicle_categories as $vehicle_category)
                <option  value="{{$vehicle_category->CategoryId}}">{{$vehicle_category->VehicleType}}</option>
                @endforeach
                
              </select>
            </div>
            
            <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="car_type" class=" ">Parking duration</label>
              <select class="form-control" id="parking_duration" name="duration">
                <option >-- select parking duration --</option>
                <option value=" "></option>
                              
              </select>
            </div>
			  
			   <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="number-plate" class=" ">Vehicle's number plate</label>
              <input type="text" class="form-control" id="number-plate" placeholder="eg KAA 1..." name="registration_number" value="{{old('registration_number')}}" multiple>
            </div>

			  
			  
            <div class="col-12 p-4 center danger-light-bg lighter-txt price d-none position-relative" >
				 <span class="close-price-container position-absolute"> <i data-feather="x"></i></span>
              <p class="text-uppercase m-0 font-14"><strong>Total</strong></p>
              <p class="text-uppercase m-0 font-12" > KES <span id="price"></span></p>
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
            <p class="alert alert-danger  d-none" id="bill_errors"></p>
            <div class="d-none">
              
            </div>
            <div class="col-sm-2 float-right d-none" id="loader2" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
          </div>
            <div class="col-12 p-0 text-uppercase mt-5">
              <button type="button" id="add_vehicle" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 "><span class="btn-text text-uppercase font-12">CONFIRM DETAILS<span id="pay-price"></span></span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i></button>
            </div>
          </form>
			</div>
			
			<div class="col-12 d-none p-0 animated details-confirm">
				 <div class="">
            <p class="mb-5 pb-2  ">
				<span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your Transaction details</strong>
					 </p>
					 <hr class="mt-1 p-0">
					 <p><strong class=" ">Seasonal parking details</strong></p>
					 
					 <div class="transactions-details-container   ">
            
						<div class="col-12 d-flex p-0 single-listing justify-content-between">
						 	 <div>
						 	<strong id="number_plate"></strong>
					 	<p class="m-0" id="car_category"><span ></span></p>
						 </div>
						 
						 <div class="amount-close d-flex align-items-center text-right">
						 	<div class="amount-duration">
							 	<strong class="text-uppercase" id="charges"></strong>
							 <p class="m-0"><span class="font-12" id="duration"></span></p>
							 </div>
							 <!-- <span class="ml-3 remove-car"><i data-feather="x"></i></span> -->
						 </div>
						 </div>
             <hr>
						 
						 
						<div class=" text-right amount-container">
						 		 <p><span class="text-uppercase text-left" >Total</span> <strong id="price2"></strong></p>
						 </div>
						 <hr>
						 
						 <form>
							 
			<div class="form-group col-sm-12 col-md-12 p-0">
        <div><p class="alert alert-danger d-none" id="errors"></p></div>
          <div><p class="d-none alert alert-danger" id="paid_amount"></p></div>
          
              <label for="number-plate" class=" ">M-pesa phone number</label>
              @if(Session::has('resource'))
              <input type="text" class="form-control" id="number-plate" placeholder="eg 0712..." name="phone_number" value="{{Session::get('resource')['phone_number']}}">
              @else
              <input type="text" class="form-control" id="number-plate" placeholder="eg 0712..." name="phone_number" value="{{old('phone_number')}}">
              @endif
              <input type="hidden" name="bill_number" id="bill_number">
            </div>
			<div class="col-sm-6 text-uppercase mt-5">
              <button type="button" id="btn-pay" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0">
				  <div class="btn-txt animated">
				  	<span class="btn-text text-uppercase font-12" id="pay-mpesa">Pay via MPESA</span> 
				  <i data-feather="arrow-right" class="ml-2 float-right pull-right">
				  </i>
				  </div>
				  <div class="lds-ellipsis d-none animated"><div></div><div></div><div></div><div></div></div>
								  </button>
            </div>
            <div class="col-sm-6 text-uppercase mt-5">
              <button target="new" id="pay-bank" type="button" class="btn btn-secondary text-white font-14 w-100 p-4 center mx-0">
          <div class="btn-txt animated">
            <span class="btn-text text-uppercase font-12">Print bank bill</span> 
          <i data-feather="arrow-right" class="ml-2 float-right pull-right">
          </i>
          </div>
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
@section('scripts')
<script type="text/javascript">
    $(function() {
  $("#addMore").click(function(e) {
    e.preventDefault();
    $("#fieldList:first").clone().appendTo("#new");
  });
});
</script>

<script type="text/javascript">
  $(document).ready(function ()
    {
      $('#car_type').on('change',function(){
          $('#loader3').removeClass('d-none');
               var CategoryId = $(this).val();

               if(CategoryId)
               {
                  $.ajax({
                     url : '<?php  echo url('get-durations')?>',
                     type : "POST",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                     data : {CategoryId : CategoryId},

                     success:function(data)
                     {

                      if(data.status_code == 200){
                        $('#parking_duration').empty();
                        console.log(data.response_data);
                        $('#parking_duration').append($('<option>', {
                                    value: " ",
                                    text: "select duration",
                                }));
                       $.each(data.response_data, function (i, item) {
                           $('#loader3').addClass('d-none');
                                $('#parking_duration').append($('<option>', {
                                    value: item.DurationId,
                                    text: item.Description,
                                }));

                            });
                     }
                     }
                  });
               }
               else
               {
                  $('#parking_duration').empty();
               }
            });
    });
</script>

<script type="text/javascript">
  $(document).ready(function ()
    {
      $('#parking_duration').on('change',function(){
               var DurationId = $(this).val();

               if(DurationId)
               {
                  $.ajax({
                     url : '<?php  echo url('get-seasonal-charges')?>',
                     type : "POST",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                     data : {DurationId : DurationId},

                     success:function(data)
                     {
                      if(data.status_code != 200)
                      {
                        document.getElementById('vehicle_errors').innerHTML = data.message;
                        $('#vehicle_errors').removeClass('d-none');
                        return;
                      }
                      if(data == "")
                      {
                        document.getElementById('vehicle_errors').innerHTML = "We're having trouble retrieving the seasonal parking charges. PLease try again later.";
                        $('#vehicle_errors').removeClass('d-none');
                        return;
                      }

                     	document.getElementById('price').innerHTML = data.response_data.Charges;
                     	document.getElementById('pay-price').innerHTML = '| KES ' +data.response_data.Charges;
                        $('.price').removeClass('d-none');
                     }
                  });
               }
               else
               {
                  // $('#parking_duration').empty();
               }
            });
    });
</script>

<script type="text/javascript">
    $("#add_vehicle").click(function(e){

      e.preventDefault();
      $('#loader2').removeClass('d-none');
      var PlateNumber = $("input[name=registration_number]").val();;

      var DurationId = $("select[name=duration]").val();

      var CategoryId = $("select[name=car_type] ").val();

      var Category = $("select[name=car_type] option:selected").text();

      var Duration = $("select[name=duration] option:selected").text();

      var charges = $("#price").text();



      $.ajax({

        url: "<?php echo url('add-vehicle')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {PlateNumber:PlateNumber, DurationId:DurationId, CategoryId:CategoryId ,Duration:Duration, Category:Category, charges:charges},

        success:function(data){
        	console.log(data.response_data.bill_number);

          $('#loader2').addClass('d-none');

          if(data.status_code == 200)
          {

        	document.getElementById('number_plate').innerHTML = PlateNumber;
        	document.getElementById('car_category').innerHTML = Category;
        	document.getElementById('duration').innerHTML = Duration;
			    document.getElementById('charges').innerHTML = charges;
          document.getElementById('price2').innerHTML = charges;
          $('#pay_amount').text(parseInt(charges).toLocaleString());
          document.getElementById('bill_number').value = data.response_data.bill_number;     	

            $('.details-confirm').removeClass('fadeOutRight');
            $('.details-confirm').removeClass('d-none');
            $('.the-transaction-form').removeClass('fadeInLeft');
            $('.the-transaction-form').addClass('fadeOutLeft');
            $('.the-transaction-form').addClass('d-none');
            $('.details-confirm').addClass('fadeInRight');

        }
        else
      {
        document.getElementById('bill_errors').innerHTML = data.message;
        $('#bill_errors').removeClass('d-none');

        }
      }
      });
    } );
</script>

<script type="text/javascript">
    $("#btn-pay").click(function(e){
      var recheck_count = 1;
      e.preventDefault();
      $('.pay-mpesa').addClass('d-none');
      $('.lds-ellipsis').removeClass('d-none');
      var bill_number = $("#bill_number").val();

      var phone_number = $("input[name=phone_number]").val();

      var regex = /(\+?254|0|^){1}[-. ]?[7]{1}([0-2]{1}[0-9]{1}|[9]{1}[0-9]{1}|[4]{1}[0-9]{1})[0-9]{6}/;
      console.log(phone_number);

      if(regex.test(phone_number) == false)
      {
        document.getElementById('errors').innerHTML = 'Please enter a valid Safaricom number';
        $('#errors').removeClass('d-none');
        $('#btn-pay').text('PAY');
        $('#btn-pay').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }


      $.ajax({

        url: "<?php echo url('pay-seasonal-parking')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {bill_number:bill_number, phone_number:phone_number},
        success:function(data){
            console.log(data);
            var actual_charges  = data.response_data.amount;
            console.log(actual_charges);
            if(data == "")
            {
              document.getElementById('#errors').innerHTML = "We're having trouble initiating payment. Please try again later"; 
             $('.lds-ellipsis').addClass('d-none');
             $('.btn-txt').text('PAY');
             $('.btn-txt').removeClass('d-none');
             $('#errors').removeClass('d-none');
            }
            if(data.status_code == 200 && parseInt(actual_charges) == !0)
            {
              var pay_id = data.response_data.BillNumber;
              checkagain(pay_id,recheck_count);
            }
            else if(data.status_code == 200 && parseInt(actual_charges) == 0)
            {
              $('.lds-ellipsis').addClass('d-none');
             $('.pay-mpesa').text('PAY');
             $('.pay-mpesa').removeClass('d-none');
              document.getElementById('paid_amount').innerHTML = 'The vehicle has already been paid for';
              $('#errors').removeClass('d-none');
            }
            else
            {
             document.getElementById('#errors').innerHTML = data.message; 
             $('.lds-ellipsis').addClass('d-none');
             $('.btn-txt').text('PAY');
             $('.btn-txt').removeClass('d-none');
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
                      $('#pay-confirmation-pop').removeClass('d-none');
                      $('#lds-roller').addClass('d-none');
                      $('#confirmed-pay').removeClass('d-none');
                      
                      $('.payment-status').text('Unable to validate payment!');                  ;
                  
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
                      console.log(data);
                        $('.payment-status').text('Payment received!');

                        if(data.status_code == 200)
                        {
                          $('.lds-ellipsis').addClass('d-none');
                           $('.btn-txt').text('PAY');
                           $('.btn-txt').removeClass('d-none');
                           // $('<a href="'view-receipt/'+ pay_id" target="blank"></a>')[0].click();
                           var a= document.createElement('a');
                            a.target = "_blank";
                            a.href = "view-receipt/"+pay_id;
                            a.click();
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
  $('#close-pricepop').on('click',function(){
  $('#pay-confirmation-pop').addClass('d-none');
    $('#pay-confirmation-pop').removeClass(' zoomOut');
    location.reload();
});
</script>
<script type="text/javascript">
  $('#pay-bank').click(function(){
    // alert('clicked');
    var bill_number = $("#bill_number").val();

    window.open('print-seasonal-bill/' +bill_number);
    });
</script>
@endsection