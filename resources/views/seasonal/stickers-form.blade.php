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
                            <li>1.Wait for a <strong>payment pop </strong>up on your phone.</li>
                            <li>2.Enter your <strong>M-PESA pin</strong> and click OK.</li>
                            <li>3.An <strong>MPESA</strong> confimation SMS will be sent to you.</li>
                            <li>4.Wait for upto <strong>45 secs</strong> as we process your transaction</li>
                        </ul>
                    </div>
                    
                    
                    <div class="col-12 p-0 pb-3 transactions-actions animated mt-5">
                      <h5><strong class="  pb-3">Kindly follow the following instructions to pay for the business renewal.</strong></h5>
                     <li class="font-14 m-0">1.Go to the M-PESA menu on your SIM Toolkit</li>          
                       <li class="font-14 m-0">2.Under the Lipa na M-PESA option, select Pay Bill and enter <strong>367776</strong>  as the business no.</li>
                       <li class="font-14 m-0">3.Enter <strong id="bill_pay"></strong>  as the account no.</li>
                       <li class="font-14 m-0">4.You will receive a confirmation SMS that your payment has been received.</li>
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
        <div class="col-lg-7 service-form-img-container" id="biz-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">RevenueSure seasonal parking stickers</h2>
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
          <form class="transaction-form" action="{{route('print-stickers')}}" target="new" method="POST">
            @csrf
            <div class="alert alert-danger d-none" id="errors">
              
            </div>
            <div class="alert alert-danger d-none" id="year_error">
              
            </div>
            <div class="form-group col-sm-12 col-md-12 p-0 mt-2 mb-5">
                <label for="mpesa-phone" class=" ">Parking payment code</label>
                <input type="text" class="form-control" id="plot" placeholder="Enter the parking code used for payment eg PKX..." name="stickers_id" value="{{old('stickers_id')}}" required> 
                <!-- <p>Please click on a renewal plan</p>
        <ul class="single-listing year-list">
          <li class="col-sm-3 ">3 months</li>
          <li class="col-sm-3 ">6 months</li>
          <li class="col-sm-3 col-md-4">12 months</li>
        </ul> -->
        <br>  
              </div>
        
            <!-- <div class="col-12 p-4 center danger-light-bg lighter-txt price-container position-relative">
         <span class="close-price-container position-absolute"> <i data-feather="x"></i></span>
              <p class="text-uppercase m-0 font-14"><strong>Total</strong></p>
              <p class="text-uppercase m-0 font-12">KES 2,000</p>
            </div> -->


            <div class="col-12 px-0 text-uppercase mt-5 pt-5">
              <button type="submit"  class="btn btn-primary text-white font-14 w-100 center mx-0"><span class="btn-text text-uppercase font-12">CHECK FOR STICKERS</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i></button>
            </div>
          </form>
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
   // $('#loader2').removeClass('d-none');
    $("#btn-confirm").click(function(e){
      
      e.preventDefault();
      var business_id = $("input[name=business_id]").val();
      // console.log(business_id);
      if(business_id == "")
      {
        $('#plot').addClass('border-danger');
        return;
      }
      var year = $(".checked").text();
      

      $('#btn-confirm').text('Checking details...');
      $('#loader2').removeClass('d-none');

      window.location = 'update-business/' +business_id;
      
      document.getElementById("year").value = year;
     
    }
     );
</script>

<script type="text/javascript">
    $("#btn-pay").click(function(e){
      var recheck_count = 1;
      e.preventDefault();
      $('.btn-txt').addClass('d-none');
      $('.lds-ellipsis').removeClass('d-none');

      var business_id = $("input[name=business_id]").val();

      var year = $("input[name=year]").val();
      // console.log(year);

      var phone_number = $("input[name=phone_number]").val()

      $.ajax({

        url: "<?php echo url('renew-permit')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {business_id:business_id, phone_number:phone_number, year:year},
        success:function(data){
          // console.log(data);
          
            if(data.status_code = true || data.hasOwnProperty('bill_number'))
            {
              var pay_id = data.bill_number;
              checkagain(pay_id,recheck_count);
            }
            else
            {
              document.getElementById('error_message').innerHTML = 'An error occurred. Please try again later.';
              $('#error_message').removeClass('d-none');
              $('.btn-txt').text('PROCEED TO PAYMENT');
              $('.btn-txt').removeClass('d-none');
              $('.lds-ellipsis').addClass('d-none');

            }            
        
      }


    } );
});
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
                      
                      $('.payment-status').text('Unable to validate payment!');                    ;
                  
                }
                else
                {
                    recheck_count++;
                    setTimeout(function(){
                    $.ajax({

                    url :"get-permit/" +pay_id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {
                      // console.log(data);
                      if(data.data == null)
                      {
                        checkagain(pay_id,recheck_count);
                        
                      }
                      else
                      {
                            window.open("view-sbp-permit/"+ pay_id);
                    
                        
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