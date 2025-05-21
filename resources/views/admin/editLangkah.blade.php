{{-- @section('title', 'Edit | Daur ULang | Peduli Lingkungan')
@extends('layouts/layout')
@section('content') --}}
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 4</title>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>




</head>
<body>
<section id="laporan" class="laporan">
    @include('komponen/pesan')
    

    <form method="post" action="{{'/langkah/'. $data->id}}" id="formlaporan">
      @csrf
      @method('PUT')
      <label for="nama"></label>
      
      <textarea id="summernote"  type="text"
      id="langkah1" 
      name="langkah1">{{$data->langkah1}}</textarea>
      <script>
        $('#summernote').summernote({
          placeholder: 'Masukan Tutorial',
          height: 100
        });
      </script>
  
{{-- 
      <textarea
        type="text"
        id="langkah1" 
        name="langkah1"
        placeholder="tambahkan tutorial"
        required
      >{{$data->langkah1}}</textarea> --}}

      

      <button type="submit">Edit Laporan</button>
      <button><a href="/">Ga jadi deng</a></button>
    </form>

    <div id="Laporanterkirim" class="Laporanterkirim">
      {{-- <h3>Laporan sudah terkirim:</h3> --}}
      <ul id="daftarLaporan" class="daftar"></ul>
    </div>
  </section>

</body>

{{-- @endsection --}}