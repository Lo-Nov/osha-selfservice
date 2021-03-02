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
                      <div class="lds-roller animated d-none"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                      <div class="confirmed-pay d-none animated"><img src="{{asset('img/icons/transactions-icons/alert-circle.svg')}}"></div>
                      <p class="text-center text-white m-0 p-0 mb-3  payment-status">Pending Registration fee payment</p>
                      <h2 class="mb-5 pb-5 text-capitalize text-white"><sup class="font-14 text-uppercase">Kes</sup><span id="pay_amount"></span></h2>
                    </center>
                </div>
                <div class="col-12 p-lg-5 p-sm-3 ">
                        <div class="col-12 p-0 transacton-instructions d-none">
                            <h5><strong class="text-capitalize pb-3">payment procedure</strong></h5>
                    <p class="font-12">fFllow the following payment procedure in order to complete the payment</p>
                          
                    <hr>
                        <ul type="1" class="font-14 pb-5">
                            <li>1.Wait for a <strong>payment pop </strong>up on your phone.</li>
                            <li>2.Enter your <strong>M-PESA pin</strong> and click OK.</li>
                            <li>3.An <strong>MPESA</strong> confimation SMS will be sent to you.</li>
                            <li>4.Wait for upto <strong>45 secs</strong> as we process your transaction</li>
                        </ul>
                    </div>
                    
                    
                    <div class="col-12 p-0 pb-3 transactions-actions d-none animated mt-5">
                      <h5><strong class="  pb-3">Kindly follow the following instructions to pay for your house rent.</strong></h5>
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
<!--	pay confirmation pop up-->
<section id="service-form-section" class="">
  <div class="container">
    <div class="row p-5 ">
      <div class="service-form-container  d-flex flex-column-md animated col-12 p-0">
        <div class="col-lg-7 service-form-img-container" id="house-rent-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">RevenueSure house rents</h2>
            <p class="font-14 mb-3  ">Fill in and remember to double check details to avoid any errors.</p>
          </div>
        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex">
    	     <div class="col-12 p-0 the-transaction-form animated">
				 <div class="">
            <p class="mb-5 pb-2  "><strong>Correctly fill in the form below to continue</strong></p>
          </div>
          <p class="alert alert-danger d-none" id="errors"></p>
          <form class="transaction-form">
            <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="estate" class=" ">Estates</label>
              <select class="form-control select2" id="estate" name="estate">
                <option>Select an estate</option>
                @foreach($estates as $estate)
                <option value="{{$estate->EstateID}}">{{$estate->EstateDescription}}</option>
                @endforeach               
              </select>
              <div class="col-sm-2 float-right" id="loader2" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>
            </div>
            <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="house_type" class=" ">House types</label>
              <select class="form-control select2" id="house_type" name="houseTypeID">
                <option >select the house type </option>
                <!-- <option>Select a house type</option> -->
              </select>
            </div>
			   <div class="col-sm-2 float-right" id="loader3" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
          </div>
			  <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="house_number" class=" ">House numbers</label>
              <select class="form-control select2" id="house_number" name="HouseNumber">
                <option >select house number</option>
                <!-- <option>Select a house number</option> -->
              </select>
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
                  <p class="font-10px m-0">Coming soon</p>
                </div>
                <span class="checkmark"></span>
                </label>
              </div>
              
            </div>
            <div class="col-sm-2 float-right d-none" id="loader" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>
            <div class="col-12 p-0 text-uppercase mt-5">
              <button id="btn-confirm" class="btn btn-primary text-white font-14 w-100 center mx-0 "><span class="btn-text text-uppercase font-12">Check rent status</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i></button>
            </div>
          </form>
			</div>
			
			<div class="col-12 d-none p-0 animated details-confirm">
				 <div class="">
            <p class="mb-5 pb-2  ">
				<span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your details</strong>
					 </p>
					 <hr class="mt-1 p-0">
					 <p><strong class=" ">House details</strong></p>
					 
					 <div class="transactions-details-container  ">
					 	<p class="m-0"><span>Tenant</span></p>
						 <strong id="tenant"></strong>
						 <hr>
						 <p class="m-0"><span>House</span></p>
						 <strong id="house_details"></strong>
						 <hr>
						 
						<p class="m-0"> <span>Monthly rent</span></p>
						 <strong class="text-uppercase" id="rent"></strong>
						 <hr>
						 
						 <p class="m-0"> <span>Last billed</span></p>
						 <strong class="text-uppercase" id="last_billed"></strong>
						 <hr>
						<div class=" text-right amount-container">
						 		 <p><span class="text-uppercase text-left">Current balance</span> <strong id="current_balance"></strong></p>
						 </div>
						 <hr>
             <p id="bill_errors" class="d-none alert alert-danger"></p>
            <p id="pay_errors" class="d-none alert alert-danger"></p>
            <div class="col-sm-12 pl-0 d-none" id="print-receipt">
                    <p><b>You can now proceed to print your receipt</b></p>
                 <a href="" target="_blank" id="receipt-link" class="btn btn-secondary text-white font-14 w-100  center mx-0 ">
                  <div class="btn-txt animated">
                    <span class="btn-text text-uppercase font-12" >Print receipt</span> 
                  
                  </div>
                    </a>
                </div>
                <div class="payment-actions">
             <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="number-plate" class=" ">Amount to pay</label>
              <input type="text" class="form-control" id="amount" placeholder="Enter amount to pay" name="amount" value="{{old('amount')}}">

            </div> 
            
             <div class="col-sm-6 pl-0">
                  <button id="pay-mpesa" class="btn btn-primary text-white font-14 w-100  center mx-0 ">
                <div class="btn-txt animated">
                  <span class="btn-text text-uppercase font-12" >Pay via MPESA</span> 
                
                </div>
                  </button>
             </div>
             <div class="col-sm-6 pr-0">
               <button id="pay-bank" class="btn btn-secondary text-white font-14 w-100  center mx-0 ">
                <div class="btn-txt animated">
                  <span class="btn-text text-uppercase font-12" >Print bank bill</span> 
                
                </div>
                  </button>
              </div>
						 
						 <br>            
            
            <form class="mpesa d-none">
               
               <div class="form-group col-sm-12 col-md-12 p-0">
              <!-- <label for="number-plate" class=" ">Amount to pay</label>
              <input type="text" class="form-control" id="mpesa-amount" placeholder="Enter amount to pay" name="mpesa_amount" value="{{old('mpesa_amount')}}"> -->
              
              <label for="number-plate" class=" ">Phone number</label>
              
              @if(Session::has('resource'))
              <input type="text" class="form-control" id="phone_number" placeholder="eg 07..." name="phone_number" value="{{Session::get('resource')['phone_number']}}">
              @else
              <input type="text" class="form-control" id="phone_number" placeholder="eg 07..." name="phone_number" value="{{old('phone_number')}}">
              @endif

              <input type="hidden" id="UHN"  name="UHN" value="">
            </div>

            <div class="col-12 p-0 text-uppercase mt-5">
              <button id="btn-pay" class="btn btn-primary text-white font-14 w-100 center mx-0">
              <div class="btn-txt animated">
                <span class="btn-text text-uppercase font-12" id="pay_text">PAY</span> 
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
  </div>
