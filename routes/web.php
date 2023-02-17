<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CenterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('center')->group(function () {
    Route::get('/{slug}', [CenterController::class, 'index']);

    Route::post('/query', [CenterController::class, 'query'])->name('center.query');

});

Route::get('/thank-you', [CenterController::class, 'thank'])->name('thank-you');

