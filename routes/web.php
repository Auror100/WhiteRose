<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\iu_Controller;
use App\Http\Controllers\inu_Controller;
use App\Http\Controllers\uni_Controller;
use App\Http\Controllers\ninu_Controller;
use App\Http\Controllers\dashboard_Controller;

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

Route::get('/',[dashboard_Controller::class,'create']);


/* ============================================================================================= */

    // Importante / Urgente (IU)

    Route::post('/iu',[iu_Controller::class,'store']);

    Route::post('/iu/id',[iu_Controller::class,'destroy']);



    // Importante / Não Urgente (INU)

    Route::post('/inu',[inu_Controller::class,'store']);

    Route::post('/inu/id',[inu_Controller::class,'destroy']);


    // Urgente / Não Importante (UNI)

    Route::post('/uni',[uni_Controller::class,'store']);

    Route::post('/uni/id',[uni_Controller::class,'destroy']);


    // Não Importante / Não Urgente (NINU)

    Route::post('/ninu',[ninu_Controller::class,'store']);

    Route::post('/ninu/id',[ninu_Controller::class,'destroy']);



/* ============================================================================================= */

