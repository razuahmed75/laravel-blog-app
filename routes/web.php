<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingleController;
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


// single controller
Route::get('/single', SingleController::class);


// grouping controller
Route::group(['prefix'=> 'profile'],function (){

    Route::get('/info',function(){
        return 'Info page';
    });
    Route::get('/update',function(){
        return 'Update page';
    });
    Route::get('/delete',function(){
        return 'Delete page';
    });

});

