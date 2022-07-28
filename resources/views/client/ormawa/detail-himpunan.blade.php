@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Detail Himpunan')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styling.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/himp-ukm.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@endsection

@section('content')
    <!-- CONTENT -->
    <div class="himpunan">
        <img src="../assets/logo-contoh.png " class="hmp-img" alt="...">
        <h2>HMP MANDALANATA</h2>
        <h5>DIES NATALIS : 13 APRIL</h5>
        <h5>PEMBINA HIMPUNAN : YUDHA RAHMAN</h5>
        <h5>KETUA HIMPUNAN : ILHAM FAHREZI</h5>
        <h2>VISI</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dolore, rem vitae iure dolorem consequatur at? Cupiditate temporibus unde quaerat, adipisci minima illo error esse at commodi? Neque, amet porro aut fuga iste odio suscipit hic molestias ratione, excepturi cupiditate dolores consectetur ex veritatis in eum, laudantium debitis eaque facilis!</p>
        <h2>MISI</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, quia commodi voluptate nobis ipsam molestiae quasi fugiat praesentium est, quis illum consectetur voluptatum? Quisquam, totam ullam quod dignissimos praesentium quidem. Veritatis nisi, alias quod corrupti quasi commodi sequi, provident optio voluptates error iure. Culpa, eveniet quo? Error ea natus neque!</p>
        <h2> FILOSOFI LOGO</h2>
        <h2>HMP MANDALANATA</h2>
        <img src="../assets/logo-contoh.png " class="hmp-img2" alt="...">
    </div>
</div>
<br><br>

<div class="slide-container swiper" id="terakhir">
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

@endsection

@section('script')

<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Swiper JS -->
<script src="{{ asset('assets/js/hmp-ukm.min.js') }}"></script>
<!-- JavaScript -->
<script src="{{ asset('assets/js/hmp.js') }}"></script>
@endsection
