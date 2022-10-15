<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
});

Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/profile',[PagesController::class, 'profile'])->name('profile');
Route::get('/ourteams',[PagesController::class, 'teams'])->name('teams');
Route::get('/aboutus',[PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus',[PagesController::class, 'contactus'])->name('contactus');
Route::get('/services',[PagesController::class, 'services'])->name('services');
