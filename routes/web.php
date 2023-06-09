<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudiBukuController;

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
    return view('welcome');
});

Route::get('/budibuku',[BudiBukuController::class,'index']);
Route::get('/budibuku/create',[BudiBukuController::class,'create']);
Route::post('/budibuku/store',[BudiBukuController::class,'store']);
Route::get('/budibuku/{IDBuku}',[BudiBukuController::class,'edit']);
Route::put('/budibuku/{IDBuku}',[BudiBukuController::class,'update']);
Route::delete('/budibuku/{IDBuku}',[BudiBukuController::class,'destroy']);