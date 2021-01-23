<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [PageController::class, 'index'])->name('index');
    Route::get('/column_name', [PageController::class, 'column_name'])->name('column_name');
    Route::get('/settings', [PageController::class, 'settings'])->name('settings')->middleware('isAdmin');
    Route::post('/monthsend', [PageController::class, 'month_send_Click'])->name('monthsend');
    Route::post('/', [PageController::class, 'get_curr_day_report'])->name('curr_date');
});

Route::get('/info', [PageController::class, 'info'])->name('info');
Route::get('/chartData', [PageController::class, 'chartData']);
Route::get('/', [PageController::class, 'index'])->name('home');

Auth::routes();

Auth::routes();



Auth::routes();
