@extends('layouts.app')
@section('content')
<!--form section-->
<!--	pay confirmation pop up-->
<section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="pay-confirmation-pop">
    <div class="container p-md-5 p-sm-0">
      <div class="row p-5 d-flex justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 payment-pop-container m-5 m-sm-3 d-flex flex-column-md animated p-0">
          
          <div class="col-12 position-relative p-0">
                    <span class="close-receipt-form position-absolute z-index-1 d-none transactions-actions animated text-white" id="close-pricepop"> <i data-feather="x"></i></span>
  
            <div class="">
                <div class="show-amount-loader">
                    <center class="p-5 text-white">
                      <div class="lds-roller animated d-none"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                      <div class="confirmed-pay  animated"><img src="img/icons/transactions-icons/check.svg"></div>
                      <p class="text-center text-white m-0 p-0 mb-3  payment-status">Pending Registration fee payment</p>
                      <h2 class="mb-5 pb-5 text-capitalize text-white"><sup class="font-14 text-uppercase">Kes</sup>2,000</h2>
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
                      <h5><strong class="  pb-3">Kindly follow the following instructions to pay for the bill.</strong></h5>
                      <p class="font-14   m-0">Go to the M-PESA menu on your SIM Toolkit</p>          
                       <p class="font-14">Under the Lipa na M-PESA option, select Pay Bill and enter <strong>367776</strong>  as the business no.</p>
                       <p class="font-14">Enter your bill number <strong id="bill_pay">367776</strong>  as the account no.</p>
                       <p class="font-14">You will receive a confirmation SMS that your payment has been received.</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--	pay confirmation pop up-->
<section id="service-form-section" class="parallax-section">
  <div class="container">
    <div class="row p-5 ">
      <div class="service-form-container  flex-column-md animated col-12 p-0">
        <div class="col-12 service-form-img-container" id="biz-img" style="height: 169px;">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">Your fleet name vehicles</h2>
            <p class="font-14 mb-3  ">Check the checkboxes of the vehicles you wish to pay for in the list below.</p>
          </div>
        </div>
        <div class="col-12 p-5 position-relative transactions-form-container d-flex">
    	     <div class="col-12 p-0 the-transaction-form animated">
				 {{-- <div class="d-flex flex-column">
					 <div id="point-indicator" class="point-indicator  mb-4">
					 		<div class="justify-content-center d-flex">
					 			<span class="start-clickable active"></span>
					 			<span class="mx-3"></span>
					 			<span class="mr-3"></span>
					 			<span class=""></span>
					 		</div>
					 </div>
					 <hr>
            
          </div> --}}
          <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Number plate</th>
                    <th>Duration</th>
                    <th>Category</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicles->parking_entries as $vehicle)
                <tr>
                    <td><input type="checkbox"  name="entries_id[]" class="icheckbox" value="{{$vehicle->id}}" /></td>
                    <td>{{strtoupper($vehicle->number_plate)}}</td>
                    <td>{{$vehicle->duration}}</td>
                    <td>{{$vehicle->vehicle_category}}</td>
                    <td>{{number_format($vehicle->total_cost)}}</td>
                </tr>
                @endforeach
               
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Number plate</th>
                    <th>Duration</th>
                    <th>Category</th>
                    <th>Amount</th>
                </tr>
            </tfoot>
        </table>

        <form class="mpesa">
               
          <p id="errors" class="alert alert-danger d-none"></p>
               
               
          <div class="form-group col-sm-12 col-md-12 p-0">
          <label for="mpesa-number" class=" "><b>Phone number</b></label>
          
          @if(Session::has('resource'))
          <input type="text" class="form-control" id="phone_number" placeholder="eg 07..." name="phone_number" value="{{Session::get('resource')['phone_number']}}">
          @else
          <input type="text" class="form-control" id="phone_number" placeholder="eg 07..." name="phone_number" value="{{old('phone_number')}}">
          @endif

          <input type="hidden" value="{{$vehicles->company_id}}" name="company_id">
          
        </div>
       
             
    </form>

        <div class="col-sm-12 pt-5">
            <button id="mpesa-payment" class="btn btn-primary text-white font-12 border-0   next-btn">Pay via MPESA</button>

            <button id="bank-paymemt"  class="btn btn-secondary text-white font-12 border-0   next-btn" style="float: right">Pay via Bank</button>

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
<!--form section-->
@endsection

@section('scripts')

<script src="{{asset('js/select2.full.min.js')}}"></script>


<script>
  $(document).ready(function()
  {
    $('#mpesa-payment').on('click', function(e)
    {
        e.preventDefault();
          var entries_id = $('input[type=checkbox]:checked').map(function(){return $(this).val();}).get();
          var phone_number = $('input[name=phone_number]').val();
          var company_id = $('input[name=company_id]').val();

               console.log(entries_id);
               // console.log(subcountyID);
               if(entries_id.length > 0)
               {
                  $.ajax({
                     url : "<?php echo url('psvs-mpesa-payment/')?>",
                     type : "POST",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                     data:{entries_id:entries_id, phone_number:phone_number, company_id:company_id},
                     
                     success:function(data)
                     {
                        
                     }
                  });
               }
               else
               {
                  $('#errors').text('Please select the vehicles to pay for.');
                  $('#errors').removeClass('d-none');
               }
    })
  })
</script>

<script>
  $(document).ready(function()
  {
    $('#bank-payment').on('click', function(e)
    {
        e.preventDefault();
          var entries_id = $('input[type=checkbox]:checked').map(function(){return $(this).val();}).get();
          var phone_number = $('input[name=phone_number]').val();
          var company_id = $('input[name=company_id]').val();

               console.log(entries_id);
               // console.log(subcountyID);

               if(phone_number == "")
               {
                  $('#errors').text('Please enter a phone number');
                  $('#errors').removeClass('d-none');
                  return;
               }

               if(entries_id.length > 0)
               {
                  $.ajax({
                     url : "<?php echo url('psvs-bank-payment/')?>",
                     type : "POST",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                     data:{entries_id:entries_id, phone_number:phone_number, company_id:company_id},
                     
                     success:function(data)
                     {

                          if(data.status_code == 200)
                          {
                              var billNo = data.response_data.transaction_reference;

                              window.location = "print-bill/"+billNo;
                          }
                          else
                          {
                              $('#errors').text(data.message);
                              $('#errors').removeClass('d-none');
                          }
                          


                     }
                  });
               }
               else
               {
                  $('#errors').text('Please select the vehicles to pay for.');
                  $('#errors').removeClass('d-none');
               }
    })
  })
</script>

@endsection

