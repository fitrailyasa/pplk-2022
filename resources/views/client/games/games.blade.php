@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Home - Game')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/GANTI.css">
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
    <div>
        <!--Landing-->
        <div class="main-landing-page">
            <p class="games-display">GAMES</p>
            <a class="btn btn-get-started btn-primary" href="#games" role="button">Get Started!</a>
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

@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
@endsection
