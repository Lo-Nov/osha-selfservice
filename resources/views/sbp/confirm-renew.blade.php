@extends('layouts.app')
@section('content')
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
                      <!-- <h2 class="mb-5 pb-5 text-capitalize text-white"><sup class="font-14 text-uppercase">Kes</sup></h2> -->
                    </center>
                </div>
                <div class="col-12 p-lg-5 p-sm-3 ">
                        <div class="col-12 p-0 transacton-instructions d-none">
                            <h5><strong class="text-capitalize pb-3">payment procedure</strong></h5>
                    <p class="font-12">follow the following payment procedure in order to complete the payment</p>
                          
                    <hr>
                        <ul type="1" class="font-14 pb-5">
                            <li>1). Wait for a <strong>payment pop </strong>up on your phone.</li>
                            <li>2). Enter your <strong>M-PESA pin</strong> and click OK.</li>
                            <li>3). An <strong>MPESA</strong> confimation SMS will be sent to you.</li>
                            <li>4). Wait for upto <strong>45 secs</strong> as we process your transaction</li>
                        </ul>
                    </div>
                    
                    
                    <div class="col-12 p-0 pb-3 transactions-actions d-none animated mt-5">
                      <h5><strong class="  pb-3">Kindly follow the following instructions to pay for the business renewal.</strong></h5>
                      <li class="font-14 m-0">1). Go to the M-PESA menu on your SIM Toolkit</li>          
                       <li class="font-14 m-0">2). Under the Lipa na M-PESA option, select Pay Bill and enter <strong>367776</strong>  as the business no.</li>
                       <li class="font-14 m-0">3). Enter <strong id="bill_pay"></strong>  as the account no.</li>
                       <li>4). Enter KES <b>{{number_format($total)}}</b> as the amount</li>
                       <li class="font-14 m-0">5). You will receive a confirmation SMS that your payment has been received.</li>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section id="service-form-section" class="parallax-section">
  <div class="container">
    <div class="row p-5 ">
      <div class="service-form-container  flex-column-md animated col-12 p-0">
        <div class="col-12 service-form-img-container" id="biz-img" style="height: 169px;">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">RevenueSure business permit renewal</h2>
            <p class="font-14 mb-3  ">Fill in and remember to double check details to avoid any wrong submissions</p>
          </div>
        </div>
        <div class="col-12 p-5 position-relative transactions-form-container d-flex">
    	    
			
			<div class="col-12 p-0 animated details-confirm">
				 <div class="">
            <p class="mb-5 pb-2  ">
				<span  title="back to transactions form"></span><strong>Confirm your Transaction details</strong>
					 </p>
					 <hr class="mt-1 p-0">
					 <p><strong class=" ">Transaction details</strong></p>
					 
					 <div class="transactions-details-container  ">
					 	<p class="m-0"><span>Business name</span></p>
						 <strong id="business_name">{{$businessName}}</strong>
						 <hr>
						 <p class="m-0"><span>Business ID</span></p>
						 <strong id="business_category">{{$businessID}}</strong>
						 <hr>
						 
             <p class="m-0"> <span>Bill Number</span></p>
             <strong class="text-uppercase" id="pin_number">{{$bill_number}}</strong>
             <hr>
						<div class=" text-right amount-container">
						 		   <p><span class="text-uppercase text-left">Amount payable: </span> <strong>KES {{number_format($total)}} </strong></p>
						 </div>
						 <hr>

						 <!-- a href="{{route('welcome')}}" class="btn btn-primary px-5 py-3 text-white text-uppercase font-12 font-sm-10 px-sm-4">Pay Later</a>

						 <button id="proceed_payment" class="btn btn-primary px-5 py-3 text-white text-uppercase font-12 font-sm-10 px-sm-4">Proceed to Payment</button> -->

						 <p>Proceed to payment to obtain a permit for your business</p>
             @if($total > 70000)
						 <p>The amount payable is greater than the MPESA limit 70,000. Kindly print the bill and pay at the bank.</p>
						<a target="new" type="button" class="btn btn-primary text-white font-14 w-100 center mx-0" href="{{route('print-sbp-bill', ['id' => $bill_number])}}">
								  <div class="btn-txt animated">
								  	<span class="btn-text text-uppercase font-12" >Print Bill</span> 
								  <i data-feather="arrow-right" class="ml-2 float-right pull-right">
								  </i>
								  </div>
							</a>
              @else
						 <div><p id="errors" class="d-none alert alert-danger"></p></div>
             <div><p id="pay_errors" class="d-none alert alert-danger"></p></div>
						 <form>
							 
							 <div class="form-group col-sm-12 col-md-12 p-0">
				              <label for="number-plate" class=" ">M-PESA phone number</label>
				              <input type="text" class="form-control" id="number-plate" placeholder="eg 0712..." name="phone_number" value="{{old('phone_number')}}">
				              <input type="hidden" class="form-control" id="billNumber" name="bill_number" value="{{$bill_number}}">
				            </div>
								<div id="before_receipt">
							 <div class=" p-5 text-uppercase mt-5 col-sm-6">
				              <button type="button" id="pay-mpesa" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0">
								  <div class="btn-txt animated" id="btn-mpesa">
								  	<span class="btn-text text-uppercase font-12">PAY VIA MPESA</span> 

								  <i data-feather="arrow-right" class="ml-2 float-right pull-right">
								  </i>
								  </div>
								  <div class="lds-ellipsis d-none animated"><div></div><div></div><div></div><div></div></div>
							</button>
            </div>
            <div class="p-5 text-uppercase mt-5 col-sm-6">
              <a href="{{route('print-sbp-bill', ['id' => $bill_number])}}" target="new" type="button" class="btn btn-secondary text-white font-14 w-100 center mx-0 ">
                  <div class="btn-txt animated">
                    <span class="btn-text text-uppercase font-12">Print Bank Bill</span>  
                    
                  <i data-feather="arrow-right" class="ml-2 float-right pull-right">
                  </i>
                  </div>

              </a>
            </div> 
            </div> 

              <div id="after_receipt" class="d-none"> 
              <p class="alert alert-success">You can now proceed to print your receipt or permit</p>       
               <div class=" p-5 text-uppercase mt-5 col-sm-6">
                      <a type="button" target="new" href="{{route('view-sbp-permit', ['id' => $bill_number, 'business_id' => $businessID])}}" id="pay-mpesa" class="btn btn-primary text-white font-14 w-100 center mx-0">
                        <div class="btn-txt animated" id="btn-mpesa">
                          <span class="btn-text text-uppercase font-12">PRINT PERMIT</span> 

                        <i data-feather="arrow-right" class="ml-2 float-right pull-right">
                        </i>
                        </div>
                        
                    </a>
            </div>
            <div class="p-5 text-uppercase mt-5 col-sm-6">
              <a type="button" target="new" href="{{route('view-sbp-receipt', ['id' => $bill_number])}}" class="btn btn-secondary text-white font-14 w-100 center mx-0 ">
                  <div class="btn-txt animated">
                    <span class="btn-text text-uppercase font-12">PRINT RECEIPT</span>  
                    
                  <i data-feather="arrow-right" class="ml-2 float-right pull-right">
                  </i>
                  </div>

              </a>
            </div> 
            </div>
						 	
						 </form>
             @endif
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
  var recheck_count=1;
    $("#pay-mpesa").click(function(e){

      e.preventDefault();
      $('#btn-mpesa').addClass('d-none');
      $('.lds-ellipsis').removeClass('d-none');


      var bill_number = $("#billNumber").val();

      var phone_number = $("input[name=phone_number]").val(); 

      var regex = /(\+?254|0|^){1}[-. ]?[7]{1}([0-2]{1}[0-9]{1}|[9]{1}[0-9]{1}|[4]{1}[0-9]{1})[0-9]{6}/;

      if(regex.test(phone_number) == false)
      {
        document.getElementById('pay_errors').innerHTML = 'Please enter a valid Safaricom number';
        $('#pay_errors').removeClass('d-none');
        $('#btn-mpesa').text('PAY');
        $('#btn-mpesa').removeClass('d-none');
        $('.lds-ellipsis').addClass('d-none');
        return;
      }

      $('#pay-confirmation-pop').removeClass('d-none');
      $('.lds-roller').removeClass('d-none');
      $('.transacton-instructions').removeClass('d-none');
      $('.payment-status').text('Awaiting payment');
      $.ajax({

        url: "<?php echo url('pay-sbp')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {bill_number:bill_number, phone_number:phone_number},
        success:function(data){
            // console.log(data);
            if(data.status_code == 200)
            {
              var pay_id = data.response_data.BillNo;
              checkagain(pay_id,recheck_count);
              
            }
            else
            {
            	$('#btn-mpesa').removeClass('d-none');
              $('.lds-ellipsis').addClass('d-none');
              document.getElementById('errors').innerHTML = data.message;
            }
            
          },
        
        });


    } );


    function checkagain(pay_id,recheck_count)
    {
       
      if(recheck_count==12)
                {
                    $('#bill_pay').text(pay_id);

                  $('.btn-txt').removeClass('d-none');
                  $('.lds-ellipsis').addClass('d-none');
                      $('#pay-confirmation-pop').removeClass('d-none');
                      $('.lds-roller').addClass('d-none');
                      $('.confirmed-pay').removeClass('d-none');
                      $('.transacton-instructions').addClass('d-none');
                      $('.transactions-actions').removeClass('d-none');
                      $('.payment-status').text('Unable to validate payment!');                   ;
                  
                }
                else
                {
                    recheck_count++;
                    setTimeout(function(){
                    $.ajax({

                    url :"get-sbp-receipt/" +pay_id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {
                    	// console.log(data);
                      if(data.status_code !== 200)
                      {
                        checkagain(pay_id,recheck_count);
                        
                      }
                      else
                      {
                            $('#before_receipt').addClass('d-none');
                            $('#after_receipt').removeClass('d-none');
				            
                        
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
});
</script>

@endsection