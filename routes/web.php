<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('landing_page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth','CheckDates','RoleAccessUser','CheckEndOfSubscription');
Route::get('/endOfSubscription', 'HomeController@endOfSubscription')->name('endOfSubscription')->middleware('auth');
Route::resource('Bill', BillController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::resource('Complains', ComplainsController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('AddComplains', 'ComplainsController@AddComplains')->name('AddComplains')->middleware('auth');
Route::get('response/{id}', 'ComplainsController@response')->name('response')->middleware('auth');
Route::post('AddResponse', 'ComplainsController@AddResponse')->name('AddResponse')->middleware('auth');


Route::resource('Contact', ContactController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::resource('Maintenance', MaintenanceController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('AddMaintenanceReq', 'MaintenanceController@AddMaintenanceReq')->name('AddMaintenanceReq')->middleware('auth');
Route::get('responseMaintenanceReq/{id}', 'MaintenanceController@responseMaintenanceReq')->name('responseMaintenanceReq')->middleware('auth');
Route::post('AddResponseMaintenanceReq', 'MaintenanceController@AddResponseMaintenanceReq')->name('AddResponseMaintenanceReq')->middleware('auth');

 Route::resource('Notifications', NotificationsController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
 Route::get('NotifSeen', 'NotificationsController@NotifSeen')->name('NotifSeen')->middleware('auth');


 Route::resource('Owner', OwnerController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('OwnerProfile/{id}', 'OwnerController@OwnerProfile')->name('OwnerProfile')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('ListOfBuildings', 'OwnerController@ListOfBuildings')->name('ListOfBuildings')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('AddProparties/{id}', 'OwnerController@AddProparties')->name('AddProparties')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
 



Route::resource('OwnersProparties', OwnersPropartiesController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::resource('PaymentsPirod', PaymentsPirodController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::resource('RenterContract', RenterContractController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('ContractsEndThisMonth', 'RenterContractController@ContractsEndThisMonth')->name('ContractsEndThisMonth')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('PaymentThisMonth', 'RenterContractController@PaymentThisMonth')->name('PaymentThisMonth')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('PaymentNotCollect', 'RenterContractController@PaymentNotCollect')->name('PaymentNotCollect')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');


Route::resource('Renter', RenterController::class)->middleware('auth','CheckDates','RoleAccessUser','CheckEndOfSubscription');
Route::get('RenterProfile/{id}', 'RenterController@RenterProfile')->name('RenterProfile')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('AddRenterContract/{id}', 'RenterController@AddRenterContract')->name('AddRenterContract')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('ShowRenterPayments/{id}', 'RenterController@ShowRenterPayments')->name('ShowRenterPayments')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('CollectRenterPayment/{id}', 'RenterController@CollectRenterPayment')->name('CollectRenterPayment')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');




Route::resource('RenterDoc', RenterDocController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('AddDoc', 'RenterDocController@AddDoc')->name('AddDoc')->middleware('auth');


Route::resource('RsOffice', RsOfficeController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('AddRSOffice', 'RsOfficeController@AddRSOffice')->name('AddRSOffice')->middleware('auth');
Route::post('AddRSOfficeFromAdmin', 'RsOfficeController@AddRSOfficeFromAdmin')->name('AddRSOfficeFromAdmin')->middleware('auth');
Route::get('RSOfficesList', 'RsOfficeController@RSOfficesList')->name('RSOfficesList')->middleware('auth');


Route::resource('Subscription', SubscriptionController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::resource('SubscriptionRequests', SubscriptionRequestsController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('ListOdRenewSubsReq', 'SubscriptionRequestsController@ListOdRenewSubsReq')->name('ListOdRenewSubsReq')->middleware('auth');
Route::get('RenewSubsRespons/{id}/{status}', 'SubscriptionRequestsController@RenewSubsRespons')->name('RenewSubsRespons')->middleware('auth');

 
Route::resource('SubUser', SubUserController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::resource('Tickets', TicketsController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout')->middleware('auth');



Route::view('ShowPromotion','livewire/ShowPromotion')->name('ShowPromotion')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');

Route::resource('Support', SupportController::class)->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('SupportTicket/{id}', 'SupportController@SupportTicket')->name('SupportTicket')->middleware('auth','RoleAccessUser','CheckEndOfSubscription');
Route::get('SupportRequests', 'SupportController@SupportRequests')->name('SupportRequests')->middleware('auth');
Route::get('SupportTicketAdmin/{id}', 'SupportController@SupportTicketAdmin')->name('SupportTicketAdmin')->middleware('auth');
Route::post('AddResponseSupport', 'SupportController@AddResponseSupport')->name('AddResponseSupport')->middleware('auth');
