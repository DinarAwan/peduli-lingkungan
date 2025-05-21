<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LaporanController extends Controller
{

    public function index()
    {
        $data = Laporan::orderBy('id', 'asc')->paginate(7);
        return view('laporan/index')->with('data', $data);
    }

 
    public function create()
    {
        return view('dashboard');
    }

  
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('jenisSampah', $request->jenisSampah);
        Session::flash('DefinisiLokasi', $request->DefinisiLokasi);
        Session::flash('dusun', $request->dusun);
        Session::flash('RT', $request->RT);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('NamaJalan', $request->NamaJalan);
        $request->validate([
            'nama'=>'required',
            'kategori_id'=>'required',
            'DefinisiLokasi'=>'required',
            'dusun'=>'required',
            'RT'=>'required|numeric',
            'tanggal'=>'required',
            'NamaJalan'=>'required'
        ]);
        $data = [
            'nama'=> $request->input('nama'),
            'kategori_id'=> $request->input('jenisSampah'),
            'DefinisiLokasi'=> $request->input('DefinisiLokasi'),
            'dusun'=> $request->input('dusun'),
            'RT'=> $request->input('RT'),
            'tanggal'=> $request->input('tanggal'),
            'NamaJalan'=> $request->input('NamaJalan')
        ];
        laporan::create($data);
        return redirect('/#laporan')->with('success', 'berhasil membuat laporan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Laporan::where('id', $id)->first();

        return view('laporan/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'DefinisiLokasi'=>'required',
            'dusun'=>'required',
            'RT'=>'required|numeric',
            'tanggal'=>'required',
            'NamaJalan'=>'required'
        ]);
        $data = [
            'nama'=> $request->input('nama'),
            'kategori_id'=> $request->input('jenisSampah'),
            'DefinisiLokasi'=> $request->input('DefinisiLokasi'),
            'dusun'=> $request->input('dusun'),
            'RT'=> $request->input('RT'),
            'tanggal'=> $request->input('tanggal'),
            'NamaJalan'=> $request->input('NamaJalan')
        ];
        Laporan::where('id', $id)->update($data);
        return redirect('/laporan')->with('success', 'berhasil update laporan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Laporan::where('id', $id)->delete();
        return redirect('/laporan')->with('success', 'sukses hapus data'); 
    }
}
