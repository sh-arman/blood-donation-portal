<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\BloodBankController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/', 'home')->name('home');
Route::view('/campaign', 'campaign')->name('campaign');
Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');


// Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');


Route::get('/donor-register', [DonorController::class, 'index'])->name('donor_register');
Route::post('/donor-register-store', [DonorController::class, 'store'])->name('donor_register_store');

Route::get('/bloodbank', [BloodBankController::class, 'index'])->name('blood_bank');
