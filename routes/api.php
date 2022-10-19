<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {//
//    return $request->user();//
//});//

/*
*Task
*URL : http://localhost:8000/api/halo
*Method: GET
*Exec: function
*Return: JSON=> {"me": "contoh"}

*/

Route::get('halo', function(){
    $data = ["me" => "contoh"];

    return $data;
});


Route::resource('hellocontroller', HelloController::class);
Route::resource('siswa', SiswaController::class);