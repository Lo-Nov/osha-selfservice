<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title class="">County bill</title>
<link href="https://fonts.googleapis.com/css?family=Aldrich|Fira+Sans:200,300,400,500,700,800,900|Norican&display=swap&subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bills-style.css')}}">
</head>

<body>
<page size="B4" class="p-0 container w-100 h-100">
  <section class="content-container h-100 w-100 position-relative pt-0">
<!--    customer copy-->
    <header>
      <section class="container p-0 m-0">
        <div class="row"> 
          <div class="col-12">
        <div class="row px-5 greybg">
             <div class="col-6 pl-5">
          <div class="header-title text-uppercase p-3 pt-3 mx-5 col-8 bg-primary text-white">
                <h2 class="mt-2"><strong>County bill</strong></h2>
                <p>customer copy</p>
              </div>
        </div>
              <center class="col-3 text-nowrap text-right   pt-4"> 
          <small class=" "><strong>Billing Date</strong></small>
          <p class="font-aldrich font-22">{{date('d-m-Y')}}
          </p>
              </center>
              <div class="col-3 text-nowrap text-right   float-right pt-4"> <small><strong>Bill Number</strong></small>
                <p class="font-aldrich font-22">{{$bill->bill_number}}</p>
              </div>
          </div>
      </div>
          <!--        logo container-->
          <div class="col-12 the-head px-5">
            <div class="row">
             
        
        <div class="row px-5 mx-5">
          <div class="col-6 my-3">
          <div class="logo-container d-flex align-items-center">
            <img src="{{asset('img/county.png')}}" class="float-left mr-3">
            <div>
                <h2 class="text-nowrap"><strong>Nakuru  City County</strong></h2>
              <h6 class="weight-600 p-0 m-0">Customer service Office</h6>
              <!-- <p class="m-0  ">makadara office</p> -->
            </div>
          </div>
        </div>
        
        <div class="col-6 mt-4 text-right d-none">
          <p class=" "><strong>Nakuru  city county</strong></p>
          <div><strong>Tel No:</strong> 020-344194,0725-624489,0735-825383</div>
          <div><strong>Email:</strong> info@Nakuru .go.ke</div>
          <div><strong>Emergency Tel No:</strong> 020-2222181</div>
        </div>
        </div>
            </div>
            </div>
        </div>
      </section>
    </header>
    
<!--    the main section-->
     <section class="container px-5  m-0  ">
       <div class="px-5 mx-5">
        <div class="row">
        <div class="col-2 pr-0 mb-1">
        <p class="text-uppercase p-0 m-0 text-primary">prepared for</p>
      </div>
         
         <div class="col-10 p-0 mb-1">
          <hr class="mb-0 mt-2 txt-primary">
      </div>
       </div>
       <h6 class="  serial-init font-22 mb-0">{{$bill->client_name}}</h6>
       <p class="m-0 p-0"><strong class="weight-600">Identifier: {{$bill->identifier}}</strong></p>
       </div>
       
<!--       the billing items-->
       <div class="px-5 mx-5">
          <table class="table table-borderless mt-4 billing-table px-5">
            <thead class="border-bottom">
              <tr class="text-uppercase txt-secondary">
                <th scope="col" class="pl-0">no</th>
                <!-- <th scope="col" class="pl-0">account number</th> -->
                <th scope="col">description</th>
                <th scope="col" class="pr-0 text-right">amount (KES)</th>               
              </tr>
            </thead>
            <tbody>

              <tr class=" ">
                <td scope="row" class="pl-0">1</td>
                <!-- <td scope="row" class="pl-0">1-2201</td> -->
                <td>{{$bill->brief_description}}</td>
                <td class="text-uppercase txt-primary pr-0 text-right amount">{{$bill->bill_amount}}</td>
              </tr>
            </tbody>
          </table>
       </div>
<!--       the billing items-->
       
