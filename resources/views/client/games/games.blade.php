@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Home - Game')

@section('style')
    <!-- STYLES -->

    <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/games.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
@endsection

@section('content')
    <!-- CONTENT -->
    <!--Content web mulai dari sini-->
    <div class="content-wrapper">
        <!--Landing-->
        <div class="container-fluid main-landing-page">
            <div class="games-logo-container row justify-content-center">
                <div class="box games-logo">
                    <svg viewBox="0 0 32 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path id="icon-navbar" fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.6693 21.2843H15.3477H16.6748H18.356C18.2952 22.1593 18.4515 22.8788 19.0288 23.2988C20.872 24.64 23.9688 24.4629 24.8167 19.1021C25.0329 18.8743 25.2391 18.6345 25.4348 18.3838C25.2121 19.6249 25.2529 20.6757 26.0023 21.221C28.2391 22.8486 32.2814 22.2165 31.985 12.8385C31.7385 5.04207 27.767 4.42064 26.4344 4.43279C26.1922 3.97107 25.9207 3.5298 25.6219 3.11285C24.9453 2.15376 24.099 1.37863 23.1416 0.841137C22.1842 0.303643 21.1386 0.0166375 20.0772 0H16.6748H15.3477H11.9386C10.8795 0.0189149 9.83649 0.307015 8.88155 0.844428C7.92661 1.38184 7.08245 2.15578 6.40729 3.11285C6.10711 3.52937 5.83471 3.97067 5.59195 4.43277C4.26381 4.4213 0.312102 5.04624 0.0210077 12.8385C-0.329328 22.2165 3.78712 22.8486 6.02387 21.221C6.77255 20.6763 6.81398 19.6234 6.5918 18.3804C6.78683 18.6306 6.99238 18.8698 7.20782 19.0972C8.05458 24.4628 11.1527 24.6404 12.9965 23.2988C13.5738 22.8788 13.7301 22.1593 13.6693 21.2843ZM15.8906 9.77314V11.1241C15.8906 12.5542 16.1736 13.7156 16.5239 13.7156H16.8675C17.2179 13.7156 17.5008 12.5542 17.5008 11.1241V9.77314C17.5008 8.33522 17.2179 7.17383 16.8675 7.17383H16.5441C16.1938 7.17383 15.8906 8.33522 15.8906 9.77314ZM10.3203 11.1241V9.77314C10.3203 8.33522 10.6033 7.17383 10.9536 7.17383H11.277C11.6273 7.17383 11.9103 8.33522 11.9103 9.77314V11.1241C11.9103 12.5542 11.6273 13.7156 11.277 13.7156H10.9536C10.6033 13.7156 10.3203 12.5542 10.3203 11.1241Z"
                            fill="black" />
                    </svg>
                </div>
            </div>
            <div class="games-display-container row justify-content-center">
                <p class="games-display">GAMES</p>
                <a class="btn btn-get-started btn-primary" href="#games" role="button">Get Started!</a>
            </div>
        </div>

        <!--Game menu-->
        <div class="games-menu-container" id="games">
            <p class="games-title">LET'S PLAY THE GAMES<br>ABOUT <a>PPLK 2022</a></p>
            <div class="card card-user-info">
                <div class="row">
                    <div class="col-md-auto col-logo">
                        <p class="col-logo-text">LOGO</p>
                    </div>
                    <div class="col-md-auto user-info">
                        <p class="user-info-name">Nama user<br><a>NAMA KELOMPOK</a><br>Kelompok 1</p>
                    </div>
                    <div class="col-md-auto col-points">
                        <div class="points-icon"></div>
                        <p class="points-title">Points</p>
                        <p class="points-value">1156 Point</p>
                    </div>
                </div>
            </div>

            <div class="row card-game-menu">
                <a class="col-md-auto card btn btn-primary card-game game1" href="">
                    <p class="game1-title">Redeem Code</p>
                    <p class="game1-desc">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Et a diam egestas faucibu</p>
                </a>
                <a class="col-md-auto card btn btn-primary card-game game2" href="">
                    <p class="game2-title">Tebak Bangunan</p>
                    <p class="game2-desc">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Et a diam egestas faucibu</p>
                </a>
            </div>
        </div>

        <!--Leaderboard-->
        <div class="leaderboard-container">
            <div class="leaderboarad-header-container">
                <p class="leaderboard-title">LEADERBOARD</p>
                <a class="btn leaderboard-underline"></a>
            </div>
            <!--
            <div class="top-rank-container" style="text-align: center;">
                <div class="row">
                    <div class="col-md-auto rank-col">
                        <img src="../assets/contoh-photo.jpg" class="rank-img rank2-img" alt="...">
                        <p class="sign-rank sign-rank2" >2</p>
                        <div class="top-rank-identity" style="margin-left: 90px;">
                            <p class="top-rank-ordergroup">Kelompok 15</p>
                            <p class="top-rank-name">Nama Kelompok</p>
                            <p class="top-rank-points">2789 Point</p>
                        </div>
                    </div>
                    <div class="col-md-auto rank-col">
                        <img src="../assets/contoh-photo.jpg" class="rank-img rank1-img" alt="...">
                        <p class="sign-rank sign-rank1">1</p>
                        <div class="top-rank-identity">
                            <p class="top-rank-ordergroup">Kelompok 4</p>
                            <p class="top-rank-name">Nama Kelompok</p>
                            <p class="top-rank-points">3214 Point</p>
                        </div>
                    </div>
                    <div class="col-md-auto rank-col">
                        <img src="../assets/contoh-photo.jpg" class="rank-img rank3-img" alt="...">
                        <p class="sign-rank sign-rank3">3</p>
                        <div class="top-rank-identity">
                            <p class="top-rank-ordergroup">Kelompok 3</p>
                            <p class="top-rank-name">Nama Kelompok</p>
                            <p class="top-rank-points">2345 Point</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <p class="ranking-title">RANKING</p>

            <div class="rank-table-container">
                <div class="list-rank-col list-active">
                    <div class="row">
                        <div class="col-md">
                            <p>1</p>
                        </div>
                        <div class="col-sm">
                            <!-- <a class="profile-img">
                                <img src="../assets/contoh-photo.jpg">
                            </a> -->
                            <p>Test2</p>
                        </div>
                        <div class="col-sm">
                            <p>Test3</p>
                        </div>
                        <div class="col-sm">
                            <p>Test4</p>
                        </div>
                    </div>
                </div>

                <div class="list-rank-col">
                    <div class="row">
                        <div class="col-sm-1">
                            <p>4</p>
                        </div>
                        <div class="col-sm-1">
                            <p></p>
                        </div>
                        <div class="col-lg-1">

                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Content web selesai dari sini-->
@endsection

@section('script')
    <!-- SCRIPTS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
@endsection
