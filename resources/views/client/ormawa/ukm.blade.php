@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Ukm')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/perhimpunan.css') }}">

@endsection

@section('content')
        <!-- list card -->
        <div class="container-fluid pt-5 mt-5">
            <div class="title text-center">
                <p class="h3 fw-bold text-white">UKM ITERA</p>
            </div>
            <div class="d-flex justify-content-center flex-wrap col">
              @foreach($ukms as $ukm)
                @if($ukm->id)
              <div class="card m-4">
                    <div class="d-flex justify-content-center box">
                        <div class="ratio ratio-1x1 box-img">
                            <img src="{{ asset('assets/ukm/logo/'. $ukm->namaSingkat.'.svg') }}" class="card-img p-2" alt="image">
                        </div>
                    </div>
                    <div class="card-body pb-5">
                      <h5 class="card-title">{{ $ukm->namaSingkat }}</h5>
                      <p class="card-text">{{ $ukm->namaLengkap }}</p>
                    </div>
                    <a href="/detailUkm/{{ $ukm->id }}">
                      <button href="{{ route('detailUkm',$ukm->id) }}" class="tombol background-gradient">Detail
                      </button>
                      </a>
                  </div>
                  @endif
                  @endforeach
                </div>
        </div>

@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
