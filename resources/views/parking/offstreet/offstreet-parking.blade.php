@extends('layouts.app')
@section('content')
<!--form section-->
<!--  pay confirmation pop up-->
<section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="pay-confirmation-pop">
    <div class="container p-md-5 p-sm-0">
      <div class="row p-5 d-flex justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 payment-pop-container m-5 m-sm-3 d-flex flex-column-md animated p-0">
          
          <div class="col-12 position-relative p-0">
                    <span class="close-receipt-form position-absolute z-index-1 transactions-actions animated text-white" id="close-pricepop"> <i data-feather="x"></i></span>
  
            <div class="">
                <div class="show-amount-loader">
                    <center class="p-5 text-white">
                      <div class="lds-roller animated d-none"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                      <div class="confirmed-pay  animated"><img src="img/icons/transactions-icons/check.svg"></div>
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
                       <p class="font-14 m-0">Under the Lipa na M-PESA option, select Pay Bill and enter <strong>367776</strong>  as the business no.</p>
                       <p class="font-14 m-0">Enter your bill number <strong id="bill_pay">367776</strong>  as the account no.</p>
                       <p class="font-14 m-0">You will receive a confirmation sms that your payment has been received.</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  pay confirmation pop up-->
<section id="service-form-section" class="parallax-section">
  <div class="container">
    <div class="row p-5 ">
      <div class="service-form-container  d-flex flex-column-md animated col-12 p-0">
        <div class="col-lg-7 service-form-img-container" id="parking-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">Nakuru County Government off-street parking</h2>
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
            <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="zone" class=" ">Off-street zones</label>
              <select class="form-control" id="zone" name="zone_code">
                <option>select off-street zone</option>
                @foreach($zones as $zone)
                @if($zone->zoneTypeId == 2)
                <option value="{{$zone->id}}">{{$zone->description}}</option>
                @endif
                @endforeach
                
              </select>


              <label for="car_type" class=" ">Vehicle categories</label>
              <select class="form-control" id="car_type" name="vehicle_category_code">
                <option>select vehicle category</option>
                @foreach($vehicle_categories as $vehicle_category)
                <option value="{{$vehicle_category->id}}">{{$vehicle_category->description}}</option>
                @endforeach
                
              </select>
              
              <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="number-plate" class=" ">Vehicle's number plate</label>
              <input type="text" class="form-control" id="number-plate" placeholder="eg KAA 1..." name="registration_number" value="{{old('registration_number')}}">
            </div>

            </div>
            
            <!-- <div class="col-12 p-4 center primary-light-bg lighter-txt price-container position-relative">
         <span class="close-price-container position-absolute"> <i data-feather="x"></i></span>
              <p class="text-uppercase m-0 font-14"><strong>Total</strong></p>
              <p class="text-uppercase m-0 font-12">KES 2,000</p>
            </div> -->
            <div class="form-group col-sm-12 col-md-12 p-0 my-3">
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
                <!-- <label for="airtel" class=" w-100 row d-flex justify-content-center align-items-center align-content-center m-0 pay-method">
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
                </label> -->
              </div>
              
            </div>
            
            <div class="col-sm-2 float-right d-none" id="loader2" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>
            <div class="col-12 p-0 text-uppercase mt-5">
              <button class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 " id="btn-confirm"><span class="btn-text text-uppercase font-12">CHECK VEHICLE STATUS</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i></button>
            </div>
          </form>
      </div>
      
      <div class="col-12 d-none p-0 animated details-confirm">
         <div class="">
            <p class="mb-5 pb-2  ">
        <span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your Transaction details</strong>
           </p>
           <hr class="mt-1 p-0">
           <p><strong class=" ">Transaction details</strong></p>
           
           <div class="transactions-details-container  ">
            <p class="m-0"><span>Parking zone</span></p>
             <strong id="parking_zone"> </strong>
             <hr>
             <p class="m-0"><span>Vehicle type</span></p>
             <strong id="vehicle_type"></strong>
             <hr>
             
            <p class="m-0"> <span>Plate number</span></p>
             <strong class="text-uppercase" id="number_plate"></strong>
             <hr>
            <div class=" text-right amount-container">
                 <p><span class="text-uppercase text-left">Total</span> <strong  id="charges"> </strong></p>
             </div>
             <hr>
             
             <form >
              <div >
              <p id="pay_errors" class="alert alert-danger d-none"></p>
            </div>
               
               <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="phone-number" class=" ">M-pesa phone number</label>
              @if(Session::has('resource'))
                <input type="text" class="form-control" id="mpesa-phone" placeholder="eg 07123..." name="phone_number" value="{{Session::get('resource')['phone_number']}}">
                @else
                <input type="text" class="form-control" id="mpesa-phone" placeholder="eg 07123..." name="phone_number" value="{{old('phone_number')}}">
                @endif
              <input type="hidden" name="amount" id="amount">
            </div>
               
                <div class="col-12 p-0 text-uppercase mt-5">
              <button id="btn-pay" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 ">
          <div class="btn-txt animated">
            <span class="btn-text text-uppercase font-12" id="pay"> </span> 
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
@section('scripts')
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $("#btn-confirm").click(function(e){

      e.preventDefault();
      $('#btn-confirm').text('Checking details...');
      $('#loader2').removeClass('d-none');
      var car = $("input[name=registration_number]").val();
      var zone_id = $("#zone option:selected").val();
      var vehicle_category = $("#car_type option:selected").val();

      if(vehicle_category == "" || zone_id == "" || car == "")
      {
        document.getElementById('parking_errors').innerHTML = "Kindly supply all information before proceeding.";
        $('#parking_errors').removeClass('d-none');
        return;
      }

      $.ajax({

        url: "<?php echo url('get-offstreet-charge')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {car:car, zone_id:zone_id, vehicle_category:vehicle_category},

        success:function(data){
          console.log(data);
          $('#loader2').addClass('d-none');
          $('#btn-confirm').text('CHECK STATUS');
          if(data == "")
          {
            document.getElementById('errors').innerHTML = "We're having trouble retrieving your offstreet parking charges. Please try again later.";
            $('#errors').removeClass('d-none');
          }
          if(data.status_code == 200)
          {
            var parking_zone = $("#zone option:selected").text();
            var vehicle_type = $("#car_type option:selected").text();
            var number_plate = $("#number-plate").val();
            var phone_number = $("#mpesa-phone").val();

            document.getElementById("parking_zone").innerHTML = parking_zone;
            document.getElementById("vehicle_type").innerHTML = vehicle_type;
            document.getElementById("number_plate").innerHTML = number_plate;
            document.getElementById("amount").value = data.response_data.balance;
            document.getElementById("pay").innerHTML = "pay KES " +data.response_data.balance;
            document.getElementById("charges").innerHTML = 'KES ' +data.response_data.balance.toLocaleString();

            $('.details-confirm').removeClass('fadeOutRight');
            $('.details-confirm').removeClass('d-none');
            $('.the-transaction-form').removeClass('fadeInLeft');
            $('.the-transaction-form').addClass('fadeOutLeft');
            $('.the-transaction-form').addClass('d-none');
            $('.details-confirm').addClass('fadeInRight');
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
      $('.btn-txt').addClass('d-none');
      $('.lds-ellipsis').removeClass('d-none');
      var vehicle_category_code = $("select[name=vehicle_category_code]").val();

      var zone_code = $("select[name=zone_code]").val();

      var registration_number = $("input[name=registration_number]").val();

      var phone_number = $("input[name=phone_number]").val();

      var amount = $("input[name=amount]").val();

      var regex = /(\+?254|0|^){1}[-. ]?[7]{1}([0-2]{1}[0-9]{1}|[9]{1}[0-9]{1}|[4]{1}[0-9]{1})[0-9]{6}/;

      if(regex.test(phone_number) == false)
      {
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid Safaricom number';
        $('#pay_errors').removeClass('d-none');
        $('#btn-pay').text('PAY');
        $('#btn-pay').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }

      $.ajax({

        url: "<?php echo url('initiate-offstreet-parking-payment')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {vehicle_category_code:vehicle_category_code, zone_code:zone_code, registration_number:registration_number, phone_number:phone_number, amount:amount},
        success:function(data){
            console.log(data);
            if(data == "")
              {
                document.getElementById('pay_errors').innerHTML = 'We are having trouble initiating your payment.Please try again later.';
                $('#pay_errors').removeClass('d-none');
                $('.btn-txt').removeClass('d-none');
                $('.lds-ellipsis').addClass('d-none');
                return;
              }
            if(data.status_code == 200)
            {
                var pay_id = data.response_data.transaction_code;
                checkagain(pay_id,recheck_count);
            }
            else
            {
                document.getElementById('pay_errors').innerHTML = data.message;
              $('#pay_errors').removeClass('d-none');
              $('.btn-txt').removeClass('d-none');
              $('.lds-ellipsis').addClass('d-none');
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
                    var amount = $("input[name=amount]").val();
                    $('#pay_amount').text(amount.toLocaleString());

                  $('.btn-txt').removeClass('d-none');
                  $('.lds-ellipsis').addClass('d-none');
                      $('#pay-confirmation-pop').removeClass('d-none');
                      $('#lds-roller').addClass('d-none');
                      $('#confirmed-pay').removeClass('d-none');
                      
                      $('.payment-status').text('Unable to validate payment!');             ;
                  
                }
                else
                {
                    recheck_count++;
                    setTimeout(function(){
                    $.ajax({

                    url :"get-parking-receipt/" +pay_id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {
                      if(data == "")
                      {
                        document.getElementById('pay_errors').innerHTML = 'We are having trouble retrieving your receipt. Please try again later.';
                        $('#pay_errors').removeClass('d-none');
                        $('.btn-txt').removeClass('d-none');
                        $('.lds-ellipsis').addClass('d-none');
                        return;
                      }
                      if(data.status_code != 200)
                      {
                        checkagain(pay_id,recheck_count);
                        
                      }
                      else
                      {
                        $('.payment-status').text('Payment received!');
                        var a= document.createElement('a');
                          a.target = "_blank";
                          a.href = "view-parking-receipt/"+pay_id;
                          a.click();
                        
                        // window.open("view-parking-receipt/"+ pay_id);
                      }
                    },
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
@endsection