<!--       payment summarry-->
       <div class="row px-5 greybg payment_options">
          <div class="col-12 mt-1 px-5">
          <table class="table table-borderless px-5">
            <thead class="border-bottom">
              <tr class="text-uppercase">
                <th scope="col" class="pl-0">Pay via:</th>
                <th scope="col">Printed on</th>
                <th class="text-right pr-0">total due</th>               
              </tr>
            </thead>
            <tbody class="border-bottom">
              <tr class="  pl-0">
                <td class="py-2 pl-0">
          <table class=" ">
            <tbody><tr><td class="py-0 pl-0">Mpesa paybill No:</td><td class="py-0"><strong>367776</strong></td></tr>
            <tr><td class="py-0 pl-0">Mpesa account no.</td><td class="text-uppercase py-0"><strong>{{$bill->payment_code}}</strong></td></tr>
            <tr><td class="py-0 pl-0">Bank Account No</td><td class="  py-0"><strong>01060217197400</strong></td></tr>
            <tr><td class="py-0 pl-0">Bank At</td><td class="  py-0"><strong>National Bank Of kenya</strong></td></tr>
          </tbody></table>
          </td>
                <td class="py-2 p-0 font-21">
          <strong class="font-21">{{date('d-m-Y')}}
          </strong>
          
          </td>
                <td class="text-uppercase text-right py-2 pr-0 position-relative">
          <strong class="txt-primary font-21 ">KES {{$bill->bill_amount}}</strong>
          <!-- <p class="warning text-danger position-relative dropright fixed-bottom note text-nowrap py-2"><small class="note"><strong>pay before due date to avoid attracting any penalties</strong></small></p> -->

          </td>
              </tr>
              
              
            </tbody>
          </table>
         </div>
       </div>
       
       
<!--       payment summarry-->
       
<!--       footer-->
        <div class="row mt-2">
        <div class="col-12 ">
          <p class="">
            <span>Billed By <strong>{{Session::get('resource')['username']}}</strong>||<strong>{{$bill->payment_code}}</strong>||</span>
            
            <span class="float-right font-12"><strong class="text-primary">EMERGENCY TEL NO:</strong>020-2222181</span>
            <span class="float-right font-12"><strong class="text-primary">P: </strong> 020-344194, 0725-624-489, 0735-825-383  |   </span>
            <span class="float-right font-12"><strong class="text-primary ">E: </strong> info@Nakuru .go.ke |   </span>
          </p>
        </div>
        
        
       </div>
       <div class="row">
          
        <div class="col-12 w-100 p-0 float-right">
          <img src="{{asset('img/makasi.svg')}}" class="makasi float-left">
          <hr class="m-0 mt-3 border-dashed">
        </div>
        </div>
<!--       footer-->
       
       
    </section>
<!--    the main section-->
    
    
<!--    file copy-->
   <header class="mt-2">
      <section class="container p-0 m-0">
        <div class="row"> 
          <div class="col-12">
        <div class="row px-5 greybg">
             <div class="col-6 pl-5">
          <div class="header-title text-uppercase p-3 pt-3 mx-5 col-8 bg-primary text-white">
                <h2 class=""><strong>County bill</strong></h2>
                <p>file copy</p>
              </div>
        </div>
              <center class="col-3 text-nowrap text-right   pt-3"> 
          <small class=" "><strong>Billing Date</strong></small>
          <p class="font-aldrich font-22">{{date('d-m-Y')}}</p>
              </center>
              <div class="col-3 text-nowrap text-right   float-right pt-3"> <small><strong>Bill Number</strong></small>
                <p class="font-aldrich font-22">{{$bill->bill_number}}</p>
              </div>
          </div>
      </div>
          <!--        logo container-->
          <div class="col-12 the-head px-5">
            <div class="row">
             
        
        <div class="row px-5 mx-5">
          <div class="col-6 my-3">
          <div class="logo-container d-flex align-items-center">
            <img src="{{asset('img/county.png')}}" class="float-left mr-3">
            <div>
                <h2 class="text-nowrap"><strong>Nakuru  City County</strong></h2>
              <h6 class="weight-600 p-0 m-0">Customer service Office</h6>
                            <p class="m-0  ">makadara office</p>
            </div>
          </div>
        </div>
        
        <div class="col-6 mt-4 text-right d-none">
          <p class=" "><strong>Nakuru  city county</strong></p>
          <div><strong>Tel No:</strong> 020-344194,0725-624489,0735-825383</div>
          <div><strong>Email:</strong> info@Nakuru .go.ke</div>
          <div><strong>Emergency Tel No:</strong> 020-2222181</div>
        </div>
        </div>
            </div>
            </div>
        </div>
      </section>
    </header>
    
