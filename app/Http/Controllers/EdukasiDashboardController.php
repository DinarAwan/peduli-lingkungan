<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;

class EdukasiDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dat = Edukasi::orderBy('id', 'asc')->paginate(3);
        return view('edukasi.untukPengguna', ['edukasi' => $dat]);
        // pindah ke kontroller Dashboard Kontroller
    }
}
