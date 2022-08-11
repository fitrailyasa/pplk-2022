@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'PPLK 2022')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/pplk.css') }}">
@endsection

@section('content')
    <!-- CONTENT -->
    <div class="PPLK">
        <div class="container">
            <h2><strong>PPLK 2022</strong></h2>

            <h3>Deskripsi Singkat</h3>
            <p class="text-light">Cakrawala Swarnadhwipa mempunyai makna, yaitu "Cakrawala" merupakan langit
                yang luas dan "Swarnadhwipa" yang merupakan tanah emas atau nama lain dari pulau Sumatera. PPLK
                2022 ingin menjadi wadah bagi mahasiswa baru untuk menjelajahi tanpa batasan ruang dan waktu. Jadi
                mahasiswa baru dapat berfikir, bertindak kritis, inovatif serta mengimplementasikan potensi sumber daya
                yang dimiliki Lampung dan Sumatera berdasarkan pendidikan, penelitian dan dedikasi.
                </p>
            <h3>FILOSOFI LOGO</h3>
            <a href="#" class="ratio ratio-1x1 pplk-logo">
                <img src="{{ asset('assets/logo-pplk-minified.webp') }}" alt="">
            </a>
        </div>
        <!-- Carousel Deskripsi-->
        <div class="wrapper">
            <div class="carousel owl-carousel">
                <div class="card card-1 ">
                    <div class="d-flex justify-content-center box">
                        <div class="ratio ratio-1x1 box-img">
                            <img src="{{ asset('assets/pplklogo/gajah.webp') }}" class="card-img p-1" alt="">
                        </div>
                    </div>
                    <p class="text-light">
                        Gajah mempunyai makna yaitu sebagai hewan yang kuat dan tingkat ingin tau terhadap pendidikan sangat tinggi. Selain itu, gajah merupakan hewan khas dan unik dari Provinsi Lampung.
                    </p>
               </div>
               <div class="card card-2 ">
                    <div class="d-flex justify-content-center box">
                        <div class="ratio ratio-1x1 box-img">
                            <img src="{{ asset('assets/pplklogo/duku.webp') }}" class="card-img p-1" alt="">
                        </div>
                    </div>
                    <p class="text-light">
                        Duku merupakan buah yang memiliki makna berhati – hati dalam mengambil keputusan dan duku merupakan buah yang sangat umum di seluruh Pulau Sumatera.
                    </p>
               </div>
               <div class="card card-3">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="{{ asset('assets/pplklogo/khudok.webp') }}" class="card-img p-1" alt="">
                    </div>
                </div>
                <p class="text-light">
                    Khudok adalah senjata khas dari Sumatera Selatan yang memiliki makna tentang keberanian dan pantang menyerah terhadap apapun

                </p>
               </div>
               <div class="card card-4 " >
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="{{ asset('assets/pplklogo/Amorphophallus.webp') }}" class="card-img p-1" alt="">
                    </div>
                </div>
                <p class="text-light">
                    Amorphophallus Titanium adalah tanaman bunga bangkai terbesar asal Pulau Sumatera yang memiliki arti semangat dan mempunyai pemikiran inovatif yang tinggi.
                </p>
               </div>
               <div class="card card-5 ">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="{{ asset('assets/pplklogo/angka8.webp') }}" class="card-img p-1" alt="">
                    </div>
                </div>
                <p class="text-light">
                    Angka 8 memiliiki makna yaitu PPLK ke-8 dan diambil dari simbol Aksara Lampung. Aksara Lampung merupakan warisan budaya Lampung.
                </p>
               </div>
               <div class="card card-6 " >
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="{{ asset('assets/pplklogo/kobaranapi.webp') }}" class="card-img p-1" alt="">
                    </div>
                </div>
                <p class="text-light">
                    Mempunyai makna dimana jiwa semangat mahasiswa baru yang sangat membara saat memulai masa perkuliahan.
                </p>
               </div>
               <div class="card card-7 " >
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="{{ asset('assets/pplklogo/orang.webp') }}" class="card-img p-1" alt="">
                    </div>
                </div>
                <p class="text-light">
                    Memiliki makna tentang kegembiraan dan suka cita dalam menggapai impian
                </p>
               </div>
               <div class="card card-8 " >
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="{{ asset('assets/pplklogo/siger.webp') }}" class="card-img p-1" alt="">
                    </div>
                </div>
                <p class="text-light">
                    Siger melambangkan tentang bentuk keseluruhan dari logo. Siger merupakan mahkota di atas kepala yang berarti mahasiswa baru diharapkan menjadi pribadi yang bijaksana dan berpikir kritis dalam setiap keputusan yang dibuat. Siger sendiri merupakan ikon Lampung yang terletak secara geografis di Institut Teknologi Sumatera.
                </p>
               </div>
            </div>
         </div>
    </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script>
        $(".carousel").owlCarousel({
          margin: 5,
          loop: true,
          autoplay: true,
          autoplayTimeout: 2000,
          autoplayHoverPause: true,
          responsive: {
            0:{
              items:1,
              nav: false
            },
            600:{
              items:2,
              nav: false
            },
            1000:{
              items:3,
              nav: false
            }
          }
        });
     </script>
@endsection
