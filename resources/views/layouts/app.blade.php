<!-- File: resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Jejak Karbon</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .navbar-brand {
            font-weight: 700;
            color: #28a745;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #28a745;
            color: white;
            font-weight: 600;
            border-top-left-radius: 10px !important;
            border-top-right-radius: 10px !important;
        }
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .badge {
            font-size: 90%;
        }
        footer {
            margin-top: 30px;
            padding: 20px 0;
            color: #6c757d;
            border-top: 1px solid #dee2e6;
        }
        .eco-icon {
            color: #28a745;
            margin-right: 5px;
        }
        .nav-link {
            color: #495057;
        }
        .nav-link:hover {
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fas fa-leaf eco-icon"></i> Kalkulator Jejak Karbon
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('carbon.index') }}">Hitung Jejak Karbon</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Kembali ke Halaman Utama</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        


        {{-- ga perlu --}}

        {{-- @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif --}}

        {{-- end ga perlu --}}

        
        @yield('content')

        {{-- <footer class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5><i class="fas fa-leaf eco-icon"></i> Kalkulator Jejak Karbon</h5>
                        <p>Bantu kurangi emisi karbon dan selamatkan bumi kita untuk generasi mendatang.</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Hubungi Kami</h5>
                        <p>
                            <i class="fas fa-envelope eco-icon"></i> info@kalkulatorkarbon.id<br>
                            <i class="fas fa-phone eco-icon"></i> +62 123 4567 890
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <p class="mb-0">&copy; {{ date('Y') }} Kalkulator Jejak Karbon. Hak Cipta Dilindungi.</p>
                    </div>
                </div>
            </div>
        </footer> --}}
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>