@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Tebak Bangunan - Home')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/tebak-bangunan-home.css') }}">
@endsection

@section('content')
    <!-- CONTENT -->
<!--Content web mulai dari sini-->
<div class="container-fluid bg-tb min-vh-100 pb-5 mb-5">
    <div class="container pt-5">
      <div class="row pt-5" style="height: 150px">
        <div class="col-3 col-md-1 d-flex justify-content-end">
          <i class="fa-solid navbar-bb fa-angle-left text-white rounded d-flex justify-content-center align-items-center"></i>
        </div>
        <div class="col-6 col-md-10">
          <div class="w-100 h-100 bg-secondary"></div>
        </div>
        <div class="col-3 col-md-1"></div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center align-items-start">
          <h1 class="text-white mt-5 judul-tb text-center">Tebak Bangunan</h1>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center align-items-start">
          <hr class="bordered" style="width: 27px; height: 3px; background-color: #3991c9; opacity: 1" />
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center align-items-start">
          <p class="text-white text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar morbi augue at sed montes, malesuada velit. Diam.</p>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center align-items-start"></div>
      </div>
        
      <div class="row d-flex justify-content-around">
        @foreach ($soals as $soal) 
        
        <div class="col-6 col-sm-4 rounded-5 p-0 my-3 d-flex justify-content-center card-bangunan">
          
          <div class="card rounded-5 m-1 ap-cd">
            <img src="{{ asset('assets/Logo-PPLK.png') }}" alt="" class="card-img-top bg-secondary rounded-5 ratio ratio-4x3" />
            <a class="btn my-lg-4" href="/tebak-bangunan-game/{{ $soal->id }}" >
            <div class="card-body">
              <p class="card-text text-center">SOAL {{ $soal->id }}</p>
              <h5 class="card-title text-center">Buka</h5>
            </div>
          </a>
          </div>
        
        </div>
      
        @endforeach
      </div>
      
    </div>
  </div>
  <!--Content web selesai dari sini-->
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
      ScrollReveal({ reset: true });
    </script>
    <script>
      ScrollReveal().reveal(".card-bangunan");
    </script>
    <script type="text/javascript">
      let nav = document.querySelector("#navbar-desktop");

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 50) {
          nav.classList.add("background-gradient", "shadow");
        } else {
          nav.classList.remove("background-gradient", "shadow");
        }
      });
    </script>
@endsection
