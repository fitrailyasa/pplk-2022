@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Detail Prodi')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/detail-prodi.css') }}">
    <!-- b5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- css lokal -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- owl caorusel -->
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    @endsection

@section('content')
    <!-- CONTENT -->
    <!-- Nama Prodi -->
    <h1 class="text-center text-light display-3 py-4 fw-bold flex-wrap my-3"><strong>sains atmosfir dan
        keplanetan</strong>
</h1>

<!-- gambar -->
<!-- <img id="img-prodi" class="img-fluid" src="../assets/Logo_Mockup_125.jpg" alt=""> -->
<div class="container row justify-content-center mx-auto mb-5 mt-4">
    <div class="col-lg-6 col-md-12 mb-sm-4 mb-md-0">
        <div class="ratio ratio-4x3">
            <img class="gambar-1 animasi" src="../assets/Logo_Mockup_125.jpg" alt="" srcset="">
        </div>
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

<div class="container justify-content-center" id="prestasi">
    <h3 class="text-center text-light animasi">Prestasi</h3>
    <div class="carousel owl-carousel justify-content-center animasi text-light mt-4">
        <div class="card card-1 prestasi-card mx-auto text-center overflow-auto" data-merge='3'>
            <h4 class="fs-3 fw-bold pt-3">1945</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia iusto beatae pariatur ut iure magnam, laboriosam consectetur, ipsa reiciendis, quibusdam consequuntur. Nobis, culpa asperiores. Impedit architecto magni, consequatur, quibusdam assumenda temporibus esse neque distinctio, laboriosam illum molestias pariatur ad alias necessitatibus ab totam sunt sapiente consequuntur saepe cum at quasi obcaecati quod. Minus assumenda ipsa reprehenderit eius, quod non voluptate nisi. Modi possimus, ullam nostrum esse quasi laudantium ipsum eos saepe sint accusantium dolore eius veritatis aut quia animi voluptatibus aliquid culpa officiis labore, aliquam aspernatur facere explicabo. Quam ad facere, laboriosam porro maiores quasi ab expedita provident quas libero molestias in facilis praesentium, odio consequuntur error voluptatum incidunt ratione. Voluptatum deleniti cum tenetur cumque inventore suscipit minus consequatur explicabo!</p>
        </div>
        <div class="card card-2 prestasi-card mx-auto text-center overflow-auto" data-merge='3'>
            <h4 class="fs-3 fw-bold pt-3">1946</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum odio, enim omnis ad quo vel
                libero
                dolor iusto et animi consequatur nostrum nemo. Distinctio ratione dignissimos vitae eius soluta
                dolores?</p>
        </div>
        <div class="card card-3 prestasi-card mx-auto text-center overflow-auto" data-merge='3'>
            <h4 class="fs-3 fw-bold pt-3">1947</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum debitis dolores architecto,
                consectetur ut dolor aperiam. Quidem, ut. Impedit saepe unde quaerat beatae vero quos deleniti
                cum
                ex labore earum.</p>
        </div>
        <div class="card card-4 prestasi-card mx-auto text-center overflow-auto" data-merge='3'>
            <h4 class="fs-3 fw-bold pt-3">1948</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum debitis dolores architecto,
                consectetur ut dolor aperiam. Quidem, ut. Impedit saepe unde quaerat beatae vero quos deleniti
                cum
                ex labore earum.</p>
        </div>
        <div class="card card-5 prestasi-card mx-auto text-center overflow-auto" data-merge='3'>
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
    <script src="{{ asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
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

    <!-- scrollReveal -->
    <script src="{{ asset('assets/node_modules/scrollreveal/dist/scrollreveal.min.js') }}"></script>
    <script>
        ScrollReveal().reveal(".animasi", {
            delay: 250,
            interval: 100,
            distance: '10rem',
            origin: 'bottom'
        });
    </script>
@endsection
