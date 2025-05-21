<?php

namespace App\Http\Controllers;

use App\Models\Daur;
use Illuminate\Http\Request;

class AdmindaurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Daur::orderBy('id', 'asc')->paginate(4);
        return view('admin/rincianDaur')->with('data', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Daur::where('id', $id)->first();
        return view('admin/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Daur::where('id', $id)->first();

        return view('admin/edit')->with('data', $data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'judul'=>'required',
            'deskripsi'=>'required',
        ]);
        $data = [
            'nama'=> $request->input('nama'),
            'judul'=> $request->input('judul'),
            'deskripsi'=> $request->input('deskripsi'),
         
        ];
        Daur::where('id', $id)->update($data);
        return redirect('/admin')->with('success', 'berhasil update laporan');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Daur::where('id', $id)->delete();
        return redirect('/admin')->with('success', 'berhhasisks');
    }
}
