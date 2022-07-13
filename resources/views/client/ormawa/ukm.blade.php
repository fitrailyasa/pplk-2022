@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Unit Kegiatan Mahasiswa')

@section('style')
    <!-- STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}.">
    <link rel="stylesheet" href="{{ asset('assets/css/styling.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/himp-ukm.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

@endsection

@section('content')
    <!-- CONTENT -->
    <div class="himpunan p-0 justify-content-center">
        <img src="../assets/logo-contoh.png " class="hmp-img" alt="...">
        <h2>HMP MANDALANATA</h2>
        <h5>DIES NATALIS : 13 APRIL</h5>
        <h5>PEMBINA HIMPUNAN : YUDHA RAHMAN</h5>
        <h5>KETUA HIMPUNAN : ILHAM FAHREZI</h5>
        <h2>VISI</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dolore, rem vitae iure dolorem consequatur at? Cupiditate temporibus unde quaerat, adipisci minima illo error esse at commodi? Neque, amet porro aut fuga iste odio suscipit hic molestias ratione, excepturi cupiditate dolores consectetur ex veritatis in eum, laudantium debitis eaque facilis!</p>
        <h2>MISI</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, quia commodi voluptate nobis ipsam molestiae quasi fugiat praesentium est, quis illum consectetur voluptatum? Quisquam, totam ullam quod dignissimos praesentium quidem. Veritatis nisi, alias quod corrupti quasi commodi sequi, provident optio voluptates error iure. Culpa, eveniet quo? Error ea natus neque!</p>
    <div class="container-fluid background-gradient" id="box-in">
        <div class="row justify-content-center" id="code">
            <div class="col-lg-4 col-md-10">
                <h2>SCAN CODE HERE</h2>
                <div class="gambar" id="icon">
                    <img src="../assets/logo-contoh.png" alt="...">
                </div>
            </div>
            <div class="col-lg-8 col-md-11">
                <div class="xxx text-start">
                    <h2>PERATURAN UKM BARCODE</h2>
                    <div class="gambar" >
                        <p class="text-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt labore, eligendi quibusdam nulla, saepe sint perferendis velit doloremque vitae praesentium ex nobis quasi eaque, a assumenda adipisci officiis! Dolores cum excepturi, quis dolore, natus accusamus nam perspiciatis quod tempora quo error odio eveniet exercitationem. Enim sed nesciunt corporis libero laboriosam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="himpunan-2 justify-content-center">
        <h2 > FILOSOFI LOGO</h2>
        <h2 >HMP MANDALANATA</h2>
        <img src="../assets/logo-contoh.png " class="hmp-img2" alt="..."></div>
    </div>

</div>
<br><br>
 <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card-rr swiper-slide">

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        </div>
                    </div>
                    <div class="card-rr swiper-slide">

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        </div>
                    </div>
                    <div class="card-rr swiper-slide">

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        </div>
                    </div>
                    <div class="card-rr swiper-slide">

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        </div>
                    </div>
                    <div class="card-rr swiper-slide">

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        </div>
                    </div>
                    <div class="card-rr swiper-slide">

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        </div>
                    </div>
                    <div class="card-rr swiper-slide">

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        </div>
                    </div>
                    <div class="card-rr swiper-slide">

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        </div>
                    </div>
                    <div class="card-rr swiper-slide">

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        <section class="slider_container_gambar">
        <div class="slide-container-gambar justify-content-center mt-4 pt-4 bg-gradient">
            <h1 style="text-align:center" class="galeri text-light">GALLERY</h1>
            <div class="slide-content-swiper gambar_slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card-content-gm">
                            <img src="../assets/logo-contoh.png" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-content-gm">
                            <img src="../assets/logo-contoh.png" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card-content-gm">
                            <img src="../assets/logo-contoh.png" alt="">
                        </div>
                    </div>
                    <!-- <div class="swiper-slide">
                        <div class="card-content-gm">
                            <img src="/assets/logo-contoh.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-content-gm">
                            <img src="/assets/logo-contoh.png" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('assets/js/hmp-ukm.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        var swiper = new Swiper(".gambar_slider", {
            spaceBetween: 30,
            loop: true,
            speed: 1000,
            autoplay:{
                delay: 2000,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints:{
                320: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
          });
    </script>
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/hmp.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
