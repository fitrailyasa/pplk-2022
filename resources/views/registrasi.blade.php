<!DOCTYPE html>
<html lang="id">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="theme-color" content="#09f" />
        <meta name="description" content="Program Pengenalan Lingkungan Kampus (PPLK) merupakan acara pesta penyambutan terbesar untuk mahasiswa baru yang diselenggarakan setiap tahunnya di Institut Teknologi Sumatera (ITERA). PPLK ITERA hadir sebagai akses utama bagi mahasiswa baru untuk mengawali gerbang perkuliahan, yang berupa kaderisasi awal terpusat yang diselenggarakan oleh Keluarga Mahasiswa Institut Teknologi Sumatera (KM ITERA) untuk menyambut mahasiswa baru." />
        <meta name="keywords" content="PPLK, Program Pengenalan Lingkungan Kampus, PPLK ITERA 2022, KM-ITERA" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="author" content="Fitra Ilyasa" />
        <meta name="copyright" content="PPLK 2022" />
        <meta name="robots" content="follow" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Website PPLK 2022" />
        <meta property="og:url" content="URL" />
        <link rel="manifest" href="./manifest.webmanifest" />

        <!-- JUDUL -->
        <title>Registrasi - PPLK 2022</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/main-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{ asset('assets/css/regist.css') }}">

        <!-- Owl-carousel -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">
        <!-- Bootstrap icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    </head>
    <body>

        <section>
            <!-- Splash Screen -->
            <div class="launch-logo fade" id="splash-screen">
              <img src="../assets/Logo-PPLK.png" alt="launch-logo-pplk" class="launch-logo-image" />
            </div>

            <!-- Outer Container -->
            <div class="container-lg bg-transparent show-up">
              <!-- Image Container -->
              <div class="container-fluid d-flex justify-content-center mt-3 mb-3">
                <!-- Image row and column -->
                <div class="row justify-content-center">
                  <div class="col-sm-6 col-md-5 text-center text-wrap" id="image">
                    <img class="img-fluid" src="../assets/logo-pplk-minified.png" alt="" />
                  </div>
                </div>
              </div>

              <!-- Login -->
              <div class="container-fluid mb-4 rounded pt-3 pb-4" id="login">
                <!-- Sambutan-1 -->
                <div class="row justify-content-center">
                  <div class="col-sm-12 col-md-5 text-center text-wrap">
                    <h2 class="text-white">Selamat Datang di PPLK 2022</h2>
                  </div>
                </div>
                <!-- Akhir Sambutan-1 -->

                <!-- Sambutan-2 -->
                <div class="row justify-content-center">
                  <div class="col-4 text-center text-wrap">
                    <p class="text-white">Mulai Menjelajah sekarang!</p>
                  </div>
                </div>
                <!-- Akhir Sambutan-2 -->

                <form method="post" action="{{ url('registrasi/create') }}">
                  @csrf
                <!-- Nama -->
                <div class="row justify-content-center align-items-center">
                  <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <input name="name" type="text" class="form-control rounded input-size" id="name" placeholder="Nama" required autocomplete="off"/>
                  </div>
                </div>
                <!-- Akhir Nama -->

                <!-- NIM -->
                <div class="row justify-content-center align-items-center">
                  <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <input name="nim" type="text" class="form-control rounded input-size" id="nim" placeholder="NIM" required />
                  </div>
                </div>
                <!-- Akhir NIM -->

                {{-- error nim --}}
                <div class="row justify-content-center">
                  <div class="col mb-3 d-flex justify-content-center">
                      @error('nim')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
                </div>

                <!-- Email -->
                <div class="row justify-content-center">
                  <div class="col mb-3 d-flex justify-content-center">
                    <input name="email" type="email" class="form-control rounded input-size" id="email" placeholder="Email" required />
                  </div>
                </div>

                {{-- error email --}}
                <div class="row justify-content-center">
                  <div class="col mb-3 d-flex justify-content-center">
                      @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
                </div>

                  <!-- Instagram -->
                  <div class="row justify-content-center align-items-center">
                      <div class="col mb-3 d-flex justify-content-center align-items-center">
                          <input name="instagram" type="text" class="form-control rounded input-size" id="ig" placeholder="Instagram (tanpa @)" required />
                      </div>
                  </div>
                  <!-- Akhir Instagram -->

                    {{-- error instagram --}}
                <div class="row justify-content-center">
                  <div class="col mb-3 d-flex justify-content-center">
                      @error('instagram')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
                </div>

                  <!-- nohp -->
                  <div class="row justify-content-center align-items-center">
                      <div class="col mb-3 d-flex justify-content-center align-items-center">
                          <input name="nomorHp" type="text" class="form-control rounded input-size" id="ig" placeholder="Nomor Hp 62-xxx-xxxx-xxxx" required />
                      </div>
                  </div>
                  <!-- nohp -->

                  {{-- error nomorHp --}}
                <div class="row justify-content-center">
                  <div class="col mb-3 d-flex justify-content-center">
                      @error('nomorHp')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
                </div>


                <!-- Password -->
                <div class="row justify-content-center">
                  <div class="col mb-3 d-flex justify-content-center">
                    <input name="password" type="password" class="form-control rounded input-size" id="password" placeholder="Password" required />
                  </div>
                </div>
                <!-- Akhir Password -->

                <!-- Divisi -->
                <div class="row justify-content-center align-items-center">
                  <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <select name="divisi" class="form-select rounded input-size text-secondary" aria-label="Default select example">
                      <option selected value="belum_isi">Divisi</option>
                      <option value="Ardhames">Ardhames</option>
                      <option value="Eriedanus">Eriedanus</option>
                      <option value="Galexia">Galexia</option>
                      <option value="Arp">Arp</option>
                      <option value="MilkyWay">MilkyWay</option>
                      <option value="Ardhames">Ardhames</option>
                      <option value="Heliodile">Heliodile</option>
                      <option value="Harterous">Harterous</option>
                      <option value="Zenith">Zenith</option>
                      <option value="Krios">Krios</option>
                      <option value="Kronos">Kronos</option>
                      <option value="Kosmos">Kosmos</option>
                      <option value="Sagitarius">Sagitarius</option>
                      <option value="Artherius">Artherius</option>
                      <option value="Phoenix">Phoenix</option>
                      <option value="Cassiopeia">Cassiopeia</option>
                      <option value="Sagitarius">Sagitarius</option>
                      <option value="Phalosawala">Phalosawala</option>
                    </select>
                  </div>
                </div>
                <!-- Akhir Divisi -->

                 <!-- prodi -->
                 <div class="row justify-content-center align-items-center">
                  <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <select placeholder="prodi" name="prodi" class="form-select rounded input-size text-secondary" aria-label="Default select example">
                        @foreach ($prodis as $prodi )
                        <option selected value="{{ $prodi->namaLengkap }}">{{ $prodi->namaLengkap }}</option>
                    @endforeach
                  </select>
              </div>
                <!-- prodi -->

                          <!-- riwayatPenyakit -->
                          <div class="row justify-content-center align-items-center">
                              <div class="col mb-3 d-flex justify-content-center align-items-center">
                                  <input name="riwayatPenyakit" type="text" class="form-control rounded input-size" id="ig" placeholder="Riwayat Penyakit" required />
                              </div>
                          </div>
                          <!-- riwayatPenyakit -->

                        <!-- golongan darah -->
                        <div class="row justify-content-center align-items-center">
                          <div class="col mb-3 d-flex justify-content-center align-items-center">
                              <select placeholder="golonganDarah" name="golonganDarah" class="form-select rounded input-size text-secondary" aria-label="Default select example">
                                  <option selected class="selected">Golongan Darah</option>
                                  <option value="A">A</option>
                                  <option value="AB">AB</option>
                                  <option value="B">B</option>
                                  <option value="O">O</option>
                              </select>
                           </div>
                        </div>
                        <!-- golongan darah -->

                <!-- Tombol Daftar -->
                <div class="row justify-content-center mb-5">
                  <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger rounded fw-bold" id="masuk">DAFTAR</button>
                  </div>
                </div>
                <!-- Akhir Tombol Daftar -->

              </form>
                <div class="row justify-content-center">
                  <div class="col-6 d-flex justify-content-center text-center">
                </div>
              </div>
              <!-- Akhir Login -->
              </div>

          </section>

        <!-- Footer -->
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top" id="footer-page">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img class="rounded-circle" src="{{ asset('assets/Logo-PPLK.png') }}" alt="logo">
                </a>
                <span class="text-white">&copy;ARDHAMES PPLK 2022</span>
            </div>
            <ul class="nav col-md-4 justify-content-center list-unstyled d-flex">
                {{-- <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-twitter"></i></a></li> --}}
                <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/pplkitera/"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/iterapplk"><i class="fa-brands fa-facebook"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/channel/UC09qEyEDNG1U_l4u41LTpTw"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </footer>
        <!-- JS -->
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

        @yield('script')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>


