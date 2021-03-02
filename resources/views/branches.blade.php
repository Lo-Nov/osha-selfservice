@extends('layouts.app')
@section('content')
<section id="service-form-section" class="parallax-section p-0">
  <div class="contaner">

  	<div class="service-form-container  d-flex flex-column-md animated col-12 p-0">
  		 <div class="col-lg-8 col-md-12 position-relative p-5">
			<h4>Map of the BANK branches </h4>
			<p>Locate a bank branch from which you can do payments.</p>
			<hr>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63819.805798831105!2d36.83104303168776!3d-1.3334440543342156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1snational%20bank%20branches%20nairobi!5e0!3m2!1sen!2ske!4v1582644487100!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d127641.35363596975!2d36.86486928671874!3d-1.2994157469823224!3m2!1i1024!2i768!4f13.1!2m1!1snbk%20branches%20in%20nairobi!5e0!3m2!1sen!2ske!4v1582646334585!5m2!1sen!2ske" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
		   <div class="col-lg-4 p-5 position-relative transactions-form-container d-flex">
		   	<div class="col-12 p-0 the-transaction-form animated">
			   <h4>The list of NBK branches in Nairobi:</h4>
			   <hr>
		    	<ol>
		    		<li>1. Kenyatta Avenue</li>
		    		<li>2. Harambee Avenue</li>
		    		<li>3. Moi Avenue</li>
		    		<li>4. Times Tower</li>
		    		<li>5. Lunga Lunga Avenue</li>
		    		<li>6. Westlands</li>
		    		<li>7. Upperhill</li>
		    		<li>8. Sameer Business Park</li>
		    		<li>9. Ngong Road</li>
		    		<li>10. Greenspan Mall - Donholm</li>
		    		<li>11. South C- KEBS</li>
		    		<li>12. Ongata Rongai</li>
		    		<li>13. Kitengela</li>
		    		<li>14. Eastleigh Amanah</li>
		    		<li>15. Jomo Kenyatta International Airport</li>
		    		<li>16. Wilson Airport</li>
		    		<li>17. Hill Plaza</li>
		    		<li>18. Kenyatta University</li>
		    		<li>19. Yaya Centre</li>
		    		<li>20. Hospital Branch</li>
		    		<li>21. Mountain Mall</li>
		    		<li>22. Gigiri</li>
		    		<li>23. Gikomba</li>


		    	</ol>
		    </div>
		   </div>
   </div>
  </div>
</section>
@endsection
