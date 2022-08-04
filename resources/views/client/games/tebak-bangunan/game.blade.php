@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Tebak Bangunan - Game')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/tebak-bangunan-game.css') }}">
@endsection

@section('content')
<!--Content web mulai dari sini-->
<div class="container-fluid bg-tb min-vh-100 pb-5 mb-5">
  <div class="container pt-5">
    <div class="row pt-5" style="height: 150px">
      <div class="col-3 col-md-2 d-flex justify-content-start">
        <i class="fa-solid navbar-bb fa-angle-left text-white rounded d-flex justify-content-center align-items-center"></i>
      </div>
      <div class="col-6 col-md-8 d-flex justify-content-center align-items-center">
        <h1 class="text-white mb-5 judul-tb text-center">Tebak Bangunan</h1>
      </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
        <div class="card-border w-100 rounded-5">
          <div class="card rounded-5 ap-cd w-100">
            <img src="{{ asset('assets/tebakBangunan/'. $soal->namaBangunan.'.png') }}" alt="" class="card-img-top bg-secondary rounded-5 ratio ratio-16x9" />
            <div class="card-body">
              <h3 class="card-title text-center text-white"> {{ $soal->soal }}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col d-flex justify-content-center align-items-start">
        <h3 class="text-white my-4 judul-tb text-center">Pilihan :</h3>
      </div>
    </div>
    <div class="row justify-content-center">
      
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-start p-0 my-2">
        <button type="button" class="rounded b-rat px-1 d-flex align-items-center justify-content-center bg-white"><span class="chc-rest fs-3 fw-bold"><a href="{{ route('soalTebakBangunan',['id' => Crypt::encrypt($soal->id),'jawaban'=>Crypt::encrypt($soal->jawabanA)]) }}">{{ $soal->jawabanA }}</a></span></button>
      </div>
    
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-start p-0 my-2">
        <button type="button" class="rounded b-rat px-1 d-flex align-items-center justify-content-center bg-white"><span class="chc-rest fs-3 fw-bold"><a href="{{ route('soalTebakBangunan',['id' => Crypt::encrypt($soal->id),'jawaban'=>Crypt::encrypt($soal->jawabanB)]) }}">{{ $soal->jawabanB }}</a></span></button>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-start p-0 my-2">
        <button type="button"class="rounded b-rat px-1 d-flex align-items-center justify-content-center bg-white"><span class="chc-rest fs-3 fw-bold"><a href="{{ route('soalTebakBangunan',['id' => Crypt::encrypt($soal->id),'jawaban'=>Crypt::encrypt($soal->jawabanC)]) }}">{{ $soal->jawabanC }}</a></span></button>
      </div>
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex justify-content-center align-items-start p-0 my-2">
        <button type="button" class="rounded b-rat px-1 d-flex align-items-center justify-content-center bg-white"><span class="chc-rest fs-3 fw-bold"><a href="{{ route('soalTebakBangunan',['id' => Crypt::encrypt($soal->id),'jawaban'=>Crypt::encrypt($soal->jawabanD)]) }}">{{ $soal->jawabanD }}</a></span></button>
      </div>
    </div>
  </div>
</div>

<!--Content web selesai dari sini-->
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script></script>
@endsection
