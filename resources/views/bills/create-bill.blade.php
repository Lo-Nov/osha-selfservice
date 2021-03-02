@extends('layouts.app')
@section('content')
<div id="mobilemenu-overlay"></div>
<!--	search receipt pop up-->
<section class="account-pop-up h-100vh w-100 justify-content-center align-items-center animated d-none" id="search-receipt">
  <div class="container p-lg-5 p-md-0">
    <div class="row p-5">
      <div class="receipt-search-container m-5 d-flex flex-column-md animated" id="get-receipt-container">
        <div class="col-lg-6 receipt-img-container">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">print a receipt for a transaction</h2>
            <p class="font-14 mb-3  ">Make sure all inputs are correct. The process has been made this way to help protect personal data</p>
          </div>
        </div>
        <div class="col-lg-6 p-5 position-relative"> <span class="close-receipt-form position-absolute"> <i data-feather="x"></i></span>
          <form class="transaction-info">
            <div class="">
              <h4 class="mb-5 pb-2  ">Correctly fill in the form below to continue</h4>
            </div>
            <div class="row m-0">
              <div  class="form-group col-sm-12 pl-md-0">
                <label for="sel1"><small>What was the transacton type?</small></label>
                <select class="form-control mb-3" id="sel1" required>
                  <option>Parking</option>
                  <option>Business</option>
                  <option class=" ">County bills</option>
                  <option class=" ">land rates</option>
                  <option class=" ">rents</option>
                  <option class=" ">Food handlers</option>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="row radio-container m-0">
              <div class="col-12 pl-md-0 mb-3">
                <div class="form-check-inline">
                  <label class="form-check-label">M-PESA
                    <input type="radio" class="form-check-input" name="method" required>
                    <span class="checkmark"></span> </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">NBK
                    <input type="radio" class="form-check-input" name="method" required>
                    <span class="checkmark"></span> </label>
                </div>
              </div>
            </div>
            <div class="row m-0">
            <div class="form-group col-sm-12 pl-md-0 mb-3">
              <label for="exampleInputEmail1" class=" "><small>what was the refference number for the transaction?</small></label>
              <input type="text" class="form-control" id="fname" placeholder="eg M-PESA ref number" required>
            </div>
            <div class="form-group col-sm-12 pl-md-0 mb-3">
              <label for="identifier" class=" "><small>Unique identifire for transaction eg Number plate, bill number, Business ID etc</small></label>
              <input type="text" class="form-control" id="identifier" placeholder="identifier" required>
            </div>
            <button type="submit" class="btn btn-primary   text-white font-14 submit-btn">get receipt</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
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
					<div class="lds-roller animated"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
					<div class="confirmed-pay d-none animated"><img src="img/icons/transactions-icons/check.svg"></div>
					<p class="text-center text-white m-0 p-0 mb-3  payment-status">generating ...</p>
					<h5 class="text-white" id="bill_number">Bill No. : ###</h5>
			  	</center>
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
        <div class="col-lg-7 service-form-img-container" id="bill-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4   text-white">RevenueSure bills</h2>
            <p class="font-14 mb-3  ">Fill in and remember to double check details to avoid any errors.</p>
          </div>
        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex">
    	     <div class="col-12 p-0 the-transaction-form animated">
				 <div class="">
            <p class="mb-5 pb-2  "><strong>Correctly fill in the form below to continue</strong></p>
          </div>
          <form class="transaction-form">
            <div class="form-group col-sm-12 col-md-12 p-0 mt-2 mb-5">
                <label for="mpesa-phone" class=" ">Full names</label>
                <input type="text" class="form-control" id="plot" placeholder="eg John Doe" name="name" value="{{old('name')}}">

				<label for="mpesa-phone" class=" ">Bill description</label>
                <input type="text" class="form-control" id="plot" placeholder="eg Bill for food handlers" name="description" value="{{old('description')}}">

				<label for="mpesa-phone" class=" ">Bill Amount</label>
                <input type="text" class="form-control" id="plot" placeholder="Enter amount chargable" name="amount" value="{{old('amount')}}">
              </div>
              <div class="form-group col-sm-12 col-md-12 p-0">
              <label for="ward-id" class=" ">select ward</label>
              <select class="form-control" id="ward-id" name="ward_id" required>
                <option >-- select ward --</option>
                @foreach($wards as $ward)
                <option value="">{{$ward}}</option>
                @endforeach
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

            <div class="col-12 px-0 text-uppercase mt-5 pt-5">
              <button type="button" id="btn-confirm" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0 transaction-form-btn">
                <span class="btn-text text-uppercase font-12">check bill details</span>
                <i data-feather="arrow-right" class="ml-2 float-right pull-right"></i>
              </button>

            </div>

          </form>
			</div>

			<div class="col-12 d-none p-0 animated details-confirm">
				 <div class="">
            <p class="mb-5 pb-2  ">
				<span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Confirm your Transaction details</strong>
					 </p>
					 <hr class="mt-1 p-0">
					 <p><strong class=" ">personal details</strong></p>

					 <div class="transactions-details-container  ">
					 	<p class="m-0"><span>full names</span></p>
						 <strong id="full_name"></strong>
						 <hr>
						 <p class="m-0"><span>Bill description</span></p>
						 <strong id="bill_description"></strong>
						 <hr>

						<div class=" text-right amount-container">
						 		 <p><span class="text-uppercase text-left">amount billed </span> <strong id="amount_billed"> </strong></p>
						 </div>
						 <hr>

						 <form>




					<div class="col-12 p-0 text-uppercase mt-5">
              <button type="button" id="btn-generate" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0">
				  <div class="btn-txt animated">
				  	<span class="btn-text text-uppercase font-12">generate bill</span>
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
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $("#btn-confirm").click(function(e){

      e.preventDefault();
      var full_name = $("input[name=name]").val();
      var bill_description = $("input[name=description]").val();

      var amount_billed = $("input[name=amount]").val();

      document.getElementById("full_name").innerHTML = full_name;
      document.getElementById("bill_description").innerHTML = bill_description;
      document.getElementById("amount_billed").innerHTML ="KES " +amount_billed;

    } );
</script>
<script type="text/javascript">
    $("#btn-generate").click(function(e){

      e.preventDefault();
      $('.btn-txt').addClass('d-none');
      $('.lds-ellipsis').removeClass('d-none');
      var name = $("input[name=name]").val();
      var description = $("input[name=description]").val();
      var amount = $("input[name=amount]").val()

      $.ajax({

        url: "<?php echo url('generate-bill')?>" ,
        type: "POST",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {name:name, description:description, amount:amount},
        success:function(data){
            console.log(data);
            document.getElementById("bill_number").innerHTML = "Bill Number :" +data;
            $('#pay-confirmation-pop').removeClass('d-none');
            $('.lds-roller').addClass('fadeOut');
            $('.lds-roller').addClass('position-absolute');
            $('.confirmed-pay').addClass('fadeIn');
            $('.confirmed-pay').removeClass('d-none');
            $('.transacton-instructions').addClass('d-none');
            $('.transactions-actions').addClass('fadeIn');
            $('.transactions-actions').removeClass('d-none');

            $('.payment-status').text('Bill generated!');
        }
        });
    } );
</script>
@endsection
