@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Kabinet ')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- lokal css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-kabinet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')
    <!--Content web mulai dari sini-->

    <div class="container-fluid mx-auto mb-5 mt-4 mt-5 text-light">
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-2 my-5 ms-md-auto" style="text-align-last: center;">
                <img src="{{ asset('assets/logo/logokabinet.png') }}" alt="Image" class="logo1" >
            </div>
            <div class="col-md-6 justify-content-start teks1">
                <h2 class="fw-bold teks2 " >KABINET KM ITERA</h2>
                <h3 class="teks3">KELUARGA MAHASISWA</h3>
                <h3 class="teks3">ITERA 2022-2023</h3>
                <br>
                <h5 class="text-start fw-bold teks4">Pembina</h5>
                <h6 class="text-start teks5">Ir. Muhammad Abi Berkah Nadi, S.T., M.T</h6>
                <h5 class="text-start fw-bold teks4">Presiden Mahasiswa KM ITERA</h5>
                <h6 class="text-start teks5">Arbi Aditnya Ramadhan Asanagi</h6>
                <h5 class="text-start fw-bold teks4">Dies Natalis</h5>
                <h6 class="text-start teks5">9 Februari 2020</h6>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="mt-md-4 mt-sm-5 justify-content-center d-flex flex-wrap " id="medsos">
            <a href="https://twitter.com/KM_ITERA" target="_blank" class="buttons background-gradient sosmed mx-lg-5 mx-sm-3">
            <div class="icon text-center ">
                <i class="fab fa-twitter"></i>
            </div>
            </a>
            <a href="https://www.instagram.com/km_itera/" target="_blank" class="buttons background-gradient sosmed mx-lg-5 mx-sm-3">
            <div class="icon text-center ">
                <i class="fab fa-instagram"></i>
            </div>
            </a>
            <a href="https://www.youtube.com/c/KMITERA/featured" target="_blank" class="buttons background-gradient sosmed mx-lg-5 mx-sm-3">
            <div class="icon text-center ">
                <i class="fab fa-youtube"></i>
            </div>
            </a>
        </div>

    </div>


        <div  style="text-align:center;"class="container justify-content-center mt-3 text-light mt-md-5 mt-sm-2">
        <h2 class="text-center fw-bold teks3">VISI</h2>
        <p class="teks5">“Mewujudkan KM ITERA yang harmonis, cerdas, berprestasi dan responsif dengan latar belakang teknologi dan tridharma perguruan tinggi”</p>
        <h2 class="text-center fw-bold teks3">MISI</h2>
        <p class="teks5">1.Mewadahi dan memberikan control untuk menyalurkan karya inovasi mahasiswa</p>
        <p class="teks5">2.Menyediakan edukasi tentang sistem keorganisasian supaya terwujudnya internal organisasi yang baik demi kembalinya minat demokrasi mahasiswa</p>
        <p class="teks5">3.Memaksimalkan penyaluran informasi dan pelayanan advokasi dengan pengawalan yang terstruktur dan terarah Refleksi KM ITERA</p>
        <h2 class="text-center fw-bold teks3">FILOSOFI LOGO</h2>
        <h3 class="text-center fw-bold teks3">KABINET KM</h3>
        <img src="{{ asset('assets/logo/logokabinet.png') }}" class="mx-auto d-block" alt="...">
        </div>
    </div>
</div>

<div class="slide-container swiper mt-4">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">

            <div class="card swiper-slide" style="height: 270px">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="{{ asset('assets/logo/lumbalumba.png') }}" alt="lumba lumba" class="card-img">
                    </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Lumba-Lumba</h2>
                        <p class="description">Merepresentasikan Kecerdasan</p>
                    </div>
            </div>

            <div class="card swiper-slide" style="height: 270px">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="{{ asset('assets/logo/Lingkaran.png') }}" alt="lingkaran" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Lingkaran</h2>
                    <p class="description">Mempresentasikan Integritas dan kerjasama</p>
                </div>
            </div>

            <div class="card swiper-slide" style="height: 270px">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="{{ asset('assets/logo/Tunasapikal.png') }}" alt="Tunasapikal" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Tunas Apikal</h2>
                    <p class="description">Merepresentasikan siap berprosesdan bermetaforsis bersama</p>
                </div>
            </div>

            <div class="card swiper-slide" style="height: 270px">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="{{ asset('assets/logo/ombak.png') }}" alt="ombak" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Ombak bolak balik</h2>
                    <p class="description">Merepresentasikan sikap responsif dan aktif </p>
                </div>
            </div>

            <div class="card swiper-slide" style="height: 270px">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>

                    <div class="card-image">
                        <img src="{{ asset('assets/logo/daunfotosintesis.png') }}" alt="daunfotosintesis" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Daun Fotosintesis</h2>
                    <p class="description">Merepresentasikan kebermanfaatan dengan terus berkarya dan beradaptasi</p>
                </div>
            </div>

            <div class="card swiper-slide" style="height: 270px">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="{{ asset('assets/logo/daun7.png') }}" alt="daun7" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Angka 7</h2>
                    <p class="description">Merepresentasikan Kabinet KM ITERA periode 7</p>
                </div>
            </div>

            <div class="card swiper-slide" style="height: 270px">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="{{ asset('assets/logo/gerigi.png') }}" alt="gerigi" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">5 Mata Gerigi</h2>
                    <p class="description">Mepresentasikan jurusan di ITERA yang saling bersinergi (2 jurusan dan 3 subjurusan)</p>
                </div>
            </div>

            <div class="card swiper-slide" style="height: 270px">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="{{ asset('assets/logo/lidahapi.png') }}" alt="lidahapi" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">3 Lidah Api</h2>
                    <p class="description">Mepresentasikan keberanian untuk membuat perubahan, revolusi, dan tridharma perguruan tinggi</p>
                </div>
            </div>

            <div class="card swiper-slide" style="height: 270px">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="{{ asset('assets/logo/tangan.png') }}" alt="tangan" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Tangan Menengadah</h2>
                    <p class="description">Mepresentasikan penopang dan pemberi kontribusi kontribusi positif</p>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>

<div class="container mt-5 text-light" id="terakhir">
    <h4 class="text-center teks3"><strong>ORGANIGRAM</strong></h4>
    <h4 class="text-center teks3"><strong>KM ITERA</strong></h4>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/organigram/akspro.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/organigram/kesekre.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/organigram/keuangan.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/organigram/eksternal.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/organigram/kominfo.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/organigram/internal.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/organigram/ppm.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/organigram/presmasekjen.png') }}" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/js/kabinet.min.js') }}"></script>
    <script src="{{ asset('assets/js/kabinet.js') }}"></script>
@endsection
