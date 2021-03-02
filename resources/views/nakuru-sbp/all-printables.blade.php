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

    <div class="container">
      <div class="row p-5 ">
        <div class="service-form-container  flex-column-md animated col-12 p-0">
          <div class="col-12 service-form-img-container" id="health-img" style="height: 169px;">
            <div class="col-lg-8 col-md-12 position-relative p-5">
              <h2 class="mb-4 text-white">Get all Trade License  printables in one place </h2>
              <p class="font-14 mb-3 ">Get all the printables in on place after making payments</p>
            </div>
          </div>
          <div class="col-12 p-5 position-relative transactions-form-container d-flex">
          <div class="col-12 p-0 the-transaction-form animated">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="col-md-6">
                <h3>Note</h3>
                <p>Thanks for applying for Trade License. Kindly wait for processing to be taken, You'll be notified</p>
                <ul>
                   

                </ul>

            </div>
            <div class="col-md-6">
                <h3 class="">Note That </h3>
                
                <p class="some-info">
                    <span>Your Payment Code is: <strong class="the-bill-num"> {{ $pay_id }} </strong>
                    <br>
                    </span>                
                    <span>
                        Your Trade License is not ready you will receive an SMS once it has been approved.
                    </span>
                </p>
                <form class="transaction-form" action="{{route('print-receipt')}}" method="post" id="idForm">
                  @csrf
                  <div class="form-group col-md-12 col-lg-4 mt-2">
                      <input type="text" class="form-control first-required" id="billNo" name="billNo" value="{{ $pay_id }}" readonly>
                  </div>
                  <div class="form-group col-md-12 col-lg-4 mt-2">
                    <button type="submit" id="activity-next" class="btn btn-primary text-white font-12 border-0"><i class="fa fa-print"></i> Print Application Payment Receipt</button>
                  </div>
                </form>
               
            </div>
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
            </div>

              </div>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('scripts')
<script src="{{asset('js/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

<script type="text/javascript">
  function showreceiptform(){
    $('#search-receipt').removeClass('zoomOut');
    $('#search-receipt').removeClass('d-none');
    $('#search-receipt').addClass('fadeIn');
    $('#get-receipt-container').removeClass('rollOut');
    $('#get-receipt-container').addClass('tada');
}

$('#get-a-receipt').on('click',function(){
    showreceiptform();
});

</script>
<script type="text/javascript">
    $('.btn-getBusinessDetails').click(function(){
        var businessID = $('input[name=businessID]').val()
        alert();


    }


@endsection
