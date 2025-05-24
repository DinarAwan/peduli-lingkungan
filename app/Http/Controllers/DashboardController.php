<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
         $edu = Edukasi::all();
        return view('edukasi.untukPengguna', compact('edu'));
    }
}
