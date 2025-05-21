<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        // $data = Laporan::all();
        $data = Laporan::orderBy('id', 'asc')->paginate(7);
        return view('laporan/index')->with('data', $data);
    }
}
