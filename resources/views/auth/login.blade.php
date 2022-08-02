<!DOCTYPE html>
<html lang="id">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <!-- Chrome for Android theme color -->
        <meta name="theme-color" content="#f9fafb">
        <link rel="manifest" href="{{ asset('manifest.json') }}">

        <!-- JUDUL -->

        <title>Login - PPLK 2022</title>
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <link rel="manifest" href="{{ asset('assets/js/manifest.json') }}"> --}}
      </head>
<!-- CONTENT -->
<!-- Splash Screen -->
<body>
<div class="launch-logo fade" id="splash-screen">
  <img src="assets/logo-pplk-minified.png" alt="launch-logo-pplk" class="launch-logo-image" />
</div>

<div class="d-flex align-items-center min-vh-100 show-up" id="login-container">
  <!-- Outer Container -->
  <div class="container bg-transparent outer-container my-3">
    <!-- Image Container -->
    <div class="container-fluid d-flex justify-content-center mt-3 mb-3">
      <!-- Image row and column -->
      <div class="row justify-content-center">
        <div class="col-sm-6 col-md-5 text-center text-wrap" id="image">
          <img class="img-fluid" src="assets/logo-pplk-minified.png" alt="logo-pplk-minified" />
        </div>
      </div>
    </div>

    <!-- Login -->
    <div class="container-fluid mb-4 rounded-5 pt-2" id="login">
      <!-- Sambutan-1 -->
      <div class="row justify-content-center">
        <div class="col-6 text-center text-wrap mt-2">
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

      <form action="{{ route("loginPost") }}" method="POST">
        @csrf
        <div class="row justify-content-center">
          <div class="col mb-3 d-flex justify-content-center">
            <input type="email" class="form-control rounded input-size" id="email" placeholder="Email" name="email" required />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col mb-3 d-flex justify-content-center">
            <input type="password" class="form-control rounded input-size" id="password" placeholder="Password" name="password" required />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col d-flex justify-content-center">
            <button type="submit" class="btn text-white rounded fw-bold" id="masuk">MASUK</button>
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
        <button class="w-25 rounded-5 bg-white border-0" id="pwa-button-install" ><span class="gradient-text">Install</span></button>
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
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
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
      console.log('sdasdasad')
        e.preventDefault();
        deferredPrompt = e;
        display.style.display = 'block';
        btn.style.display = 'inline-block';
    });
    

      btn.addEventListener('click', (e) => {
        console.log('sds')
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

</script>
</body>
</html>
