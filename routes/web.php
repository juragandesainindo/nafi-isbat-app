<?php

use App\Http\Livewire\BayarNafiIsbat;
use App\Http\Livewire\HomeLivewire;
use App\Http\Livewire\JamaahBayar;
use App\Http\Livewire\JamaahLivewire;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', HomeLivewire::class);
Route::get('jamaah', JamaahLivewire::class)->name('jamaah');
Route::get('jamaah-bayar/{id}', JamaahBayar::class)->name('jamaah.show');