</section>
<!--form section-->
@endsection
@section('scripts')
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/select2.full.min.js')}}"></script>

<script type="text/javascript">

  $(document).ready(function ()
    {

        $('#loader2').hide();
        $('#estate').on('change',function(){
            $('#loader2').show();
               var EstateID = $(this).val();
               // alert();
               if(EstateID)
               {
                   $.ajax({
                       type:'POST',
                       url:"<?php echo url('/get-house-types')?>",
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data:{EstateID:EstateID},
                       success:function(data){

                        if(data == "")
                          {
                            document.getElementById('errors').innerHTML = "We're having trouble retrieving house types for that estate. Please try again later.";
                          $('#errors').removeClass('d-none');
                          return;
                          }
                          if(data.status_code == 200)
                          {
                           $('#house_type').empty();
                           $('#house_type').append($('<option>', {
                                    value: " ",
                                    text: "select house type",
                                }));
                           $.each(data.response_data, function (i, item) {
                               $('#loader2').hide();
                               $('#house_type').append($('<option>', {
                                   value: item.HouseTypeID,
                                   text: item.HOUSETYPE
                               }));
                           });
                         }
                         else
                         {
                          document.getElementById('errors').innerHTML = data.message;
                          $('#errors').removeClass('d-none');
                         }
                       }
                   });
               }
               else
               {
                  $('#house_type').empty();
               }
            });

    });
