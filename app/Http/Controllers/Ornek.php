<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ornek extends Controller
{
    public function iletisim(){
        return "örnek controller";
    }

    public function selam(){
        return "hakkimizda";   
    }
}
