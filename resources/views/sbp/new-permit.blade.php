<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>RevenueSure ePayments Portal</title>
</head>
<body>
<img style="position:absolute;top:0.00in;left:0.00in;width:8.98in;height:12.71in" src="{{asset('img/old/ri_1.jpeg')}}" />
<img style="position:absolute;top:0.43in;left:1.29in;width:1.72in;height:1.72in" src="{{asset('img/old/ri_2.png')}}" />
<div style="position:absolute;top:0.64in;left:3.01in;width:5.44in;line-height:0.52in;"><span style="font-style:normal;font-weight:bold;font-size:30pt;font-family:Times;color:#004318; white-space: nowrap;">NAIROBI CITY COUNTY</span><span style="font-style:normal;font-weight:bold;font-size:30pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:1.19in;left:3.44in;width:3.85in;line-height:0.34in;"><span style="font-style:normal;font-weight:normal;font-size:20pt;font-family:Times;color:#004318;white-space: nowrap;">Trade License</span><span style="font-style:normal;font-weight:normal;font-size:20pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:1.54in;left:5.15in;width:1.40in;height:0.44in" src="{{asset('img/old/vi_1.png')}}" />

<div style="position:absolute;top:1.70in;left:5.20in;width:1.14in;line-height:0.21in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#004318; white-space: nowrap;">Effective Date</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>
@if(!is_null($permit->effectiveDate))
<div style="position:absolute;top:1.71in;left:6.53in;width:1.14in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#141e28;white-space: nowrap;padding-left: 6px;">{{date('jS F Y', strtotime($permit->effectiveDate))}}</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#141e28"> </span><br/></SPAN></div>
@else
<div style="position:absolute;top:1.71in;left:6.53in;width:1.14in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#141e28"></span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#141e28"> </span><br/></SPAN></div>
@endif

<img style="position:absolute;top:1.54in;left:6.52in;width:2.08in;height:0.44in" src="{{asset('img/old/vi_2.png')}}" />

<img style="position:absolute;top:1.97in;left:5.15in;width:1.40in;height:0.44in" src="{{asset('img/old/vi_3.png')}}" />

<div style="position:absolute;top:2.13in;left:5.20in;width:0.99in;line-height:0.21in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#004318;white-space: nowrap;">Expiry Date</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:2.14in;left:6.53in;width:1.33in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318;white-space: nowrap; padding-left: 6px;">{{date('jS F Y', strtotime($permit->expiryDate))}}</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:1.97in;left:6.52in;width:2.08in;height:0.44in" src="{{asset('img/old/vi_4.png')}}" />

<img style="position:absolute;top:2.40in;left:5.15in;width:1.40in;height:0.44in" src="{{asset('img/old/vi_5.png')}}" />
<div style="position:absolute;top:2.56in;left:5.20in;width:0.75in;line-height:0.21in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#004318">Duration</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:2.57in;left:6.53in;width:0.76in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318;white-space: nowrap; padding-left: 6px; "> {{$permit->paymentPlan}} Months</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:2.40in;left:6.52in;width:2.08in;height:0.44in" src="{{asset('img/old/vi_6.png')}}" />

<div style="position:absolute;top:3.06in;left:0.43in;width:3.27in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318;white-space: nowrap;">Nairobi City County grant this Business Permit to</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:3.00in;left:6.85in;width:1.73in;height:1.13in" src="{{asset('img/old/vi_7.png')}}" />

<div style="position:absolute;top:3.26in;left:7.09in;width:0.80in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318;white-space: nowrap;">Business ID</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span><br/></div>

<div style="position:absolute;top:3.81in;left:7.09in;width:0.57in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318">{{$permit->businessID}}</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:3.22in;left:0.43in;width:6.45in;height:0.52in" src="{{asset('img/old/vi_8.png')}}" />

<div style="position:absolute;top:3.34in;left:0.43in;width:2.53in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318;white-space: nowrap;">Applicant/Business/Commercial Name</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:3.56in;left:0.52in;width:1.10in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318;white-space: nowrap;">{{$permit->businessName}}</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:3.73in;left:0.43in;width:6.45in;height:0.40in" src="{{asset('img/old/vi_9.png')}}" />

<div style="position:absolute;top:3.88in;left:0.47in;width:0.63in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318;white-space: nowrap;">KRA Pin</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:3.86in;left:1.50in;width:0.93in;line-height:0.17in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318">{{$permit->pinNmber}}</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:4.46in;left:0.43in;width:6.45in;height:0.65in" src="{{asset('img/old/vi_10.png')}}" />

<div style="position:absolute;top:4.55in;left:0.43in;width:5.79in;line-height:0.16in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318">To engage in the activity/business/profession or Occupation of</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span><br/></SPAN><DIV style="position:relative; left:0.04in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#004318"> </span></SPAN></DIV><br/></div>

<div style="position:absolute;top:4.70in;left:0.43in;width:5.79in;line-height:0.17in;"><DIV style="position:relative; left:0.13in;"><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#004318">{{$permit->BusinessActivityDescription}}</span><span style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#004318"> </span><br/></SPAN></DIV></div>

<img style="position:absolute;top:5.09in;left:0.43in;width:6.45in;height:0.40in" src="{{asset('img/old/vi_11.png')}}" />
<img style="position:absolute;top:4.46in;left:6.85in;width:1.73in;height:1.04in" src="{{asset('img/old/vi_12.png')}}" />

