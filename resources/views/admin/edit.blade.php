@section('title', 'Edit | Daur ULang | Peduli Lingkungan')
@extends('layouts/layout')
@section('content')


<section id="laporan" class="laporan">
    @include('komponen/pesan')
    <h2>Daur <span>Ulanh</span></h2>
    <p class="paragraf">
      Kita semua memiliki peran dalam menjaga bumi tetap hijau dan sehat. Maka
      dari itu mari kita mendaur ulang sampah
    </p>
    <p class="paragraf">
      Silahkan tulis program daur ulang yang anda miliki
    </p>

    <form method="post" action="{{'/admin/'. $data->id}}" id="formlaporan" class="formulir">
      @csrf
      @method('PUT')
      <label for="nama">Nama Pengisi: </label>
      <input
        type="text"
        id="nama" value="{{$data->nama}}"
        name="nama"
        placeholder="Masukkan Nama pelapor"
        required
      />

      <label for="judul">Jenis Sampah: </label>
      <input
        type="text"
        id="judul" value="{{$data->judul}}"
        name="judul"
        placeholder="Masukkan jenis sampah"
        required
      />

      <label for="deskripsi">Deskripsi Daur Ulang: </label>
      <input
        type="text"
        id="deskripsi" value="{{$data->deskripsi}}"
        name="deskripsi"
        placeholder="Ceritakan Deskripsinya "
        required
      />

      <button type="submit">Edit Laporan</button>
      <button><a href="/admin">Ga jadi deng</a></button>
    </form>

    <div id="Laporanterkirim" class="Laporanterkirim">
      {{-- <h3>Laporan sudah terkirim:</h3> --}}
      <ul id="daftarLaporan" class="daftar"></ul>
    </div>
  </section>

@endsection