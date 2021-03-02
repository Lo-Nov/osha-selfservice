@extends('layouts.app')

@section('content')
<!--	creating handlers bill loader-->

<div class="createfood-loader-container d-none animated"> 
    <div class="loader-container swing animated">
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>
    
    <div class="loader-txt animated swing">
        Please wait as we prepare your bill
    </div>
</div>
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
                      <div class="lds-roller animated d-none"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                      <div class="confirmed-pay d-none animated"><img src="img/icons/transactions-icons/alert-circle.svg"></div>
                      <p class="text-center text-white m-0 p-0 mb-3  payment-status">Pending Registration fee payment</p>
                      <!-- <h2 class="mb-5 pb-5 text-capitalize text-white"><sup class="font-14 text-uppercase">Kes</sup><span id="pay_amount"></span></h2> -->
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
                    
                    
                    <div class="col-12 p-0 pb-3 transactions-actions d-none animated mt-5">
                      <h5><strong class="  pb-3">Kindly follow the following instructions to pay for the bill.</strong></h5>
                      <li class="font-14 m-0">1.Go to the M-PESA menu on your SIM Toolkit</li>          
                       <li class="font-14 m-0">2.Under the Lipa na M-PESA option, select Pay Bill and enter <strong>367776</strong>  as the business no.</li>
                       <li class="font-14 m-0">3.Enter <strong id="bill_pay"></strong>  as the account no.</li>
                       <li class="font-14 m-0">4.Enter KES <strong id="pay_amount"></strong>  as the amount.</li>
                       <li class="font-14 m-0">5.You will receive a confirmation SMS that your payment has been received.</li>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- the registration form --}}
<section id="service-form-section" class="parallax-section">
    <div class="container">
      <div class="row p-5 ">
        <div class="service-form-container  flex-column-md animated col-12 p-5">
          
            <!-- Generate Bill Actions -->
                  <div class="row   animated bill-actions-container" id="create-bill">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                       <p class="text-capitalize mb-1"><strong>Renew food handlers certificate</strong></p>
                        <span class="mb-5"><small>You can pay for the bill now instantly via Mpesa or print the bill and pay for it later</small></span><br>
                        <p id="errors"></p>
                        <p class="mb-0 p-0 mt-5"> </p>
                        <h4 class="mt-0 pt-0"> <span id=""></span></h4>
  <!--            pay via mpesa now-->
                        <span id="to-action" class="btn btn-primary text-white font-12 border-0 text-capitalize show-mpesa">
                            <text class="d-flex align-items-center">Click here to renew your certificate<i data-feather="file-plus" class="ml-3"></i></text>
                        </span>
                   </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 p-5 bg-light">
                       <p class="text-capitalize mb-1"><strong>Clinics you can visit for your check up</strong></p>
                        <span class="mb-5"><small>You can visit any of the following Clinics for your medical check up</small></span>
                        <hr>
                        <ul>
                          @foreach($clinics as $clinic)
                            <li>{{$clinic->ClinicName}}</li>
                            @endforeach
                            
                        </ul>
                   </div>
                   </div>
  <!-- End of generate bill actions -->
                
                
  <!--			created bill actions-->
              <div class="row d-none  animated" id="bill-actions-container">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                       <p class="text-capitalize mb-1"><strong>Bill has been generated succesfully</strong></p>
                        <span class="mb-5"><small>You can pay for the bill now instantly via Mpesa or print the bill and pay for it later</small></span>
                        <p class="mb-0 p-0 mt-5">Food handlers total application's fee is</p>
                        <h4 class="mt-0 pt-0">Kes <span id="bill_amount"></span></h4>
  <!--					  pay via mpesa now-->
                        <span class="btn btn-primary text-white font-12 border-0 text-capitalize show-mpesa">
                            <text class="d-flex align-items-center">Pay now<i data-feather="smartphone" class="ml-3"></i></text>
                        </span>
                        <span type="submit" class="btn btn-white font-12 text-primary border-2 text-capitalize text-prev " id="btn-print"><text class="d-flex align-items-center">Print bill<i data-feather="printer" class="ml-3"></i></text></span>
                        
                      <!--					  mpesa form-->
                        <div class="row mx-0 mt-4 mb-2 gray-bg p-4 d-none animated health-mpesa position-relative">
                           <span class="close"> <i data-feather="x"></i></span>
                            <label for="mpesa-num"><strong>Mpesa Phone Number</strong></label>
                            <p class="d-none alert alert-danger" id="pay_errors"></p>
                            <p><small>Enter your Mpesa number in the field below so as to get a payment request</small></p>
                            <form class="form-inline mpesa-form flex-grow-1">
                              <div class="form-group m-0 flex-grow-1">
                              <input type="text" class="form-control col flex-grow-1 border-0" id="mpesa-num" placeholder="Eg 0712345678" name="mpesa_phone" value="{{old('mpesa_phone')}}">
                              <input type="hidden" class="form-control col flex-grow-1 border-0" id="bill_number" value="" name="bill_number">
                                </div>
                                 <button type="button" id="btn-pay" class="btn btn-primary text-white font-12 center mx-0">
                    <div class="btn-txt animated">
                        <span class="btn-text font-12">Get Payment Request</span> 
                    <i data-feather="arrow-right" class="ml-2 float-right pull-right">
                    </i>
                    </div>
                    <div class="lds-ellipsis d-none animated"><div></div><div></div><div></div><div></div></div>
                                    </button>  
                            </form>
                        </div>
                        
                        
                   </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 p-5 bg-light">
                       <p class="text-capitalize mb-1"><strong>Clinics you can visit for your check up</strong></p>
                        <span class="mb-5"><small>You can visit any of the following Clinics for your medical check up</small></span>
                        <hr>
                        <ul>
                            @foreach($clinics as $clinic)
                            <li>{{$clinic->ClinicName}}</li>
                            @endforeach
                        </ul>
                   </div>
  <!--
                     <div class="col-sm-12 pt-3 d-flex justify-content-between" id="location-btns">
                        <span type="submit" class="btn btn-white font-12 text-primary border-2 text-capitalize text-prev">previous</span>
                        <span type="submit" id="location-next" class="btn btn-primary text-white font-12 border-0 text-capitalize">next</span>
                   </div>
  -->
                
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
@endsection
@section('scripts')



