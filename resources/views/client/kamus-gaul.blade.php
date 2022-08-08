@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Kamus Gaul')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-kamus-gaul.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@endsection

@section('content')
    <!-- CONTENT -->
    <div class="container-fluid">
        <!-- Kamus Gaul PPLK 2022 -->
        <div class="kamus-gaul_pplk">
            <div class = "container">
                <h2>KAMUS GAUL<br>PPLK 2022</h2>
            </div>
    <!-- CARD Kamus -->


                <div class="d-flex justify-content-center flex-wrap">
                    @foreach($kamus_gauls as $kamus_gaul)
                    <div class="card rounded-4" id="btn-kamus">
                        <a class="d-flex justify-content-center box " id="box-kamus" href="#popup-{{ $loop->iteration }}">
                            <div class="kata-kamus">{{ $kamus_gaul ->gaul }}</div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @foreach($kamus_gauls as $kamus_gaul)
<div id="popup-{{ $loop->iteration }}">
    <div class="window" id="full-kamus">
        <a href="#" title="Close"> <i class="fa-solid fa-2x fa-circle-xmark close-button"></i></a>
        <h2>{{ $kamus_gaul ->gaul }}</h2>
        <h6>{{ $kamus_gaul ->asli }}</h6>
        <div class="contoh-penggunaan">
            <h6>{{ $kamus_gaul ->contohPenggunaan }}</h6>
        </div>
    </div>
</div>
@endforeach

    <!-- TARGET MODAL/POPUP -->
        </div>
    </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/main-kamus-gaul.js') }}"></script>
@endsection
