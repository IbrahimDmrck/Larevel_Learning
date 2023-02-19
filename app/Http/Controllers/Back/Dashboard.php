<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
class Dashboard extends Controller
{
   public function index(){
    return view('back.dashboard');
   }

   public function deneme(){
    return view('back.adminhome');
   }
}
