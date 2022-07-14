@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Redeem')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('assets/css/redeem-code-redeem.css') }}">
    <!-- olw-caorusel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
@endsection

@section('content')
    <!-- CONTENT -->
     <!-- start conten -->
     <div class="start-content">
        <div class="container-fluid redeem py-3 mt-4">
            <div class="row justify-content-around">
                <div class="col-11 text-start">
                    <p class="text-white title-text">REDEEM CODE</p>
                    <div class="line-indikator"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- card choesed -->
                <div class="col-8 col-lg-4 ">
                    <div class="card rounded-4">
                        <div class="bg-white rounded-4">
                            <div class="ratio ratio-16x9 bg-white rounded-4">
                                <img src="../assets/space-cat.png" class="card-img-top img-box" alt="...">
                            </div>
                            <div class="description text-center pt-3">
                                <p>Penejlasan Singkat</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text pt-lg-2 pt-md-1 text-center text-light">pohon</p>
                        </div>
                    </div>
                </div>
                <!-- card choesed -->

                <!-- redeem code -->
                <div class="col-6 mt-4">
                    <form>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="code-redeem" class="form-label text-white">CODE :</label>
                                <input type="text" id="code-redeem" class="input-control" placeholder="_______">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <!-- Button trigger modal -->>
                            <button type="button" class="btn btn-redeem" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                <strong>REEDEM</strong>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- redeem code -->
            r

                <!-- Vertically centered modal -->
                <!-- Modal -->
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="conten-modal py-5">
                                    <h1 class="text-center dsplay-4"><strong>REEDEM CODE GAGAL</strong></h1>
                                    <p class="px-4 text-center">Yahh kode yang kalian masukna salah
                                        coba kode lain yuk !!.</p>
                                </div>
                            </div>
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
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
@endsection
