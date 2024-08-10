<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailsController;
use App\Http\Controllers\MobileAppController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\WhatsappWebhook;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Login api
Route::post('login', [LoginController::class, 'apiLogin']);

Route::post('contact', [ContactController::class, 'contact']);
Route::post('data', [UpdateController::class, 'updateData']);
Route::post('reply', [ReplyController::class, 'reply']);

// Get inbound emails
Route::get('getInboundMails', [MailsController::class, 'getInboundMails']);

// Upload Bank Statements
Route::post('upload', [MoneyController::class, 'uploadData']);

// Add new testimonial
Route::post('addTestimonial', [UpdateController::class, 'addTestimonial']);

// get incomming whatsapp messages
Route::post('getWhatsappMessage', [WhatsappWebhook::class, 'getIncommingMessage']);
Route::post('getFallbackDetails', [WhatsappWebhook::class, 'getFallbackDetails']);

Route::post("get-emails", [MobileAppController::class, 'getEmails']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
