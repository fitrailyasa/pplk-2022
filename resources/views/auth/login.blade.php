@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="theme-color" content="#09f" />
        <meta name="description" content="DESKRIPSI" />
        <meta name="keywords" content="KATA KUNCI" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="author" content="Fitra Ilyasa" />
        <meta name="copyright" content="PPLK 2022" />
        <meta name="robots" content="follow" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Website PPLK 2022" />
        <meta property="og:url" content="URL" />
        <link rel="manifest" href="./manifest.webmanifest" />

        <!-- JUDUL -->
        <title>Login - PPLK 2022</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="manifest" href="{{ asset('manifest.json') }}">
      </head>
<!-- CONTENT -->
<!-- Splash Screen -->
<body>
<div class="launch-logo fade" id="splash-screen">
  <img src="../assets/logo-pplk-minified.png" alt="launch-logo-pplk" class="launch-logo-image" />
</div>

<div class="d-flex align-items-center min-vh-100 show-up" id="login-container">
  <!-- Outer Container -->
  <div class="container bg-transparent outer-container my-3">
    <!-- Image Container -->
    <div class="container-fluid d-flex justify-content-center mt-3 mb-3">
      <!-- Image row and column -->
      <div class="row justify-content-center">
        <div class="col-sm-6 col-md-5 text-center text-wrap" id="image">
          <img class="img-fluid" src="../assets/logo-pplk-minified.png" alt="logo-pplk-minified" />
        </div>
      </div>
    </div>

    <!-- Login -->
    <div class="container-fluid mb-4 rounded-5 pt-2" id="login">
      <!-- Sambutan-1 -->
      <div class="row justify-content-center">
        <div class="col-6 text-center text-wrap mt-2">
        {{-- <div class="card-header">{{ __('Login') }}</div> --}}
          <h2 class="text-white">Selamat Datang di PPLK 2022</h2>
        </div>
      </div>
      <!-- Akhir Sambutan-1 -->

      <!-- Sambutan-2 -->
      <div class="row justify-content-center">
        <div class="col col-12 text-center text-wrap">
          <p class="text-white text-size fw-light">Mulai Menjelajah sekarang!</p>
        </div>
      </div>
      <!-- Akhir Sambutan-2 -->

      <form action="{{ route('loginPost') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
          <div class="col mb-3 d-flex justify-content-center">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror</div>
        </div>
        <div class="row justify-content-center">
          <div class="col mb-3 d-flex justify-content-center">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        </div>
        <div class="row justify-content-center">
          <div class="col d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
          </div>
        </div>
      </form>
      <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center text-center">
          <p class="text-muted text-size">
            <small class="text-white-50">Lupa Password? <a href="" class="text-decoration-none text-light fw-light">Lapor Daplok!</a></small>
          </p>
        </div>
      </div>
    </div>
    <!-- Akhir Login -->
  </div>
  <div class="container-fluid w-100 px-0 pt-0 animatein" id="pwa">
    <div class="row justify-content-center pt-3">
      <div class="col d-flex justify-content-center text-center text-white">
        <h1 class="d-block">Install PPLK 2022</h1>
      </div>
    </div>
    <hr class="pwa-line mt-0" />
    <div class="row justify-content-center">
      <div class="col-10 d-flex justify-content-center text-center text-white"><p>Akses lebih mudah dengan mengunduh aplikasi PPLK 2022 ke homescreen anda</p></div>
    </div>
    <div class="row justify-content-center mb-2">
      <div class="col d-flex justify-content-center">
        <button class="w-25 rounded-5 bg-white border-0" id="pwa-button-install" onclick="install()"><span class="gradient-text">Install</span></button>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col d-flex justify-content-center">
        <button class="w-25 rounded-5 bg-white border-0" id="pwa-button-cancel" onclick="DoAnimation();"><span class="gradient-text">Not now</span></button>
      </div>
    </div>
  </div>
</div>
@section('script')
<script>
  function DoAnimation() {
    var targetElement = document.getElementById("pwa");
    targetElement.classList.remove("animatein");
    targetElement.className += " animate";
  }
</script>
<script src="{{ asset('mainServiceWorker.js') }}"></script>
<script>

    // Screen download app.
    // btn-add-home-screen
    $(document).ready(function(){
        $('#pwa-button-cancel').click(function(){
            $('#pwa').css('display', 'none');
        })
    })

    let deferredPrompt;
    let display = document.getElementById("pwa");
    var btn = document.getElementById("pwa-button-install");
    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
        display.style.display = 'block';
        btn.style.display = 'inline-block';
    });
    function install(){
      btn.addEventListener('click', (e) => {
      btn.style.display = 'none';
      display.style.display = 'none';
      deferredPrompt.prompt();
      deferredPrompt.userChoice.then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
              console.log('User accepted the A2HS prompt');
          } else {
              console.log('User dismissed the A2HS prompt');
          }
          deferredPrompt = null;
          });
      });
    }

</script>
</body>
</html>
