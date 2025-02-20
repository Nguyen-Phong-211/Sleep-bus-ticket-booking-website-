<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Signup\SignupController;
use App\Http\Controllers\Clause\ClauseController;
use App\Http\Controllers\Schedule\ScheduleController;
use App\Http\Controllers\Consultation\ConsultationController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Otp\OtpController;
use App\Http\Controllers\Reservation\ReservationController;
use App\Http\Controllers\RentalContract\RentalContractController;
use App\Http\Controllers\HireDriver\HireDriverController;
use App\Http\Controllers\Delivery\DeliveryController;
use App\Http\Controllers\Logout\LogoutController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\OrderTicket\OrderTicketController;
use App\Http\Controllers\Departurepoint\DeparturepointController;
use App\Http\Controllers\Arrivalpoint\ArrivalpointController;
use App\Http\Controllers\Lang\LanguageController;

//home
Route::controller(HomeController::class)->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});

// login
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/authu', [LoginController::class, 'login'])->name('login.post');  
});

//signup
Route::prefix('signup')->group(function () {
    Route::get('/', [SignupController::class, 'index'])->name('signup.index');
    Route::post('/', [SignupController::class, 'store'])->name('signup.store');
});

//clasue
Route::prefix('clause')->group(function () {
    Route::get('/', [ClauseController::class, 'index'])->name('clause.index');
});

//schedule
Route::prefix('schedule')->group(function () {
    Route::get('/', [ScheduleController::class, 'index'])->name('schedule.index'); 
    Route::get('/findschedule', [ScheduleController::class, 'getRoutes'])->name('schedule.findschedule');
});

//consultation
Route::prefix('consultation')->group(function () {
    Route::get('/', [ConsultationController::class, 'index'])->name('consultation.index');
});

//contact
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/', [ContactController::class,'store'])->name('contact.store');
});

//otp
Route::prefix('authu')->middleware(['auth'])->group(function () {
    Route::get('/', [OtpController::class, 'index'])->name('authu.index');
    Route::get('misspassword', [OtpController::class, 'showViewMisspassword'])->name('authu.showViewMisspassword');
    Route::post('misspassword', [UserController::class, 'forgotPassword'])->name('authu.forgotPassword');
});

