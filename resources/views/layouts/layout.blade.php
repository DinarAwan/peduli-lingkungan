<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>

    <!-- Fonts start -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="/css/stylesheet.css" />
    
    <!-- Fonts end -->
  </head>
  <body>
    <!-- Navbar start -->
    <header>
      <div class="logo">
        <h1><span>Peduli </span>Lingkungan</h1>
      </div>
      {{-- <nav>
        <ul>
          <li><a href="#" class="aktif"></a></li>
          <li><a href="/#">Home</a></li>
          <li><a href="/#Program">Program Daur Ulang</a></li>
          <li><a href="/#Edukasi">Edukasi</a></li>
          <li><a href="/#laporan">Laporan</a></li>
          <li><a href="/#kontak">Kontak</a></li>
          <li><a href="/carbon">Emisi</a></li>
          @if(Auth::check())
          <li class="mt-4 nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu background-primary">
            <li class="text-body-secondary"><a href="/laporan">Detail Laporan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="/admin">Rincian</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="/edukasi">Edukasi For Admin</a></li>
            <li><hr class="dropdown-divider"></li>
              <li><a href="/sesi/logout">Logout</a></li>   
          </ul>
        </li>
        @else
        @if(Auth::check() && Auth::user()->hasRole('admin'))
        <li><a href="/sesi">Login</a></li>
        @endif
        @endif
        </ul>
      </nav> --}}
      <!-- Kode navigasi dengan kondisi login -->
      <nav>
        <ul>
          <li><a href="#" class="aktif"></a></li>
          <li><a href="/#">Home</a></li>
          <li><a href="/#Program">Program Daur Ulang</a></li>
          <li><a href="/#Edukasi">Edukasi</a></li>
          <li><a href="/#laporan">Laporan</a></li>
          <li><a href="/#kontak">Kontak</a></li>
          <li><a href="/carbon">Emisi</a></li>
          
          @if(Auth::check())
          @if(Auth::user()->role == 'admin')
              <li class="mt-4 nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin
                </a>
                <ul class="dropdown-menu background-primary">
                  <li class="text-body-secondary"><a href="/laporan">Detail Laporan</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a href="/admin">Rincian</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a href="/edukasi">Edukasi For Admin</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a href="/sesi/logout">Logout</a></li>   
                </ul>
              </li>
            @else
              <li><a href="/sesi/logout">Logout</a></li>
            @endif
          @else
            <li><a href="/sesi">Login</a></li>
          @endif
        </ul>
      </nav>
    </header>
    <!-- Navbar end -->
    
    @yield('content')
    
    
    <!-- Daur ulang end -->

    <!-- Hero Section end -->
    <script src="java.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>