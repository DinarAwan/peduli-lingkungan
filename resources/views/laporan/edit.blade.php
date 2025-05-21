@section('title', 'Edit | Laporan | Peduli Lingkungan')
@extends('layouts/layout')
@section('content')


<section id="laporan" class="laporan">
    @include('komponen/pesan')
    <h2>Laporan <span>Lingkungan</span></h2>
    <p class="paragraf">
      Kita semua memiliki peran dalam menjaga bumi tetap hijau dan sehat. Maka
      dari itu Laporkan jika ada yang merusak lingkungan
    </p>
    <p class="paragraf">
      Silahkan tulis laporan jika memiliki masalah terkait sampah
    </p>

    <form method="post" action="{{'/laporan/'. $data->id}}" id="formlaporan" class="formulir">
      @csrf
      @method('PUT')
      <label for="nama">Nama Pelapor: </label>
      <input
        type="text"
        id="nama" value="{{$data->nama}}"
        name="nama"
        placeholder="Masukkan Nama pelapor"
        required
      />

      <label for="jenisSampah">Jenis Sampah: </label>
      <input
        type="text"
        id="jenisSampah" value="{{$data->jenisSampah}}"
        name="jenisSampah"
        placeholder="Masukkan jenis sampah"
        required
      />

      <label for="DefinisiLokasi">Deskripsi Sampah: </label>
      <input
        type="text"
        id="DefinisiLokasi" value="{{$data->DefinisiLokasi}}"
        name="DefinisiLokasi"
        placeholder="Ceritakan Deskripsinya "
        required
      />

      <label for="dusun">Lokasi Kejadian (Dusun): </label>
      <input
        type="text"
        id="dusun" value="{{$data->dusun}}"
        name="dusun"
        placeholder="Masukkan Lokasi Dusun Anda"
        required
      />
      <label for="NamaJalan">Lokasi Kejadian (Nama Jalan): </label>
      <input
        type="text"
        id="NamaJalan" value="{{$data->NamaJalan}}"
        name="NamaJalan"
        placeholder="Masukkan Lokasi Dusun Anda"
        required
      />

      <label for="RT">Lokasi Kejadian (RT): </label>
      <input
        type="text"
        id="RT" value="{{$data->RT}}"
        name="RT"
        placeholder="Masukkan Lokasi RT Anda"
        required
      />

      <label for="tanggal">Tanggal Kejadian:</label>
      <input type="date" id="tanggal" name="tanggal" value="{{$data->tanggal}}">

      <button type="submit">Edit Laporan</button>
    </form>

    <div id="Laporanterkirim" class="Laporanterkirim">
      {{-- <h3>Laporan sudah terkirim:</h3> --}}
      <ul id="daftarLaporan" class="daftar"></ul>
    </div>
  </section>

@endsection