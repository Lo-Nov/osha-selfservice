@extends('layouts.app')
@section('content')
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
                      <div class="confirmed-pay d-none animated"><img src="{{asset('img/icons/transactions-icons/alert-circle.svg')}}"></div>
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
                      <h5><strong class="  pb-3">Kindly follow the following instructions to pay for your land rates.</strong></h5>
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
            <p class="mb-5 pb-2  "><strong>Correctly fill in the form below to continue</strong></p>
          </div>
          <form class="transaction-form">
            <div id="errors" class="alert alert-danger d-none"></div>
            <div class="form-group col-sm-12 col-md-12 p-0 mt-2 mb-5">
                <label for="mpesa-phone" class=" ">Enter property Number   <b>(for block use the format BLOCK12-3456. For plots use the format 12/3456)</b></label>
                <input type="text" class="form-control" id="plot" placeholder="eg BLOCK12-3456 OR 12/3456" name="plot_number" value="{{old('plot_number')}}">
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
              <!-- <div class="form-group col-sm-12 col-md-12 p-0 my-2">
                <label for="mpesa-phone" class=" ">mpesa phone number</label>
                <input type="text" class="form-control" id="mpesa-phone" placeholder="eg 07123...">
              </div> -->
            </div>
            <div class="col-sm-2 float-right d-none" id="loader2" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>
            
            <div class="col-12 px-0 text-uppercase mt-5 pt-5">
              <button id="btn-confirm" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0"><span class="btn-text text-uppercase font-12">check status</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i></button>
            </div>
          </form>
      </div>
      
      <div class="col-12 d-none p-0 animated details-confirm">
         <div class="">
            <p class="mb-5 pb-2  ">
        <span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your land details</strong>
           </p>
           <hr class="mt-1 p-0">
           <p><strong class=" ">Land details</strong></p>
           
           <div class="transactions-details-container  ">
            <p class="m-0"><span>Customer</span></p>
             <strong id="tenant"></strong>
             <hr>
             <p class="m-0"><span>Plot</span></p>
             <strong id="plot_details"></strong>
             <hr>
             
            <p class="m-0"> <span>Annual land rate</span></p>
             <strong class="text-uppercase" id="rent"></strong>
             <hr>
             
            <!--  <p class="m-0"> <span>Bill Due Date</span></p>
             <strong class="text-uppercase" id="last-billed"></strong>
             <hr> -->
            <div class=" text-right amount-container">
             <!--  <p><span class="text-uppercase text-left">Arrears: </span> <strong id="arrears"></strong></p>
              <p><span class="text-uppercase text-left">Penalties: </span> <strong id="penalties"></strong></p> -->
              <p><span class="text-uppercase text-left">Yearly land rate: </span> <strong id="current_rent"></strong></p>
                 <p><span class="text-uppercase text-left">Total balance: </span> <strong id="current_balance"></strong></p>
             </div>
             <hr>
             <div  class="alert alert-danger d-none" id="error_message"></div>
             <form></form>
              <div class="col-sm-12 pl-0 d-none" id="print-receipt">
                    <p><b>You can now proceed to print your receipt</b></p>
                 <a href="" target="_blank" id="receipt-link" class="btn btn-secondary text-white font-14 w-100  center mx-0 ">
                  <div class="btn-txt animated">
                    <span class="btn-text text-uppercase font-12" >Print receipt</span> 
                  
                  </div>
                    </a>
                </div>
              <p id="pay_errors" class="d-none alert alert-danger"></p>
              <div class="payment-actions">
                   <div class="form-group col-sm-12 col-md-12 p-0">
                      <label for="number-plate" class=" ">Amount to pay</label>
                      <input type="text" class="form-control" id="amount" placeholder="Enter amount to pay" name="amount" value="{{old('amount')}}">
                    </div>
             
                    <div class="col-sm-6 pl-0">
                        <button id="pay-mpesa" class="btn btn-primary text-white font-14 w-100 center mx-0 ">
                      <div class="btn-txt animated">
                        <span class="btn-text text-uppercase font-12" >Pay via MPESA</span> 
                      
                      </div>
                        </button>
                      </div>
                  
                      <div class="col-sm-6 pr-0">
                        <a target="_blank" id="pay-bank" class="btn btn-secondary text-white font-14 w-100 center mx-0 ">
                      <div class="btn-txt animated">
                        <span class="btn-text text-uppercase font-12">Pay via bank</span> 
                      
                      </div>
                        </a>
                   </div>
               
              <br><br>

             <form class="mpesa d-none">
               
               
               
               <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="mpesa-number" class=" ">M-PESA phone number</label>
              
              @if(Session::has('resource'))
              <input type="text" class="form-control" id="phone_number" placeholder="eg 07..." name="phone_number" value="{{Session::get('resource')['phone_number']}}">
              @else
              <input type="text" class="form-control" id="phone_number" placeholder="eg 07..." name="phone_number" value="{{old('phone_number')}}">
              @endif
              <input type="hidden" name="UPN" value="" id="UPN">
              <input type="hidden" name="bill_number" id="bill_number">
            </div>
               
                <div class="col-12 p-0 text-uppercase mt-5">
              <button id="btn-pay" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 ">
          <div class="btn-txt animated">
            <span class="btn-text text-uppercase font-12" id="pay"></span> 
          <i data-feather="arrow-right" class="ml-2 float-right pull-right">
          </i>
          </div>
          <div class="lds-ellipsis d-none animated"><div></div><div></div><div></div><div></div></div>
                  </button>
            </div>
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
  $('#loader2').hide();
    $("#btn-confirm").click(function(e){

      e.preventDefault();
      $('#btn-confirm').text('Checking details...');
      $('#loader2').show();
      var plot_number = $("input[name=plot_number]").val();

      if(plot_number == "")
      {
        $('#plot').css( "border-color", "red" );
        return;
      }



      $.ajax({

        url: "<?php echo url('get-land-details')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {plot_number:plot_number},

        success:function(data){
          $('#loader2').hide();
          $('#btn-confirm').text('CHECK STATUS');

          console.log(data.length );

            if(data.responseData == "")
            {
              document.getElementById('errors').innerHTML = 'Something went wrong. Please try again later.';
            $('#errors').removeClass('d-none');
            return;
            }

            if(data.status_code == 200){
            
            var amount = $("input[name=amount]").val();
            
            document.getElementById("tenant").innerHTML = data.responseData.owner_name;
            document.getElementById("plot_details").innerHTML = data.responseData.plot_no;
            document.getElementById("rent").innerHTML ="KES "  +(+data.responseData.balance).toLocaleString();
            document.getElementById("current_rent").innerHTML ="KES "  +(+data.responseData.balance).toLocaleString();
            
            document.getElementById("current_balance").innerHTML = "KES " +(+data.responseData.balance).toLocaleString();
            document.getElementById("UPN").value = data.responseData.upn;
            

            $('.details-confirm').removeClass('fadeOutRight');
            $('.details-confirm').removeClass('d-none');
            $('.the-transaction-form').removeClass('fadeInLeft');
            $('.the-transaction-form').addClass('fadeOutLeft');
            $('.the-transaction-form').addClass('d-none');
            $('.details-confirm').addClass('fadeInRight');
          }

          else
          {
            if(data.status_code == 400)
            {
              document.getElementById('errors').innerHTML = 'Plot not found';
            $('#errors').removeClass('d-none');
            }
            else
            {
              document.getElementById('errors').innerHTML = 'Please try again';
            $('#errors').removeClass('d-none');
            }
            
          }

        }
        });
    } );
