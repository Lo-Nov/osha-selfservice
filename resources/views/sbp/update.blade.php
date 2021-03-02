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
            <h2 class="mb-4   text-white">RevenueSure business permit renewal</h2>
            <p class="font-14 mb-3  ">Fill in and remember to double check details to avoid any wrong submissions</p>
          </div>
        </div>
        <div class="col-12 p-5 position-relative transactions-form-container d-flex">
    	     <div class="col-12 p-0 the-transaction-form animated">
				 <div class="d-flex flex-column">
					 <div id="point-indicator" class="point-indicator  mb-4">
					 		<div class="justify-content-center d-flex">
					 			<span class="start-clickable active"></span>
					 			<span class="mx-3"></span>
					 			<span class="mr-3"></span>
					 			<span class=""></span>
					 		</div>
					 </div>
					 <hr>

          </div>
          <form class="transaction-form" action="{{route('renew-business')}}" method="post" id="idForm">
			   @csrf()
<!--			  business information-->
			 <div class="row biz-info animated">
        @if($errors->any())
              <p class="alert alert-danger">{{$errors->first()}}</p>
          @endif
        <div class="alert alert-danger d-none first-errors col-12" id="first_errors">
          </div>
				<div class="col-12">
					 <p class="mb-3  "><strong>Business information</strong></p>
				 </div>


			  	 <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Business ID</label>
                <input type="text" class="form-control first-required" id="plot" placeholder="Enter your business number" name="BusinessID" value="{{$business->BusinessID}}" required readonly>
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="reg-cert" class=" ">Business Name</label>
                <input type="text" class="form-control first-required" id="plot" placeholder="Enter your business name" name="BusinessName" value="{{$business->BusinessName}}" required readonly>
              </div>


			   <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Period</label>

              <select class="form-control first-required" id="zone" name="Period" required>
                  <option value="">Select  Period</option>
                  <option value="1">Yearly</option>
                  <option value="2">For 6 Months</option>
                  <option value="4">For 3 Months</option>
              </select>
              </div>
              <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="reg-cert" class=" ">Business category</label>
                <input type="text" class="form-control" id="plot" placeholder="Enter your business name" name="codeDescription" value="{{$business->codeDescription}}" required readonly>
                <input type="hidden" class="form-control" id="plot" name="ActivityCode" value="{{$business->ActivityCode}}" required readonly>
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="reg-cert" class=" ">Contact  person name</label>
                <input type="text" class="form-control first-required" id="plot" placeholder="Enter your vat no."  name="ContactPersonName" value="{{$business->ContactPersonName}}" required>
              </div>

			       <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Contact person telephone</label>
                <input type="text" class="form-control first-required" id="plot" name="ContactPersonTelephone1" value="{{$business->ContactPersonTelephone1}}" required>
              </div>
              <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Contact person ID</label>
                <input type="text" class="form-control first-required" id="plot" name="IDDocumentNumber" value="{{$business->IDDocumentNumber}}" required>
              </div>
              <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Physical address</label>
                <input type="text" class="form-control first-required" id="plot" name="PhysicalAddress" value="{{$business->PhysicalAddress}}" required>
              </div>
              <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Building name</label>
                <input type="text" class="form-control first-required" id="plot" name="building" value="{{$business->building}}" required>
              </div>
              <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class=" ">Building type</label>
              <select class="form-control first-required" id="building_type" name="buildingType">
                <option value="">-- select building type --</option>
                <option value='1'>Storey</option>
                <option value='0'>Non storey</option>
              </select>
            </div>
              <div class="form-group col-md-12 col-lg-4 mt-2 d-none" id="floor">
                <label for="mpesa-phone" class=" ">Floor</label>
                <input type="text" class="form-control first-required" id="plot" name="floor" value="{{$business->floor}}">
              </div>
              <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Room</label>
                <input type="text" class="form-control first-required" id="plot" name="houseNumber" value="{{$business->houseNumber}}" required>
              </div>
              <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Plot number</label>
                <input type="text" class="form-control first-required" id="plot" name="plotNumber" value="{{$business->PlotNumber}}" required>
              </div>
              <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class=" ">Sub county</label>

              <select  id="subcounty" name="zoneCode" class="first-required">
                <option value="">-- select subcounty --</option>
                @foreach($subcounties as $subcounty)
                <option value="{{$subcounty->SubCountyID}}">{{$subcounty->SubCountyName}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-lg-1 float-right d-none" id="loader4" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>

        <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class=" ">Ward</label>
              <select  id="ward" name="wardCode" class="first-required">
                <option value="">-- select ward --</option>

              </select>
            </div>


			   <div class="col-sm-12 pt-3">
				 				  <button type="submit" class="btn btn-primary text-white font-12 border-0   next-btn">next</button>

				 </div>

			  </div>
			  </form>
<!--			  location and contacts -->




			  </div>



			</div>

			<div class="col-12 d-none p-0 animated details-confirm">
				 <div class="">
            <p class="mb-5 pb-2  ">
				<span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your business details</strong>
					 </p>
					 <hr class="mt-1 p-0">
					 <p><strong class=" ">Business details</strong></p>

					 <div class="transactions-details-container  ">
					 	<p class="m-0"><span>Business name</span></p>
						 <strong id="business_name"></strong>
						 <hr>
						 <p class="m-0"><span>Business category</span></p>
						 <strong id="business_category"></strong>
						 <hr>

						<p class="m-0"> <span>KRA PIN</span></p>
						 <strong class="text-uppercase" id="pin_number"></strong>
						 <hr>
						<div class=" text-right amount-container">
						 		 <p><span class="text-uppercase text-left">Total</span> <strong> </strong></p>
						 </div>
						 <hr>

						 <!-- a href="{{route('welcome')}}" class="btn btn-primary px-5 py-3 text-white text-uppercase font-12 font-sm-10 px-sm-4">Pay Later</a>

						 <button id="proceed_payment" class="btn btn-primary px-5 py-3 text-white text-uppercase font-12 font-sm-10 px-sm-4">Proceed to Payment</button> -->

						 <form>

							 <div class="form-group col-sm-12 col-md-12 p-0">
				              <label for="number-plate" class=" ">M-PESA phone number</label>
				              <input type="text" class="form-control" id="number-plate" placeholder="eg 0712...">
				            </div>

											  <div class="col-12 p-0 text-uppercase mt-5">
				              <button type="button" id="payment" class="btn btn-primary text-white font-14 w-100 center mx-0 confirm-btn">
								  <div class="btn-txt animated">
								  	<span class="btn-text text-uppercase font-12"></span>
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
<script src="{{asset('js/select2.full.min.js')}}"></script>

<script type="text/javascript">

  $(document).ready(function ()
    {
            $('#building_type').on('change',function(){
               var type = $(this).val();
               // console.log(subcountyID);
               if(type == 1)
               {
                  $('#floor').removeClass('d-none');

               }
               else
               {
                $('#floor').addClass('d-none');
                $('#floor').val("0");
               }

            });

    });
</script>

<script type="text/javascript">

  $(document).ready(function ()
    {
            $('#subcounty').on('change',function(){
              $('#loader4').removeClass('d-none');
              $('#ward').addClass('d-none');
               var subcountyID = $(this).val();
               // console.log(subcountyID);
               if(subcountyID)
               {
                  $.ajax({
                     url : "<?php echo url('get-wards/')?>",
                     type : "GET",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                     data:{subcountyID:subcountyID},

                     success:function(data)
                     {
                      $('#loader4').addClass('d-none');
                      $('#ward').removeClass('d-none');
                      // console.log(data.response_data[0]['HOUSETYPE']);
                      $('#ward').empty();
                      $('#ward').append($('<option>', {
                                    value: ' ',
                                    text: '-- select ward --'
                                }));
                       $.each(data, function (i, item) {
                        console.log(item);
                                $('#ward').append($('<option>', {
                                    value: item.WardID,
                                    text: item.WardName
                                }));
                            });

                     }
                  });
               }
               else
               {
                  $('#ward').empty();
               }
            });

    });
</script>

<script type="text/javascript">

  $(document).ready(function ()
    {
            $('#postalCode').on('change',function(){
              $('#loader2').removeClass('d-none');
              $('#town').addClass('d-none');
               var postalID = $(this).val();
               console.log(postalID);
               if(postalID)
               {
                  $.ajax({
                     url : 'get-postal-name/' +postalID,
                     type : "POST",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                     success:function(data)
                     {

                      $('#loader2').addClass('d-none');
                      $('#town').removeClass('d-none')
                      console.log(data);

                       $('#town').val(data);

                     }
                  });
               }
               else
               {
                  $('#town').empty();
               }
            });

    });
</script>

<script type="text/javascript">

  $(document).ready(function ()
    {
            $('#contactPersonPostalCode').on('change',function(){
              $('#loader3').removeClass('d-none');
              $('#contactPersonTown').addClass('d-none');
               var postalID = $(this).val();
               console.log(postalID);
               if(postalID)
               {
                  $.ajax({
                     url : 'get-postal-name/' +postalID,
                     type : "POST",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                     success:function(data)
                     {
                      $('#loader3').addClass('d-none');
                      $('#contactPersonTown').removeClass('d-none');
                      console.log(data);

                       $('#contactPersonTown').val(data);

                     }
                  });
               }
               else
               {
                  $('#contactPersonTown').empty();
               }
            });

    });
</script>

<script type="text/javascript">

  $(document).ready(function ()
    {
            $('#businessActivity').on('change',function(){
              $('#loader5').removeClass('d-none');
              $('#ActivityCode').addClass('d-none');
               var brims_code = $(this).val();
               console.log(brims_code);
               if(brims_code)
               {
                  $.ajax({
                     url : 'get-activity-detail/' +brims_code,
                     type : "GET",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                     success:function(data)
                     {
                      console.log(data);
                      $('#loader5').addClass('d-none');
                      $('#ActivityCode').removeClass('d-none');
                        $('#ActivityCode').empty();
                        $('#ActivityCode').append($('<option>', {
                                      value: ' ',
                                      text: '-- select activity description --'
                                  }));
                         $.each(data, function (i, item) {
                          console.log(item);
                                  $('#ActivityCode').append($('<option>', {
                                      value: item.BRIMSCode,
                                      text: item.BusinessActivityDescription
                                  }));
                              });
                     }
                  });
               }
               else
               {
                console.log(data);
                  $('#ActivityCode').empty();
               }
            });

    });
</script>



<script type="text/javascript">

  $(document).ready(function ()
    {
            $('#ActivityCode').on('change',function(){
               var brims_code = $(this).val();
               console.log(brims_code);
               if(brims_code)
               {
                  $.ajax({
                     url : 'get-sbp-charges/' +brims_code,
                     type : "GET",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                     success:function(data)
                     {
                      // console.log(data);
                      $('#sbp_charges').empty();

                         $.each(data, function (i, item) {
                          console.log(item);
                                  $('#sbp_charges').append($('<p>' +item.key +' : <b>KES '+ parseInt(item.value).toLocaleString() +'</b></p>'));
                              });

                              $('#sbp_charges').removeClass('d-none');
                      }
                  });
               }
               else
               {
                  $('#ActivityCode').empty();
               }
            });

    });
</script>
<script type="text/javascript">
  $('#activity-next').hover(function(){

    var isValid = 0;
    $('.fourth-required').each(function(){
          if( $(this).val() == "" )
          {
            isValid++;
        }
      });
    if(isValid > 0)
        {
          $('#fourth_errors').text('Kindly Fill all fields before proceeding');
          $('#fourth_errors').removeClass('d-none');
        }
  })
</script>
@endsection

