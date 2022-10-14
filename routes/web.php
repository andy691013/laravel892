<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IaController;
use App\Http\Controllers\PdfController;
use App\Http\Livewire\Leads;
use App\Http\Controllers\ResizeController;

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
    return view('kelvin1');
});
Route::get('/ia',[IaController::class,'index']);
 




Route::get('/lead', Leads::class);
Route::get('/ia/{lead}',[IaController::class,'showia']);
Route::get('/fu1/{lead}',[IaController::class,'showfu1']);
Route::get('/fu2/{lead}',[IaController::class,'showfu2']);
Route::get('/fu3/{lead}',[IaController::class,'showfu3']);
Route::get('/fu4/{lead}',[IaController::class,'showfu4']);

Route::get('ia/pdf/{lead}', [PdfController::class, 'generatePDF']);

Route::get('/post-crop', [ResizeController::class, 'index']);
Route::post('/resize-file', [ResizeController::class, 'resizeImage'])->name('resizeImage');