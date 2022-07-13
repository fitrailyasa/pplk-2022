@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Detail Prodi')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.cs') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styling.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets/css/prodi-page.css') }}">

@section('content')
    <!-- CONTENT -->
    <!-- Nama Prodi -->
    <h1 class="text-center text-light display-3 py-4 fw-bold flex-wrap my-3"><strong>sains atmosfir dan
        keplanetan</strong>
</h1>

<!-- gambar -->
<!-- <img id="img-prodi" class="img-fluid" src="../assets/Logo_Mockup_125.jpg" alt=""> -->
<div class="container row justify-content-center mx-auto mb-5 mt-4">
    <div class="col-lg-6 col-md-12">
        <img class="gambar-1 animasi ratio ratio-1x1s" src="../assets/Logo_Mockup_125.jpg" alt="" srcset="">
    </div>
    <div class="col-lg-6 col-md-12 my-auto text-light g-md-5 animasi">
        <h4><strong>Kepala Program Studi</strong></h4>
        <h4>lorem</h4>
        <h4><strong>Akreditasi</strong></h4>
        <h4>cakep</h4>
        <h4><strong>Ruangan Program Studi</strong></h4>
        <h4>kamar mandi</h4>
        <h4><strong>Tahun Berdiri</strong></h4>
        <h4>9999</h4>
    </div>
</div>

<!-- tentang kami, visi, misi -->
<div class=" container">
    <div class="row text-center pt-4 text-light">
        <h3 class="animasi">tentang kami</h3>
        <p class="animasi">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, hic adipisci fuga ipsa
            at,
            illo
            provident
            perferendis officia, laudantium doloribus sed eligendi assumenda possimus dolores minus consectetur
            animi. Corrupti, temporibus?</p>
        <h3 class="animasi">Visi</h3>
        <p class="animasi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem quibusdam
            ullam
            doloribus! Officia aliquid ea dolorum dicta suscipit in ipsa rerum voluptate, sunt ipsum id
            aspernatur veritatis nemo quidem.</p>
        <h3 class="animasi">Misi</h3>
        <p class="animasi">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquam quis,
            voluptatum
            cum,
            dolorum magnam accusantium quibusdam enim, repudiandae nostrum tempore a cupiditate eius
            dolor assumenda maiores dignissimos voluptatem deleniti.
            Necessitatibus est eos enim recusandae saepe nesciunt delectus quo quis, earum et porro iste
            hic deserunt laudantium inventore ex sunt provident natus magni temporibus, vel, distinctio
            neque! Ab, quo maiores.
            Itaque totam aperiam ab quia delectus, veniam asperiores vel officia ex nostrum fugiat, hic
            adipisci ut harum fugit. Eius aliquam dicta a tenetur autem placeat reprehenderit commodi
            quod eos quis.</p>
    </div>
</div>

<div class="container justify-content-center">
    <h3 class="text-center text-light animasi">Prestasi</h3>
    <div class="carousel owl-carousel justify-content-center animasi text-light mt-4">
        <div class="card card-1 prestasi-card mx-auto text-center" data-merge='3'>
            <h4 class="fs-3 fw-bold pt-3">1945</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
        </div>
        <div class="card card-2 prestasi-card mx-auto text-center" data-merge='3'>
            <h4 class="fs-3 fw-bold pt-3">1946</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum odio, enim omnis ad quo vel
                libero
                dolor iusto et animi consequatur nostrum nemo. Distinctio ratione dignissimos vitae eius soluta
                dolores?</p>
        </div>
        <div class="card card-3 prestasi-card mx-auto text-center" data-merge='3'>
            <h4 class="fs-3 fw-bold pt-3">1947</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum debitis dolores architecto,
                consectetur ut dolor aperiam. Quidem, ut. Impedit saepe unde quaerat beatae vero quos deleniti
                cum
                ex labore earum.</p>
        </div>
        <div class="card card-4 prestasi-card mx-auto text-center" data-merge='3'>
            <h4 class="fs-3 fw-bold pt-3">1948</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum debitis dolores architecto,
                consectetur ut dolor aperiam. Quidem, ut. Impedit saepe unde quaerat beatae vero quos deleniti
                cum
                ex labore earum.</p>
        </div>
        <div class="card card-5 prestasi-card mx-auto text-center" data-merge='3'>
            <h4 class="fs-3 fw-bold pt-3">1949</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum debitis dolores architecto,
                consectetur ut dolor aperiam. Quidem, ut. Impedit saepe unde quaerat beatae vero quos deleniti
                cum
                ex labore earum.</p>
        </div>
    </div>
</div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script>
        $(".carousel").owlCarousel({
            center: true,
            loop: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            stagePadding: 180,
            touchDrag: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    stagePadding: 0,
                },
                600: {
                    items: 1,
                    nav: false,
                    stagePadding: 0
                },
                1000: {
                    items: 1,
                    nav: false
                }
            }
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- scrollReveal -->
    <script src="../node_modules/scrollreveal/dist/scrollreveal.min.js"></script>
    <script>
        ScrollReveal().reveal(".animasi", {
            delay: 250,
            interval: 100,
            distance: '10rem',
            origin: 'bottom'
        });
    </script>
@endsection
