@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Login')

@section('style')
<!-- STYLES -->
<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection

@section('content')
<!-- CONTENT -->
<section>
    <!-- Outer Container -->
    <div class="container-lg bg-transparent">
      <!-- Image Container -->
      <div class="container-fluid d-flex justify-content-center mt-3 mb-3">
        <!-- Image row and column -->
        <div class="row justify-content-center">
          <div class="col-sm-6 col-md-5 text-center text-wrap" id="image">
            <img class="img-fluid" src="{{ asset('assets/logo-pplk-minified.png') }}" alt="" />
          </div>
        </div>
      </div>

      <!-- Login -->
      <div class="container-fluid mb-4 rounded pt-2" id="login">
        <!-- Sambutan-1 -->
        <div class="row justify-content-center">
          <div class="col-sm-12 col-md-5 text-center text-wrap">
            <h2 class="text-white">Selamat Datang di PPLK 2022</h2>
          </div>
        </div>
        <!-- Akhir Sambutan-1 -->

        <!-- Sambutan-2 -->
        <div class="row justify-content-center">
          <div class="col-4 text-center text-wrap">
            <p class="text-white">Mulai Menjelajah sekarang!</p>
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
              <button type="submit" class="btn text-light rounded fw-bold" id="masuk">MASUK</button>
            </div>
          </div>
        </form>
        <div class="row justify-content-center">
          <div class="col-6 d-flex justify-content-center text-center">
            <p class="text-muted">
              <small>Lupa Password? <a href="" class="text-decoration-none text-light fw-light">Lapor Daplok!</a></small>
            </p>
          </div>
        </div>
      </div>
      <!-- Akhir Login -->
    </div>
</section>
@endsection

