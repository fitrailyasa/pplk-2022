@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Game')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/games-fix.css') }}">
@endsection

@section('content')
     <!-- CONTENT -->
     <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center pt-5 pb-1">
                <svg id="games-bounce" width="250" height="250" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path style="fill: white;" id="icon-games" fill-rule="evenodd" clip-rule="evenodd" d="M13.6693 21.2843H15.3477H16.6748H18.356C18.2952 22.1593 18.4515 22.8788 19.0288 23.2988C20.872 24.64 23.9688 24.4629 24.8167 19.1021C25.0329 18.8743 25.2391 18.6345 25.4348 18.3838C25.2121 19.6249 25.2529 20.6757 26.0023 21.221C28.2391 22.8486 32.2814 22.2165 31.985 12.8385C31.7385 5.04207 27.767 4.42064 26.4344 4.43279C26.1922 3.97107 25.9207 3.5298 25.6219 3.11285C24.9453 2.15376 24.099 1.37863 23.1416 0.841137C22.1842 0.303643 21.1386 0.0166375 20.0772 0H16.6748H15.3477H11.9386C10.8795 0.0189149 9.83649 0.307015 8.88155 0.844428C7.92661 1.38184 7.08245 2.15578 6.40729 3.11285C6.10711 3.52937 5.83471 3.97067 5.59195 4.43277C4.26381 4.4213 0.312102 5.04624 0.0210077 12.8385C-0.329328 22.2165 3.78712 22.8486 6.02387 21.221C6.77255 20.6763 6.81398 19.6234 6.5918 18.3804C6.78683 18.6306 6.99238 18.8698 7.20782 19.0972C8.05458 24.4628 11.1527 24.6404 12.9965 23.2988C13.5738 22.8788 13.7301 22.1593 13.6693 21.2843ZM15.8906 9.77314V11.1241C15.8906 12.5542 16.1736 13.7156 16.5239 13.7156H16.8675C17.2179 13.7156 17.5008 12.5542 17.5008 11.1241V9.77314C17.5008 8.33522 17.2179 7.17383 16.8675 7.17383H16.5441C16.1938 7.17383 15.8906 8.33522 15.8906 9.77314ZM10.3203 11.1241V9.77314C10.3203 8.33522 10.6033 7.17383 10.9536 7.17383H11.277C11.6273 7.17383 11.9103 8.33522 11.9103 9.77314V11.1241C11.9103 12.5542 11.6273 13.7156 11.277 13.7156H10.9536C10.6033 13.7156 10.3203 12.5542 10.3203 11.1241Z" fill="black"/>
                </svg>
                <p class="pt-3 pb-5 row justify-content-center fw-bolder" style="color: white; font-size: 2.5rem;">PERMAINAN</p>
                <div class="row justify-content-center container-started">
                    <a class="btn btn-primary btn-started justify-content-center text-wrap" href="#play-the-game" role="button" style="align-items: center !important;"><small>Mulai!</small></a>
                </div>
            </div>

            <div class="pt-5 row justify-content-center">
                <div class="" id="play-the-game">
                    <p class="play-game text-center">MARI BERMAIN PERMAINAN</p>
                    <p class="play-game text-center"> TENTANG <a href="#games-bounce" class="play-pplk">PPLK 2022</a></p>
                </div>
                <div class="card card-user-info w-50 rounded-4 pt-3" id="ranking-card">
                    <div class="row p-2">
                        <div class="col-auto">
                            <p class="card rounded-4" id="box-group"><i class="fa-solid fa-chess-queen"></i></p>
                        </div>
                        <div class="col-auto user-info">
                            <p>Kelompok </p>
                            <p>Peringkat 1</p>
                        </div>

                        <div class="col-auto d-flex">
                            <p style="font-size:1.3rem; text-indent: 10px; color: azure;" class="points-title"><i style="color:yellow" class="fa-solid fa-coins"></i>  Poin</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center pt-4 flex-wrap mx-auto">
                <a class="p-4 text-light col-md-5 card rounded-4 justify-content-start text-decoration-none" href="/card-list" id="choose-games">
                    <h2 class="fw-bold">Redeem Kode</h2>
                    <p class="">Redeem code nantinya dapat digunakan oleh para penjelajah angkasa untuk menukarkan point dari misi yang telah diselesaikan.</p>
                </a>
                <a class="p-4 text-light col-md-5 card rounded-4 justify-content-start text-decoration-none" href="/tebak-bangunan-game/{{ 1 }}" id="choose-games">
                    <h2 class="fw-bold">Tebak Bangunan</h2>
                    <p class="">Tebak bangunan adalah permainan yang mengharuskan penjelajah angkasa untuk menebak nama-nama gedung atau bangunan yang ada di sekitar ITERA.</p>
                </a>
            </div>

            <div class="row container-fluid justify-content-center p-5" id="leaderboard-tittle">
                3 RANKING TERTINGGI
            </div>

                <div class="top-3-winner row row-cols-3 pb-4">
                    <div class="winner-2 winner">
                        <div class="profile-winner">
                            <img src="{{ asset('assets/juara2.webp') }}" alt="Juara 2" />
                            <div class="winner-patch">
                                <h1 class="winner-text">
                                    2
                                </h1>
                            </div>
                        </div>
                        <div class="info-winner">

                            <div class="nama">
                                <h2>
                                    Kelompok {{  $leaderboards[1]->kelompok }}
                                </h2>
                            </div>
                            <div class="point">
                                <h1>
                                    {{  $leaderboards[1]->score }} poin
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="winner-1 winner">
                        <div class="profile-winner">
                            <div class="crown">
                                <!--<a href='https://pngtree.com/so/big'>big png from pngtree.com/</a>-->
                                <img src="{{ asset('assets/Golden Crown.webp') }}" alt="crown" class="crown-img"/>
                            </div>
                            <img src="{{ asset('assets/juara1.webp') }}" alt="Juara 1" />
                            <div class="winner-patch">
                                <h1 class="winner-text">
                                    1
                                </h1>
                            </div>
                        </div>



                        <div class="info-winner">
                            <div class="nama">
                                <h2>
                                    Kelompok  {{  $leaderboards[0]->kelompok }}
                                </h2>
                            </div>
                            <div class="point">
                                <h1>
                                    {{  $leaderboards[0]->score }}  poin
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="winner-3 winner">
                        <div class="profile-winner">
                            <img src="{{ asset('assets/juara3.webp') }}" alt="Juara 3" />
                            <div class="winner-patch">
                                <h1 class="winner-text">
                                    3
                                </h1>
                            </div>
                        </div>
                        <div class="info-winner">
                            <div class="nama">
                                <h2>
                                    Kelompok {{  $leaderboards[2]->kelompok }}
                                </h2>
                            </div>
                            <div class="point">
                                <h1>
                                    {{  $leaderboards[2]->score }} poin
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>



            <div class="container card table-bknd">
                <table class="table table-bordered table-striped my-3">
                    <thead>
                        <tr>
                            <th scope="col">Rank</th>
                            <th scope="col">Kelompok</th>
                            <th scope="col">Poin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($n=3 ; $n<=9 ; $n++)
                        <tr>

                            <td>{{ $n+1 }}</td>
                            <td>Kelompok {{ $leaderboards[$n]->kelompok }}</td>
                            <td>{{ $leaderboards[$n]->score }} Poin</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="box_astronaut" onclick="window.location.href='https://instagram.com/fitrailyasa'" style="cursor: pointer;">
        <img class="object_astronaut" src="{{ asset('assets/astronaut.svg') }}" width="120px">
    </div>

    <!--Content web selesai dari sini-->
@endsection

@section('script')
    <!-- SCRIPTS -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
