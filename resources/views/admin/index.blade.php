@extends('layouts.admin.app')

@section('title', 'CMS')

@section('content')

<!-- MAIN CONTENT -->

    <!--Dashboard-->
    <div class="col-xl-12 col-lg-12 form-wrapper" id="dashboard" >
      <div class="row">
        <div class="col-md">
          <div class="widget-stat card" style="background: #FF6565;">
            <div class="card-body p-4">
              <div class="media">
              <div class="media-body text-white text-end">
                <p class="mb-1">Total Mahasiswa Baru</p>
                <h3 class="text-white">4820</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="widget-stat card" style="background: #58ED67;">
          <div class="card-body p-4">
            <div class="media">
              <div class="media-body text-white text-end">
                <p class="mb-1">Total Panitia</p>
                <h3 class="text-white">924</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="widget-stat card" style="background: #FF659C;">
          <div class="card-body p-4">
            <div class="media">
              <div class="media-body text-white text-end">
                <p class="mb-1">Total Himpunan</p>
                <h3 class="text-white">{{ $totalHimpunan }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-md">
          <div class="widget-stat card" style="background: #9665FF;">
            <div class="card-body p-4">
              <div class="media">
                <div class="media-body text-white text-end">
                  <p class="mb-1">Total UKM/Komunitas</p>
                  <h3 class="text-white">{{ $totalUkm }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="widget-stat card" style="background: #6590FF;">
            <div class="card-body p-4">
              <div class="media">
                <div class="media-body text-white text-end">
                  <p class="mb-1">Total Dapmen</p>
                  <h3 class="text-white">163</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="widget-stat card" style="background: #61DAEB;">
            <div class="card-body p-4">
              <div class="media">
                <div class="media-body text-white text-end">
                  <p class="mb-1">Total Akun</p>
                  <h3 class="text-white">{{ $totalAkun }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <div class="widget-stat card" style="background: #FFA73F;">
            <div class="card-body p-4">
              <div class="media">
                <div class="media-body text-white text-end">
                  <p class="mb-1">Total Kehadiran Maba</p>
                  <h3 class="text-white">{{ $totalPresensiMaba }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="widget-stat card" style="background: #F458F8;">
            <div class="card-body p-4">
              <div class="media">
                <div class="media-body text-white text-end">
                  <p class="mb-1">Total Kehadiran Panitia</p>
                  <h3 class="text-white">{{ $totalPresensiPanitia }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--./Dashboard-->

<!--------------------------------------------------------------------------------->

<!--CREATE DATA-->


<!--./CREATE DATA-->

<!--------------------------------------------------------------------------------->

<!-- READ & DELETE DATA-->


<!--./READ & DELETE DATA -->

<!--------------------------------------------------------------------------------->


<!--UPDATE DATA-->



<!--./UPDATE DATA-->

@endsection

@section('script')
<!--Table update prodi-->

@endsection
