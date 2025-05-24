<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Edukasi::orderBy('id', 'asc')->paginate(3);
        return view('edukasi/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        return view('edukasi/createEdukasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'isi'=>'required'
        ]);

        $data = [
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi')
        ];

        Edukasi::create($data);
        return redirect('edukasi')->with('success', 'berhasil membuat edukasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Edukasi::where('id', $id)->first();
        return view('edukasi/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Edukasi::where('id', $id)->first();
        return view('edukasi.editEdukasi')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul'=>'required',
            'isi'=>'required'
        ]);

        $data = [
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi')
        ];
        Edukasi::where('id', $id)->update($data);
        return redirect('edukasi')->with('success', 'berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
