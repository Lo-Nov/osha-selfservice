<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('privacy-policy', 'WelcomeController@privacyPolicy')->name('privacy-policy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Custom Authentication routes
Route::post('register-customer', 'RegisterCustomerController@register')->name('register-customer');
Route::post('login-customer', 'LoginCustomerController@loginCustomer')->name('login-customer');
Route::get('check-login', 'LoginCustomerController@checkLogin')->name('check-login');
Route::get('client-profile', 'ProfileController@client_profile')->name('client-profile');
Route::post('change-pswd', 'ProfileController@change_pswd')->name('change-pswd');
Route::get('forgot-password', 'ProfileController@forgot_password')->name('forgot-password');
Route::post('get-password', 'ProfileController@get_password')->name('get-password');
Route::post('update-profile', 'ProfileController@updateProfile')->name('update-profile');
Route::get('user-receipts/{id}', 'ProfileController@getReceipts')->name('user-receipts');
Route::get('transactions/{category}/{id}', 'ProfileController@getCategoryReceipts')->name('user-receipts');
Route::get('save-receipts/{bill_number}/{user_id}', 'ReceiptController@saveReceipts')->name('save-receipts');
Route::get('reset-password', 'LoginCustomerController@resetPasswordForm')->name('reset-password');
Route::get('contact-us', 'ContactController@index')->name('contact-us');

Route::get('nbk-branches', 'WelcomeController@branches')->name('nbk-branches');
//Rent routes

//House Rents
Route::get('house-rents', 'HouseRentController@getHouseRentForm')->name('house-rents');
Route::post('get-house-types', 'HouseRentController@getHouseTypes')->name('get-house-types');
Route::post('get-house-numbers', 'HouseRentController@getHouseNumbers')->name('get-house-numbers');
Route::post('confirm-house-details', 'HouseRentController@confirmHouseDetails')->name('confirm-house-details');
Route::post('generate-house-bill', "HouseRentController@generateHouseBill")->name('generate-house-bill');

Route::post('generate-market-bill', "MarketController@generateHouseBill")->name('generate-house-bill');
Route::post('initiate-rent-payment', 'HouseRentController@initiateRentPayment')->name('initiate-house-payment');
Route::get('generate-house-receipt/{bill_number}', 'HouseRentController@generateHouseReceipt')->name('generate-house-receipt');
Route::get('view-house-bill', 'HouseRentController@viewHouseBill')->name('view-house-bill');
Route::get('get-house-receipt/{id}', 'HouseRentController@getHouseReceipt')->name('get-house-receipt');
Route::get('view-house-receipt/{id}', 'HouseRentController@viewHouseReceipt')->name('view-house-receipt');
Route::get('print-house-bill/{bill_number}', 'HouseRentController@printBill')->name('print-house-bill');




//Market rents
Route::get('market-rents', 'MarketController@getMarketRentForm')->name('market-rents');


//land routes
Route::get('land-rates', 'LandController@getPlotNumber')->name('land-rates');
Route::post('get-land-details', 'LandController@getLandDetails')->name('get-land-details');
Route::get('confirm-land-details', 'LandController@confirmLandDetails')->name('confirm-land-details');
Route::post('initiate-land-payment', 'LandController@landRatePayment')->name('initiate-land-payment');
Route::get('get-land-receipt/{id}', 'LandController@getLandReceipt')->name('get-land-receipt');
Route::get('view-land-receipt/{id}', 'LandController@viewLandReceipt')->name('view-land-receipt');
Route::get('print-land-bill/{bill_number}', 'LandController@printBill')->name('print-land-bill');
Route::post('generate-land-bill', 'LandController@generateBill')->name('generate-land-bill');

//Receipt routes
Route::post('generate-receipt', 'ReceiptController@generateReceipt')->name('generate-receipt');
Route::get('get-receipt/{id}', 'ReceiptController@getReceipt')->name('get-receipt');
Route::get('view-receipt/{id}', 'ReceiptController@viewReceipt')->name('view-receipt');
Route::get('download-receipt/{ref_no}', 'ReceiptController@downloadReceipt')->name('download-receipt');


//Parking routes
Route::get('get-parking-receipt/{id}', 'ParkingController@getParkingReceipt')->name('get-parking-receipt');
Route::get('view-parking-receipt/{id}', 'ParkingController@viewParkingReceipt')->name('view-parking-receipt');
Route::get('get-offstreet-parking-receipt/{id}', 'ParkingController@getOffstreetParkingReceipt')->name('get-offstreet-parking-receipt');
Route::get('view-offstreet-parking-receipt/{id}', 'ParkingController@viewOffstreetParkingReceipt')->name('view-offstreet-parking-receipt');



//New parking receipts
Route::get('parking-receipts-for-{id}', 'ParkingController@receiptsList')->name('parking-receipts');


//Offstreet
Route::get('offstreet-parking', 'ParkingController@offstreetParking')->name('offstreet-parking');
Route::post('get-offstreet-charge', 'ParkingController@offstreetParkingPayment')->name('get-offstreet-charge');

 //Daily
Route::get('daily-parking', 'ParkingController@dailyParking')->name('daily-parking');
Route::get('confirm-daily-parking-details', 'ParkingController@confirmDailyParkingDetails')->name('confirm-daily-parking-details');

// //Seasonal
// Route::get('seasonal', 'SeasonalParkingController@seasonalParking')->name('seasonal');
// Route::post('get-durations', 'SeasonalParkingController@getDurations')->name('get-durations');
// Route::post('get-seasonal-charges', 'SeasonalParkingController@getSeasonalCharges')->name('get-seasonal-charges');
// Route::post('add-vehicle', 'SeasonalParkingController@addVehicle')->name('add-vehicle');
// Route::post('pay-seasonal-parking', 'SeasonalParkingController@payment')->name('pay-seasonal-parking');
// Route::get('get-seasonal-receipt/{id}', 'SeasonalParkingController@getReceipt')->name('get-seasonal-receipt');
// Route::get('view-seasonal-receipt/{id}', 'SeasonalParkingController@viewReceipt')->name('view-seasonal-receipt');
// Route::get('print-seasonal-bill/{bill_number}', 'SeasonalController@printBill')->name('print-seasonal-bill');

//Parking penalties
Route::get('parking-penalties', 'ParkingPenaltiesController@parkingPenalties')->name('parking-penalties');
Route::post('get-parking-penalties', 'ParkingPenaltiesController@getParkingPenalties')->name('get-parking-penalties');

Route::post('initiate-penalty-payment', 'ParkingPenaltiesController@initiateParkingPayment')->name('initiate-penalty-payment');


//Parking payment
Route::post('get-parking-charges', 'ParkingController@getParkingCharges')->name('get-parking-charges');

Route::post('initiate-onstreet-parking-payment', 'ParkingController@initiateOnstreetPayment')->name('initiate-onstreet-parking-payment');

Route::post('initiate-offstreet-parking-payment', 'ParkingController@initiateOffstreetPayment')->name('initiate-onstreet-parking-payment');

//MIscellaneous Bills
//Create a bill
Route::get('create-bill', 'BillsController@createBill')->name('create-bill');
Route::post('generate-bill', 'BillsController@generateBill')->name('generate-bill');
//Pay a bill
Route::post('get-bill-details', "BillsController@getBillDetails")->name('get-bill-details');
Route::get('pay-bill', 'BillsController@payBill')->name('pay-bill');
Route::post('initiate-bill-payment', 'BillsController@initiateBillPayment')->name('initiate-bill-payment');
Route::get('get-bill-receipt/{id}', 'BillsController@getBillReceipt')->name('get-bill-receipt');
Route::get('view-bill-receipt/{id}', 'BillsController@viewBillReceipt')->name('view-bill-receipt');
Route::get('print-bill/{bill_number}', 'BillsController@printBill')->name('print-bill');

//SBP
Route::get('renew-business-permit', 'SBPController@renewBusinessPermit')->name('renew-business-permit');
Route::post('renew-permit', 'SBPController@renewPermit')->name('renew-permit');
Route::post('get-business-details', 'SBPController@getBusinessDetails')->name('get-business-details');
Route::get('print-permit', 'SBPController@printPermit')->name('print-permit');
Route::post('get-sbp', 'SBPController@getSBP')->name('get-sbp');
Route::get('business-permit', 'SBPController@businessPermit')->name('business-permit');
Route::get('register-business', 'SBPController@registerBusinessForm')->name('register-business');
Route::get('get-wards', 'SBPController@getWards')->name('get-wards');
Route::post('print-receipt', 'SBPController@printReceipt')->name('print-receipt');


//RevenueSure Register Trade
// Route::post('apply-new-permit', 'SBPController@registerBusiness')->name('apply-new-permit');
 Route::post('register-trade-license', 'SBPController@registerTradeLicense')->name('register-trade-license');
Route::post('get-receipt-details', 'ReceiptController@getReceiptDetails')->name('get-receipt-details');



Route::post('get-postal-name/{id}', 'SBPController@getPostalName')->name('get-postal-name');
Route::get('get-activity-detail/{id}', 'SBPController@getActivityDetail')->name('get-activity-detail');
Route::get('store-business', 'SBPController@storeBusiness')->name('store-business');
Route::post('pay-sbp', 'SBPController@payment')->name('pay-sbp');
Route::get('confirm-sbp-details', 'SBPController@confirmDetails')->name('confirm-sbp-details');
Route::get('get-permit', 'SBPController@getPermit')->name('get-permit');
Route::get('get-permit-form', 'SBPController@getPermitForm')->name('get-permit-form');
Route::get('view-sbp-permit/{id}/{business_id}', 'SBPController@viewPermit')->name('view-sbp-permit');
Route::get('get-sbp-charges/{id}', 'SBPController@getSBPcharges')->name('get-sbp-charges');
Route::get('update-business', 'SBPController@update')->name('update-business');
Route::post('renew-business', 'SBPController@renew')->name('renew-business');
Route::get('get-sbp-receipt/{id}', 'SBPController@getReceipt')->name('get-sbp-receipt');
Route::get('view-sbp-receipt/{id}', 'SBPController@viewReceipt')->name('view-sbp-receipt');
Route::post('bill-payment', 'SBPController@billPayment')->name('bill-payment');
Route::get('get-overall-receipt/{id}', 'SBPController@getOverallReceipt')->name('get-overall-receipt');
Route::get('all-printables/{id}', 'SBPController@allPrints')->name('all-printables');



Route::get('print-sbp-bill/{bill_number}', 'SBPController@printBill')->name('print-sbp-bill');

//Health routes
Route::get('create-food-handlers-bill', 'HealthController@billForm')->name('create-food-handlers-bill');
Route::get('view-food-handlers-certificate/{id}', 'HealthController@viewHealthCertificate')->name('view-food-handlers-certificate');
Route::get('print-certificate/{bill_id}', 'HealthController@printCertificate')->name('print-certificate');
Route::post('health-register', 'HealthController@register')->name('health-register');
Route::get('get-health-receipt/{id}', 'HealthController@getReceipt')->name('get-health-receipt');
Route::get('view-health-receipt/{id}', 'HealthController@viewReceipt')->name('view-health-receipt');
Route::get('print-health-bill/{id}', 'HealthController@printBill')->name('print-health-bill');
Route::post('generate-health-bill', 'HealthController@generateBill')->name('generate-health-bill');
Route::post('pay-health-bill', 'HealthController@payment')->name('pay-health-bill');
Route::get('health-credentials', 'HealthController@healthCredentials')->name('health-credentials');
Route::post('confirm-otp', 'HealthController@confirmOtp')->name('confirm-otp');
Route::post('get-otp', 'HealthController@getOtp')->name('get-otp');
Route::get('health-application', 'HealthController@apply')->name('health-application');
Route::get('health-verify', 'HealthController@checkID')->name('health-verify');
Route::get('print-health-certificate/{ApplicantID}/{BillID}', 'HealthController@printHealthCertificate')->name('print-health-certificate');


//Health food hygiene
Route::get('food-hygiene-business-details', 'HealthController@FoodHygieneBusinessDetailsFoodHygieneBusinessDetails')->name('food-hygiene-business-details');
Route::post('pull-business-details', 'HealthController@PullBusinessDetails')->name('pull-business-details');
Route::post('register-food-hygiene', 'HealthController@registerFoodHygiene')->name('register-food-hygiene');
Route::get('get-health-bill/{id}', 'HealthController@getFoodHygieneBill')->name('get-health-bill');
Route::get('print-food-hygiene-bill/{businessID}', 'HealthController@printFoodHygieneBill')->name('print-food-hygiene-bill');
Route::post('pay-food-hygiene-bill', 'HealthController@payFoodHygiene')->name('pay-food-hygiene-bill');

Route::get('get-food-hygiene-receipt/{id}', 'HealthController@getFoodHygieneReceipt')->name('get-food-hygiene-receipt');
Route::get('hygiene-printables/{id}', 'HealthController@hygienePrints')->name('hygiene-printables');
Route::post('print-food-hygiene-cert', 'HealthController@printFoodHygieneCert')->name('print-food-hygiene-cert');
Route::get('renew-food-hygiene', 'HealthController@renewForm')->name('renew-food-hygiene');
Route::post('rnw-food-hygiene', 'HealthController@renewFoodHygiene')->name('rnw-food-hygiene');

//Health food handler
Route::get('apply-food-handler', 'HealthController@ApplyFoodHandlerForm')->name('apply-food-handler');
Route::post('register-food-handler', 'HealthController@registerFoodHandler')->name('register-food-handler');
Route::get('get-foodhandler-bill/{id}', 'HealthController@getFoodHandlerBill')->name('get-foodhandler-bill');
Route::get('handler-printables/{id}', 'HealthController@handlerPrints')->name('handler-printables');
Route::post('print-food-handler-cert', 'HealthController@printFoodHandlerCert')->name('print-food-handler-cert');
Route::get('renew-handler', 'HealthController@renewHandler')->name('renew-handler');
Route::post('rnw-food-handler', 'HealthController@renewFoodHandler')->name('rnw-food-handler');
Route::get('get-certificates/{id}', 'HealthController@allHandlerCerts')->name('get-certificates');
Route::get('get-slip/{id}', 'HealthController@getSlip')->name('get-slip');
Route::get('print-food-handler-bill/{idNo}', 'HealthController@printFoodHandlerBill')->name('print-food-handler-bill');
Route::get('print-trade-bill/{id}', 'SBPController@printTradeBill')->name('print-trade-bill');
Route::get('print-multi-handler-bill/{idNo}', 'HealthController@multiFoodHandlerBill')->name('print-multi-handler-bill');
Route::get('print-health-slip', 'HealthController@printHealthSlip')->name('print-health-slip');

Route::post('print-corp-food-handler-cert', 'HealthController@printCorpFoodHandlerCert')->name('print-corp-food-handler-cert');



//Corporate
Route::get('get-corporate', 'HealthController@GetCorporate')->name('get-corporate');
Route::get('pull-corporate-auth', 'HealthController@GetCorporateAuth')->name('pull-corporate-auth');
Route::post('get-otp-corporate', 'HealthController@getOtpCorporate')->name('get-otp-corporate');
Route::post('confirm-otp-corporate', 'HealthController@confirmOtpCorporate')->name('confirm-otp-corporate');
Route::get('get-corporate-individuals/{id}', 'HealthController@getCorporateIndividuals')->name('get-corporate-individual');
Route::get('add-corporate-individual', 'HealthController@addIndivCorporate')->name('add-corporate-individual');
Route::post('register-corporate-individual', 'HealthController@registerIndivCorporate')->name('register-corporate-individual');
Route::post('get-corporate-bill', 'HealthController@getCorporateBill')->name('get-corporate-bill');
Route::get('corporate-printables/{id}', 'HealthController@corporatePrints')->name('corporate-printables');
Route::get('corporate-cert', 'HealthController@corporateCert')->name('corporate-cert');
Route::get('get-corp-cert', 'HealthController@getCorpCert')->name('get-corp-cert');
Route::post('get-corporate-cert', 'HealthController@getCorporateCert')->name('get-corporate-cert');
Route::get('get-corporate-cert/{idNo}', 'HealthController@getCorporateCertificate')->name('get-corporate-cert');
Route::get('get-result-slip/{idNo}', 'HealthController@getResultSlip')->name('get-result-slip');


Route::get('upload-individual', 'HealthController@uploadCorpIndiv')->name('upload-individual');

Route::post('bill-selected', 'HealthController@getSelectedBill')->name('bill-selected');
Route::post('print-corporate-cert', 'HealthController@printCorpCert')->name('print-corporate-cert');
Route::get('suspend-individual/{idNo}', 'HealthController@suspendCorporateIndvi')->name('suspend-individual');
Route::get('print-handler-cert', 'HealthController@printHandlerCertForm')->name('print-handler-cert');
Route::post('print-foodhandler-cert', 'HealthController@getFoodHandlerCert')->name('print-foodhandler-cert');
Route::post('get-otp-indiv', 'HealthController@getOtpIndiv')->name('get-otp-indiv');
Route::get('get-corp-cert-form', 'HealthController@getCorpCertForm')->name('get-corp-cert-form');







//New Seasonal Parking APIS and endpoints
Route::get('seasonal-parking', 'SeasonalController@index')->name('seasonal-parking');
Route::post('add-seasonal-vehicle', 'SeasonalController@addVehicle')->name('add-seasonal-vehicle');
Route::post('remove-seasonal-vehicle', 'SeasonalController@removeEntry')->name('remove-seasonal-vehicle');
Route::post('initiate-seasonal-payment', 'SeasonalController@initiatePayment')->name('initiate-seasonal-payment');
Route::get('get-seasonal-parking-receipt/{id}', 'SeasonalController@getReceipt')->name('get-seasonal-parking-receipt');
Route::get('view-seasonal-parking-receipt/{id}', 'SeasonalController@viewReceipt')->name('view-seasonal-parking-receipt');

//Seasonal parking stickers
Route::get('seasonal-stickers/{id}', 'SeasonalController@getStickers')->name('stickers');
Route::get('view-seasonal-stickers', 'SeasonalController@viewStickers')->name('view-seasonal-stickers');
Route::post('print-stickers', 'SeasonalController@printStickers')->name('print-stickers');


// Fleetfix routes
Route::get('psvs-seasonal-parking', 'FleetfixController@index')->name('psvs-seasonal-parking');
Route::post('get-fleet-psvs', 'FleetfixController@getFleetPSVS')->name('get-fleet-psvs');
Route::post('psvs-mpesa-payment', 'FleetfixController@psvsMpesaPayment')->name('psvs-mpesa-payment');
Route::post('get-psvs-receipt', 'FleetfixController@getReceipt')->name('get-psvs-receipt');
Route::post('print-psvs-receipt', 'FleetfixController@printReceipt')->name('print-psvs-receipt');
Route::post('psvs-bank-payment', 'FleetfixController@psvsBankPayment')->name('psvs-bank-payment');

