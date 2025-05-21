@section('title', 'Rincian Daur Ulang | Peduli Lingkungan')
@extends('layouts/layout')
@section('content')
    
<div class="mt-5 p-5 ml-5 mr-5 mb-5">
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama</th>
        <th scope="col">Judul</th>
        <th scope="col">Definisi</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($data as $item)
       
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->judul}}</td>
        <td>{{$item->deskripsi}}</td>
        <td><a type="button" class="btn btn-warning" href="{{url('/admin/' .$item->id. '/edit')}}">Edit</a>
          <form class="d-inline" action="{{'/admin/'. $item->id}}" method="POST">
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