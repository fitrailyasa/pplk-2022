<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#09f" />
    <meta name="description" content="Program Pengenalan Lingkungan Kampus (PPLK) merupakan acara pesta penyambutan terbesar untuk mahasiswa baru yang diselenggarakan setiap tahunnya di Institut Teknologi Sumatera (ITERA). PPLK ITERA hadir sebagai akses utama bagi mahasiswa baru untuk mengawali gerbang perkuliahan, yang berupa kaderisasi awal terpusat yang diselenggarakan oleh Keluarga Mahasiswa Institut Teknologi Sumatera (KM ITERA) untuk menyambut mahasiswa baru." />
    <meta name="keywords" content="PPLK, Program Pengenalan Lingkungan Kampus, PPLK ITERA 2022, KM-ITERA" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="author" content="Fitra Ilyasa" />
    <meta name="copyright" content="PPLK 2022" />
    <meta name="robots" content="follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Website PPLK 2022" />
    <meta property="og:url" content="URL" />

    <title>Our Team - PPLK 2022</title>
    <link rel="stylesheet" href="{{ asset('assets/css/our-team.css') }}">
    {{-- SWIPER CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle-ot.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">

</head>
<body>
    <div></div>
    <!-- meet our team -->
    <div class="container-fluid mx-auto mb-3 pt-3 text-light" id="greet">
        <div class="mt-4">
            <a class="m-5" href="/beranda" title="Close">
                <i class="fa-solid fa-2x fa-circle-xmark close-button" style="color: white;"></i>
            </a>
        </div>
        <div class="row justify-content-center">
            <h2 class="fw-bold">Meet Our Team</h2>
        </div>
    </div>

    <!-- Kadiv -->
    <div class="container" id="kadiv">
        <div class="row" id="penjelasan">
            <div class="col caption">
                <h1 class  = "text-light p-3">ARDHAMES</h1>
                <p>
                    Ardhames merupakan gabungan dari kata Ardha yaitu bumi dalam bahasa Arab yang artinya pusat informasi dari makhluk hidup dan Hermes adalah dewa pembawa informasi. Sehingga Ardhames diharapkan menjadi tempat pusat informasi yang didalamnya terdapat mahasiswa yang siap mencari dan juga memberikan informasi dan pengetahuan yang dimiliki
                </p>
            </div>
            <div class="col d-flex" >
                <img class="mx-auto" style="justify-content: center; height:400px;" src="../assets/our-team/Uls.png" alt="">
            </div>
            <div class="col caption logo-ardhames">
                <img class="mx-auto" style="justify-content: flex; height:400px;" src="../assets/Ardhames-logo.png" alt="">
            </div>
        </div>
    </div>

    <!-- Kasub container -->
    <div class="container w-100" id="kasub">

        <!-- FE -->
        <div class="col">
            <h2>Front End</h2>
            <h6>Adi Sulaksono</h6>
            <h6>Teknik Informatika '20</h6>
            <div class="caption">
                <p>
                    Front end developer memiliki tugas untuk mengimplementasikan design UI/UX kedalam bentuk antarmuka grafis dengan menggunakan HTML, CSS dan JavaScript.
                </p>
                <a class="btn btn-primary" href="#frontend" role="button" type="button">Staff</a>
            </div>
            <img src="../assets/our-team/adi.png" alt="">
        </div>

        <!-- BE -->
        <div class="col">
            <h2>Back End</h2>
            <h6>Fitra Ilyasa</h6>
            <h6>Teknik Informatika '20</h6>
            <div class="caption">
                <p>
                    Back end developer memiliki tugas untuk merancang perangkat lunak dari sisi server yang berhubungan dengan logika dan database dengan menggunakan Bahasa pemrograman.
                </p>
                <a class="btn btn-primary" href="#backend" role="button" type="button">Staff</a>
            </div>
            <img src="../assets/our-team/fitra.png" alt="">
        </div>

        <!-- VVD -->
        <div class="col">
            <h2>VVD</h2>
            <h6>M. Raihan Adiwidya</h6>
            <h6>Teknik Kimia '20</h6>
            <div class="caption">
                <p>
                    Visual & Virtual Developer memiliki tugas untuk mendesain UI/UX pada website PPLK 2022, mendesain 3D bangunan ITERA atau kebutuhan lain pada website ataupun game ITERA Adventure, memvirtualisasi sebuah karya untuk kebutuhan pada kegiatan PPLK 2022.
                </p>
                <a class="btn btn-primary" href="#vvd" role="button" type="button">Staff</a>
            </div>
            <img src="../assets/our-team/adiws.png" alt="">
        </div>

        <!-- CR -->
        <div class="col">
            <h2>CR</h2>
            <h6>Sinta Dwi Putri</h6>
            <h6>Teknik Informatika '20</h6>
            <div class="caption">
                <p>
                    Content research memiliki tugas untuk mencari dan menyusun data atau informasi yang akan digunakan dalam sistem informasi atau aplikasi. serta membackup segala permasalahan aplikasi.
                </p>
                <a class="btn btn-primary" href="#cr" role="button" type="button">Staff</a>
            </div>
            <img src="../assets/our-team/sinta.png" alt="">
        </div>
        <!-- closing tag desktop container -->
    </div>

    <!-- STAFF-->
    <div id="staff">
    <div class="container mt-5">
        <div class="container-fluid mx-auto" id="frontend">
            <div class="h1 text-light mb-2">Sub-Divisi Front-End</div>
        <div class="row">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/yondi.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name" style="font-size: 17px;">Yondika Vio Landa</h2>
                                     <p class="description" style="font-size: 15px;">Teknik Informatika'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                <div class="card-image">
                                    <img src="../assets/our-team/fujita.png" alt="" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Fujita Rahmah</h2>
                                    <p class="description">Teknik Informatika'20</p>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                <div class="card-image">
                                    <img src="../assets/our-team/alvin.png" alt="" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="name" style="font-size: 16px;">Alvin Yoga Kesuma</h2>
                                    <p class="description" style="font-size: 14px;">Teknik Informatika'21</p>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                <div class="card-image">
                                    <img src="../assets/our-team/kris.png" alt="" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Christian A.N Biran</h2>
                                     <p class="description">Sains Data'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/nurbaiti.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Nurbaiti</h2>
                                     <p class="description">SAP'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/qomar.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name" style="font-size: 16px;">Muhammad Qomarudin</h2>
                                     <p class="description" style="font-size: 14px;">Teknik Informatika'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/bilhaq.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name" style="font-size: 16px;">Bilhaq Avi Dewantara</h2>
                                     <p class="description" style="font-size: 14px;">Teknik Informatika'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/nuroni.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Nurroni</h2>
                                     <p class="description">Teknik Informatika'20</p>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="container-fluid mx-auto" id="backend">
            <div class="h1 text-light mb-2">Sub-Divisi Back-End</div>
        <div class="row">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                <div class="card-image">
                                    <img src="../assets/our-team/aldi.png" alt="" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="name" style="font-size: 16px;">Rivaldi Y. Nainggolan</h2>
                                    <p class="description" style="font-size: 14px;">Teknik Informatika'21</p>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                <div class="card-image">
                                    <img src="../assets/our-team/hans.png" alt="" class="card-img">
                                </div>
                                <div class="card-content">
                                     <h2 class="name" style="font-size: 16px;">Hans Bonatua Batubara</h2>
                                     <p class="description" style="font-size: 14px;">Teknik Informatika'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/faza.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">M.Khalil R. Faza</h2>
                                     <p class="description">Teknik Informatika'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/ibnu.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">M Ibnu Prayogi</h2>
                                     <p class="description">Teknik Informatika'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/ata.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name" style="font-size: 16px;">Athallah Ahza Falah </h2>
                                     <p class="description" style="font-size: 14px;">Teknik Informatika'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/kevin.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name" style="font-size: 16px;">Kevin Simorangkir</h2>
                                     <p class="description" style="font-size: 14px;">Teknik Informatika'21</p>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="container-fluid mx-auto" id="vvd">
            <div class="h1 text-light mb-2">Sub-Divisi Virtual Visual Development</div>
        <div class="row">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                <div class="card-image">
                                    <img src="../assets/our-team/hariando.png" alt="" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="name" style="font-size: 16px;">Hariando Muthi</h2>
                                    <p class="description" style="font-size: 14px;">Teknik Informatika'20</p>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                <div class="card-image">
                                    <img src="../assets/our-team/Rafael.png" alt="" class="card-img">
                                </div>
                                <div class="card-content">
                                     <h2 class="name" style="font-size: 16px;">Rafael Panjaitan</h2>
                                     <p class="description" style="font-size: 14px;">Teknik Lingkungan'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/ines.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Anisa Kurnia Putri</h2>
                                     <p class="description">PWK'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/titys.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Titys Alfatika Setyorini</h2>
                                     <p class="description">Sains Aktuaria'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/yulia.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Yulia Elvionita </h2>
                                     <p class="description">Arsitektur'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/fajar.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Fajar Mustakim</h2>
                                     <p class="description">Arsitektur'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/rei.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Reizaldy M. Arsyan</h2>
                                     <p class="description">Arsitektur'21</p>
                                 </div>
                             </div>

                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/arif.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Arif Kurnia Ramadhan</h2>
                                     <p class="description">Teknik Elektro'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/ica.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Khaysa Nur Azima</h2>
                                     <p class="description">Teknik Kimia'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/teddy.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name" style="font-size: 16px;">Teddy Rahmadi Nursin</h2>
                                     <p class="description" style="font-size: 14px;">Arsitektur'20</p>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="container-fluid mx-auto" id="cr">
            <div class="h1 text-light mb-2">Sub-Divisi Content Research</div>
        <div class="row">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                <div class="card-image">
                                    <img src="../assets/our-team/dila.png" alt="" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="name" style="font-size: 16px ;">Dila Ayu Prastita</h2>
                                    <p class="description" style="font-size: 14px;">Teknik Informatika'21</p>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                <div class="card-image">
                                    <img src="../assets/our-team/nopri.png" alt="" class="card-img">
                                </div>
                                <div class="card-content">
                                     <h2 class="name" style="font-size: 16px ;">M. Rizzky Nopriansyah</h2>
                                     <p class="description" style="font-size: 14px;">Teknik Informatika'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/denissa.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Denissa Cahya Sabrina</h2>
                                     <p class="description">PWK'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/murli.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Murliana</h2>
                                     <p class="description">Teknik Informatika'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/raja.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name" style="font-size: 16px;">Shah Raja A. Al Turtusi </h2>
                                     <p class="description" style="font-size: 14px;">Teknik Informatika'20</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/zahra.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name" style="font-size: 16px;">Zahra Areefa Ananta</h2>
                                     <p class="description" style="font-size: 14px;">Teknik Informatika'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/alya.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name">Alya Salsabila</h2>
                                     <p class="description">Teknik Biosistem'21</p>
                                 </div>
                             </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content mx-auto">
                                 <div class="card-image">
                                     <img src="../assets/our-team/sephia.png" alt="" class="card-img">
                                 </div>
                                 <div class="card-content">
                                     <h2 class="name" style="font-size: 16px;">Sephia Wulandari</h2>
                                     <p class="description" style="font-size: 14px;">Teknologi Pangan'20</p>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        </div>
    </div>
</div>

    <!-- Mobile -->
<div class="flex-column container" id="mobile-cards">
    <div class="row m-0 p-0" id="kadiv-mobile">
        <div class="mt-4">
            <a href="/beranda" title="Close">
                <i class="fa-solid fa-2x fa-circle-xmark close-button" style="color: white;"></i>
            </a>
        </div>
        <div class="row pb-4 pt-3">
            <h1 class ="text-center text-light justify-content-center">MEET OUR TEAM</h1>
            <h1 class ="text-center text-light justify-content-center">ARDHAMES</h1>
        </div>
        <div class="position-relative justify-content-center">
            <div class="row p-5 pt-0 justify-content-center " style="position: absolute;">
                <img class="mx-auto mt-4 p-0" style="justify-content: center; z-index: -2; width: 32rem;" src="../assets/Ardhames-logo.png" alt="">
            </div>
        </div>
        <div class="row">
            <img class="mx-auto" style="justify-content: center; width: 30rem;" src="../assets/our-team/Uls.png" alt="">
        </div>

        <p class="text-light">
            Ardhames merupakan gabungan dari kata Ardha yaitu bumi dalam bahasa Arab yang artinya pusat informasi dari makhluk hidup dan Hermes adalah dewa pembawa informasi. Sehingga Ardhames diharapkan menjadi tempat pusat informasi yang didalamnya terdapat mahasiswa yang siap mencari dan juga memberikan informasi dan pengetahuan yang dimiliki
        </p>
    </div>
    <!--Front-End-->
    <div class="row container pt-5 mb-5">
        <div class="swiper mySwiper" style="width: 180px; height: 300px;">
            <div class="swiper-wrapper">
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Kasub FE</h3>
                    <h4>Adi Sulaksono</h4>
                    <p>Teknik Informatika'20</p>
                    <img src="../assets/our-team/adi.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="" style="border-radius:25px; background: white;">
                    <div class="row pt-2 px-2 pb-5" id="" >
                        <h2>Front End</h2>
                        <p class="pt-3" style="font-size:14px ;">
                            Front end developer memiliki tugas untuk mengimplementasikan design UI/UX kedalam bentuk antarmuka grafis dengan menggunakan HTML, CSS dan JavaScript.
                        </p>
                    </div>
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Fujita Rahmah</h3>
                    <p>Teknik Informatika'20</p>
                    <img src="../assets/our-team/fujita.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Yondika Vio Landa</h3>
                    <p>Teknik Informatika'21</p>
                    <img src="../assets/our-team/yondi.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Christian A.N Biran</h3>
                    <p>Sains Data'21</p>
                    <img src="../assets/our-team/kris.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Nurbaiti</h3>
                    <p>Sains Atmosfer & Keplanetan'21</p>
                    <img src="../assets/our-team/nurbaiti.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Alvin Yoga Kesuma</h3>
                    <p>Teknik Informatika'21</p>
                    <img src="../assets/our-team/alvin.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">M. Qomarudin</h3>
                    <p>Teknik Informatika'20</p>
                    <img src="../assets/our-team/qomar.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Bilhaq Avi Dewantara</h3>
                    <p>Teknik Informatika'20</p>
                    <img src="../assets/our-team/bilhaq.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Nurroni</h3>
                    <p>Teknik Informatika'20</p>
                    <img src="../assets/our-team/nuroni.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <!-- Back End -->
        <div class="row container mb-5">
        <div class="swiper mySwiper" style="width: 180px; height: 300px;">
            <div class="swiper-wrapper">
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Kasub BE</h3>
                    <h4>Fitra Ilyasa</h4>
                    <p>Teknik Informatika'20</p>
                    <img src="../assets/our-team/fitra.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="" style="border-radius:25px; background: white;">
                    <div class="row pt-2 px-2 pb-3" id="" >
                        <h2>Back End</h2>
                        <p class="pt-4" style="font-size: 14px;">
                            Back end developer memiliki tugas untuk merancang perangkat lunak dari sisi server yang berhubungan dengan logika dan database dengan menggunakan Bahasa pemrograman.
                        </p>
                    </div>
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">M Khalil Razan Faza</h3>
                    <p>Teknik Informatika'21</p>
                    <img src="../assets/our-team/faza.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Hans Bonatua Batubara</h3>
                    <p>Teknik Informatika'20</p>
                    <img src="../assets/our-team/hans.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Kevin Simorangkir</h3>
                    <p>Teknik Informatika'21</p>
                    <img src="../assets/our-team/kevin.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Athallah Ahza Falah</h3>
                    <p>Teknik Informatika'21</p>
                    <img src="../assets/our-team/ata.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Muhammad Ibnu Prayogi</h3>
                    <p>Teknik Informatika'20</p>
                    <img src="../assets/our-team/ibnu.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Rivaldi Yonathan Nainggolan</h3>
                    <p>Teknik Informatika'21</p>
                    <img src="../assets/our-team/aldi.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <!-- Akhir Back End -->

    <!-- VVD -->
    <div class="row container mb-5">
        <div class="swiper mySwiper" style="width: 180px; height: 300px;">
            <div class="swiper-wrapper">
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Kasub VVD</h3>
                    <h4>M Raihan Adiwidya</h4>
                    <p>Teknik Kimia'20</p>
                    <img src="../assets/our-team/Adiws.PNG" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="" style="border-radius:25px; background: white;">
                    <div class="row pt-2 px-2 pb-4" id="" >
                        <h2>VVD</h2>
                        <p class="pt-2" style="font-size:12.5px ;">
                            Visual & Virtual Developer memiliki tugas untuk mendesain UI/UX pada website PPLK 2022, mendesain 3D bangunan ITERA atau kebutuhan lain pada website ataupun game ITERA Adventure, memvirtualisasi sebuah karya untuk kebutuhan pada kegiatan PPLK 2022.
                        </p>
                    </div>
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Hariando Muthi</h3>
                    <p>Teknik Informatika'20</p>
                    <img src="../assets/our-team/hariando.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Rafael Panjaitan</h3>
                    <p>Teknik Lingkungan'21</p>
                    <img src="../assets/our-team/Rafael.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Anisa Kurnia Putri</h3>
                    <p>PWK'20</p>
                    <img src="../assets/our-team/ines.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Titys Alfatika Setyorini</h3>
                    <p>Sains Aktuaria'20</p>
                    <img src="../assets/our-team/titys.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Yulia Elvionita</h3>
                    <p>Arsitektur'20</p>
                    <img src="../assets/our-team/yulia.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Fajar Mustakim</h3>
                    <p>Arsitektur'20</p>
                    <img src="../assets/our-team/fajar.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Reizaldy M. Arsyan</h3>
                    <p>Arsitektur'21</p>
                    <img src="../assets/our-team/rei.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Arif Kurnia Ramadhan</h3>
                    <p>Teknik Elektro'21</p>
                    <img src="../assets/our-team/arif.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Khaysa Nur Azima</h3>
                    <p>Teknik Kimia'21</p>
                    <img src="../assets/our-team/ica.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
              <div class="swiper-slide text-center rounded-4 text-white">
                <div class="card-color rounded-4 pt-2 px-2">
                    <h3 class="mb-0">Teddy Rahmadi Nursin</h3>
                    <p>Arsitektur'20</p>
                    <img src="../assets/our-team/teddy.png" alt="" id="card-img" class="rounded-4">
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <!-- Akhir VVD -->

        <!-- Content Research -->
        <div class="row container mb-5">
            <div class="swiper mySwiper" style="width: 180px; height: 300px;">
                <div class="swiper-wrapper">
                  <div class="swiper-slide text-center rounded-4 text-white">
                    <div class="card-color rounded-4 pt-2 px-2">
                        <h3 class="mb-0">Kasub CR</h3>
                        <h4>Sinta Dwi Putri</h4>
                        <p>Teknik Informatika'20</p>
                        <img src="../assets/our-team/sinta.png" alt="" id="card-img" class="rounded-4">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="" style="border-radius:25px; background: white;">
                        <div class="row pt-2 px-2 pb-3" id="" >
                            <h2>Content Research</h2>
                            <p class="pt-2" style="font-size: 13px;">
                                Content research memiliki tugas untuk mencari dan menyusun data atau informasi yang akan digunakan dalam sistem informasi atau aplikasi. serta membackup segala permasalahan aplikasi.
                            </p>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide text-center rounded-4 text-white">
                    <div class="card-color rounded-4 pt-2 px-2">
                        <h3 class="mb-0">Dila Ayu Prastita</h4>
                        <p>Teknik Informatika'21</p>
                        <img src="../assets/our-team/dila.png" alt="" id="card-img" class="rounded-4">
                    </div>
                  </div>
                  <div class="swiper-slide text-center rounded-4 text-white">
                    <div class="card-color rounded-4 pt-2 px-2">
                        <h3 class="mb-0">M Rizzky Nopriansyah</h3>
                        <p>Teknik Informatika'21</p>
                        <img src="../assets/our-team/nopri.png" alt="" id="card-img" class="rounded-4">
                    </div>
                  </div>
                  <div class="swiper-slide text-center rounded-4 text-white">
                    <div class="card-color rounded-4 pt-2 px-2">
                        <h3 class="mb-0">Denissa Cahya Sabrina</h3>
                        <p>PWK'20</p>
                        <img src="../assets/our-team/denissa.png" alt="" id="card-img" class="rounded-4">
                    </div>
                  </div>
                  <div class="swiper-slide text-center rounded-4 text-white">
                    <div class="card-color rounded-4 pt-2 px-2">
                        <h3 class="mb-0">Murliana</h3>
                        <p>Teknik Informatika'20</p>
                        <img src="../assets/our-team/murli.png" alt="" id="card-img" class="rounded-4">
                    </div>
                  </div>
                  <div class="swiper-slide text-center rounded-4 text-white">
                    <div class="card-color rounded-4 pt-2 px-2">
                        <h3 class="mb-0">Shah Raja A. Al Turtusi</h3>
                        <p>Teknik Informatika'20</p>
                        <img src="../assets/our-team/raja.png" alt="" id="card-img" class="rounded-4">
                    </div>
                  </div>
                  <div class="swiper-slide text-center rounded-4 text-white">
                    <div class="card-color rounded-4 pt-2 px-2">
                        <h3 class="mb-0">Zahra Areefa Ananta</h3>
                        <p>Teknik Informatika'21</p>
                        <img src="../assets/our-team/zahra.png" alt="" id="card-img" class="rounded-4">
                    </div>
                  </div>
                  <div class="swiper-slide text-center rounded-4 text-white">
                    <div class="card-color rounded-4 pt-2 px-2">
                        <h3 class="mb-0">Alya Salsabila</h3>
                        <p>Teknik Informatika'21</p>
                        <img src="../assets/our-team/alya.png" alt="" id="card-img" class="rounded-4">
                    </div>
                  </div>
                  <div class="swiper-slide text-center rounded-4 text-white">
                    <div class="card-color rounded-4 pt-2 px-2">
                        <h3 class="mb-0">Sephia wulandari</h3>
                        <p>Teknologi Pangan'20</p>
                        <img src="../assets/our-team/sephia.png" alt="" id="card-img" class="rounded-4">
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <!-- Akhir Content Research -->
        </div>
    </div>
    <!-- JavaScript -->
    <!-- SCRIPTS -->
    <!-- Swiper JS -->
    <script src="{{ asset('assets/js/swiper-bundle-ot.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          effect: "cards",
          grabCursor: true,
        });
      </script>
      <script src="{{ asset('assets/js/ourteam.js') }}"></script>
</body>
</html>
