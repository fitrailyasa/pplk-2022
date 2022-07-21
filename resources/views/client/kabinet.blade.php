@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Kabinet ')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- lokal css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-kabinet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@endsection

@section('content')
    <!--Content web mulai dari sini-->

    <div class="container-fluid mx-auto mb-5 mt-4 mt-5 text-light">
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-2 my-5 ms-md-auto" style="text-align-last: center;">
                <img src="../assets/Logo-km.png" alt="Image" class="logo1" >
            </div>
            <div class="col-md-6 justify-content-start teks1">
                <h2 class="fw-bold teks2 " >KABINET KM ITERA</h2>
                <h3 class="teks3">KELUARGA MAHASISWA</h3>
                <h3 class="teks4">ITERA 2022-2023</h3>
                <br>
                <h5 class="text-start fw-bold teks5">Pembina</h5>
                <h6 class="text-start teks6">Ir.Muhammad Abi Berkah Nadi.S.T.,M.T</h6>
                <h5 class="text-start fw-bold teks5">Presiden Mahasiswa KM ITERA</h5>
                <h6 class="text-start teks6">Arbi Aditnya Ramadhan Asanagi</h6>
                <h5 class="text-start fw-bold teks5">Dies Natalis</h5>
                <h6 class="text-start teks6">9 Februari 2020</h6>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="mt-md-4 mt-sm-5 justify-content-center d-flex flex-wrap ">
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

        <div class="container justify-content-center mt-3 text-light mt-md-5 mt-sm-2">
        <h2 class="text-center fw-bold teks2">VISI</h2>
        <p class="teks5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dolore, rem vitae iure dolorem consequatur at? Cupiditate temporibus unde quaerat, adipisci minima illo error esse at commodi? Neque, amet porro aut fuga iste odio suscipit hic molestias ratione, excepturi cupiditate dolores consectetur ex veritatis in eum, laudantium debitis eaque facilis!</p>
        <h2 class="text-center teks2">MISI</h2>
        <p class="teks5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, quia commodi voluptate nobis ipsam molestiae quasi fugiat praesentium est, quis illum consectetur voluptatum? Quisquam, totam ullam quod dignissimos praesentium quidem. Veritatis nisi, alias quod corrupti quasi commodi sequi, provident optio voluptates error iure. Culpa, eveniet quo? Error ea natus neque!</p>
        <h2 class="text-center fw-bold teks2">FILOSOFI LOGO</h2>
        <h3 class="text-center fw-bold teks2">KABINET KM</h3>
        <img src="../assets/Logo-km.png" class="mx-auto d-block" alt="...">
        </div>
    </div>
</div>

<div class="slide-container swiper mt-4">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="../assets/dua tangan.jpg" alt="" class="card-img">
                    </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name teks2">Dua Tangan</h2>
                        <p class="description teks4">Dua Tangan, yang mewakili Seribu Tangan, atau sasrabahu yang berarti saling membantu, bekerja sama, dan besinergi meraih masa depan.</p>
                    </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="../assets/daun dan buah persik.jpg" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Daun dan Buah Persik</h2>
                    <p class="description">Daun dan Buah Persik, mewakili rasa peduli dan kasih sayang terhadap sesama, dan menghargai hal-hal sekitar.</p>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="../assets/nyala api.jpg" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Nyala Api</h2>
                    <p class="description">Nyala api, mewakili rasa jiwa yang kuat, bangkit dari keterpurukan, dapat beradaptasi dengan perubahan, dan terus maju</p>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="../assets/burung phoenix.jpg" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Burung Phoenix</h2>
                    <p class="description">Burung Phoenix diartikan pembaruan dan kebangkitan, dan mewakili banyak tema seperti ekosistem, diartikan juga suatu tatanan kesatuan secara utuh dari berbagai aspek yang ada pada kabinet sasrabahu.</p>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>

                    <div class="card-image">
                        <img src="../assets/gerigi.jpg" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Gerigi</h2>
                    <p class="description">Gerigi, atau Gear, mewakili rancangan atau gagasan baru, berdedikasi terhadap suatu penemuan atau materi.</p>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="../assets/nyala lampu obor.jpg" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Nyala Lampu atau Obor</h2>
                    <p class="description">Nyala Lampu atau Obor mewakili inovasi suatu contoh atau kreativitas, daya cipta dan inisiatif kuat dapat menghasilkan sesuatu yang secara materi jauh lebih baik dari pada penemuan-penemuan sebelumnya.</p>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="../assets/orang.jpg" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Orang</h2>
                    <p class="description">Orang mewakili bentuk wibawa, pengakuan, serta kepemimpinan, rasa percaya diri yang tinggi dan tekad yang kuat.</p>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="../assets/perisai.jpg" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Perisai</h2>
                    <p class="description">Perisai mewakili ketahanan, dan kekuatan, yang berfungsi sebagai stimulan bagi kabinet sasrabahu.</p>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay background-gradient"></span>
                    <div class="card-image">
                        <img src="../assets/warna.jpg" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Warna</h2>
                    <p class="description">Warna Orange dan Kuning, mewakili, rasa semangat juang yang tinggi, dedikasi, kemauan untuk bergerak maju, dan pantang menyerah, hal itu mendukung kabinet Sasrabahu dalam menjalankan masa kepemimpinannya. Warna Hitam, memberikan kesan kegelapan yang membuat warna api menyala, menandakan logo bersinar bagaikan pelita dalam kegelapan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>

<div class="container mt-5 text-light" id="terakhir">
    <h4 class="text-center teks2"><strong>ORGANIGRAM</strong></h4>
    <h4 class="text-center teks2"><strong>KM ITERA</strong></h4>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../assets/satu.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../assets/dua.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../assets/tiga.jpg" class="d-block w-100" alt="...">
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
