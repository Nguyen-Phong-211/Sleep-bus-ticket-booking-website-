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

//home
Route::controller(HomeController::class)->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});

// login
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
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
    Route::get('/', [ScheduleController::class, 'getAllDeparArriRoute'])->name('schedule.index'); 
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
Route::prefix('authu')->group(function () {
    Route::get('/', [OtpController::class, 'index'])->name('authu.index');
    Route::get('misspassword', [OtpController::class, 'showViewMisspassword'])->name('authu.showViewMisspassword');
    Route::post('misspassword', [UserController::class, 'forgotPassword'])->name('authu.forgotPassword');
});

//reservation
Route::prefix('reservation')->group(function () {
    Route::get('/', [ReservationController::class, 'index'])->name('reservation.index');
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
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/misspassword', [UserController::class, 'showViewforgotPassword'])->name('misspassword.index');
    Route::post('/update', [UserController::class, 'updateInformation'])->name('user.update');
    Route::post('/update/password', [UserController::class, 'updatePassword'])->name('user.updatePassword');
});

//setting
Route::prefix('setting')->group(function () {
    Route::get('/', [SettingController::class, 'index'])->name('setting.index');
});

//order-ticket
Route::prefix('reservation/orderticket')->group(function () {
    Route::get('/', [OrderTicketController::class, 'index'])->name('orderticket.index');
});

//otp
Route::post('authu/otp/verify', [OtpController::class,'verifyOtp'])->name('otp.verify');


