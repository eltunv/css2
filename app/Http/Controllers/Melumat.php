<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Melumat extends Controller
{
    public function kocur()
    {
       DB::table('melumatlar')->insert([
          "metin"=>"Bu melumatlar duzdu"
       ]);
    }
}
