@extends('layouts.app')

@section('content')
<!--	creating handlers bill loader-->

<div class="createfood-loader-container d-none animated">
    <div class="loader-container swing animated">
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>

    <div class="loader-txt animated swing">
        Please wait as we prepare your application
    </div>
</div>
<!--	pay confirmation pop up-->
<section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="pay-confirmation-pop">l
    <div class="container p-md-5 p-sm-0">
      <div class="row p-5 d-flex justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 payment-pop-container m-5 m-sm-3 d-flex flex-column-md animated p-0">

          <div class="col-12 position-relative p-0">
                    <span class="close-receipt-form position-absolute z-index-1  transactions-actions animated text-white" id="close-pricepop"> <i data-feather="x"></i></span>

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
                      <h5><strong class="  pb-3">Kindly follow the following instructions to pay for your application.</strong></h5>
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
        <div class="service-form-container  flex-column-md animated col-12 p-0">
          <div class="col-12 service-form-img-container" id="health-img" style="height: 169px;">
            <div class="col-lg-8 col-md-12 position-relative p-5">
              <h2 class="mb-4 text-white">New food handlers certificate</h2>
              <p class="font-14 mb-3 ">Fill in and remember to double check details to avoid any wrong submissions</p>
            </div>
          </div>
          <div class="col-12 p-5 position-relative transactions-form-container d-flex">
               <div class="col-12 p-0 the-transaction-form animated">


  <!--			 application form-->
               <div class="row food-application animated">
          <form class="transaction-form p-0 w-100 row">


                   <div class="col-12 p-0">
                    <p class="d-none alert alert-danger" id="first_errors"></p>

                     <!--   <div class="form-group col-md-12 col-lg-4 mt-2">
                <label for="cert-type" class="text-capitalize">Certificate type <strong class="text-danger">*</strong></label>
                <select class="form-control first-required" id="cert-type" name="type">
                  <option value="">-- select type --</option>
                  <option value="1">Individual</option>

                </select>
              </div> -->
                   </div>

                  <div class="w-100 personal-cert animated">
                       <div class="col-12 mt-2">
                       <p class="mb-3 text-capitalize"><strong>Personal details <strong class="text-danger">*</strong></strong></p>
                       <hr>
                   </div>

                     <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="fname" class="text-capitalize">First name <strong class="text-danger">*</strong></label>
                  <input type="text" class="form-control " id="fname" name="FirstName" value="{{old('FirstName')}}"  placeholder="Enter your first name" required>
                </div>

                <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="mname" class="text-capitalize">Middle name</label>
                  <input type="text" class="form-control " id="mname" name="MiddleName" placeholder="eg Doe" value="{{old('MiddleName')}}" placeholder="Enter your middle name" required>
                </div>


                 <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="lname" class="text-capitalize">Last name <strong class="text-danger">*</strong></label>
                  <input type="text" class="form-control " id="lname" placeholder="eg Enter your last name" value="{{old('LastName')}}" name="LastName" required>
                </div>

                <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="idnum" class="text-capitalize">ID Number <strong class="text-danger">*</strong></label>
                  <input type="text" class="form-control " id="idnum" placeholder="ID/PPT Number" value="{{Session::get('resource')['national_id']}}" name="IDNumber" placeholder="Enter your national ID Number" required>
                </div>
                <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="phone" class="text-capitalize">Mobile number <strong class="text-danger">*</strong></label>
                  <input type="text" class="form-control first-required" id="phone" placeholder="eg 0712345678" value="{{Session::get('resource')['phone_number']}}" name="Telephone" required>
                </div>
                    </div>

                        <div class="w-100 company-cert d-none animated">
                       <div class="col-12 mt-2">
                       <p class="mb-3 text-capitalize"><strong>Company details<strong class="text-danger">*</strong></strong></p>
                       <hr>
                   </div>

                     <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="company-name" class="text-capitalize  ">Company name<strong class="text-danger">*</strong></label>
                  <input type="text" class="form-control " id="company-name" name="company_name" value="{{old('company_name')}}" placeholder="Enter the company name" required>
                </div>

                <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="reg-num" class="text-capitalize ">Number of employees</label>
                  <input type="text" class="form-control " id="reg-num" name="employees" value="{{old('employees')}}" placeholder="Eg 10 for ten workers" required>
                </div>
                <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="idnum" class="text-capitalize ">ID Number <strong class="text-danger">*</strong></label>
                  <input type="number" class="form-control " id="idnum" placeholder="Enter the ID Number" value="{{Session::get('resource')['national_id']}}" name="company_IDNumber" required>
                </div>


                    </div>

                <div class="col-12 mt-2">
                   <p class="mb-3 text-capitalize"><strong>Business information <strong class="text-danger">*</strong></strong></p>
                   <hr>
                </div>

                <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="street" class="text-capitalize">Street/Location<strong class="text-danger">*</strong></label>
                  <input type="text" class="form-control first-required" id="street" name="Location" value="{{old('Location')}}" placeholder="Enter the location of the business" required>
                </div>


                <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="zone" class=" ">Sub county<strong class="text-danger">*</strong></label>
                  <select  id="subcounty" name="zones" class="first-required select2">
                    <option>-- select subcounty --</option>
                    @foreach($subcounties as $subcounty)
                    <option value="{{$subcounty->SubCountyID}}">{{$subcounty->SubCountyName}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-1 float-right d-none" id="loader4" >
                  <img src="{{ asset('img/loader/loader.gif') }}" alt="" />
              </div>
                <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="zone" class=" ">Ward<strong class="text-danger">*</strong></label>
                  <select  id="ward" name="wards" class="first-required select2">
                    <option>-- select ward --</option>

                  </select>
                </div>


                <div class="form-group col-md-12 col-lg-4 mt-2">
                  <label for="zone" class=" ">Occupation<strong class="text-danger">*</strong>  </label>
                  <select  id="occupation" name="Occupation" class="first-required">
                    <option value="">-- select your occupation --</option>
                    <option value="1"> Employed </option>
                    <option value="2"> Self employed </option>

                  </select>
                </div>
                <div class="form-group col-md-12 col-lg-4 mt-2  employed">
                  <label for="bizname" class="text-capitalize">Premise Name<strong class="text-danger">*</strong></label>
                  <input type="text" class="form-control" id="bizname" name="premiseName" placeholder="Enter the business premise name" required>
                </div>
                <div class="form-group col-md-12 col-lg-4 mt-2  employed">
                  <label for="plot" class="text-capitalize">Premise plot number<strong class="text-danger">*</strong></label>
                  <input type="text" class="form-control" id="plot" name="PremisePlotNo" value="{{old('PremisePlotNo')}}" placeholder="Enter the plot number" required>
                </div>
                <div class="form-group col-md-12 col-lg-4 mt-2">
                  <input type="hidden" class="form-controlfirst-required" id="phone" placeholder="Enter a password" name="Password" value="{{old('national_id')}}" required>
                </div>



                  <div class="col-sm-12 pt-3">
                    <span type="submit" id="create-next" class="btn btn-primary text-white font-12 border-0 text-capitalize next-btn btn-confirm">
                        next</span>
                  </div>
          </form>


                </div>
              </div>

              <div class="col-12 d-none p-0 animated location-info details-confirm">
                   <div class="">
                    <p id="errors"></p>
                    <p class="alert alert-danger d-none" id="bill_errors"></p>
              <p class="mb-5 pb-2 text-capitalize">
                  <span class="back-to-cert-form" title="back to transactions form">
                      <i data-feather="arrow-left"  class="mr-3 float-left"></i>
                </span><strong>Confirm your food handlers certificate registration details</strong>
                       </p>
                       <hr class="mt-1 p-0">
                       <p><strong class="text-capitalize">Registration details</strong></p>

                       <div class="transactions-details-container text-capitalize">
                           <p class="m-0"><span>Certificate being applied for</span></p>
                           <strong id="cert_category"></strong>
                           <hr>
                           <p class="m-0"><span>Premise name</span></p>
                           <strong id="premiseName"></strong>
                           <hr>

                          <p class="m-0"> <span id="application_type"></span></p>
                           <strong class="text-uppercase" id="full_name"></strong>
                           <hr>

                            <p class="m-0"> <span>Applicant's ID number</span></p>
                           <strong class="text-uppercase" id="id_number"></strong>
                           <hr>

                           <p class="m-0"> <span>Applicant's phone number</span></p>
                           <strong class="text-capitalize" id="phone_number"></strong>
                           <hr>

                           <p class="m-0"> <span>Street/Location</span></p>
                           <strong class="text-uppercase" id="business_location"></strong>
                           <hr>

                            <p class="m-0"> <span>Premises plot number</span></p>
                           <strong class="text-uppercase" id="plot_number"></strong>
                           <hr>


                          <div class="amount-container">
                                    <p><span class="text-uppercase">Application Fee<br></span> <strong> KES <span id="total_amount"></span></strong></p>
                           </div>
                           <hr>
                           <span type="submit" id="to-action" class="btn btn-primary text-white font-12 border-0 text-capitalize next-btn">Apply</span>

                       </div>
            </div>

              </div>

  <!--			created bill actions-->
              <div class="row  d-none animated bill-actions-container">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                       <p class="text-capitalize mb-1"><strong>Application has been made succesfully</strong></p>
                        <span class="mb-5"><small>You can pay for the bill now instantly via M-PESA or print the bill and pay for it later</small></span>
                        <p class="mb-0 p-0 mt-5">Food handlers total application is fee is</p>
                        <h4 class="mt-0 pt-0">Kes <span id="bill_amount"></span></h4>
  <!--					  pay via mpesa now-->
                        <div class="col-sm-12 pl-0 d-none" id="print-receipt">
                              <p><b>You can now proceed to print your receipt</b></p>
                           <a href="" target="_blank" id="receipt-link" class="btn btn-secondary text-white font-14 w-100  center mx-0 ">
                            <div class="btn-txt animated">
                              <span class="btn-text text-uppercase font-12" >Print receipt</span>

                            </div>
                              </a>
                          </div>
                      <div class="payment-actions">
                        <span class="btn btn-primary text-white font-12 border-0 text-capitalize show-mpesa">
                            <text class="d-flex align-items-center">Pay now<i data-feather="smartphone" class="ml-3"></i></text>
                        </span>
                        <a href="" target="_blank" class="btn btn-white font-12 text-primary border-2 text-capitalize text-prev " id="btn-print">
                        <text class="d-flex align-items-center">Print bill<i data-feather="printer" class="ml-3"></i></text></a>

                      <!--					  mpesa form-->
                        <div class="row mx-0 mt-4 mb-2 gray-bg p-4 d-none animated health-mpesa position-relative">

                           <span class="close"> <i data-feather="x"></i></span>
                            <label for="mpesa-num"><strong>Mpesa Phone Number</strong></label>
                            <p><small>Enter your Mpesa number in the field below so as to get a payment request</small></p>
                            <p class="d-none alert alert-danger" id="pay_errors"></p>
                            <form class="form-inline mpesa-form flex-grow-1">
                              <div class="form-group m-0 flex-grow-1">
                              <input type="text" class="form-control col flex-grow-1 border-0" id="mpesa-num" placeholder="Eg 0712345678" name="mpesa_phone" value="{{old('mpesa_phone')}}">
                              <input type="hidden" class="form-control col flex-grow-1 border-0" id="bill_number" value="" name="bill_number">
                                </div>
                                 <button type="button" id="btn-pay" class="btn btn-primary text-white font-12 center mx-0">
                                    <div class="btn-txt animated">
                                    <span class="btn-text font-12">Get payment request</span>
                                    <i data-feather="arrow-right" class="ml-2 float-right pull-right">
                                    </i>
                                    </div>
                                    <div class="lds-ellipsis d-none animated"><div></div><div></div><div></div><div></div></div>
                                </button>
                            </form>
                        </div>

                      </div>
                   </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 p-5 bg-light">
                       <p class="text-capitalize mb-1"><strong>Clinics you can visit for your check up</strong></p>
                        <span class="mb-5"><small>You can visit any of the following clinics for your medical check up</small></span>
                        <hr>
                        <ul>
                            @foreach($clinics as $clinic)
                            <li>{{$clinic->ClinicName}}</li>
                            @endforeach
                        </ul>
                   </div>
  <!--

  -->

                </div>










          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
@section('scripts')
<script src="{{asset('js/select2.full.min.js')}}"></script>

<!-- <script type="text/javascript">


  $(document).ready(function ()
    {
            $('#occupation').on('change',function(){
               var type = $(this).val();
               if(type == 1)
               {
                  $('.employed').removeClass('d-none');

               }
               else
               {
                $('.employed').addClass('d-none');
               }

            });

    });
</script> -->
<script type="text/javascript">
  $('.btn-confirm').click(function(){
    var type = 1;
    var cert_type = 'Individual';
    var FirstName = $('input[name=FirstName]').val()
    var MiddleName = $('input[name=MiddleName]').val()
    var LastName = $('input[name=LastName]').val()
    var company_name = $('input[name=company_name]').val()
    var Telephone = $('input[name=Telephone]').val()
    var premiseName = $('input[name=premiseName]').val()
    var Location = $('input[name=Location]').val()
    var PremisePlotNo = $('input[name=PremisePlotNo]').val()
    var IDNumber = $('input[name=IDNumber]').val()
    var employees = $('input[name=employees]').val();


    if(type == 1)
    {
      document.getElementById('application_type').innerHTML = "Individual's name";
      var IDNumber = $('input[name=IDNumber]').val()
      $('#company_name').hide();
      document.getElementById('full_name').innerHTML = FirstName + ' ' +MiddleName + ' ' +LastName;
      document.getElementById('total_amount').innerHTML = '1000';
    }

    else
    {
      document.getElementById('application_type').innerHTML = "Company's name";
      var IDNumber = $('input[name=company_IDNumber]').val()
      document.getElementById('full_name').innerHTML = company_name ;
      document.getElementById('total_amount').innerHTML = 1000 * employees;
    }


    document.getElementById('cert_category').innerHTML = cert_type;

    document.getElementById('phone_number').innerHTML = Telephone;
    document.getElementById('premiseName').innerHTML = premiseName;
    document.getElementById('plot_number').innerHTML = PremisePlotNo;
    document.getElementById('id_number').innerHTML = IDNumber;

    if(Location == '')
    {
      document.getElementById('business_location').innerHTML = 'NIL';
    }
    else
    {
      document.getElementById('business_location').innerHTML = Location;
    }

    if(premiseName == '')
    {
      document.getElementById('premiseName').innerHTML = 'NIL';
    }
    else
    {
      document.getElementById('premiseName').innerHTML = premiseName;
    }
    if(PremisePlotNo == '')
    {
      document.getElementById('plot_number').innerHTML = 'NIL';
    }
    else
    {
      document.getElementById('plot_number').innerHTML = PremisePlotNo;
    }


  })
</script>

<script type="text/javascript">
  //  this action occures while food handlers certificate is being created
  $('#to-action').on('click', function(){
  $('.createfood-loader-container').removeClass('d-none').addClass('fadeIn');
  var type = 1;
  var cert_type = 'Individual';
  var FirstName = $('input[name=FirstName]').val()
  var MiddleName = $('input[name=MiddleName]').val()
  var LastName = $('input[name=LastName]').val()
  var company_name = $('input[name=company_name]').val()
  var Telephone = $('input[name=Telephone]').val()
  var premiseName = $('input[name=premiseName]').val()
  var Location = $('input[name=Location]').val()
  var PremisePlotNo = $('input[name=PremisePlotNo]').val()
  var zones = $('select[name=zones]').val()
  var wards = $('select[name=wards]').val()

  var employees = $('input[name=employees]').val();
  var Password = $('input[name=Password]').val()

  if(type == 1)
  {
    var IDNumber = $('input[name=IDNumber]').val()
  }
  else
  {
    var IDNumber = $('input[name=company_IDNumber]').val()
  }
      $.ajax({

        url: "health-register" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {type:type, FirstName:FirstName, MiddleName:MiddleName, LastName:LastName, company_name:company_name, Telephone:Telephone, premiseName:premiseName, Location:Location, PremisePlotNo:PremisePlotNo, IDNumber:IDNumber, Password:IDNumber, employees:employees, zones:zones, wards:wards},

        success:function(data){

            if(data.status_code == 200){
              hide_loader();

            document.getElementById("bill_amount").innerHTML = data.response_data.BillTotal.toLocaleString();
            document.getElementById("pay_amount").innerHTML = data.response_data.BillTotal.toLocaleString();
            document.getElementById("bill_number").value = data.response_data.BillNo.toLocaleString();
            var a = document.getElementById('btn-print');
            a.href = "print-health-bill/" +data.response_data.BillNo;
          }

          else
          {
            $('.createfood-loader-container').addClass('d-none').removeClass('fadeIn');
            document.getElementById('bill_errors').innerHTML = data.message;
            $('#bill_errors').removeClass('d-none');
          }
          if(data == "")
          {
            $('.createfood-loader-container').addClass('d-none').removeClass('fadeIn');
            document.getElementById('bill_errors').innerHTML = "We're having trouble with capturing your details for the health certificate. Please try again later.";
            $('#bill_errors').removeClass('d-none');
            return;
          }

        }
        });
//    call the function bellow once bill has been created succesfully

  });

  //  once bill is created do the following
  function hide_loader(){
  setTimeout(function(){
  $('.createfood-loader-container').addClass('d-none').removeClass('fadeIn');
  $('.bill-actions-container').addClass('slideInRight').removeClass('d-none').removeClass('bounceOutRight');
    $('.details-confirm').addClass('d-none').removeClass('bounceLeft');


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
            if(data == null)
          {
            document.getElementById('pay_errors').innerHTML = "We're having trouble initiating payment. Please try again later.";
            $('#pay_errors').removeClass('d-none');
            $('.btn-txt').text('PAY');
            $('.btn-txt').removeClass('d-none');
            return;
          }
            if(data.status_code == 200){
            var pay_id = data.response_data.BillNo;
            checkagain(pay_id,recheck_count);
          }
          else{
            document.getElementById("pay_errors").innerHTML = data.message;

            $("#pay_errors").removeClass('d-none');
            $('.btn-txt').text('PAY');
            $('.btn-txt').removeClass('d-none');
            $('.lds-ellipsis').addClass('d-none');
            $('#payment-pop-container').addClass('d-none');

          }
        }
        });
    } );