<div style="position:absolute;top:4.54in;left:7.09in;width:1.02in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">Activity Code</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:4.84in;left:7.09in;width:0.50in;line-height:0.33in;"><span style="font-style:normal;font-weight:bold;font-size:19pt;font-family:Times;color:#004318">{{$permit->ActivityCode}}</span><span style="font-style:normal;font-weight:bold;font-size:19pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:5.88in;left:0.43in;width:8.17in;height:0.44in" src="{{asset('img/old/vi_13.png')}}" />

<div style="position:absolute;top:6.04in;left:0.47in;width:3.08in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">Having Paid a Business Permit Fee of KES</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:6.04in;left:6.44in;width:0.63in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318">{{number_format($permit->amount_paid)}}</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:6.31in;left:0.43in;width:8.17in;height:0.44in" src="{{asset('img/old/vi_14.png')}}" />
<div style="position:absolute;top:6.47in;left:0.47in;width:1.28in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">Amount in words</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:6.47in;left:2.02in;width:2.05in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">*** {{ucwords($amount_in_words)}} only ***</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:7.04in;left:0.43in;width:8.17in;height:0.40in" src="{{asset('img/old/vi_15.png')}}" />

<div style="position:absolute;top:7.18in;left:0.47in;width:5.68in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">Business under this permit shall be conducted at the address as indicated below</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:7.43in;left:0.43in;width:4.09in;height:0.40in" src="{{asset('img/old/vi_16.png')}}" />

<div style="position:absolute;top:7.57in;left:0.47in;width:0.68in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">P.O. Box</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:7.59in;left:1.72in;width:1.34in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">{{$permit->BusinessBoxNo}}--- {{$permit->town}}</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:7.43in;left:4.51in;width:4.09in;height:0.40in" src="{{asset('img/old/vi_17.png')}}" />

<div style="position:absolute;top:7.57in;left:4.55in;width:0.57in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">Plot No</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:7.59in;left:5.58in;width:0.67in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318 ;white-space: nowrap;">{{$permit->BusinessPlotNo}}</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:7.81in;left:0.43in;width:8.17in;height:0.40in" src="{{asset('img/old/vi_18.png')}}" />

<div style="position:absolute;top:7.95in;left:0.47in;width:0.89in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318 ;white-space: nowrap;">Road Street</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:7.98in;left:1.72in;width:1.37in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318; white-space: nowrap;">{{$permit->physicalAddress}}</span><br/></SPAN></div>

<img style="position:absolute;top:8.20in;left:0.43in;width:4.30in;height:0.40in" src="{{asset('img/old/vi_19.png')}}" />
<div style="position:absolute;top:8.34in;left:0.47in;width:0.65in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">Building:  </span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">{{$permit->BuildingName}} </span><br/></SPAN></div>

<img style="position:absolute;top:8.20in;left:4.72in;width:1.94in;height:0.40in" src="{{asset('img/old/vi_20.png')}}" />
<div style="position:absolute;top:8.34in;left:4.77in;width:0.43in;line-height:0.19in;white-space: nowrap;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318">Floor:   </span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;"> {{$permit->BuildingFloorNo}}</span><br/></SPAN></div>

<img style="position:absolute;top:8.20in;left:6.65in;width:1.94in;height:0.40in;" src="{{asset('img/old/vi_21.png')}}" />
<div style="position:absolute;top:8.34in;left:6.70in;width:1.03in;line-height:0.19in;white-space: nowrap;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;;white-space: nowrap;">Door/stall No.</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;"> {{$permit->BusinessHouseNo}} </span><br/></div>

<img style="position:absolute;top:8.93in;left:0.43in;width:3.44in;height:0.40in" src="{{asset('img/old/vi_22.png')}}" />

<div style="position:absolute;top:9.07in;left:0.47in;width:0.96in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318;white-space: nowrap;">Date of Issue</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:9.09in;left:1.72in;width:1.47in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318">{{$permit->dateIssued}}</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<div style="position:absolute;top:9.09in;left:4.08in;width:0.86in;line-height:0.19in;"><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318">By order of</span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Times;color:#004318"> </span><br/></SPAN></div>

<img style="position:absolute;top:9.45in;left:4.08in;width:1.33in;height:1.33in" src="{{asset('img/old/ri_3.png')}}" />
<img style="position:absolute;top:8.93in;left:3.85in;width:4.73in;height:1.94in" src="{{asset('img/old/vi_23.png')}}" />
<div style="position:absolute;top:9.23in;left:6.44in;width:1.50in;height:1.50in"/>{!! QRCode::size(144)->generate($permit->businessID) !!}</div>
<img style="position:absolute;top:9.45in;left:1.16in;width:1.59in;height:1.59in" src="{{asset('img/old/ri_5.png')}}" />
<div style="position:absolute;top:11.03in;left:0.47in;width:8.11in;line-height:0.15in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#b22222">Notice: It is an offence to give false information. Granting this permit does not exempt the business identified above from</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#b22222"> </span><br/><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#b22222">complying  and any other relevant laws and regulations as established by the Government of Kenya and Nairobi City County</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#b22222"> </span><br/></SPAN></div>

</body>
</html>
