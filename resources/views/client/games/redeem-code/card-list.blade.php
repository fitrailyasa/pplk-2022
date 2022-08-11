@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Card List')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/redeem-code-card.css') }}">
@endsection

@section('content')
    <!-- CONTENT -->

    <div class="star-conten">
        <!-- landing page -->
        <div class="container-fluid landing-page py-4">
            <div class="row justify-content-center">
                <div class="box ratio ratio-1x1 w-25">
                    <svg  viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="icon-navbar" fill-rule="evenodd" clip-rule="evenodd" d="M13.6693 21.2843H15.3477H16.6748H18.356C18.2952 22.1593 18.4515 22.8788 19.0288 23.2988C20.872 24.64 23.9688 24.4629 24.8167 19.1021C25.0329 18.8743 25.2391 18.6345 25.4348 18.3838C25.2121 19.6249 25.2529 20.6757 26.0023 21.221C28.2391 22.8486 32.2814 22.2165 31.985 12.8385C31.7385 5.04207 27.767 4.42064 26.4344 4.43279C26.1922 3.97107 25.9207 3.5298 25.6219 3.11285C24.9453 2.15376 24.099 1.37863 23.1416 0.841137C22.1842 0.303643 21.1386 0.0166375 20.0772 0H16.6748H15.3477H11.9386C10.8795 0.0189149 9.83649 0.307015 8.88155 0.844428C7.92661 1.38184 7.08245 2.15578 6.40729 3.11285C6.10711 3.52937 5.83471 3.97067 5.59195 4.43277C4.26381 4.4213 0.312102 5.04624 0.0210077 12.8385C-0.329328 22.2165 3.78712 22.8486 6.02387 21.221C6.77255 20.6763 6.81398 19.6234 6.5918 18.3804C6.78683 18.6306 6.99238 18.8698 7.20782 19.0972C8.05458 24.4628 11.1527 24.6404 12.9965 23.2988C13.5738 22.8788 13.7301 22.1593 13.6693 21.2843ZM15.8906 9.77314V11.1241C15.8906 12.5542 16.1736 13.7156 16.5239 13.7156H16.8675C17.2179 13.7156 17.5008 12.5542 17.5008 11.1241V9.77314C17.5008 8.33522 17.2179 7.17383 16.8675 7.17383H16.5441C16.1938 7.17383 15.8906 8.33522 15.8906 9.77314ZM10.3203 11.1241V9.77314C10.3203 8.33522 10.6033 7.17383 10.9536 7.17383H11.277C11.6273 7.17383 11.9103 8.33522 11.9103 9.77314V11.1241C11.9103 12.5542 11.6273 13.7156 11.277 13.7156H10.9536C10.6033 13.7156 10.3203 12.5542 10.3203 11.1241Z" fill="black"/>
                    </svg>

                </div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-lg-7 text-center text-container text-white justify-content-center">
                    <p class="title-text">REDEEM CODE</p>
                    <span class="line-indikator mx-auto"></span>
                    <p class="text-conten mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam aliquam corporis ad at dicta quia pariatur. Dolores perspiciatis id laboriosam?</p>
                </div>
            </div>
        </div>
        <!-- card list -->
        <div class="container-fluid card-list py-3">
            <div class="container-xxl">

                <div class="d-flex flex-wrap justify-content-around">
                    <!-- cards -->
            @foreach ($kode_games as $kode_game)
                    <a class="btn my-lg-4" href='{{ url("/redeem/$kode_game->no") }}' role="button">
                        <div class="card rounded-4">
                            <div class="ratio ratio-1x1 bg-grey rounded-4">
                                <img src="{{ asset('assets/logoCard/card.webp') }}" class="card-img-top img-box rounded-5" alt="{{ $kode_game->nama }}">
                            </div>
                            <div class="card-body">
                                <p class="card-text pt-lg-2 pt-md-1 text-center text-light">{{ $kode_game->nama }}</p>
                            </div>
                        </div>
                    </a>
            @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
