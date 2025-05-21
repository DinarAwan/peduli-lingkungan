<?php

namespace App\Http\Controllers;

use App\Models\Daur;
use Illuminate\Http\Request;

class DaurController extends Controller
{
    public function index(){
        // $data = Daur::all();
        $data = Daur::orderBy('id', 'desc')->paginate(4);
        return view('dashboard')->with('data', $data);
    }
}
