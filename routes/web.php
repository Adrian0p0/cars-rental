<?php

use App\Http\Controllers\FrontPanelPages;
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

//https://pro-theme.com/html/revus/home.html#

Route::get('/', [FrontPanelPages::class,'landingPage'] )->name('acasa');

Route::get('/new-cars-to-sale', [FrontPanelPages::class,'SellCarsPage'] )->name('forselling');

Route::prefix('admin')->group(function(){
    Route::get('/vhvygybjhbhj', [FrontPanelPages::class,'ContactPage'])->name('contact');

    Route::get('/despre-noi', [FrontPanelPages::class,'DespreNoi'])->name('despre-noi');

});


Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
