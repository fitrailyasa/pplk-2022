<!DOCTYPE html>
<html lang="id">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="theme-color" content="#09f" />
        <meta name="description" content="DESKRIPSI" />
        <meta name="keywords" content="KATA KUNCI" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="author" content="ARDHAMES" />
        <meta name="copyright" content="PPLK 2022" />
        <meta name="robots" content="follow" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:type" content="cms website" />
        <meta property="og:title" content="CMS Website PPLK 2022" />
        <meta property="og:url" content="URL" />
        <link rel="manifest" href="./manifest.webmanifest" />

        <!-- JUDUL -->
        <title>@yield('title') - CMS PPLK 2022</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        @yield('style')

        <!-- Owl-carousel -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/favicon.ico" />

        <!-- Bootstrap icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    </head>
    <body>

        @include('layouts.admin.menu')
        
        @yield('content')

        <!-- Footer -->
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" id="footer-page">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img class="rounded-circle" src="{{ asset('assets') }}/contoh-photo.jpg" alt="logo">
                </a>
                <span class="text-white">&copy; ARDHAMES || PPLK 2022</span>
            </div>
            <ul class="nav col-md-4 justify-content-center list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </ul>
        </footer>
        
        <!-- JS -->
        <script type="text/javascript">
            let nav = document.querySelector('#navbar-desktop');
            window.addEventListener('scroll', function () {
                if (window.pageYOffset > 50) {
                    nav.classList.add('background-gradient', 'shadow');
                } else {
                    nav.classList.remove('background-gradient', 'shadow');
                }
            });
        </script>

        @yield('script')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>