</script>
<script type="text/javascript">
  $(document).ready(function ()
    {
        $('#loader3').hide();
      $('#house_type').on('change',function(){
          $('#loader3').show();
               var houseTypeID = $(this).val();
               var estateID = $('#estate').val();

               // alert(houseTypeID);
               if(houseTypeID)
               {
                  $.ajax({
                     url : '<?php  echo url('get-house-numbers')?>',
                     type : "POST",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                     data : {houseTypeID : houseTypeID, estateID:estateID},

                     success:function(data)
                     {
                      if(data == "")
                          {
                            document.getElementById('errors').innerHTML = "We're having trouble retrieving house types for that estate. Please try again later.";
                          $('#errors').removeClass('d-none');
                          return;
                          }
                          if(data.status_code == 200)
                          {


                        $('#house_number').empty();
                        // console.log(data.response_data);
                        $('#house_number').append($('<option>', {
                                    value: " ",
                                    text: "select house number",
                                }));
                       $.each(data.response_data, function (i, item) {
                           $('#loader3').hide();
                                $('#house_number').append($('<option>', {
                                    value: item.UHN,
                                    text: item.HouseNumber,
                                }));

                            });
                        }
                        else
                        {
                          document.getElementById('errors').innerHTML = "We're having trouble retrieving house numbers for that house category. Please try again later.";
                          $('#errors').removeClass('d-none');
                          return;
                        }
                     }
                  });
               }
               else
               {
                  $('#house_number').empty();
               }
            });
    });
</script>

<script type="text/javascript">
    $("#btn-confirm").click(function(e){

      e.preventDefault();
      $('#btn-confirm').text('Checking details...');
      $('#loader').removeClass('d-none');
      var house_number = $("#house_number option:selected").text();

      var UHN = $("select[name=HouseNumber]").val();

      var estate_id = $("select[name=estate]").val();


      
      $.ajax({

        url: "<?php echo url('confirm-house-details')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {UHN:UHN, house_number:house_number, estate_id:estate_id},

        success:function(data){
          $('#loader').addClass('d-none');
          $('#btn-confirm').text('CHECK STATUS');

          // console.log(data);

          if(data.status_code == 200)
          {
            document.getElementById("tenant").innerHTML = data.response_data.CustomerSupplierName;
            document.getElementById("house_details").innerHTML = data.response_data.LocationDescription + " Hse No. " +data.response_data.HouseNumber;
            document.getElementById("rent").innerHTML ='KES ' +parseInt(data.response_data.ActualRent).toLocaleString();
            document.getElementById("last_billed").innerHTML = data.response_data.LastBillMonth;
            document.getElementById("current_balance").innerHTML = 'KES ' +parseInt(data.response_data.CurrentBalance).toLocaleString();

            document.getElementById("UHN").value = data.response_data.UHN;
            // document.getElementById("pay").innerHTML = "pay KES " +data;
            // document.getElementById("charges").innerHTML = data;

            $('.details-confirm').removeClass('fadeOutRight');
            $('.details-confirm').removeClass('d-none');
            $('.the-transaction-form').removeClass('fadeInLeft');
            $('.the-transaction-form').addClass('fadeOutLeft');
            $('.the-transaction-form').addClass('d-none');
            $('.details-confirm').addClass('fadeInRight');
          }
          else
          {
            $('#errors').removeClass('d-none');
            $('#errors').innerHTML = data.message;
            
          }

        }
        });
    } );
