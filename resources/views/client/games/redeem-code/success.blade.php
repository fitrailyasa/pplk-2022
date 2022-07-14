@php
    $data = 0 ;
@endphp
@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Redeem Success')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('assets/css/redeem-code-succes.css') }}">

    <!-- olw-caorusel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
@endsection

@section('content')
    <!-- CONTENT -->
    <!-- start conten -->
    <div class="start-content">
        <div class="container-fluid redeem py-3">
            <div class="row justify-content-around">
                <div class="col-11 text-start">
                    <p class="text-white title-text">REDEEM CODE</p>
                    <div class="line-indikator"></div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-9">
                    <div class="poin-card bg-white rounded-4 justify-content-center text-center">
                        <svg class="rounded-4" id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 120" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(240, 65, 255, 1)" offset="0%"></stop><stop stop-color="rgba(130, 165, 234, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,36L30,46C60,56,120,76,180,78C240,80,300,64,360,50C420,36,480,24,540,16C600,8,660,4,720,6C780,8,840,16,900,30C960,44,1020,64,1080,60C1140,56,1200,28,1260,20C1320,12,1380,24,1440,34C1500,44,1560,52,1620,58C1680,64,1740,68,1800,62C1860,56,1920,40,1980,30C2040,20,2100,16,2160,24C2220,32,2280,52,2340,66C2400,80,2460,88,2520,76C2580,64,2640,32,2700,24C2760,16,2820,32,2880,32C2940,32,3000,16,3060,22C3120,28,3180,56,3240,68C3300,80,3360,76,3420,68C3480,60,3540,48,3600,46C3660,44,3720,52,3780,62C3840,72,3900,84,3960,78C4020,72,4080,48,4140,38C4200,28,4260,32,4290,34L4320,36L4320,120L4290,120C4260,120,4200,120,4140,120C4080,120,4020,120,3960,120C3900,120,3840,120,3780,120C3720,120,3660,120,3600,120C3540,120,3480,120,3420,120C3360,120,3300,120,3240,120C3180,120,3120,120,3060,120C3000,120,2940,120,2880,120C2820,120,2760,120,2700,120C2640,120,2580,120,2520,120C2460,120,2400,120,2340,120C2280,120,2220,120,2160,120C2100,120,2040,120,1980,120C1920,120,1860,120,1800,120C1740,120,1680,120,1620,120C1560,120,1500,120,1440,120C1380,120,1320,120,1260,120C1200,120,1140,120,1080,120C1020,120,960,120,900,120C840,120,780,120,720,120C660,120,600,120,540,120C480,120,420,120,360,120C300,120,240,120,180,120C120,120,60,120,30,120L0,120Z"></path></svg>
                        <div class="pesan">
                            <p class="text-primary m-0 text-pesan">selamat....</p>
                            <p class="jawaban">kelompok kamu menjawab dengan benar</p>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <div class="col-6">
                                <p class="fs-4 fw-bold text-kelompok">Kelompok kamu mendapat poin</p>

                                <div class="poin-container rounded-circle mx-auto">
                                    <p id="poin">10</p>
                                    <p class="text-poin">poin</p>
                                </div>
                            </div>
                        </div>
                        <svg class="rounded-4" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 120" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(240, 65, 255, 1)" offset="0%"></stop><stop stop-color="rgba(130, 165, 234, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,72L21.8,62C43.6,52,87,32,131,30C174.5,28,218,44,262,58C305.5,72,349,84,393,90C436.4,96,480,96,524,94C567.3,92,611,88,655,82C698.2,76,742,68,785,64C829.1,60,873,60,916,58C960,56,1004,52,1047,60C1090.9,68,1135,88,1178,90C1221.8,92,1265,76,1309,58C1352.7,40,1396,20,1440,14C1483.6,8,1527,16,1571,24C1614.5,32,1658,40,1702,36C1745.5,32,1789,16,1833,8C1876.4,0,1920,0,1964,0C2007.3,0,2051,0,2095,18C2138.2,36,2182,72,2225,90C2269.1,108,2313,108,2356,100C2400,92,2444,76,2487,66C2530.9,56,2575,52,2618,54C2661.8,56,2705,64,2749,72C2792.7,80,2836,88,2880,84C2923.6,80,2967,64,3011,52C3054.5,40,3098,32,3120,28L3141.8,24L3141.8,120L3120,120C3098.2,120,3055,120,3011,120C2967.3,120,2924,120,2880,120C2836.4,120,2793,120,2749,120C2705.5,120,2662,120,2618,120C2574.5,120,2531,120,2487,120C2443.6,120,2400,120,2356,120C2312.7,120,2269,120,2225,120C2181.8,120,2138,120,2095,120C2050.9,120,2007,120,1964,120C1920,120,1876,120,1833,120C1789.1,120,1745,120,1702,120C1658.2,120,1615,120,1571,120C1527.3,120,1484,120,1440,120C1396.4,120,1353,120,1309,120C1265.5,120,1222,120,1178,120C1134.5,120,1091,120,1047,120C1003.6,120,960,120,916,120C872.7,120,829,120,785,120C741.8,120,698,120,655,120C610.9,120,567,120,524,120C480,120,436,120,393,120C349.1,120,305,120,262,120C218.2,120,175,120,131,120C87.3,120,44,120,22,120L0,120Z"></path></svg>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-redeem">SELESAI</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-redeem">LEADERBOARD</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
