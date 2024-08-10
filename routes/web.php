<?php

use App\Http\Controllers\DetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MailsController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ResumeController::class, 'index']);
Route::get('/login', [LoginController::class, 'view'])->name('login');
Route::post('/login/submit', [LoginController::class, 'login']);
Route::get('/admin', [IndexController::class, 'index'])->name('index');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/admin/reply', [ReplyController::class, 'view']);
Route::get('/admin/update', [UpdateController::class, 'index']);
Route::get('/admin/details', [DetailsController::class, 'index'])->name("details");
Route::get('/admin/mails', [MailsController::class, 'getOutboundMails']);
Route::get('/admin/inbox', [MailsController::class, 'getInboundMail']);
Route::get('/admin/inbox/{id}', [MailsController::class, 'getMailInbox']);
Route::get('/admin/mail', [MailsController::class, 'renderMail']);
Route::get('/admin/upload', [MoneyController::class, 'viewForm']);
Route::get('/admin/money', [MoneyController::class, 'view'])->name("money");
Route::get('/admin/bank', [MoneyController::class, 'viewBank'])->name("bank");
Route::get('/admin/addTestimonial', [UpdateController::class, 'viewTestimonialForm'])->name("testimonial");
Route::get('/admin/compose', function () {
    return view('reply');
});
Route::get('/admin/forgot-password', function () {
    return view('forget');
});
Route::fallback(function () {
    return response()->view('404', [], 404);
});
