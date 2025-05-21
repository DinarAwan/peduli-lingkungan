@section('title', '| Edukasi')
@extends('layouts/layout')
@section('content')

<section id="laporan" class="laporan">
    <a href="edukasi/create" type="button" class="btn btn-primary">+ Artikel</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Judul</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->judul}}</td>
                <td><a href="{{url('/edukasi/'.$item->id)}}" type="button" class="btn btn-secondary">Detail</a>
                  <a type="button" class="btn btn-warning" href="{{url('/edukasi/' .$item->id. '/edit')}}">Edit</a>                </td>
              </tr>
            @endforeach
        </tbody>
      </table>

      {{$data->links()}}

</section>
@endsection