@section('title', 'Create Daur Ulang')
@extends('layouts/layout')
@section('content')
    
<section id="laporan" class="laporan">
    @include('komponen/pesan')
    <h2>Daur <span>Ulang</span> Sampah</h2>
    <p class="paragraf">
      Kita semua memiliki peran dalam menjaga bumi tetap hijau dan sehat. Maka
      dari iitu mari kita bertukar ide cara untuk medaur ulang sampah
    </p>
    <p class="paragraf">
      Silahkan tulis detail ide anda untuk mendaur ulang sampah
    </p>

    <form method="post" action="/" id="formlaporan" class="formulir" enctype="multipart/form-data">
      @csrf
      <label for="nama">Nama Pelapor: </label>
      <input
        type="text"
        id="nama"
        name="nama"
        placeholder="Masukkan Nama Anda"
        required
      />

      <label for="judul">Jenis Sampah: </label>
      <input
        type="text"
        id="judul"
        name="judul"
        placeholder="Masukkan judul Daur Ulang"
        required
      />

      <label for="deskripsi">Deskripsi Daur Ulang: </label>
      <textarea
        type="text"
        id="deskripsi"
        name="deskripsi"
        placeholder="Ceritakan Deskripsinya"
        required
      ></textarea>

      <label for="foto">Masukan foto Terkait: </label>
      <input
        type="file"
        id="foto"
        name="foto"
        placeholder="Masukkan judul Daur Ulang"
        required
      />


      <button type="submit">Kirim Program Daur Ulang</button>
    </form>
</section>


@endsection
