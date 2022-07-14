@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'GANTI')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/detail-prodi.css') }}">
    <!-- b5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- css lokal -->
    <link rel="stylesheet" href="{{ asset('assets/css/prodi page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- owl caorusel -->
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
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
    <script></script>
@endsection