<script type="text/javascript">
  //  this action occures while food handlers certificate is being created
  $('#to-action').on('click', function(){
  $('.createfood-loader-container').removeClass('d-none').addClass('fadeIn');
  
      $.ajax({

        url: "generate-health-bill" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

        success:function(data){
            if(data.status_code == 200){
              hide_loader();

            document.getElementById("bill_amount").innerHTML = data.response_data.BillTotal.toLocaleString();
            document.getElementById("bill_number").value = data.response_data.BillNo.toLocaleString();
          
          document.getElementById("pay_amount").innerHTML = data.response_data.BillTotal.toLocaleString();
          }

          else
          {
            $('.createfood-loader-container').addClass('d-none').removeClass('fadeIn');
            document.getElementById('errors').innerHTML = data.message;
            $('#errors').removeClass('d-none');
          }

          if(data.status_code == null)
          {
            $('.createfood-loader-container').addClass('d-none').removeClass('fadeIn');
            document.getElementById('errors').innerHTML = "We're having trouble processing your application right now. Please try again later";
            $('#errors').removeClass('d-none');
          }

        }
        });  
//    call the function bellow once bill has been created succesfully

  });

  //  once bill is created do the following
  function hide_loader(){
  setTimeout(function(){
  $('.createfood-loader-container').addClass('d-none').removeClass('fadeIn');
  $('#bill-actions-container').addClass('slideInRight').removeClass('d-none').removeClass('bounceOutRight');
$('#create-bill').addClass('slideInRight').addClass('d-none').addClass('bounceOutRight');

    // $('.details-confirm').addClass('d-none').removeClass('bounceLeft');
    

  },5000);
  }
</script>

<script type="text/javascript">
    $("#btn-pay").click(function(e){

      var recheck_count = 1;

      e.preventDefault();
      $('.btn-txt').addClass('d-none');
      $('.lds-ellipsis').removeClass('d-none');
 
      var bill_number = $('#bill_number').val();

      var phone_number = $("input[name=mpesa_phone]").val();

      var regex = /(\+?254|0|^){1}[-. ]?[7]{1}([0-2]{1}[0-9]{1}|[9]{1}[0-9]{1}|[4]{1}[0-9]{1})[0-9]{6}/;

      if(regex.test(phone_number) == false)
      {
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid Safaricom number';
        $('#pay_errors').removeClass('d-none');
        $('#btn-text').text('PAY');
        $('#btn-text').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }


      $('#pay-confirmation-pop').removeClass('d-none');
      $('.lds-roller').removeClass('d-none');
      $('.transacton-instructions').removeClass('d-none');
      $('.payment-status').text('Awaiting payment'); 


      $.ajax({

        url: "pay-health-bill" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {phone_number:phone_number, bill_number:bill_number},
        success:function(data){
            if(data.status_code == 200){
            var pay_id = data.response_data.BillNo;
            checkagain(pay_id,recheck_count);
          }
          else{
            document.getElementById("error_message").innerHTML = data.message;

            $("#error_message").removeClass('d-none');
            $('.btn-txt').text('PAY');
            $('.btn-txt').removeClass('d-none');
            $('.lds-ellipsis').addClass('d-none');
            $('#pay-confirmation-pop').addClass('d-none');

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
                  
                  $('.payment-status').text('Unable to validate payment!');                      ;
                  
                }
                else
                {
                    recheck_count++;
                    setTimeout(function(){
                    $.ajax({

                    url :"get-health-receipt/" +pay_id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {
                        // $('.payment-status').text('Payment received!');
                        if(data = "")
                          {
                            document.getElementById('errors').innerHTML = "We're having trouble retrieving the receipt. Please try again later.";
                            $('#errors').removeClass('d-none');
                            $('.btn-txt').text('PAY');
                            $('.btn-txt').removeClass('d-none');
                            return;
                          }

                        if(data.status_code == 200)
                        {
                          $('#pay-confirmation-pop').addClass('d-none');
                          var a= document.createElement('a');
                          a.target = "_blank";
                          a.href = "view-health-receipt/"+pay_id;
                          a.click();
                          // window.open("view-health-receipt/"+ pay_id);
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
    $("#btn-print").click(function(e){

      var recheck_count = 1;

      e.preventDefault();
      // $('.btn-txt').addClass('d-none');
      // $('.lds-ellipsis').removeClass('d-none');
 
      var bill_number = $('#bill_number').val();
      window.open("print-health-bill/" +bill_number); 
    } );
</script>
<script type="text/javascript">
  $('#close-pricepop').on('click',function(){
  $('#pay-confirmation-pop').addClass('d-none');
    $('#pay-confirmation-pop').removeClass(' zoomOut');
});
</script>
@endsection