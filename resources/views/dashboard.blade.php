@section('title', 'dashboard')
<link rel="stylesheet" href="css/card.css">
@extends('layouts/layout')
@section('content')
<style>
  body {
  min-height: 3300px;
}
</style> 

<!-- Hero section start-->
<section id="Home" class="Hero">
    <div class="overlay"></div>
    <div class="Text">
      <h6>بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيم</h6>
      <h2>Selamat Datang Di</h2>
      <h1>Peduli Lingkungan</h1>
      <h2>Universitas Ahmad Dahlan</h2>
    </div>
  </section>

  <!-- Daur ulang start -->
  <section id="Program" class="pgrd">
    <h2><span>Program</span> Daur Ulang</h2>
    <p>
      @include('komponen/pesan')
      <a href="/create" class="btn btn-success">+ Tambah Program Daur ulang</a>


      <div class="containerr">
        @foreach ($data as $item)
        <div class="cardcuy">
            @if ($item->foto)
            <img src="{{url('foto'. '/'. $item->foto)}}" class="cardcuy-image" alt="..."> 
            @endif
            <a href="{{url('/admin/'. $item->id)}}" class="tagg"> Detail -> </a>

            <div class="cardcuy-content">
                <h3 class="cardcuy-title">{{$item->judul}}</h3>
                <p class="cardcuy-description">
                  {{$item->deskripsi}}   
                </p>
            </div>
        </div>
        @endforeach
    </div>



      {{-- <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($data as $item)
        <div class="col">
          <div class="njay card">
            @if ($item->foto)
            <img src="{{url('foto'. '/'. $item->foto)}}" class="card-img-top" alt="..."> 
            @endif
            <div class="card-body">
              <h5 class="card-title">{{$item->judul}}</h5>
              <p class="card-text">{{$item->deskripsi}}</p>
              <a href="{{url('/admin/'. $item->id)}}" class="btn btn-success"> Detail -> </a>
            </div>
          </div>
        </div>
        @endforeach
      </div> --}}
    </p>
    {{$data->links()}}
  </section>
  {{-- uji --}}

  {{-- ini edukasi --}}


  {{-- <section id="Edukasi" class="pgrd">
    <h2><span>Edu</span>kasi</h2>
    <p>
      @include('komponen/pesan')
      <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($data as $item)
        <div class="col">
          <div class="njay card">
         
            <img src="/gambar/daur1.jpg" class="card-img-top" alt="..."> 
          
            <div class="card-body">
              <h5 class="card-title">{{$item->judul}}</h5>
              <p class="card-text">{{$item->isi}}</p>
              <a href="{{url('/admin/'. $item->id)}}" class="btn btn-success"> Detail -> </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </p>
    {{$data->links()}}
  </section> --}}


  {{-- end edukasi --}}

  <!-- Laporan lingkungan start-->
  
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

    <form method="post" action="/laporan" id="formlaporan" class="formulir">
      @csrf
      <label for="nama">Nama Pelapor: </label>
      <input
        type="text"
        id="nama" value="{{Session::get('nama')}}"
        name="nama"
        placeholder="Masukkan Nama pelapor"
        required
      />

      <label for="jenisSampah">Jenis Sampah: </label>
      <input
        type="text"
        id="jenisSampah" value="{{Session::get('jenisSampah')}}"
        name="jenisSampah"
        placeholder="Masukkan jenis sampah"
        required
      />

      <label for="DefinisiLokasi">Deskripsi Sampah: </label>
      <textarea
        type="text"
        id="DefinisiLokasi" value="{{Session::get('DefinisiLokasi')}}"
        name="DefinisiLokasi"
        placeholder="Ceritakan Deskripsinya "
        required
      ></textarea>

      <label for="dusun">Lokasi Kejadian (Dusun): </label>
      <input
        type="text"
        id="dusun" value="{{Session::get('dusun')}}"
        name="dusun"
        placeholder="Masukkan Lokasi Dusun Anda"
        required
      />
      <label for="NamaJalan">Lokasi Kejadian (Nama Jalan): </label>
      <input
        type="text"
        id="NamaJalan" value="{{Session::get('NamaJalan')}}"
        name="NamaJalan"
        placeholder="Masukkan Lokasi Dusun Anda"
        required
      />

      <label for="RT">Lokasi Kejadian (RT): </label>
      <input
        type="text"
        id="RT" value="{{Session::get('RT')}}"
        name="RT"
        placeholder="Masukkan Lokasi RT Anda"
        required
      />

      <label for="tanggal">Tanggal Kejadian:</label>
      <input type="date" id="tanggal" name="tanggal" value="{{Session::get('tanggal')}}">

      <button type="submit">Kirim Laporan</button>
    </form>

    <div id="Laporanterkirim" class="Laporanterkirim">
      {{-- <h3>Laporan sudah terkirim:</h3> --}}
      <ul id="daftarLaporan" class="daftar"></ul>
    </div>
  </section>
  <!-- Laporan Lingkungan end -->

  <!-- Daur ulang start -->
  

    <!-- Kontak start -->
    <section id="kontak" class="contact">
      <h2 class="mb-4"><span>Hubungi</span> Kami</h2>
      <div class="container">
        <div class="sesi-kontak">
          <div class="Kontak">
          <h3>Kontak</h3>
          <div class="cont">
            
            <a href="https://wa.me/6285709247100" target="_blank"><button class="fancy-button"><img src="/gambar/wa-removebg-preview.png">Admin 1</button></a>
        </div>
        <div class="cont mt-2">
            <a href="https://wa.me/6285886461541" target="_blank"><button class="fancy-button"><img src="/gambar/wa-removebg-preview.png">Admin 2</button></a>
      </div>
        
          <p><img src="/gambar/pngtree-email-vector-icon-png-image_4279324-removebg-preview.png">Pedulilingkungan@gmail.com</p>
        </div>

        <div class="jelajahi">
          <h3>Jelajahi</h3>
          <ul>
            
            <li>Program daur ulang</li>
            <li>Laporan lingkungan</li>
            <li>Untuk Instansi Desa</li>
          </ul>
        </div>

        <div class="sosialmedia">
          <h3>Social Media</h3>
        <a href="https://wa.me/6285709247100" target="_blank"><img src="/gambar/wa-removebg-preview.png"></a>
        <a href="https://www.instagram.com/dinar_awann?igsh=MXFoaDd2aWl6M3huNw==" target="_blank"><img src="/gambar/ig-removebg-preview.png"></a>
        <a href="#"><img src="/gambar/twitte-removebg-preview.png"></a>
        <a href="#"><img src="/gambar/tiktok-removebg-preview.png"></a>
      </div>
    </div>

      <div class="Map">
        <h3>Alamat</h3>
        <p>Jl. Ringroad Selatan, Kragilan, Tamanan, Kec. Banguntapan, Kabupaten Bantul,</p><p> Daerah Istimewa Yogyakarta 55191</p>
      </div>
      </div>
     </section>
    <!-- Kontak end -->

@endsection
