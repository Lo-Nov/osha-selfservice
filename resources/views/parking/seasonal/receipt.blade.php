<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/jpg" href="img/receipt-images/Untitledlogo2.png">
  <title>County Receipt</title>
  <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/receipt-print/icon.css')}}">
  <link rel="stylesheet" href="{{asset('css/receipt-print/uno.css')}}">
  <link rel="stylesheet" href="{{asset('css/receipt-print/dos.css')}}">
  <link rel="stylesheet" href="{{asset('css/receipt-print/tres.css')}}">
  <link rel="stylesheet" href="{{asset('css/receipt-print/cuatro.css')}}">
  <link rel="stylesheet" href="{{asset('css/receipt-print/color-print.css')}}">
<!--  <link rel="stylesheet" href="css/bootstrap.css">-->


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>
  <script src="js/app.js" charset="utf-8" defer></script>
</head>

<body>
  <div class="container-fluid">
    <div class="topSpace noPrint"></div>
    <div class="main row">
      <div class="topBar col-12">
        <div class="loop noPrint">
          <img src="img/receipt-images/loop.png" alt="">
        </div>
        <div class="row align-items-center">
          <div class="col-7">
            <h1 class="receipt">Seasonal Parking Receipt</h1>
          </div>
          <div class="logo col-5">
            <div class="row align-items-center no-gutters">
              <div class="col-5">
                <img src="img/receipt-images/Untitledlogo2.png" alt="">
              </div>
              <div class="col-7">
                <div class="logoContent">
                  <p>Nakuru  City County
                    <br>
                    City Hall
                    <br>
                    PO Box 30075-00100
                    <br>
                    Nakuru , Kenya
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sec1 container">
        <div class="row">
          <div class="sec1Left pl-50px col-5">
            <div class="date">
              <p class="pHead">Date  printed</p>
              <p class="secPContent todayis">
                <?php
                    echo date("l jS \of F Y h:i:s A");
                ?>
              </p>
            </div><br>
            <div class="paidBy">
              <p class="pHead">Paid by</p>
              <p class="secPContent">
                {{$receipt->Customer}},<br>
                {{$receiptInfo->ReceiptNo}}<br>
                MPESA
              </p>
            </div>
          </div>
          <div class="sec1Right pr-50px col-7">
            <div class="receiptNo">
              <p class="pHead">Receipt No</p>
              <p class="secPContent" id="receipt">{{$receiptInfo->ReceiptNo}}</p>
              <div class="barImg">
                {!! QRCode::size(150)->generate($receiptInfo->ReceiptNo) !!}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="interSec container">
        <div class="interSecContent row">
          <p class="description col-5 pl-50px">Description</p>
          <p class="time col-3 text-center">Time</p>
          <p class="total col-4 text-right pr-50px">Total</p>
        </div>
      </div>

      <div class="interSecDet container">
        <div class="interSecDetContent row">
          <p class="descriptionDet pl-50px col-5">
        Payment for {{$receipt->Description}}<br>
        <span class="font12">
          {{$receipt->FeeDescription}}</span>
      </p>
          <p class="timeDet col-3 text-center">{{$receiptInfo->DateCreated}}</p>
          <p class="totalDet col-4 text-right pr-50px"  id="ksh">{{$receiptInfo->RecieptAmount}}</p>
        </div>
      </div>

      <div class="slantMain container">
        <div class="row align-items-start">
          <div class="noteSlant col-5">
            <p class="pHead">Note</p>
            <p class="font12">All amounts are in KES and VAT inclusive where applicable</p>
          </div>
          <div class="col-3 px-0">
            <p class="tHead">Bill Amount</p>
            <p class="tHead">Amount Received</p>
            <p class="tHead">Balance</p>
          </div>
          <div class="col-4 px-0">
            <p class="kshHead text-right pr-50px">{{$receipt->DetailAmount}}</p>
            <p class="kshHead text-right pr-50px">{{number_format($receiptInfo->RecieptAmount)}}</p>
            <p class="kshHead text-right pr-50px">{{$receipt->DetailAmount - $receiptInfo->RecieptAmount}}</p>
          </div>
        </div>
      </div>

      <div class="vidImg container  noPrint">
        <div class="vid container">
          <iframe class="youtube" src="https://www.youtube.com/embed/GRl988B_JH0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
           picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="imgHolder container  noPrint">
          <div class="img">
            <a href="#"><img src="img/receipt-images/img1.png" alt="" width="528px" height="98px"></a>
          </div>
          <div class="img">
            <a href="#"><img src="img/receipt-images/pexels-photo-248797.jpeg" alt="" width="528px" height="98px"></a>
          </div>
          <div class="img">
            <a href="#"><img src="img/receipt-images/img2.png" alt="" width="528px" height="98px"></a>
          </div>
          <div class="img" id="img4">
            <a href="#"><img src="img/receipt-images/img4.png" alt="" width="528px" height="98px"></a>
          </div>
        </div>
      </div>
      <footer>
        <div class="bill container">
          <div class="row">
            <div class="col-6">
              <p>Served by: {{ Session::get('resource')['username']  }}</p>
            </div>
            <div class="col-6">
              <p class="text-right">Bill No: <span class="billNo">{{$receipt->BillNo}}</span></p>
            </div>
          </div>
        </div>
        <div class="footer container">
          <div class="row">
            <div class="footerLogo col-7">
              <a href="http://epayments.Nakuru .go.ke/">epayments.Nakuru .go.ke</a>
            </div>
            <div class="footerRight col-5">
              <p><span>Powered by :</span><img src="img/receipt-images/National.jpg" alt=""></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="endSpace noPrint"></div>
    <a href="javascript:window.print();" class="noPrint"><i class="icon ion-md-print"></i>Download PDF</a>
    <!-- <a href="{{route('download-receipt', ['reference_number' => $receipt->BillNo])}}">Download Receipt</a> -->
  </div>
  
  
  <script src="{{asset('scripts/jquery.js')}}"></script>
  <script src="{{asset('scripts/moment.min.js')}}"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
  <script>
      window.print();
    var todayis=moment().format("ddd, MMM Do YY");
    $('.todayis').text(todayis);
    console.log(todayis);
    
    
    </script>
</body>

</html>