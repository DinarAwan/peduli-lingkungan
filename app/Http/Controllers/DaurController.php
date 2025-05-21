<?php

namespace App\Http\Controllers;

use App\Models\Daur;
use Illuminate\Http\Request;

class DaurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Daur::orderBy('id', 'asc')->paginate(4);
        return view('dashboard')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createDaur');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'judul'=>'required',
            'deskripsi'=>'required',
            'foto' => 'required|mimes:jpg, jpeg, png, gif'
        ]);
        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis')."." . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);
        $data = [
            'nama' => $request->input('nama'),
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'foto' => $foto_nama,
        ]; 
        Daur::create( $data);
        return redirect('/#Program')->with('success', 'Berhasil Menambahakan program Daur ulang');
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
        $data = Daur::where('id', $id)->first();

        return view('admin/editLangkah')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        
        ]);

        $data = [
            'langkah1'=>$request->input('langkah1'),
       
           
        ];
        Daur::where('id', $id)->update($data);
        return redirect('/')->with('success', 'berhasil menambahkan langkah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
