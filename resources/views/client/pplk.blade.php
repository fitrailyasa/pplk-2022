@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'PPLK 2022')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/GANTI.css">
    <link rel="stylesheet" href="../css/pplk.css">
    <link rel="stylesheet" href="../css/bootstrap-pplk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
@endsection

@section('content')
    <!-- CONTENT -->
    <div class="PPLK">
        <div class="container">
            <h2><strong>PPLK 2022</strong></h2>
            
            <h3>Deskripsi Singkat</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quidem ullam recusandae, est assumenda sed quod eius ex amet perspiciatis aliquam in error. Amet expedita sapiente facere veritatis quasi ullam.</p>
            <h3>FILOSOFI LOGO</h3>
            <a href="#" class="ratio ratio-1x1 pplk-logo">
                <img src="../assets/Logo-PPLK.png" alt="">
            </a>
        </div>
        <!-- Carousel Deskripsi-->
        <div class="wrapper">
            <div class="carousel owl-carousel">
                <div class="card card-1">
                    <div class="d-flex justify-content-center box">
                        <div class="ratio ratio-1x1 box-img">
                            <img src="../assets/Logo-PPLK.png" class="card-img p-1" alt="">
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae ipsum asperiores ipsa id iusto, fugit tenetur? Assumenda tempore sequi suscipit saepe ut dolorum, corrupti reiciendis? Voluptatem enim doloremque quibusdam ipsam.
                    </p>
               </div>
               <div class="card card-2">
                    <div class="d-flex justify-content-center box">
                        <div class="ratio ratio-1x1 box-img">
                            <img src="../assets/Logo-PPLK.png" class="card-img p-1" alt="">
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae ipsum asperiores ipsa id iusto, fugit tenetur? Assumenda tempore sequi suscipit saepe ut dolorum, corrupti reiciendis? Voluptatem enim doloremque quibusdam ipsam.
                    </p>
               </div>
               <div class="card card-3">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="../assets/Logo-PPLK.png" class="card-img p-1" alt="">
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae ipsum asperiores ipsa id iusto, fugit tenetur? Assumenda tempore sequi suscipit saepe ut dolorum, corrupti reiciendis? Voluptatem enim doloremque quibusdam ipsam.
                </p>
               </div>
               <div class="card card-4">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="../assets/Logo-PPLK.png" class="card-img p-1" alt="">
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae ipsum asperiores ipsa id iusto, fugit tenetur? Assumenda tempore sequi suscipit saepe ut dolorum, corrupti reiciendis? Voluptatem enim doloremque quibusdam ipsam.
                </p>
               </div>
               <div class="card card-5">
                <div class="d-flex justify-content-center box">
                    <div class="ratio ratio-1x1 box-img">
                        <img src="../assets/Logo-PPLK.png" class="card-img p-1" alt="">
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae ipsum asperiores ipsa id iusto, fugit tenetur? Assumenda tempore sequi suscipit saepe ut dolorum, corrupti reiciendis? Voluptatem enim doloremque quibusdam ipsam.
                </p>
               </div>
            </div>
         </div>
    </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script></script>
@endsection