<!--    the main section-->
     <section class="container px-5  m-0  ">
       <div class="px-5 mx-5">
        <div class="row">
        <div class="col-2 pr-0 mb-1">
        <p class="text-uppercase p-0 m-0 text-primary">prepared for</p>
      </div>
         
         <div class="col-10 p-0 mb-1">
          <hr class="mb-0 mt-2 txt-primary">
      </div>
       </div>
       <h6 class="  serial-init font-22 mb-0">{{$bill->client_name}}</h6>
       <p class="m-0 p-0"><strong class="weight-600">Bill identifier: {{$bill->identifier}}</strong></p>
       </div>
       
<!--       the billing items-->
       <div class="px-5 mx-5">
          <table class="table table-borderless mt-4 billing-table px-5">
            <thead class="border-bottom">
              <tr class="text-uppercase txt-secondary">
                <th scope="col" class="pl-0">no</th>
                <th scope="col" class="pl-0">account number</th>
                <th scope="col">description</th>
                <th scope="col" class="pr-0 text-right">amount (KES)</th>               
              </tr>
            </thead>
            <tbody>
              <tr class=" ">
                <td scope="row" class="pl-0">1</td>
                <td scope="row" class="pl-0">{{$bill->account_number}}</td>
                <td>{{$bill->brief_description}}</td>
                <td class="text-uppercase txt-primary pr-0 text-right amount">{{$bill->bill_amount}}</td>
              </tr>
              
            </tbody>
          </table>
       </div>
<!--       the billing items-->
       
<!--       payment summarry-->
       <div class="row px-5 greybg">
          <div class="col-12 mt-1 px-5">
          <table class="table table-borderless px-5">
            <thead class="border-bottom">
              <tr class="text-uppercase">
                <th scope="col" class="pl-0">Pay via:</th>
                <th scope="col">Printed on</th>
                <th class="text-right pr-0">total due</th>               
              </tr>
            </thead>
            <tbody class="border-bottom">
              <tr class="  pl-0">
                <td class="py-2 pl-0">
          <table class=" ">
            <tbody><tr><td class="py-0 pl-0">Mpesa paybill No:</td><td class="py-0"><strong>367776</strong></td></tr>
            <tr><td class="py-0 pl-0">Mpesa account no.</td><td class="text-uppercase py-0"><strong>{{$bill->payment_code}}</strong></td></tr>
            <tr><td class="py-0 pl-0">Bank Account No</td><td class="  py-0"><strong>01060217197400</strong></td></tr>
            <tr><td class="py-0 pl-0">Or Bank At</td><td class="  py-0"><strong>National Bank Of kenya</strong></td></tr>
          </tbody></table>
          </td>
                <td class="py-2 p-0 font-21"><strong class="font-21">{{date('d-m-Y')}}</strong></td>
        <td class="text-uppercase text-right py-2 pr-0 position-relative">
          <strong class="txt-primary font-21 ">KES {{$bill->bill_amount}}</strong>
                    <!-- <p class="warning text-danger position-relative dropright fixed-bottom note text-nowrap py-2"><small class="note"><strong>pay by specified date to avoid attracting any penalties</strong></small></p> -->

          </td>              </tr>
              
              
            </tbody>
          </table>
         </div>
       </div>
       
       
<!--       payment summarry-->
       
<!--       footer-->
        <div class="row mt-2">
        <div class="col-12 ">
          <p class="">
            <span>Billed By <strong>{{Session::get('resource')['username']}}</strong>|| <strong>{{$bill->payment_code}}</strong>||</span>
            
            <span class="float-right font-12"><strong class="text-primary">EMERGENCY TEL NO:</strong>020-2222181</span>
            <span class="float-right font-12"><strong class="text-primary">T: </strong> 020-344194,0725-624-489, 0735-825-383  |   </span>
            <span class="float-right font-12"><strong class="text-primary ">E: </strong> info@Nakuru .go.ke |   </span>
          </p>
        </div>
        
        
       </div>
       
<!--       footer-->
       
       
    </section>
<!--    the main section-->
    
    
    
    

    
</page>
<script>
      // window.print();
      $('.payment_options').removeClass('greybg');
    var todayis=moment().format("ddd, MMM Do YY");
    $('.todayis').text(todayis);
    console.log(todayis);
    
    
    </script>
</body>
</html>
