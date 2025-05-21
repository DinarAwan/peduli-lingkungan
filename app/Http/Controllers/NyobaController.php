<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NyobaController extends Controller
{
    public function index(){
        return view('nyoba.admin');
    }
    public function batagor(){
        return view('nyoba.pengguna');
    }
}
