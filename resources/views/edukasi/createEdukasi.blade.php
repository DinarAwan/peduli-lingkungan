@section('title', '| Edukasi')
@extends('layouts/layout')
@section('content')

<section id="laporan" class="laporan">
    
    

    <form method="post" action="/edukasi" id="formlaporan" class="formulir">
        @csrf
      <label for="judul">Judul: </label>
      <input
        type="text"
        id="judul"
        name="judul"
        placeholder="Masukkan Judul Edukasi"
        required
      />

      <label for="deskripsi">isi: </label>
      <input
        type="text"
        id="isi"
        name="isi"
        placeholder="isi dari edukasi"
        required
      />

      <button type="submit">Create</button>
      <button><a href="/admin">Ga jadi deng</a></button>
    </form>

    <div id="Laporanterkirim" class="Laporanterkirim">
      {{-- <h3>Laporan sudah terkirim:</h3> --}}
      <ul id="daftarLaporan" class="daftar"></ul>
    </div>
</section>
@endsection