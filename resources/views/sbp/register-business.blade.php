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
            <h2 class="mb-4   text-white">RevenueSure Trade License Registration</h2>
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
          <form class="transaction-form" action="{{route('register-trade-license')}}" method="post" id="idForm">
			   @csrf()
<!--business information-->
			 <div class="row biz-info animated">
        @if($errors->any())
              <p class="alert alert-danger">{{$errors->first()}}</p>
          @endif
        <div class="alert alert-danger d-none first-errors col-12" id="first_errors">
          </div>
				<div class="col-12">
					 <p class="mb-3  "><strong>Business information</strong> Please fill in all the required (*) fields.</p>
				 </div>


			  	 <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Business name <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control first-required" id="businessName" placeholder="Enter your business name" name="businessName" value="{{old('businessName')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="reg-cert" class=" ">Certificate of incorporation</label>
                <input type="text" class="form-control" id="businessRegistrationNo" placeholder="Enter your business certificate of incorporation number" name="businessRegistrationNo" value="{{old('businessRegistrationNo')}}">
              </div>


			   <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">KRA PIN number <strong class="text-danger">*</strong></label>
               <input type="text" class="form-control first-required" id="pinNumber" placeholder="Enter the business KRA PIN" name="pinNumber" value="{{old('pinNumber')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="reg-cert" class=" ">VAT number </label>
                <input type="text" class="form-control" id="vatNumber" placeholder="Enter your vat no."  name="vatNumber" value="{{old('vatNumber')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">P.O. BOX <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control" id="poBox" name="poBox" placeholder="Enter PO BOX " value="{{old('POBox')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class="">Postal code <strong class="text-danger">*</strong></label>
              <select  id="postalCode" name="postalCode" class="select2">
                <option>-- select postal code --</option>
                @foreach($postalcodes as $postalcode)
                <option value="{{$postalcode->code}}">{{$postalcode->code}}</option>
                @endforeach
              </select>
            </div>
			         <div class="col-lg-1 float-right d-none" id="loader2" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>

			       <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class="">Postal town</label>
                <input type="text" class="form-control " id="town" placeholder="Postal town" name="town" value="{{old('town')}}" readonly>
              </div>


			   <div class="col-sm-12 pt-3">
				 				  <span type="submit" id="create-next" class="btn btn-primary text-white font-12 border-0   next-btn">next</span>

				 </div>

			  </div>

<!--			  location and contacts -->
			  <div class="row location-info d-none animated">
          <div class="alert alert-danger d-none second-errors col-12" id="second_errors">
          </div>
				  <div class="col-12">
					 <p class="mb-3  "><strong>Additional business information</strong></p>
				 </div>
			  	 <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Business mobile number <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control second-required" id="telephone1" placeholder="Eg 07.........." name="telephone1" value="{{old('telephone1')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="reg-cert" class=" ">Alternative business mobile number</label>
                <input type="text" class="form-control" id="telephone2" placeholder="Eg 07.........." name="telephone2" value="{{old('telephone2')}}">
              </div>


			   <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">FAX number</label>
                <input type="text" class="form-control" id="faxNumber" placeholder="Enter the business fax number" name="faxNumber" value="{{old('faxNumber')}}">
              </div>

				   <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Business email <strong class="text-danger">*</strong></label>
                <input type="email" class="form-control" id="email" placeholder="Eg businessemail@email.com" name="email" value="{{old('email')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="reg-cert" class=" ">Business physical address <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control second-required" id="physicalAddress" placeholder="Enter business location address" name="physicalAddress" value="{{old('physicalAddress')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Plot number <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control second-required" id="plotNumber" placeholder="Enter the business plot number" name="plotNumber" value="{{old('plotNumber')}}">
              </div>

				   <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Building name <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control" id="building" placeholder="Enter the building name where the business is located" name="building" value="{{old('building')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class=" ">Building type</label>
              <select class="form-control " id="building_type" name="buildingType">
                <option>-- select building type --</option>
                <option value='1'>Storey</option>
                <option value='0'>Non storey</option>
              </select>
            </div>
            <div class="form-group col-md-12 col-lg-4 mt-2 d-none" id="floor">
                <label for="mpesa-phone" class="">Floor </label>
                <input type="text" class="form-control" placeholder="Enter the floor Number" name="floor" value="{{old('floor')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Room/Stall number</label>
                <input type="text" class="form-control" id="houseNumber" placeholder="Enter the room number" name="houseNumber" value="{{old('houseNumber')}}">
              </div>

			   <div class="col-sm-12 pt-3 d-flex justify-content-between" id="location-btns">
					  <span type="submit" class="btn btn-white font-12 text-primary border-2   text-prev">Previous</span>
					  <span type="submit" id="location-next" class="btn btn-primary text-white font-12 border-0  ">Next</span>
				 </div>

			  </div>
<!--			  owners information-->
			  <div class="row owners-info d-none animated">
          <div class="alert alert-danger d-none third-errors col-12" id="third_errors">
          </div>
				  <div class="col-12">
					 <p class="mb-3  "><strong>Business owner's information</strong></p>
				 </div>
         <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Owner's Title </label>
                <input type="text" class="form-control " id="contactPersonDesignation" placeholder="Eg Mr/Miss/Mrs etc" name="contactPersonDesignation" value="{{old('contactPersonDesignation')}}">
              </div>
			  	 <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Owner's full name <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control third-required" id="plot" placeholder="Enter your full name" name="ContactPersonName" value="{{old('ContactPersonName')}}">
              </div>


            <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class="  ">ID document type <strong class="text-danger">*</strong></label>
              <select id="zone" name="idTypeCode" class="third-required">
                <option value="1">Select Document Type</option>
                @foreach($documents as $document)
                  <option value="{{$document->doumentname}}">{{$document->doumentname}}</option>
                @endforeach

              </select>
            </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="reg-cert" class=" ">Document number <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control third-required" id="idDocumentNumber" placeholder="Enter the document number" name="idDocumentNumber" value="{{old('idDocumentNumber')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Owners FAX number </label>
                <input type="text" class="form-control" id="contactPersonFaxNumber" placeholder="Enter the owners fax number" name="contactPersonFaxNumber" value="{{old('contactPersonFaxNumber')}}">
              </div>

				<div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Owner's mobile number <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control third-required" id="contactPersonTelephone1" placeholder="eg. 07.........." name="contactPersonTelephone1" value="{{old('contactPersonTelephone1')}}">
              </div>
				  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Alternative mobile number </label>
                <input type="text" class="form-control" id="contactPersonTelephone2" placeholder="eg. 07.........." name="contactPersonTelephone2" value="{{old('contactPersonTelephone2')}}">
              </div>



				  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Owner's P.O. Box Number <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control " id="contactPersonPOBox" name="contactPersonPOBox" value="{{old('contactPersonPOBox')}}">
                <input type="hidden" class="form-control " id="updatedBy" name="updatedBy" value="{{ Session::get('resource')['user_full_name'] }}">
                <input type="hidden" class="form-control " id="operationalStatus" name="operationalStatus" value="1">
              </div>


			  <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="" class="">Postal code <strong class="text-danger">*</strong></label>
              <select class="select2" id="contactPersonPostalCode" name="contactPersonPostalCode">
                <option>-- select postal code --</option>
                @foreach($postalcodes as $postalcode)
                <option value="{{$postalcode->code}}">{{$postalcode->code}}</option>
                @endforeach
              </select>
        </div>
			  <div class="col-lg-1 float-right d-none" id="loader3" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>
			  <div class="form-group col-md-12 col-lg-4 mt-2">
          <label>Postal town</label>
                <input type="text" class="form-control" id="contactPersonTown" placeholder="postal code name" name="contactPersonTown" value="{{old('contactPersonTown')}}" readonly>
              </div>


			   <div class="col-sm-12 pt-3 d-flex justify-content-between" id="owner-btns">
					  <span type="submit" class="btn btn-white font-12 text-primary border-2   text-prev">Previous</span>
					  <span type="submit" id="owners-next" class="btn btn-primary text-white font-12 border-0  ">Next</span>
				 </div>

			  </div>
			  <!--			 activity information-->
			  <div class="row activity-info d-none animated">
          <div class="alert alert-danger d-none fourth-errors col-12" id="third_errors">
          </div>
				  <div class="col-12">
					 <p class="mb-3  "><strong>Activity information</strong></p>
				 </div>
			  	 <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Activity description <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control fourth-required" id="businessActivityDescription" placeholder="Enter a  description of what the business does" name="businessActivityDescription" value="{{old('businessActivityDescription')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="reg-cert" class=" ">Area (M<sup>2</sup>) <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control fourth-required" id="premisesArea" placeholder="Enter the area occupied by the business" name="premisesArea" value="{{old('premisesArea')}}">

              </div>


			   <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="mpesa-phone" class=" ">Other details</label>
                <input type="text" class="form-control" id="otherBusinessClassificationDetails" placeholder="Enter additional relevant details about the business" name="otherBusinessClassificationDetails " value="{{old('otherBusinessClassificationDetails ')}}">
              </div>



			  <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class=" ">Sub county <strong class="text-danger">*</strong></label>
              <select  id="Subcounty" name="zoneCode" class="fourth-required">
                <option>-- select subcounty --</option>
                @foreach($subcounties as $subcounty)
                <option value="{{$subcounty->subCountyCode}}">{{$subcounty->subCountyName}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-lg-1 float-right d-none" id="loader4" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class=" ">Ward <strong class="text-danger">*</strong></label>
              <select  id="ward" name="wardCode" class="fourth-required">
                <option>-- select ward --</option>

              </select>
            </div>

				   <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class=" ">Business activity <strong class="text-danger">*</strong></label>
              <select id="businessActivity" name="businessActivity" class="fourth-required">
                <option>-- select the business activity --</option>
                @foreach($business_activities as $business_activity)
                <option value="{{$business_activity->brimsCode}}">({{$business_activity->brimsCode}}) {{$business_activity->businessActivityName}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-lg-1 float-right d-none" id="loader5" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>

				  <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class=" ">Sub categories <strong class="text-danger">*</strong></label>
              <select  id="ActivityCode" name="activityCode" class="fourth-required">
                <option>-- select activity category --</option>

              </select>
            </div>


				  <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="reg-cert" class=" ">Number of employees <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control fourth-required" id="numberOfEmployees" placeholder="Enter the number of employees" name="numberOfEmployees" value="{{old('numberOfEmployees')}}">
              </div>

			  <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class=" ">Size of business <strong class="text-danger">*</strong></label>
              <select  id="zone" name="relativeSize" class="fourth-required">
                <option>-- select business size --</option>
                <option value="1">Small</option>
                <option value="2">Medium</option>
                <option value="3">Large</option>
              </select>
            </div>

			       <div class="form-group col-md-12 col-lg-4 mt-2">
              <label for="zone" class=" ">Payment plan <strong class="text-danger">*</strong></label>
               <select  id="zone" name="Period" class="fourth-required">
                  <option value="">Select  Period</option>
                  <option value="1">Yearly</option>

              </select>
            </div>
            <div class="form-group col-md-12 col-lg-4 mt-2 d-none" id="sbp_charges">

            </div>


			   <div id="activity-btns" class="col-sm-12 pt-3 d-flex justify-content-between">
					  <span type="submit" class="btn btn-white font-12 text-primary border-2   text-prev">Previous</span>
					  <button type="submit" id="activity-next" class="btn btn-primary text-white font-12 border-0  ">Finish</button>
				 </div>

			  </div>
	          </form>
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
				              <button type="button" id="payment" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 confirm-btn">
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
               if(type === 1)
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
            $('#Subcounty').on('change',function(){
              $('#loader4').removeClass('d-none');
              $('#ward').addClass('d-none');
               var subCountyCode = $(this).val();
              // alert(subCountyCode);
               //console.log(subCountyCode);
               if(subCountyCode)
               {
                  $.ajax({
                     url : "<?php echo url('get-wards/')?>",
                     type : "GET",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                     data:{subCountyCode:subCountyCode},

                     success:function(data)
                     {

                      $('#loader4').addClass('d-none');
                      $('#ward').removeClass('d-none');

                       //console.log(data.data);

                      $('#ward').empty();
                      $('#ward').append($('<option>', {
                                    value: ' ',
                                    text: '-- select ward --'
                                }));
                       $.each(data.data, function (i, item) {
                        //console.log(item);
                                $('#ward').append($('<option>', {
                                    value: item.wardCode,
                                    text: item.wardName
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
               // console.log(postalID);
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
                      // console.log(data);

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
               // console.log(postalID);
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
                      // console.log(data);

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
               //alert(brims_code);
               if(brims_code)
               {
                  $.ajax({
                     url : 'get-activity-detail/' +brims_code,
                     type : "GET",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                     success:function(data)
                     {
                      // console.log(data);
                      $('#loader5').addClass('d-none');
                      $('#ActivityCode').removeClass('d-none');
                        $('#ActivityCode').empty();
                        $('#ActivityCode').append($('<option>', {
                                      value: ' ',
                                      text: '-- select activity description --'
                                  }));
                         $.each(data.data, function (i, item) {
                          //console.log(item);
                                  $('#ActivityCode').append($('<option>', {
                                      value: item.brimsCode,
                                      text:'(' + item.brimsCode +') ' + item.businessActivityDescription
                                  }));
                              });
                     }
                  });
               }
               else
               {
                // console.log(data);
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
               // console.log(brims_code);
               if(brims_code)
               {
                  $.ajax({
                     url : 'get-sbp-charges/' +brims_code,
                     type : "GET",
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                     success:function(data)
                     {
                       //console.log(data);
                      $('#sbp_charges').empty();

                         $.each(data, function (i, item) {
                           console.log(item.type);
                                  $('#sbp_charges').append($(
                                      '<p>' +item.type +' : ' +
                                      '<b>KES '+ parseInt(item.amount).toLocaleString() +'</b>' +
                                      '</p>'));
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
    $('.fourth').each(function(){
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

