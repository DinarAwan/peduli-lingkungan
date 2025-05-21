@section('title', 'Create Daur Ulang')
@extends('layouts/layout')
@section('content')


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        justify-content: center;
        align-items: center;
        height: 90vh;
        background-color: #f8f8f8;
    }
    .co {
        display: flex;
        margin-top: 60px;
        width: 100%;
        height: 100%;
        background-color: white;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .left {
        width: 50%;
        margin-top: 0px;
        padding: 60px;
    }
    .right {
        width: 50%;
        margin-top: ;
        padding: 60px;
        border-left: 1px solid #ccc;
    }
    .image-placeholder {
        width: 300px;
        height: 300px;
        align-items: center;
        background-color: #d3d3d3;
        margin-bottom: 15px;
    }
    .yuhu {
        font-size: 28px;
        margin-bottom: 10px;
    }
    .hp {
        font-size: 20px;
        line-height: 1.5;
        color: #333;
    }
    .yoman{
        margin-left: 450px;
    }
</style>
</head>
<div class="co">
    <div class="left">
            @if ($data->foto)
            <img width="300px" height="300px" src="{{url('foto'. '/'. $data->foto)}}" class="image-placeholder rounded" alt="..."> 
            @endif
            {{-- <img src="Logo.jpg" alt="" class="image-placeholder"> --}}
        <h1 class="yuhu"><b>{{$data->judul}}</b></h1>
        <p class="hp">
            {{$data->deskripsi}}
        </p>
    </div>
    <div class="right">
        <h3 class="mb-3">Tutorial Membuat Daur Ulang</h3>
        <a class="btn btn-success mb-3 yoman" href="{{url('/langkah/'. $data->id. '/edit')}}" ><div class="header">+ Tambahkan Tutorial</div></a>
        <p>{!!$data->langkah1!!}</p>
    </div>
</div>








{{-- <section class="laporan">
    <h6>Project by {{$data->nama}}</h6>
    <h3>{{$data->judul}}</h3>
             @if ($data->foto)
            <img width="300px" height="300px" src="{{url('foto'. '/'. $data->foto)}}" class="card-img-top rounded" alt="..."> 
            @endif
</section>
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .container {
            background: white;
            padding: 15px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
            text-align: center;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
        }
        .download-btn {
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
        .content img {
            width: 100%;
            border-radius: 10px;
            margin: 10px 0;
        }
        h2 {
            color: #333;
            font-size: 16px;
        }
        p {
            color: #555;
            font-size: 14px;
        }
        ul {
            text-align: left;
            padding-left: 20px;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        .btn{
            position: static;
        }
    </style>
<body>
    <div class="container">
        <a href="{{url('/langkah/'. $data->id. '/edit')}}" ><div class="header">+Langkah 1</div></a>
       
        <div class="content">
            @if ($data->foto)
            <img src="{{url('foto'. '/'. $data->foto)}}" class="card-img-top" alt="..."> 
            @endif
            <h2>Periksa bagian dasar botol.</h2>
            <p>{{$data->langkah1}}</p>
            </div>
    </div>
    
    
</body> --}}
    @endsection 



