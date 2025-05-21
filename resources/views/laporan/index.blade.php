@section('title', ' | Laporan')
@extends('layouts/layout')
@section('content')
    
<div class="mt-5 p-5 ml-5 mr-5 mb-5">
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Pelapor</th>
        <th scope="col">Jenis Sampah</th>
        <th scope="col">Definisi</th>
        <th scope="col">Dusun</th>
        <th scope="col">RT</th>
        <th scope="col">Jalan</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($data as $item)
       
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->kategori->kategori}}</td>
        <td>{{$item->DefinisiLokasi}}</td>
        <td>{{$item->dusun}}</td>
        <td>{{$item->RT}}</td>
        <td>{{$item->NamaJalan}}</td>
        <td>{{$item->tanggal}}</td>
        <td><a type="button" class="btn btn-warning" href="{{url('/laporan/' .$item->id. '/edit')}}">Edit</a>
          <form class="d-inline" action="{{'/laporan/'. $item->id}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
           

      </tr>
      @endforeach
    </tbody>
  </table>
  {{$data->links()}}
</div>
@endsection