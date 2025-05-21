<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
  <section id="Edukasi" class="pgrd">
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
  </section>
</body>
</html>