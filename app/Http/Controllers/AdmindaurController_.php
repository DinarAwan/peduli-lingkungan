<?php

namespace App\Http\Controllers;

use App\Models\Daur;
use Illuminate\Http\Request;

class AdmindaurController extends Controller
{
    public function index(){
        $data = Daur::orderBy('id', 'desc')->paginate(4);
        return view('admin/rincianDaur')->with('data', $data);
        
    }

    
}
