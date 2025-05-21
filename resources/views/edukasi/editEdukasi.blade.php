@section('title', 'Edit | Laporan | Peduli Lingkungan')
@extends('layouts/layout')
@section('content')


<section id="laporan" class="laporan">
    @include('komponen/pesan')
    <h2>EDU <span>KASI</span></h2>
    <p class="paragraf">
      Kita semua memiliki peran dalam menjaga bumi tetap hijau dan sehat. Maka
      dari itu edukasi sangat penting untuk kita
    </p>
    <p class="paragraf">
      Silahkan tulis edukasi jika memiliki masalah terkait sampah
    </p>

    <form method="post" action="{{'/edukasi/'. $data->id}}" id="formlaporan" class="formulir">
      @csrf
      @method('PUT')
      <label for="judul">Nama Pelapor: </label>
      <input
        type="text"
        id="judul" value="{{$data->judul}}"
        name="judul"
        placeholder="Masukkan Judul"
        required
      />

      <label for="isi">Deskripsi Sampah: </label>
      <input
        type="text"
        id="isi" value="{{$data->isi}}"
        name="isi"
        placeholder="Ceritakan Deskripsinya "
        required
      />


      <button type="submit">Edit Edukasi</button>
    </form>

    <div id="Laporanterkirim" class="Laporanterkirim">
      {{-- <h3>Laporan sudah terkirim:</h3> --}}
      <ul id="daftarLaporan" class="daftar"></ul>
    </div>
  </section>

@endsection