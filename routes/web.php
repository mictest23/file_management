<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

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
    return view('file');
});

Route::post('/test', [FileController::class, 'test']);
Route::post('/delete', [FileController::class, 'delete']);
Route::get('/table', [FileController::class, 'table']);