//reservation
Route::prefix('reservation')->group(function () {
    Route::get('/', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/findroute', [ReservationController::class, 'findRoute'])->name('reservation.findRoute');
    Route::get('/findprice', [ReservationController::class, 'findRouteByPrice'])->name('reservation.findRouteByPrice');
    Route::get('/filter', [ReservationController::class, 'filterRoutes'])->name('reservation.filterRoutes');
});

//rental-contract
Route::prefix('rental-contract')->group(function () {
    Route::get('/', [RentalContractController::class, 'index'])->name('rental-contract.index');
});

//hire-driver
Route::prefix('hire-driver')->group(function () {
    Route::get('/', [HireDriverController::class, 'index'])->name('hire-driver.index');
});

//delivery
Route::prefix('delivery')->group(function () {
    Route::get('/', [DeliveryController::class, 'index'])->name('delivery.index');
});

//logout
Route::prefix('logout')->group(function () {
    Route::get('/', [LogoutController::class, 'logout'])->name('logout.logout');
});

//user
Route::prefix('user')->middleware(['auth'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/misspassword', [UserController::class, 'showViewforgotPassword'])->name('misspassword.index');
    Route::post('/update', [UserController::class, 'updateInformation'])->name('user.update');
    Route::post('/update/password', [UserController::class, 'updatePassword'])->name('user.updatePassword');
});

//setting
Route::prefix('setting')->middleware(['auth'])->group(function () {
    Route::get('/', [SettingController::class, 'index'])->name('setting.index');
});

//order-ticket
Route::prefix('reservation/orderticket')->middleware(['auth'])->group(function () {
    Route::get('/', [OrderTicketController::class, 'index'])->name('orderticket.index');
    Route::post('/confirm/transaction_id={transaction_id}&redirect={redirect}', [OrderTicketController::class, 'confirmOrderTicket'])->name('orderticket.confirm');
    Route::post('/storage', [OrderTicketController::class, 'storage'])->name('orderticket.storage');
    Route::get('/success', [OrderTicketController::class, 'success'])->name('orderticket.success');
});

//otp
Route::post('authu/otp/verify', [OtpController::class,'verifyOtp'])->name('otp.verify')->middleware(['auth']);

//language
Route::prefix('lang')->group(function () {
    Route::get('/{locale}', [LanguageController::class,'changeLanguage'])->name('lang.language');
});


// ----------------------------------------------------------------------------------------------------------------------------------------
// Admin
use App\Http\Controllers\Admin\Dashbroad\DashbroadController;
use App\Http\Controllers\Admin\Logout\AdminLogoutController;
use App\Http\Controllers\Admin\Vehicle\ManagementVehicleController;
use App\Http\Controllers\Admin\Vehicle\ManagementTypeVehicleController;
use App\Http\Controllers\Admin\DepartureArrival\DepartureArrivalController;
use App\Http\Controllers\Admin\Seat\ManagementFloorController;
use App\Http\Controllers\Admin\Seat\ManagementSeatController;
use App\Http\Controllers\Admin\Seat\ManagementRowSeatController;
use App\Http\Controllers\Admin\Route\ManagementRouteController;
use App\Http\Controllers\Admin\Route\ManagementScheduleController;
use App\Http\Controllers\Admin\Route\ManagementStopstationController;
use App\Http\Controllers\Admin\Invoice\ManagementContractController;
use App\Http\Controllers\Admin\Invoice\ManagementInvoiceController;
use App\Http\Controllers\Admin\Customer\ManagementCustomerController;
use App\Http\Controllers\Admin\Contact\ManagementContactController;



//Admin
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashbroad', [DashbroadController::class, 'index'])->name('admin.index');
});

// Logout
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/logout', [AdminLogoutController::class, 'logout'])->name('admin.logout');
});

// Vehicle
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/vehicle', [ManagementVehicleController::class, 'index'])->name('admin.vehicle');
});

// TypeVehicle
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/typevehicle', [ManagementTypeVehicleController::class, 'index'])->name('admin.typevehicle');
    Route::post('/typevehicle/update/{id}/{tid}', [ManagementTypeVehicleController::class, 'update'])->name('admin.typevehicle.update');
    Route::get('/typevehicle/insert/{tid}', [ManagementTypeVehicleController::class, 'insert'])->name('admin.typevehicle.insert');
});

// DepartureArrival
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/departurearrival', [DepartureArrivalController::class, 'index'])->name('admin.departurearrival');
});

// Floor
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/floor', [ManagementFloorController::class, 'index'])->name('admin.seat.floor');
});

// Seat
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/seat', [ManagementSeatController::class, 'index'])->name('admin.seat.seat');
});

// RowSeat
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/rowseat', [ManagementRowSeatController::class, 'index'])->name('admin.seat.rowseat');
});

// Route
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/route', [ManagementRouteController::class, 'index'])->name('admin.route.route');
});

// Schedule
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/schedule', [ManagementScheduleController::class, 'index'])->name('admin.route.schedule');
});

// Stopstation
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/stopstation', [ManagementStopstationController::class, 'index'])->name('admin.route.stopstation');
});

// Contract
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/contract', [ManagementContractController::class, 'index'])->name('admin.invoice.contract');
});

// Invoice
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/invoice', [ManagementInvoiceController::class, 'index'])->name('admin.invoice.invoice');
});

// Customer
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/customer', [ManagementCustomerController::class, 'index'])->name('admin.customer.customer');
});

// Contact
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/contact', [ManagementContactController::class, 'index'])->name('admin.contact.contact');
});