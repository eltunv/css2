<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Telebe;
use App\Http\Controllers\Veritaban;
use App\Http\Controllers\Melumat;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/telebe' , function(){
    return "telebe adi";
});


Route::get('/web', [Telebe::class , 'test']);
Route::get('/kocur' , [Melumat::class , 'kocur']);