@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Himpunan')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/perhimpunan.css') }}">

@endsection

@section('content')
        <!-- list card -->
        <div class="container-fluid pt-5 mt-5">
            <div class="title text-center">
                <p class="h3 fw-bold text-white">Himpunan ITERA</p>
            </div>
            <div class="d-flex justify-content-center flex-wrap col" id="terakhir">
              @foreach($himpunans as $himpunan)
                @if($himpunan->id)
              <div class="card m-4">
                    <div class="d-flex justify-content-center box">
                        <div class="ratio ratio-1x1 box-img">
                            <img src="{{ asset('assets/himpunan/'. $himpunan->namaSingkat.'.svg') }}" class="card-img p-2" alt="...">
                        </div>
                    </div>
                    <div class="card-body pb-5">
                      <h5 class="card-title">{{ $himpunan->namaSingkat }}</h5>
                      <p class="card-text">{{ $himpunan->namaLengkap }}</p>
                    </div>
                    <a href="/detailHimpunan/{{ $himpunan->id }}">
                    <button href="{{ route('detailHimpunan',$himpunan->id) }}" class="tombol background-gradient">Detail
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
