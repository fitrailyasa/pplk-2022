@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Login')

@section('style')
<!-- STYLES -->
<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection

@section('content')
<!-- CONTENT -->
<!-- Splash Screen -->
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

      <form>
        <div class="row justify-content-center">
          <div class="col mb-3 d-flex justify-content-center">
            <input type="email" class="form-control rounded input-size" id="email" placeholder="Email" required />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col mb-3 d-flex justify-content-center">
            <input type="password" class="form-control rounded input-size" id="password" placeholder="Password" required />
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
        <button class="w-25 rounded-5 bg-white border-0" id="pwa-button-install"><span class="gradient-text">Install</span></button>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col d-flex justify-content-center">
        <button class="w-25 rounded-5 bg-white border-0" id="pwa-button-cancel" onclick="DoAnimation();"><span class="gradient-text">Not now</span></button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  function DoAnimation() {
    var targetElement = document.getElementById("pwa");
    targetElement.classList.remove("animatein");
    targetElement.className += " animate";
  }
</script>
<script src="{{ asset('assets/js/mainServiceWorker.js') }}"></script>
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

</script>
@endsection