</script>
<script type="text/javascript">
  $("#amount").on("change paste keyup", function() {
    var amount = $("input[name=amount]").val();
    document.getElementById("pay").innerHTML = "pay KES " +amount;
});
</script>

<script type="text/javascript">
    $("#btn-pay").click(function(e){
      $('#pay_errors').addClass('d-none');
      var recheck_count = 1; 

      e.preventDefault();
      $('#pay').addClass('d-none');
      $('.lds-ellipsis').removeClass('d-none');

      var UPN = $("input[name=UPN]").val();

      var plot_number = $("input[name=plot_number]").val();

      var phone_number = $("input[name=phone_number]").val();

      var amount = $("input[name=amount]").val();
      


      if(amount > 150000)
      {
        $('.lds-ellipsis').addClass('d-none'); 
        $('#pay').text('PAY');
            $('#pay').removeClass('d-none');
        $('#pay_errors').empty();
        document.getElementById('pay_errors').innerHTML = 'Amount is above M-PESA limit. Kindly pay via the bank.';
        $('#pay_errors').removeClass('d-none');
        $('#pay').text('PAY');
        return;
      }
      if (amount <= 0) {
        $('.lds-ellipsis').addClass('d-none'); 
        $('#pay').text('PAY');
            $('#pay').removeClass('d-none');
        $('#pay_errors').empty();
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid amount.';
        $('#pay_errors').removeClass('d-none');
        $('#pay').text('PAY');
        return;
      }

      var regex = /(\+?254|0|^){1}[-. ]?[7]{1}([0-2]{1}[0-9]{1}|[9]{1}[0-9]{1}|[4]{1}[0-9]{1})[0-9]{6}/;

      if(regex.test(phone_number) == false)
      {
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid Safaricom number';
        $('#pay_errors').removeClass('d-none');
        $('#pay').text('PAY');
        $('#pay').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }

      $('#pay-confirmation-pop').removeClass('d-none');
      $('.lds-roller').removeClass('d-none');
      $('.transacton-instructions').removeClass('d-none');
      $('.payment-status').text('Awaiting payment'); 


      $.ajax({

        url: "<?php echo url('initiate-land-payment')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {UPN:UPN, phone_number:phone_number, amount:amount, plot_number:plot_number},
        success:function(data){
            if(data == "")
            {
              document.getElementById('error_message').innerHTML = 'Something went wrong. Please try again later.';
            $('#error_message').removeClass('d-none');
            return;
            }
            if(data.status_code == 200){
            document.getElementById("bill_number").value = data.bill_number;
            var pay_id = data.bill_number;
            checkagain(pay_id,recheck_count);
          }
          else{
            document.getElementById("error_message").innerHTML = data.message;

            $("#error_message").removeClass('d-none');
            $('#pay').text('PAY');
            $('#pay').removeClass('d-none');
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
                    var amount = $("input[name=amount]").val();
                    $('#pay_amount').text(parseInt(amount).toLocaleString());

                  $('#pay').removeClass('d-none');
                  $('.lds-ellipsis').addClass('d-none');
                  $('.transacton-instructions').addClass('d-none');
                  $('.transactions-actions').removeClass('d-none');
                  $('.lds-roller').addClass('d-none');
                  $('.confirmed-pay').removeClass('d-none');
                  
                  $('.payment-status').text('Unable to validate payment!');                    ;
                  
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
                      

                        if(data.status_code == 200)
                        {
                          $('#pay').text('PAY');
                          $('#pay').removeClass('d-none');
                          $('.lds-ellipsis').addClass('d-none');
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
  $('#pay-bank').click(function(){
    var upn = $("input[name=UPN]").val();
    var amount = $("input[name=amount]").val();
    var plot_number = $("input[name=plot_number]").val();
    console.log(upn);
    if(amount<= 0 )
    {
      $('#pay_errors').empty();
      document.getElementById('pay_errors').innerHTML = 'Please enter a valid amount';
        $('#pay_errors').removeClass('d-none');
    }
    else
    {
    $.ajax({

        url: "generate-land-bill" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {upn:upn,plot_number:plot_number, amount:amount},

        success:function(data){
          console.log(data)
          $('#loader2').hide();
          $('#btn-confirm').text('CHECK STATUS');
          console.log(data);
            if(data == null)
            {
              $('#error_message').empty();
              document.getElementById('error_message').innerHTML = 'Something went wrong. Please try again later.';
            $('#error_message').removeClass('d-none');
            return;
            }
            if(data.status_code == 200){
              $('#pay').text('PAY');
            $('#pay').removeClass('d-none');
            $('.lds-ellipsis').addClass('d-none');
            window.focus();
            // window.location = 'print-land-bill/' +data.response_data[0].BillNo;
            window.location = 'print-land-bill/' +data.bill_number;
          }

          else
          {
            $('#error_message').empty();
            document.getElementById("error_message").innerHTML = data.message;

            $("#error_message").removeClass('d-none');
            $('#pay').text('PAY');
            $('#pay').removeClass('d-none');
            $('.lds-ellipsis').addClass('d-none');
          }

        }
        });

    }
  });
</script>
<script type="text/javascript">
  $('#pay-mpesa').click(function(){

    var amount = $('input[name=amount]').val();
    if(amount > 70000)
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
<script type="text/javascript">
  $('#close-pricepop').on('click',function(){
  $('#pay-confirmation-pop').addClass('d-none');
    $('#pay-confirmation-pop').removeClass(' zoomOut');
});
</script>

@endsection