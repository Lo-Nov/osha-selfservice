<!DOCTYPE html>
<html><head>
		<meta charset="utf-8">
		<title class="">Certificate Of Medical Examination </title>
		<!-- <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Open+Sans:300,400,600,700&display=swap" rel="stylesheet"> -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Aldrich|Fira+Sans:200,300,400,500,700,800,900|Norican&display=swap&subset=cyrillic" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/cert.css">

		<style type="text/css">
			html, body {
    display: block;
}
		</style>
		<!-- <link rel="stylesheet" href="{{asset('css/print-btn.css')}}"> -->
</head><body>
		<div class="container-fluid a4-size m-2 position-relative" id="nodeToRenderAsPDF">
			<header>
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-3 p-0">
							<div class="figure-img">
								<img src="img/Group 23.png" >
							</div>
						</div>
						<div class="col-9 pt-1">
							<div class="cert-title">
								<h2>Nairobi City County</h2>
								<h5>The food, Drugs and chemical substances act</h5>
							</div>
							<div class="green"></div>
							<div class="yellow"></div>
							<div class="row">
								<div class="col-12">
									<span class="duration">
										<p class="serial position-absolute other-num text-right">AW10</p>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<section class="row">
				<div class="col-12 px-4">
					<div class="cert-heading mt-3">
						<h1 class="mt-5 mb-4">Certificate Of Medical Examination </h1>
						<h5 class="mb-5">FORM D</h5>
					</div>
					<!--				main content-->
					<p class=" text-left col-12 mb-3 p-0 spacing-1 line-height-2" id="demo">
						I hereby certify that I have examined <span class="content-field"> {{$certificate->FirstName}} {{$certificate->MiddleName}} {{$certificate->LastName}}</span> of <span class="content-field"> ID {{$certificate->IDNumber}}</span> and that in my opinion (s)he is fit under the Food, Drugs and Chemical Substances (Food
						Hygiene Regulations) to work at:
					</p>
					<!--				examination details-->
					<div id="content">
						<h5>Details</h5>
					</div>
					<div class="row mt-0 spacing-1">
						<div class="col-7 dropleft text-left">
							
							<div class="col-12 dropleft text-left mb-4 p-0">
								<p class="text-capitalize mb-0">Company: <b>{{$certificate->premiseName}}</b></p>
								<p class="text-capitalize mb-0">Plot No:<b> {{$certificate->PremisePlotNo}}</b></p>
								<p class="text-capitalize mb-0">Road <b>{{$certificate->Location}}</b></p>

								<!-- <p class="text-capitalize">Sub county: <b>madaraka</b></p> -->
							</div>
							
							<div class="col-12 dropleft text-left mb-4 p-0">
								<p class="text-capitalize mb-0">Examined At: <b>{{$certificate->ClinicName}}</b></p>
								
								<p class="text-capitalize">Receipt No <b>{{$certificate->ReceiptNo}}</b></p>
								<p class="text-capitalize"><b>Lab Ref No {{$certificate->LabRefNumber}}</b></p>
							</div>
							<!--				examination details-->
							<div class="col-12 dropleft text-left p-0 mb-3 mt-5">
								<p class="text-capitalize mb-0 d-flex align-items-end pb-2"><span>Sign: </span><span><img src="img/langat-sign.png" class="signature ml-3"></span></p>
								<p class="text-capitalize mb-0">Medical Officer Of Health</p>
								<p class="text-capitalize">Date:<b> {{date('d-m-Y', strtotime($certificate->DateApproved))}}</p>
							</div>
						
					</div>
						<div class="col-5 dropright text-right d-flex align-items-center libre-bold justify-content-center stamp">
							<p class="text-capitalize d-none">Official stamp</p>
							<img src="img/stamp.png" height="160px" ;>
						</div>
					</div>
					<div class="row footer margin spacing-1">
					<br>
						<div class="col-6 dropleft text-left mt-3 d-flex align-items-end">
							<img src="img/NBK logo.png" height="20px" class="nbk"><br>
							<p class="dropleft font-10"><b>NB: This Certificate is valid for six(6) Months Only</b></p>
						</div>
						<div class="col-6">
							<div class="img dropright col-12 p-0 d-flex justify-content-end">
								<img class="">{!! QRCode::size(100)->generate($certificate->ReceiptNo); !!}
						</div>
						<div class="text-right">
							<!-- <p class="serial  mt-2">Serial NO:  {{$certificate->ReceiptNo}} </p> -->
						</div>
						</div>
						
					</div>
				</div>
			</section>
			<!--		fotter area-->
			<div class="footer-container text-left position-absolute">
				<footer class="row font-14">
					<div class="col-6 text-right pr-4 font-14">
						<p class="dropleft font-9"> </p>
					</div>
					
					<div class="col-6 text-right pr-4 font-14">
						<p class="dropleft font-9"><br><b>Expiry Date: {{$certificate->expirydate}}</b> </p>
					</div>
					<div class="hr1 col-12 px-4"></div>
					<div class="col-6">
						<p class="dropleft font-14"><b>City Hall</b>, | Po Box 30075-00100 Nairobi, Kenya</p>
					</div>
					<div class="col-6 text-right">
						<p class="dropleft font-14"><b>Governors Office</b>,<b>F:</b>12562 <b>T:</b>12562 | <b>F:</b>12562 <b>E:</b>Governor@Nairobicity.Go.Ke </p>
					</div>
				</footer>
			</div>
		</div>
</body></html>
