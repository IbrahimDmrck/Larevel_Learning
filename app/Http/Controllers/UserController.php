<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['ad']="İbrahim Demircikd";
        return view('anasayfa',$data);
    }
}