</script>
<script type="text/javascript">

  $(document).ready(function ()
    {
            $('#subcounty').on('change',function(){
              $('#loader4').removeClass('d-none');
              $('#ward').addClass('d-none');
               var subcountyID = $(this).val();
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
                      $('#ward').empty();
                      $('#ward').append($('<option>', {
                                    value: ' ',
                                    text: '-- select ward --'
                                }));
                       $.each(data, function (i, item) {
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

    function checkagain(pay_id,recheck_count)
    {

      if(recheck_count==12)
                {
                    var bill_number = $("input[name=bill]").val();
                  $('#bill_pay').text(pay_id);

                  $('.btn-txt').removeClass('d-none');
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

                    url :"get-health-receipt/" +pay_id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {
                        // $('.payment-status').text('Payment received!');

                        if(data == null)
                        {
                          document.getElementById('errors').innerHTML = "We're having trouble retrieving the receipt. Please try again later.";
                            $('#errors').removeClass('d-none');
                            $('.btn-txt').text('PAY');
                            $('.btn-txt').removeClass('d-none');
                            return;
                        }

                        if(data.status_code == 200)
                        {
                          $('#payment-pop-container').addClass('d-none');
                          var a = document.getElementById('receipt-link');
                          a.href = "view-receipt/"+pay_id;
                          $('.payment-actions').addClass('d-none');
                          $('#print-receipt').removeClass('d-none');
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

<!-- <script type="text/javascript">
    $("#btn-print").click(function(e){

      e.preventDefault();
      // $('.btn-txt').addClass('d-none');
      // $('.lds-ellipsis').removeClass('d-none');

      var bill_number = $('#bill_number').val();
      window.open("print-health-bill/" +bill_number);
    } );
</script> -->
<script type="text/javascript">
  $('#close-pricepop').on('click',function(){
  $('#pay-confirmation-pop').addClass('d-none');
    $('#pay-confirmation-pop').removeClass(' zoomOut');
});
</script>
@endsection
