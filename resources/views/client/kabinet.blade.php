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
    <!-- CONTENT -->
    <!--Mobile Footer Bar-->
    <div class="navbar p-0 d-lg-block d-xl-none" id="mobile-footer-bar">
        <ul class="container-fluid footer-bar">

                <li>
                    <a href="#">
                        <svg class="" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="icon-navbar" fill-rule="evenodd" clip-rule="evenodd" d="M22.0003 10.6422C22.0637 12.3105 21.9725 13.9808 21.7279 15.6348C21.8147 15.7177 21.9029 15.8045 21.9926 15.8927C22.0884 15.9871 22.186 16.0831 22.2851 16.1775C23.6583 18.1887 24.2337 20.5767 23.9136 22.9353C23.8969 23.1613 23.8077 23.3776 23.6575 23.5567C23.5072 23.7359 23.3026 23.8697 23.0697 23.9414C22.8368 24.013 22.586 24.0191 22.3493 23.959C22.1126 23.8989 21.9006 23.7752 21.7403 23.6036C21.0397 22.9538 20.2307 22.4118 19.344 21.9984C16.944 22.5623 14.4771 22.8482 12.0005 22.8496C9.5205 22.8389 7.05161 22.5433 4.65076 21.9699C3.76657 22.3842 2.95974 22.9261 2.26071 23.5751C2.09464 23.7359 1.88238 23.8499 1.64873 23.9037C1.41507 23.9575 1.16966 23.9488 0.941136 23.8787C0.712614 23.8087 0.510413 23.6801 0.358142 23.5079C0.205871 23.3358 0.109812 23.1273 0.0811809 22.9067C-0.227976 20.5562 0.351597 18.1794 1.72202 16.1775C1.90778 15.9833 2.08734 15.8062 2.2669 15.6348C2.02463 13.9806 1.93556 12.3104 2.00065 10.6422C1.66629 10.7793 1.36289 10.8935 1.10284 10.9906C0.967375 11.0394 0.819753 11.0521 0.676885 11.027C0.534018 11.002 0.401686 10.9403 0.295053 10.8491C0.18842 10.7579 0.1118 10.6408 0.0739739 10.5112C0.0361478 10.3817 0.0386455 10.2449 0.0811809 10.1167C2.53934 2.73624 12.0005 0 12.0005 0C12.0005 0 21.4554 2.73624 23.9198 10.1167C23.9623 10.2449 23.9648 10.3817 23.927 10.5112C23.8892 10.6408 23.8126 10.7579 23.7059 10.8491C23.5993 10.9403 23.467 11.002 23.3241 11.027C23.1812 11.0521 23.0336 11.0394 22.8981 10.9906C22.6195 10.8935 22.3347 10.7793 22.0003 10.6422ZM10.5696 9.85938H9.99992C9.39806 9.85938 8.91016 10.3095 8.91016 10.8648V11.396C8.91016 11.9513 9.39806 12.4014 9.99992 12.4014H10.5696C11.1714 12.4014 11.6593 11.9513 11.6593 11.396V10.8648C11.6593 10.3095 11.1714 9.85938 10.5696 9.85938ZM14.0133 9.85938H13.4374C12.8356 9.85938 12.3477 10.3095 12.3477 10.8648V11.396C12.3477 11.9513 12.8356 12.4014 13.4374 12.4014H14.0133C14.6151 12.4014 15.103 11.9513 15.103 11.396V10.8648C15.103 10.3095 14.6151 9.85938 14.0133 9.85938ZM13.4374 13.0469H14.0133C14.6151 13.0469 15.103 13.497 15.103 14.0523V14.5835C15.103 15.1388 14.6151 15.5889 14.0133 15.5889H13.4374C12.8356 15.5889 12.3477 15.1388 12.3477 14.5835V14.0523C12.3477 13.497 12.8356 13.0469 13.4374 13.0469ZM10.564 13.0469H9.9882C9.38634 13.0469 8.89844 13.497 8.89844 14.0523V14.5835C8.89844 15.1388 9.38634 15.5889 9.9882 15.5889H10.564C11.1659 15.5889 11.6538 15.1388 11.6538 14.5835V14.0523C11.6538 13.497 11.1659 13.0469 10.564 13.0469Z" fill="black"/>
                        </svg>
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="#">
                        <svg class="" width="24" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="icon-navbar" fill-rule="evenodd" clip-rule="evenodd" d="M13.6693 21.2843H15.3477H16.6748H18.356C18.2952 22.1593 18.4515 22.8788 19.0288 23.2988C20.872 24.64 23.9688 24.4629 24.8167 19.1021C25.0329 18.8743 25.2391 18.6345 25.4348 18.3838C25.2121 19.6249 25.2529 20.6757 26.0023 21.221C28.2391 22.8486 32.2814 22.2165 31.985 12.8385C31.7385 5.04207 27.767 4.42064 26.4344 4.43279C26.1922 3.97107 25.9207 3.5298 25.6219 3.11285C24.9453 2.15376 24.099 1.37863 23.1416 0.841137C22.1842 0.303643 21.1386 0.0166375 20.0772 0H16.6748H15.3477H11.9386C10.8795 0.0189149 9.83649 0.307015 8.88155 0.844428C7.92661 1.38184 7.08245 2.15578 6.40729 3.11285C6.10711 3.52937 5.83471 3.97067 5.59195 4.43277C4.26381 4.4213 0.312102 5.04624 0.0210077 12.8385C-0.329328 22.2165 3.78712 22.8486 6.02387 21.221C6.77255 20.6763 6.81398 19.6234 6.5918 18.3804C6.78683 18.6306 6.99238 18.8698 7.20782 19.0972C8.05458 24.4628 11.1527 24.6404 12.9965 23.2988C13.5738 22.8788 13.7301 22.1593 13.6693 21.2843ZM15.8906 9.77314V11.1241C15.8906 12.5542 16.1736 13.7156 16.5239 13.7156H16.8675C17.2179 13.7156 17.5008 12.5542 17.5008 11.1241V9.77314C17.5008 8.33522 17.2179 7.17383 16.8675 7.17383H16.5441C16.1938 7.17383 15.8906 8.33522 15.8906 9.77314ZM10.3203 11.1241V9.77314C10.3203 8.33522 10.6033 7.17383 10.9536 7.17383H11.277C11.6273 7.17383 11.9103 8.33522 11.9103 9.77314V11.1241C11.9103 12.5542 11.6273 13.7156 11.277 13.7156H10.9536C10.6033 13.7156 10.3203 12.5542 10.3203 11.1241Z" fill="black"/>
                        </svg>
                        Games
                    </a>
                </li>

                <li style="margin-left: 0;">
                    <a href="#">
                        <svg class="" width="24" height="24" viewBox="0 0 27 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="icon-navbar" fill-rule="evenodd" clip-rule="evenodd" d="M13.5 0C6.04416 0 0 6.04416 0 13.5V16.5714C0 23.4355 5.56446 29 12.4286 29H14.5714C21.4355 29 27 23.4355 27 16.5714V13.5C27 6.04416 20.9558 0 13.5 0ZM7.51077 7.13672C8.56584 7.13672 9.42115 6.40131 9.42115 5.49414C9.42115 4.58697 8.56584 3.85156 7.51077 3.85156C6.4557 3.85156 5.60039 4.58697 5.60039 5.49414C5.60039 6.40131 6.4557 7.13672 7.51077 7.13672ZM8.43242 10.3086C7.99448 10.3086 7.63945 10.6636 7.63945 11.1016C7.63945 11.5395 7.99448 11.8945 8.43242 11.8945H23.7852C24.2231 11.8945 24.5781 11.5395 24.5781 11.1016C24.5781 10.6636 24.2231 10.3086 23.7852 10.3086H8.43242ZM3.46484 13.3672C3.0269 13.3672 2.67188 13.7222 2.67188 14.1602C2.67188 14.5981 3.0269 14.9531 3.46484 14.9531H23.6572C24.0952 14.9531 24.4502 14.5981 24.4502 14.1602C24.4502 13.7222 24.0952 13.3672 23.6572 13.3672H3.46484ZM2.67188 17.2188C2.67188 16.7808 3.0269 16.4258 3.46484 16.4258H23.6572C24.0952 16.4258 24.4502 16.7808 24.4502 17.2188C24.4502 17.6567 24.0952 18.0117 23.6572 18.0117H3.46484C3.0269 18.0117 2.67188 17.6567 2.67188 17.2188ZM3.46484 19.5977C3.0269 19.5977 2.67188 19.9527 2.67188 20.3906C2.67188 20.8286 3.0269 21.1836 3.46484 21.1836H23.6572C24.0952 21.1836 24.4502 20.8286 24.4502 20.3906C24.4502 19.9527 24.0952 19.5977 23.6572 19.5977H3.46484Z" fill="black"/>
                        </svg>
                        Booklet
                    </a>
                </li>

                <li>
                    <a href="#">
                        <svg width="26" height="24" viewBox="0 0 36 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="icon-navbar" fill-rule="evenodd" clip-rule="evenodd" d="M29.4702 11.7973C29.4702 18.1608 24.368 23.2634 17.9999 23.2634C11.6341 23.2634 6.52964 18.1608 6.52964 11.7973C6.52964 5.43372 11.6341 0.333336 17.9999 0.333336C24.368 0.333336 29.4702 5.43372 29.4702 11.7973ZM17.9998 43.6667C8.60165 43.6667 0.666504 42.1392 0.666504 36.2458C0.666504 30.3502 8.6515 28.8769 17.9998 28.8769C27.4002 28.8769 35.3332 30.4044 35.3332 36.2978C35.3332 42.1933 27.3482 43.6667 17.9998 43.6667Z" fill="white"/>
                        </svg>
                        Profile
                    </a>
                </li>

        </ul>
    </div>

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
                <h3 class="teks4">ITERA 2020-2021</h3>
                <br>
                <h5 class="text-start fw-bold teks5">Pembina</h5>
                <h6 class="text-start teks6">Dr. Ir. Agus Laesanpura, M.S.</h6>
                <h5 class="text-start fw-bold teks5">Ketua Himpunan</h5>
                <h6 class="text-start teks6">Dr. Ir. Agus Laesanpura, M.S.</h6>
                <h5 class="text-start fw-bold teks5">Dies Natalis</h5>
                <h6 class="text-start teks6">9 Februari 2020</h6>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="mt-md-4 mt-sm-5 justify-content-center d-flex flex-wrap ">
            <a href="https://google.com" target="_blank" class="buttons background-gradient sosmed mx-lg-5 mx-sm-3">
            <div class="icon text-center ">
                <i class="fab fa-facebook-f"></i>
            </div>

            </a>
            <a href="https://google.com" target="_blank" class="buttons background-gradient sosmed mx-lg-5 mx-sm-3">
            <div class="icon text-center ">
                <i class="fab fa-twitter"></i>
            </div>
            </a>
            <a href="https://google.com" target="_blank" class="buttons background-gradient sosmed mx-lg-5 mx-sm-3">
            <div class="icon text-center ">
                <i class="fab fa-instagram"></i>
            </div>
            </a>
            <a href="https://google.com" target="_blank" class="buttons background-gradient sosmed mx-lg-5 mx-sm-3">
            <div class="icon text-center ">
                <i class="fab fa-youtube"></i>
            </div>
            </a>
        </div>

    </div>


        <div class="container mt-md-5 mt-sm-2 text-light">
            <h2 class="text-center teks2"><strong>KM ITERA</strong></h2>
            <div class="mt-3" style="display: flex; justify-content: center;">
                <iframe class="videoyoutube" src="https://www.youtube.com/embed/Y-Y-e6N6YPA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