</script>


<!-- <script type="text/javascript">
  $("#amount").on("change paste keyup", function() {
    var amount = $("input[name=amount]").val();
    document.getElementById("pay").innerHTML = "pay KES " +amount;
});
</script> -->



<script type="text/javascript">
    $("#btn-pay").click(function(e){
      var retry = 1;
      var regex = /(\+?254|0|^){1}[-. ]?[7]{1}([0-2]{1}[0-9]{1}|[9]{1}[0-9]{1}|[4]{1}[0-9]{1})[0-9]{6}/;
      $('#pay_errors').addClass('d-none');
      e.preventDefault();
      $('#pay_text').addClass('d-none');
      $('.lds-ellipsis').removeClass('d-none');
      var UHN = $("input[name=UHN]").val();

      var amount = $("input[name=amount]").val();
      
      var house_number = $("#house_number option:selected").text();

      var house_type_id = $("select[name=houseTypeID]").val();

      var estate_id = $("select[name=estate]").val();

      var phonenumber = $("#phone_number").val(); 
      // console.log(phonenumber);

      // console.log(phonenumber);
      if(regex.test(phonenumber) == false)
      {
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid Safaricom number';
        $('#pay_errors').removeClass('d-none');
        $('#pay_text').text('PAY');
        $('#pay_text').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }

      if(amount > 150000)
      {
        document.getElementById('pay_errors').innerHTML ='Amount is above M-PESA limit. Please pay your bill through  the bank.';
        $('#pay_errors').removeClass('d-none');
        $('#pay_text').text('PAY');
        $('#pay_text').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }
      if (amount <= 0) {
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid amount';
        $('#pay_errors').removeClass('d-none');
        $('#pay_text').text('PAY');
        $('#pay_text').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }


      $.ajax({

        url: "<?php echo url('generate-house-bill')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {UHN:UHN, amount:amount, house_number:house_number, house_type_id:house_type_id, estate_id:estate_id},
        success:function(data){
            // console.log(data);

            if(data == "")
              {
                document.getElementById('bill_errors').innerHTML = "We're having trouble initiating payment. Please try again later.";
              $('#bill_errors').removeClass('d-none');
              return;
              }
            
              if(data.status_code != 200)
              {
                document.getElementById('bill_errors').innerHTML = "We're having trouble initiating payment. Please try again later." ;
                $('#bill_errors').removeClass('d-none');
                $('#pay_text').text('PAY');
                $('#pay_text').removeClass('d-none');
                $('.lds-ellipsis').addClass('d-none');
              }
              else
              {
                var recheck_count = 1;

              e.preventDefault();
              $('#pay_text').removeClass('d-none');
              $('.lds-ellipsis').addClass('d-none');
            $('#pay_text').text('Initiating payment..');

            // $('.lds-ellipsis').removeClass('d-none');
            
            var bill_number = data.response_data.bill_number;

            var phone_number = $("input[name=phone_number]").val();

            document.getElementById("pay_amount").innerHTML = amount;
            $('#pay-confirmation-pop').removeClass('d-none');
            $('.lds-roller').removeClass('d-none');
            $('.transacton-instructions').removeClass('d-none');
            $('.payment-status').text('Awaiting payment'); 


            $.ajax({

                url: "<?php echo url('initiate-rent-payment')?>" ,
                type: "POST",
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {bill_number:bill_number, phone_number:phone_number},
                success:function(data){
                    // console.log(data);
                    if(Object.keys(data).length == 0)
                    {
                      document.getElementById('pay_errors').innerHTML = "We're having trouble initiating payment. Please try again later." ;
                      $('#pay_errors').removeClass('d-none');
                      ('#pay_text').text('PAY');
                      $('#pay_text').removeClass('d-none');
                      $('.lds-ellipsis').addClass('d-none');
                      return;
                    }
                    if(data.status_code == 200)
                    {
                      $('#pay_text').text('Awaiting client payment..');
                      var pay_id = bill_number;
                      checkagain(pay_id,recheck_count);
                      // $('#btn-pay').text('Validating payment..');
                    }

                    else
                    {
                      document.getElementById("pay_errors").innerHTML = "We're having trouble initiating payment. Please try again later.";
                      $('#pay_errors').removeClass('d-none');
                      $('#pay_text').text('PAY');
                      $('#pay-confirmation-pop').addClass('d-none');
                    }
                    
                    
                    
                      }

                });
            }
            
            
              }
        });
    
    } );
