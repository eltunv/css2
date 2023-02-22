<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Telebe;
use App\Http\Controllers\Veritaban;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/telebe' , function(){
    return "telebe adi";
});


Route::get('/web', [Telebe::class , 'test']);
