<?php

use App\Http\Controllers\LaundryController;
use App\Http\Livewire\FormAddLaundry;
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

Route::get('/', [LaundryController::class, 'index']);

Route::get('/create', [LaundryController::class, 'create']);

Route::post('/create', [LaundryController::class, 'store']);

Route::delete('/{id}', [LaundryController::class, 'delete']);

Route::get('/search', [LaundryController::class, 'search']);

Route::patch('/{id}', [LaundryController::class, 'done']);

Route::get('/history', [LaundryController::class, 'history']);

Route::get('/report', [LaundryController::class, 'report']);