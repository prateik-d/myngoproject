<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use Mews\Captcha\Captcha;


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
    return view('start');
});

// Route::get('/welcome', function () {
//     return view('start');
// });


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('captcha', [Captcha::class, 'create'])->name('captcha');



