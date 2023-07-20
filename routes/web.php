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

Route::get('/', function () {
    return view('laundry.index');
});

Route::get('/tambah', [LaundryController::class, 'create']);

Route::post('/tambah', [LaundryController::class, 'store']);

Route::delete('/{id}', [LaundryController::class, 'delete']);
