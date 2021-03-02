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
          <form class="transaction-form" action="{{route('update-business')}}">
            @csrf
            <div class="alert alert-danger d-none" id="errors">

            </div>
            <div class="alert alert-danger d-none" id="year_error">

            </div>
            <div class="form-group col-sm-12 col-md-12 p-0 mt-2 mb-5">
                <label for="mpesa-phone" class=" ">Business number</label>
                <input type="text" class="form-control" id="plot" placeholder="Enter your business number" name="business_id" value="{{old('business_id')}}" required>
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
            <div class="col-sm-2 float-right d-none" id="loader2" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>
            <div class="col-12 px-0 text-uppercase mt-5 pt-5">
              <button type="submit"  class="btn btn-primary text-white font-14 w-100 center mx-0"><span class="btn-text text-uppercase font-12">UPDATE BUSINESS DETAILS</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i></button>
            </div>
          </form>
      </div>

      <div class="col-12 d-none p-0 animated details-confirm">
         <div class="">
            <p class="mb-5 pb-2  ">
        <span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your transaction details</strong>
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

             <!-- <p class="m-0"> <span>last renewal date</span></p>
             <strong class="text-uppercase" id="last_renewal"></strong>
             <hr> -->
            <div class=" text-right amount-container">
                 <p><span class="text-uppercase text-left">AMOUNT PAYABLE: </span> <strong id="renewal_fee"> </strong></p>
             </div>
             <hr>

             <form>

                <div class="alert alert-danger d-none" id="error_message"></div>
               <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="mpesa-number" class=" "> Phone number</label>
              <input type="text" class="form-control" id="mpesa-number" placeholder="eg 254712..." name="phone_number" value="{{Session::get('resource')['phone_number']}}">
              <input type="hidden" name="year" value="" id="year">
            </div>

                <div class="col-12 p-0 text-uppercase mt-5">
              <button id="btn-pay" type="button" class="btn btn-primary text-white font-14 w-100 center mx-0">
          <div class="btn-txt animated">
            <span class="btn-text text-uppercase font-12" id="pay"></span>
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
