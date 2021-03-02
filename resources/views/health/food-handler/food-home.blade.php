@extends('layouts.app')
@section('content')


<!--  pay confirmation pop up-->
<section id="service-form-section" class="">
  <div class="container">
    <div class="row ">
      <div class="service-form-container  d-flex flex-column-md animated col-12 p-0">
        <div class="col-lg-7 service-form-img-container" id="health-img">
          <div class="col-lg-8 col-md-12 position-relative p-5">
            <h2 class="mb-4 text-capitalize text-white">Food handlers certificate</h2>
            <p class="font-14 mb-3 text-capitalize">Download your food handlers certificate</p>
          </div>

        </div>
        <div class="col-lg-5 p-5 position-relative transactions-form-container d-flex">
           <div class="col-12 p-0 the-transaction-form animated">

            <div class="col-12 p-0 animated">
              <div class="">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                 <p class="mb-5 pb-2 text-capitalize">
                <h2 class="mt-0 mb-0 p-0"><strong>Certificate details</strong></h2>
                </p>
                <hr class="mt-1 p-0">

                @foreach ($getFoodHandlerCerts->data as $key=>$item)
                <div class="transactions-details-container text-capitalize">
                  <p class="m-0"><span>Owners Full Name & Gender</span></p>
                  <strong>{{  $item->firstName }} {{  $item->otherNames }}  ︱  <strong class="text-uppercase">{{  $item->gender }}</strong></strong>
                  <hr>
                  <p class="m-0"><span>National ID Number</span></p>
                  <strong>{{  $item->idNo }}</strong>
                  <hr>
                  <p class="m-0"> <span>Certificate status</span></p>
                  @if($item->isActive == 1)
                    <strong class="text-uppercase text-success">Active</strong>
                    @else
                    <strong class="text-uppercase text-danger">Not Active</strong>
                    @endif
                  <hr>
                  <p class="m-0"><span>Start Date - Expiry Date</span></p>
                  <strong>{{ date('d-m-Y', strtotime($item->startDate))  }}  -  {{  date('d-m-Y', strtotime($item->certExpiry))  }}</strong>

                  @if($item->paymentStatus == 3 && $item->printable == 2 )
                 <div class=" text-right">
                       <div class="col-12 p-0 text-uppercase mt-5">
                        <a href="{{ route('get-corporate-cert',$item->idNo) }}" target="_blank" type="button" class="btn btn-primary text-white font-14 w-100 p-4 center mx-0">
                           <div class="btn-txt animated"> <span class="btn-text text-uppercase font-12">print Certificate</span> <i data-feather="arrow-right" class="ml-2 float-right pull-right"> </i> </div>
                        </a>
                      </div>

                  </div>
                  @elseif ($item->paymentStatus == 3 && $item->printable === 1)
                    <hr>
                    <p class="m-0"> <span>Certificate approval status</span></p>
                    <strong class="text-uppercase text-purple">Not Approved</strong>

                    @elseif($item->paymentStatus == 2 && $item->printable === 1)
                    <p class="m-0"> <span>Payment Status</span></p>
                    <strong class="text-uppercase text-warning">Partialy paid</strong>
                    @elseif($item->paymentStatus == 1 && $item->printable === 1)
                    <p class="m-0"> <span>Payment Status</span></p>
                    <strong class="text-uppercase text-danger">Not Paid</strong>
                  @endif
                  <hr>
                </div>
                @endforeach()
               </div>

           </div>
         {{-- <div class="float:right">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="row">
                <div class="col-md-12">
                   <h6><u><i>  The plateform to download all your certificates</i></u></h3>
                </div>
            </div>
          </div>
          <table id="example" class="table table-condensed table-responsive d-none">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Id NO</th>
                    <th>Gender</th>
                    <th>Mobile</th>
                    <th>Active</th>
                    <th>anza</th>
                    <th>Expr</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($getFoodHandlerCerts->data as $key=>$item)
                <tr>

                    <td>{{  $item->firstName }} {{  $item->otherNames }}</td>
                    <td>{{  $item->idNo }}</td>
                    <td>{{  $item->gender }}</td>
                    <td>{{  $item->mobile }}</td>
                    @if($item->isActive == 1)
                    <td style="color:green">Active</td>
                    @else
                    <td style="color:red"> Not active </td>
                    @endif
                    <td>{{ date('d-m-Y', strtotime($item->lastPaymentDate))  }}</td>
                    <td>{{  date('d-m-Y', strtotime($item->certExpiry))  }}</td>

                    @if($item->paymentStatus == 3 && $item->printable == 2 )
                    <td>
                    <a class="" href="{{ route('get-corporate-cert',$item->idNo) }}" target="_blank" ><i class="fa fa-print" aria-hidden="true"></i> Print</a>
                    </td>
                    @elseif ($item->paymentStatus == 3 && $item->printable === 1)
                    <td style="color: purple">Not approved</td>
                    @elseif($item->paymentStatus == 2 && $item->printable === 1)
                    <td style="color: yellow">Partialy paid</td>
                    @else
                    <td style="color: red">Not Paid</td>
                    @endif
                </tr>
                @endforeach()
            </tbody>

        </table>
        <button type="submit" class="btn btn-success d-none" name="button">Generate Bill for selected entries</button> --}}
    </form>


      </div>

      <div class="col-12 d-none p-0 animated details-confirm">
         <div class="">
            <p class="mb-5 pb-2  ">
        <span class="back-toform" title="back to transactions form"><i data-feather="arrow-left"  class="mr-3 float-left"></i></span><strong>Enter the PIN sent to your phone</strong>
           </p>
           <hr class="mt-1 p-0">

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
//<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="{{asset('js/select2.full.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>

  <script type="text/javascript">
    $('.deleteIndv').click(function(){
        var id = $(this).data("id");
        alert(id);


    }
  </script>
@endsection
