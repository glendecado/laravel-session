<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('index');

Route::post('/storeValue', [PageController::class, 'getValue'])->name('getValue');

Route::get('/SessionDisplay', [PageController::class, 'displayValue'])->name('display');

Route::delete('/delete', [PageController::class, 'deleteValue'])->name('deleteValue');