</script>


<script type="text/javascript">

    function checkagain(pay_id,recheck_count)
    {
       // $('#btn-pay').text('Validating client payment..');
      if(recheck_count==12)
                {
                    $('#bill_pay').text(pay_id);
                    var amount = $("input[name=amount]").val();
                    $('#pay_amount').text(amount.toLocaleString());

                  $('.btn-txt').removeClass('d-none');
                  $('#pay').removeClass('d-none');
                  $('.lds-ellipsis').addClass('d-none');
                  $('.transacton-instructions').addClass('d-none');
                  $('.transactions-actions').removeClass('d-none');
                  $('.lds-roller').addClass('d-none');
                  $('.confirmed-pay').removeClass('d-none');
                  
                  $('.payment-status').text('Unable to validate payment!');                     ;
                  
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
                        $('#pay_text').text('PAY');
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
  $('.close-receipt-form').on('click',function(){
closereceiptform();
});

</script>

<script type="text/javascript">
  function closereceiptform(){
setTimeout($('#search-receipt').addClass('d-none'),2000);
$('#search-receipt').removeClass('fadeIn');
$('#get-receipt-container').removeClass('tada');

$('#search-receipt').addClass('zoomOut');
$('#get-receipt-container').addClass('rollOut');

}
</script>

<script type="text/javascript">
  $('#pay-bank').click(function(){
    // alert('clicked');
    var UHN = $("input[name=UHN]").val();

      var amount = $("input[name=amount]").val();
      
      var house_number = $("#house_number option:selected").text();

      var house_type_id = $("select[name=houseTypeID]").val();

      var estate_id = $("select[name=estate]").val();

      if (amount <= 0) {
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid amount';
        $('#pay_errors').removeClass('d-none');
        $('#pay_text').text('PAY');
        $('#pay_text').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }

      $.ajax({

        url: "<?php echo url('generate-house-bill')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {UHN:UHN, amount:amount, house_number:house_number, house_type_id:house_type_id, estate_id:estate_id},
        success:function(data){

          if(Object.keys(data).length == 0)
            {
              document.getElementById('bill_errors').innerHTML = "We're having trouble generating a bill. Please try again later.";
            $('#bill_errors').removeClass('d-none');
            return;
            }

          if(data.status_code == 200)
          {
            $('#pay_text').text('PAY');
            window.location = 'print-house-bill/' +data.response_data.bill_number;
          }
          else
          {
            document.getElementById('bill_errors').innerHTML = data.message;
            $('#bill_errors').removeClass('d-none');
          }
        }
  });
    });
</script>
<script type="text/javascript">
  $('#pay-mpesa').click(function(){
    var amount = $('input[name=amount]').val();
    if(amount > 70000)
      {
        document.getElementById('pay_errors').innerHTML ='Amount is above M-PESA limit. Please pay your bill through  the bank.';
        $('#pay_errors').removeClass('d-none');
        $('#pay_text').text('PAY');
        $('#pay_text').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }
      if (amount <= 0) {
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid amount';
        $('#pay_errors').removeClass('d-none');
        $('#pay_text').text('PAY');
        $('#pay_text').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }
    $('.mpesa').removeClass('d-none');
    $('.bank_bill').addClass('d-none');
  })
</script>
<script type="text/javascript">
  $('#close-pricepop').on('click',function(){
  $('#pay-confirmation-pop').addClass('d-none');
    $('#pay-confirmation-pop').removeClass(' zoomOut');
    location.reload();
});
</script>
@endsection