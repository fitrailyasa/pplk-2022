@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Tebak Bangunan - Home')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/GANTI.css">
@endsection

@section('content')
    <!-- CONTENT -->
    <section></section>
@endsection

@section('script')
    <!-- SCRIPTS -->
<<<<<<< Updated upstream
    <script></script>
=======
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
      ScrollReveal({ reset: true });
    </script>
    <script>
      ScrollReveal().reveal(".card-bangunan");
    </script>
    <script type="text/javascript">
      let nav = document.querySelector("#navbar-desktop");

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 50) {
          nav.classList.add("background-gradient", "shadow");
        } else {
          nav.classList.remove("background-gradient", "shadow");
        }
      });
    </script>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
@endsection
=======

>>>>>>> Stashed changes
