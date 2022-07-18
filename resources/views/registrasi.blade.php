@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Registrasi')

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
          <!-- Nama -->
          <div class="row justify-content-center align-items-center">
            <div class="col mb-3 d-flex justify-content-center align-items-center">
              <input type="text" class="form-control rounded input-size" id="name" placeholder="Nama" required autocomplete="off"/>
            </div>
          </div>
          <!-- Akhir Nama -->

          <!-- NIM -->
          <div class="row justify-content-center align-items-center">
            <div class="col mb-3 d-flex justify-content-center align-items-center">
              <input type="text" class="form-control rounded input-size" id="nim" placeholder="NIM" required />
            </div>
          </div>
          <!-- Akhir NIM -->

          <!-- Email -->
          <div class="row justify-content-center">
            <div class="col mb-3 d-flex justify-content-center">
              <input type="email" class="form-control rounded input-size" id="email" placeholder="Email" required />
            </div>
          </div>
          <!-- Akhir Email -->

          <!-- Password -->
          <div class="row justify-content-center">
            <div class="col mb-3 d-flex justify-content-center">
              <input type="password" class="form-control rounded input-size" id="password" placeholder="Password" required />
            </div>
          </div>
          <!-- Akhir Password -->

          <!-- Konfirmasi Password -->
          <div class="row justify-content-center">
            <div class="col mb-3 d-flex justify-content-center">
              <input type="password" class="form-control rounded input-size" id="password" placeholder="Konfirmasi Password" required />
            </div>
          </div>
          <!-- Akhir Password -->

          <!-- Divisi -->
          <div class="row justify-content-center align-items-center">
            <div class="col mb-3 d-flex justify-content-center align-items-center">
              <select class="form-select rounded input-size text-secondary" aria-label="Default select example">
                <option selected value="PS">Phalosawala</option>
                <option value="GAP">Galexia Argloap</option>
                <option value="ARP">Arp 273</option>
                <option value="MW">Milky Way</option>
                <option value="AM">Ardhames</option>
                <option value="HD">Heliodile</option>
                <option value="HS">Harterous</option>
                <option value="ZN">Zenith</option>
                <option value="SR">Sagitarius</option>
                <option value="AR">Artherius</option>
                <option value="PX">Phoenix</option>
              </select>
            </div>
          </div>
          <!-- Akhir Divisi -->

          <!-- Instagram -->
          <div class="row justify-content-center align-items-center">
            <div class="col mb-3 d-flex justify-content-center align-items-center">
              <input type="text" class="form-control rounded input-size" id="ig" placeholder="Instagram (tanpa @)" required />
            </div>
          </div>
          <!-- Akhir Instagram -->

          <!-- Tombol Daftar -->
          <div class="row justify-content-center">
            <div class="col d-flex justify-content-center">
              <button type="submit" class="btn btn-danger rounded fw-bold" id="masuk">DAFTAR</button>
            </div>
          </div>
          <!-- Akhir Tombol Daftar -->
        </form>
        <div class="row justify-content-center">
          <div class="col-6 d-flex justify-content-center text-center">
        </div>
      </div>
      <!-- Akhir Login -->
    </div>
</section>
@endsection

