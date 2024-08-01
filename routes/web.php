<?php

use App\Http\Controllers\CareerAdviceController;
use App\Http\Controllers\ChatbotController;
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

Route::get('/', [CareerAdviceController::class, 'index'])->name('home');
Route::get('/advice/{id}', [CareerAdviceController::class, 'show']);
Route::post('/chatbot', [ChatbotController::class, 'handle']);
Route::get('/advice', [CareerAdviceController::class, 'adviceIndex'])->name('advice');
Route::get('/resources', [CareerAdviceController::class, 'resourcesIndex'])->name('resources');
Route::get('/about', [CareerAdviceController::class, 'aboutIndex'])->name('about');
Route::get('/contact', [CareerAdviceController::class, 'contactIndex'])->name('contact');
Route::post('/contact/send', [CareerAdviceController::class, 'sendContactForm'])->name('contact.send');
Route::get('/get-started', [CareerAdviceController::class, 'getStartedIndex'])->name('getStarted');
Route::get('/join-now', [CareerAdviceController::class, 'joinNowIndex'])->name('joinNow');

