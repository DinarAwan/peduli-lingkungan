<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <style>
    body {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url('/gambar/logo3.webp');
        background-size: cover;
        background-position: center;
    }

    .login-container {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(9px);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        width: 400px;
        transition: all 0.3s ease;
    }

    .login-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .login-container h2 {
        color: #fff;
        text-align: center;
        margin-bottom: 30px;
        font-size: 2em;
        font-weight: 600;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .input-group {
        position: relative;
        margin-bottom: 30px;
    }

    .input-group input {
        width: 100%;
        padding: 15px;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        outline: none;
        border-radius: 10px;
        color: #fff;
        font-size: 1em;
        transition: all 0.3s ease;
    }

    .input-group input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .input-group input:focus {
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
    }

    .btn-login {
        position: relative;
        width: 100%;
        padding: 15px; 
        background: linear-gradient(45deg,  #40b94c, #02f52e);
        border: none;
        border-radius: 10px;
        color: white;
        font-size: 1.1em;   
        font-weight: 600;
        cursor: pointer;
        transition: all 0.4s ease;
        overflow: hidden;
        z-index: 1;
    }

    .btn-login:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background: linear-gradient(45deg, #39b739, #48d65b);
        transition: all 0.4s ease;
        z-index: -1;
    }

    .btn-login:hover:before {
        width: 100%;
    }

    .btn-login:hover {
        transform: scale(1.02) translateY(-2px);
        box-shadow: 0 7px 25px rgba(40, 215, 46, 0.5);
        letter-spacing: 1px;
    }

    .btn-login:active {
        transform: scale(0.98) translateY(0);
        box-shadow: 0 3px 15px rgba(255, 107, 107, 0.3);
    }

    .input-group {
        position: relative;
        margin-bottom: 30px;
    }

    .input-group input {
        width: 100%;
        padding: 15px 20px;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid transparent;
        border-radius: 10px;
        color: #fff;
        font-size: 1em;
        transition: all 0.3s ease;
    }

    .input-group input:focus {
        border-color: rgba(110, 229, 54, 0.5);
        box-shadow: 0 0 20px rgba(255, 107, 107, 0.2);
        background: rgba(255, 255, 255, 0.15);
    }

    .input-group input:hover {
        background: rgba(255, 255, 255, 0.15);
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.02); }
        100% { transform: scale(1); }
    }

    .btn-login:focus {
        animation: pulse 1s infinite;
        outline: none;
    }

    @media (max-width: 480px) {
        .login-container {
            width: 90%;
            padding: 20px;
        }
    }

    /* Tambahan efek ripple saat klik */
    .btn-login .ripple {
        position: absolute;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        transform: scale(0);
        animation: ripple 0.6s linear;
        pointer-events: none;
    }

    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
</style>


    <div class="login-container">
        @if($errors->any())
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
        @endforeach
        @endif
        <h2>Login</h2>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="input-group">
                <input type="email"  name="email" id="email" class="form-control" value="{{Session::get('email')}}" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" name="submit" class="btn-login" onclick="createRipple(event)">Login</button>
        </form>
    </div>

 


    <script>
        function createRipple(event) {
            const button = event.currentTarget;
            const ripple = document.createElement('span');
            const rect = button.getBoundingClientRect();
            
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;
            
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.className = 'ripple';
            
            button.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

   {{-- <div class="mt-4 w-50 center border rounded px-3 py-3 mx-auto">
        <h1 class="">Login</h1>
        <form action="/sesi/login" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{Session::get('email')}}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Email</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </div>
        </form>
    </div> --}}
