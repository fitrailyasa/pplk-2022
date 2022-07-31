@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Polling')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-scanner.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/style-scanner.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <!-- CONTENT -->

    <div class="bg-presensi p-3">
        <div class="qr-code mx-auto justify-content-center">
            <div class="row row-scanner justify-content-center ms-auto me-auto">
                <div class="col-top-scanner justify-content-center">
                    <h5> SCANNER POLLING </h5>
                </div>
                <div><form action="/polling/{{ $ukms->id }}" method="POST">
                    @csrf
                <div class="col-scanner justify-content-center" id="ganti">
                    <div id="reader"  class="justify-content-center"></div>
                </div>

            </form></div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <!-- QrCode Js -->
<script src="{{ asset('assets/js/html5-qrcode.min.js') }}" type="text/javascript"></script>
<script  src="{{ asset('assets/js/scanner-polling-main.js') }}" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
