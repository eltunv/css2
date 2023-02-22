<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class Veritaban extends Controller
{
    public function kocur()
    {
      DB::table('bilgiler')->insert([
        "metin"=>"Hersey yaxsi olacaq"
      ]);
    }
}
