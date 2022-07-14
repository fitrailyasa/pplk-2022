@extends('layouts.client.app')
//tambahin
<!-- TITLE -->
@section('title', 'Unit Pengelolaan Terpadu')

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

    <link rel="stylesheet" href="{{ asset('assets/css/UPT.css') }}">
@endsection

@section('content')
    <!-- CONTENT -->
    <!-- jumbotron -->
    <div class="jumbotron  ratio ratio-16x9 my-auto">
    </div>

    <!-- konten -->
    <div class="container-fluid">
        <div class="row">
            <h2 class="text-center display-3 px-5 py-5 text-light animasi"><strong>UPT ITERA</strong></h2>
        </div>
        <div class="row">
            <div class="carousel owl-carousel justify-content-center" id="upt-carousel">
                <div class="card card-1 upt-card text-light p-3 mx-auto" data-merge="3">
                    <h3 class="text-center my-4">lorem</h3>
                    <p class="container">Permisi Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum natus
                        corrupti voluptates
                        quisquam molestiae eos quam possimus cupiditate provident quasi doloremque, consequuntur at et
                        cumque porro odio ipsam dignissimos?
                        Provident, voluptatum libero! Accusantium, similique. Cum non quas nemo ullam recusandae,
                        consequatur laborum doloremque magnam deleniti nesciunt, ut molestias similique unde aut nulla
                        ab quisquam voluptatibus eaque molestiae sit voluptas!</p>
                </div>
                <div class="card card-2 upt-card text-light p-3 mx-auto" data-merge="3">
                    <h3 class="text-center my-4">lorem</h3>
                    <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum natus
                        corrupti voluptates
                        quisquam molestiae eos quam possimus cupiditate provident quasi doloremque, consequuntur at et
                        cumque porro odio ipsam dignissimos?
                        Provident, voluptatum libero! Accusantium, similique. Cum non quas nemo ullam recusandae,
                        consequatur laborum doloremque magnam deleniti nesciunt, ut molestias similique unde aut nulla
                        ab quisquam voluptatibus eaque molestiae sit voluptas!</p>
                </div>
                <div class="card card-3 upt-card text-light p-3 mx-auto" data-merge="3">
                    <h3 class="text-center my-4">lorem</h3>
                    <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum natus
                        corrupti voluptates
                        quisquam molestiae eos quam possimus cupiditate provident quasi doloremque, consequuntur at et
                        cumque porro odio ipsam dignissimos?
                        Provident, voluptatum libero! Accusantium, similique. Cum non quas nemo ullam recusandae,
                        consequatur laborum doloremque magnam deleniti nesciunt, ut molestias similique unde aut nulla
                        ab quisquam voluptatibus eaque molestiae sit voluptas!</p>
                </div>
                <div class="card card-4 upt-card text-light p-3 mx-auto" data-merge="3">
                    <h3 class="text-center my-4">lorem</h3>
                    <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum natus
                        corrupti voluptates
                        quisquam molestiae eos quam possimus cupiditate provident quasi doloremque, consequuntur at et
                        cumque porro odio ipsam dignissimos?
                        Provident, voluptatum libero! Accusantium, similique. Cum non quas nemo ullam recusandae,
                        consequatur laborum doloremque magnam deleniti nesciunt, ut molestias similique unde aut nulla
                        ab quisquam voluptatibus eaque molestiae sit voluptas!</p>
                </div>
                <div class="card card-5 upt-card text-light p-3 mx-auto" data-merge="3">
                    <h3 class="text-center my-4">lorem</h3>
                    <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cum natus
                        corrupti voluptates
                        quisquam molestiae eos quam possimus cupiditate provident quasi doloremque, consequuntur at et
                        cumque porro odio ipsam dignissimos?
                        Provident, voluptatum libero! Accusantium, similique. Cum non quas nemo ullam recusandae,
                        consequatur laborum doloremque magnam deleniti nesciunt, ut molestias similique unde aut nulla
                        ab quisquam voluptatibus eaque molestiae sit voluptas!</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script></script>
@endsection
