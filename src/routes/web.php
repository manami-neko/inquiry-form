<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Models\Inquiry;

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



Route::get('/', [InquiryController::class, 'index']);
Route::post('/inquiries/confirm', [InquiryController::class, 'confirm']);
Route::post('/thanks', [InquiryController::class, 'store']);
// Route::post('/inquiries/confirm', [InquiryController::class, 'update']);
