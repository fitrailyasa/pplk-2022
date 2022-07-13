@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Jurusan')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main-style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/styling.css">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets') }}/css/jurusan.css">
@endsection

@section('content')
    <!-- CONTENT -->
    <!-- Landing Page jurusan -->
    <div class="jumbotron  ratio ratio-16x9 my-auto">
    </div>

    <!-- nav & tabs -->
    <!-- pills -->
    <ul class="nav nav-pills mt-4 py-3 flex-nowrap  justify-content-center animasi" id="pills-tab" role="tablist">
        <!-- pills jsains -->
        <li class="nav-item mx-auto animasi-nav" role="presentation">
            <button class="nav-link text-light active" id="pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                <div class="row">
                    <svg class="dashboard-item-icon mx-auto" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path id="icon-navbar" fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.0003 10.6422C22.0637 12.3105 21.9725 13.9808 21.7279 15.6348C21.8147 15.7177 21.9029 15.8045 21.9926 15.8927C22.0884 15.9871 22.186 16.0831 22.2851 16.1775C23.6583 18.1887 24.2337 20.5767 23.9136 22.9353C23.8969 23.1613 23.8077 23.3776 23.6575 23.5567C23.5072 23.7359 23.3026 23.8697 23.0697 23.9414C22.8368 24.013 22.586 24.0191 22.3493 23.959C22.1126 23.8989 21.9006 23.7752 21.7403 23.6036C21.0397 22.9538 20.2307 22.4118 19.344 21.9984C16.944 22.5623 14.4771 22.8482 12.0005 22.8496C9.5205 22.8389 7.05161 22.5433 4.65076 21.9699C3.76657 22.3842 2.95974 22.9261 2.26071 23.5751C2.09464 23.7359 1.88238 23.8499 1.64873 23.9037C1.41507 23.9575 1.16966 23.9488 0.941136 23.8787C0.712614 23.8087 0.510413 23.6801 0.358142 23.5079C0.205871 23.3358 0.109812 23.1273 0.0811809 22.9067C-0.227976 20.5562 0.351597 18.1794 1.72202 16.1775C1.90778 15.9833 2.08734 15.8062 2.2669 15.6348C2.02463 13.9806 1.93556 12.3104 2.00065 10.6422C1.66629 10.7793 1.36289 10.8935 1.10284 10.9906C0.967375 11.0394 0.819753 11.0521 0.676885 11.027C0.534018 11.002 0.401686 10.9403 0.295053 10.8491C0.18842 10.7579 0.1118 10.6408 0.0739739 10.5112C0.0361478 10.3817 0.0386455 10.2449 0.0811809 10.1167C2.53934 2.73624 12.0005 0 12.0005 0C12.0005 0 21.4554 2.73624 23.9198 10.1167C23.9623 10.2449 23.9648 10.3817 23.927 10.5112C23.8892 10.6408 23.8126 10.7579 23.7059 10.8491C23.5993 10.9403 23.467 11.002 23.3241 11.027C23.1812 11.0521 23.0336 11.0394 22.8981 10.9906C22.6195 10.8935 22.3347 10.7793 22.0003 10.6422ZM10.5696 9.85938H9.99992C9.39806 9.85938 8.91016 10.3095 8.91016 10.8648V11.396C8.91016 11.9513 9.39806 12.4014 9.99992 12.4014H10.5696C11.1714 12.4014 11.6593 11.9513 11.6593 11.396V10.8648C11.6593 10.3095 11.1714 9.85938 10.5696 9.85938ZM14.0133 9.85938H13.4374C12.8356 9.85938 12.3477 10.3095 12.3477 10.8648V11.396C12.3477 11.9513 12.8356 12.4014 13.4374 12.4014H14.0133C14.6151 12.4014 15.103 11.9513 15.103 11.396V10.8648C15.103 10.3095 14.6151 9.85938 14.0133 9.85938ZM13.4374 13.0469H14.0133C14.6151 13.0469 15.103 13.497 15.103 14.0523V14.5835C15.103 15.1388 14.6151 15.5889 14.0133 15.5889H13.4374C12.8356 15.5889 12.3477 15.1388 12.3477 14.5835V14.0523C12.3477 13.497 12.8356 13.0469 13.4374 13.0469ZM10.564 13.0469H9.9882C9.38634 13.0469 8.89844 13.497 8.89844 14.0523V14.5835C8.89844 15.1388 9.38634 15.5889 9.9882 15.5889H10.564C11.1659 15.5889 11.6538 15.1388 11.6538 14.5835V14.0523C11.6538 13.497 11.1659 13.0469 10.564 13.0469Z"
                            fill="black" />
                    </svg>
                </div>
                <div class="row d-flex flex-wrap mx-auto my-auto fw-bold">
                    Jurusan Sains
                </div>
            </button>
        </li>
        <!-- pill jtip -->
        <li class="nav-item mx-auto animasi-nav" role="presentation">
            <button class="nav-link text-light" id="pills-contact-tab" data-bs-toggle="pill"
                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                aria-selected="false">
                <div class="row">
                    <svg class="dashboard-item-icon mx-auto" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path id="icon-navbar" fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.0003 10.6422C22.0637 12.3105 21.9725 13.9808 21.7279 15.6348C21.8147 15.7177 21.9029 15.8045 21.9926 15.8927C22.0884 15.9871 22.186 16.0831 22.2851 16.1775C23.6583 18.1887 24.2337 20.5767 23.9136 22.9353C23.8969 23.1613 23.8077 23.3776 23.6575 23.5567C23.5072 23.7359 23.3026 23.8697 23.0697 23.9414C22.8368 24.013 22.586 24.0191 22.3493 23.959C22.1126 23.8989 21.9006 23.7752 21.7403 23.6036C21.0397 22.9538 20.2307 22.4118 19.344 21.9984C16.944 22.5623 14.4771 22.8482 12.0005 22.8496C9.5205 22.8389 7.05161 22.5433 4.65076 21.9699C3.76657 22.3842 2.95974 22.9261 2.26071 23.5751C2.09464 23.7359 1.88238 23.8499 1.64873 23.9037C1.41507 23.9575 1.16966 23.9488 0.941136 23.8787C0.712614 23.8087 0.510413 23.6801 0.358142 23.5079C0.205871 23.3358 0.109812 23.1273 0.0811809 22.9067C-0.227976 20.5562 0.351597 18.1794 1.72202 16.1775C1.90778 15.9833 2.08734 15.8062 2.2669 15.6348C2.02463 13.9806 1.93556 12.3104 2.00065 10.6422C1.66629 10.7793 1.36289 10.8935 1.10284 10.9906C0.967375 11.0394 0.819753 11.0521 0.676885 11.027C0.534018 11.002 0.401686 10.9403 0.295053 10.8491C0.18842 10.7579 0.1118 10.6408 0.0739739 10.5112C0.0361478 10.3817 0.0386455 10.2449 0.0811809 10.1167C2.53934 2.73624 12.0005 0 12.0005 0C12.0005 0 21.4554 2.73624 23.9198 10.1167C23.9623 10.2449 23.9648 10.3817 23.927 10.5112C23.8892 10.6408 23.8126 10.7579 23.7059 10.8491C23.5993 10.9403 23.467 11.002 23.3241 11.027C23.1812 11.0521 23.0336 11.0394 22.8981 10.9906C22.6195 10.8935 22.3347 10.7793 22.0003 10.6422ZM10.5696 9.85938H9.99992C9.39806 9.85938 8.91016 10.3095 8.91016 10.8648V11.396C8.91016 11.9513 9.39806 12.4014 9.99992 12.4014H10.5696C11.1714 12.4014 11.6593 11.9513 11.6593 11.396V10.8648C11.6593 10.3095 11.1714 9.85938 10.5696 9.85938ZM14.0133 9.85938H13.4374C12.8356 9.85938 12.3477 10.3095 12.3477 10.8648V11.396C12.3477 11.9513 12.8356 12.4014 13.4374 12.4014H14.0133C14.6151 12.4014 15.103 11.9513 15.103 11.396V10.8648C15.103 10.3095 14.6151 9.85938 14.0133 9.85938ZM13.4374 13.0469H14.0133C14.6151 13.0469 15.103 13.497 15.103 14.0523V14.5835C15.103 15.1388 14.6151 15.5889 14.0133 15.5889H13.4374C12.8356 15.5889 12.3477 15.1388 12.3477 14.5835V14.0523C12.3477 13.497 12.8356 13.0469 13.4374 13.0469ZM10.564 13.0469H9.9882C9.38634 13.0469 8.89844 13.497 8.89844 14.0523V14.5835C8.89844 15.1388 9.38634 15.5889 9.9882 15.5889H10.564C11.1659 15.5889 11.6538 15.1388 11.6538 14.5835V14.0523C11.6538 13.497 11.1659 13.0469 10.564 13.0469Z"
                            fill="black" />
                    </svg>
                </div>
                <div class="row d-flex flex-wrap mx-auto my-auto fw-bold">
                    Jurusan JTPI
                </div>
            </button>
        </li>
        <!-- pill jtik -->
        <li class="nav-item mx-auto animasi-nav" role="presentation">
            <button class="nav-link text-light" id="pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                aria-selected="false">
                <div class="row"><svg class="dashboard-item-icon mx-auto" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path id="icon-navbar" fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.0003 10.6422C22.0637 12.3105 21.9725 13.9808 21.7279 15.6348C21.8147 15.7177 21.9029 15.8045 21.9926 15.8927C22.0884 15.9871 22.186 16.0831 22.2851 16.1775C23.6583 18.1887 24.2337 20.5767 23.9136 22.9353C23.8969 23.1613 23.8077 23.3776 23.6575 23.5567C23.5072 23.7359 23.3026 23.8697 23.0697 23.9414C22.8368 24.013 22.586 24.0191 22.3493 23.959C22.1126 23.8989 21.9006 23.7752 21.7403 23.6036C21.0397 22.9538 20.2307 22.4118 19.344 21.9984C16.944 22.5623 14.4771 22.8482 12.0005 22.8496C9.5205 22.8389 7.05161 22.5433 4.65076 21.9699C3.76657 22.3842 2.95974 22.9261 2.26071 23.5751C2.09464 23.7359 1.88238 23.8499 1.64873 23.9037C1.41507 23.9575 1.16966 23.9488 0.941136 23.8787C0.712614 23.8087 0.510413 23.6801 0.358142 23.5079C0.205871 23.3358 0.109812 23.1273 0.0811809 22.9067C-0.227976 20.5562 0.351597 18.1794 1.72202 16.1775C1.90778 15.9833 2.08734 15.8062 2.2669 15.6348C2.02463 13.9806 1.93556 12.3104 2.00065 10.6422C1.66629 10.7793 1.36289 10.8935 1.10284 10.9906C0.967375 11.0394 0.819753 11.0521 0.676885 11.027C0.534018 11.002 0.401686 10.9403 0.295053 10.8491C0.18842 10.7579 0.1118 10.6408 0.0739739 10.5112C0.0361478 10.3817 0.0386455 10.2449 0.0811809 10.1167C2.53934 2.73624 12.0005 0 12.0005 0C12.0005 0 21.4554 2.73624 23.9198 10.1167C23.9623 10.2449 23.9648 10.3817 23.927 10.5112C23.8892 10.6408 23.8126 10.7579 23.7059 10.8491C23.5993 10.9403 23.467 11.002 23.3241 11.027C23.1812 11.0521 23.0336 11.0394 22.8981 10.9906C22.6195 10.8935 22.3347 10.7793 22.0003 10.6422ZM10.5696 9.85938H9.99992C9.39806 9.85938 8.91016 10.3095 8.91016 10.8648V11.396C8.91016 11.9513 9.39806 12.4014 9.99992 12.4014H10.5696C11.1714 12.4014 11.6593 11.9513 11.6593 11.396V10.8648C11.6593 10.3095 11.1714 9.85938 10.5696 9.85938ZM14.0133 9.85938H13.4374C12.8356 9.85938 12.3477 10.3095 12.3477 10.8648V11.396C12.3477 11.9513 12.8356 12.4014 13.4374 12.4014H14.0133C14.6151 12.4014 15.103 11.9513 15.103 11.396V10.8648C15.103 10.3095 14.6151 9.85938 14.0133 9.85938ZM13.4374 13.0469H14.0133C14.6151 13.0469 15.103 13.497 15.103 14.0523V14.5835C15.103 15.1388 14.6151 15.5889 14.0133 15.5889H13.4374C12.8356 15.5889 12.3477 15.1388 12.3477 14.5835V14.0523C12.3477 13.497 12.8356 13.0469 13.4374 13.0469ZM10.564 13.0469H9.9882C9.38634 13.0469 8.89844 13.497 8.89844 14.0523V14.5835C8.89844 15.1388 9.38634 15.5889 9.9882 15.5889H10.564C11.1659 15.5889 11.6538 15.1388 11.6538 14.5835V14.0523C11.6538 13.497 11.1659 13.0469 10.564 13.0469Z"
                            fill="black" />
                    </svg></div>
                <div class="row d-flex flex-wrap mx-auto my-auto fw-bold">
                    Jurusan JTIK
                </div>
            </button>
        </li>

    </ul>
    <!-- tabs -->
    <div class="container-fluid tab-content mt-3 text-light" id="pills-tabContent">

        <!-- tabs Jurusan Sains -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <div class="container p-4">
                <div class="row justify-content-around mb-5">
                    <div class="col-lg-6 col-md-12 ps-4">
                        <img class="gambar-1 ratio ratio-1x1" src="../assets/Logo_Mockup_125.jpg" alt="" srcset="">
                    </div>
                    <div class="col-lg-6 col-md-12 ps-4 my-auto">
                        <h4><strong>Kepala Jurusan</strong></h4>
                        <h4>lorem</h4>
                        <h4 class="mt-md-5  "><strong>Alamat Kantor</strong></h4>
                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Explicabo praesentium ut eligendi
                        </h4>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="container text-center">
                        <h3>Visi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem quibusdam ullam
                            doloribus! Officia aliquid ea dolorum dicta suscipit in ipsa rerum voluptate, sunt ipsum id
                            aspernatur veritatis nemo quidem.</p>
                        <h3>Misi</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquam quis, voluptatum cum,
                            dolorum magnam accusantium quibusdam enim, repudiandae nostrum tempore a cupiditate eius
                            dolor assumenda maiores dignissimos voluptatem deleniti.
                            Necessitatibus est eos enim recusandae saepe nesciunt delectus quo quis, earum et porro iste
                            hic deserunt laudantium inventore ex sunt provident natus magni temporibus, vel, distinctio
                            neque! Ab, quo maiores.
                            Itaque totam aperiam ab quia delectus, veniam asperiores vel officia ex nostrum fugiat, hic
                            adipisci ut harum fugit. Eius aliquam dicta a tenetur autem placeat reprehenderit commodi
                            quod eos quis.</p>
                    </div>
                </div>
            </div>
            <!-- nama prodi -->
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h3>Program Studi</h3>
                </div>
                <div class="col-lg-6 col-md-12 ps-4">
                    <p class="text-md-end">Program Studi Fisika (FI) </p>
                    <p class="text-md-end">Program Studi Matematika </p>
                    <p class="text-md-end">Program Studi Biologi </p>
                    <p class="text-md-end">Program Studi Kimia </p>
                </div>
                <div class="col-lg-6 col-md-12 ps-4">
                    <p>Program Studi Farmasi </p>
                    <p>Program Studi Sains Atmosfer dan Keplanetan</p>
                    <p>Program Studi Sains Aktuaria </p>
                    <p>Progam Studi Sains Lingkungan Kelautan </p>
                    <p>Program Studi Sains Data</p>
                </div>
            </div>
        </div>

        <!-- tabs jurusan JTIK -->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="container p-4">
                <div class="row justify-content-around mb-5">
                    <div class="col-lg-6 col-md-12 ps-4">
                        <img class="gambar-1 ratio ratio-1x1" src="../assets/Logo_Mockup_125.jpg" alt="" srcset="">
                    </div>
                    <div class="col-lg-6 col-md-12 ps-4 my-auto">
                        <h4><strong>Kepala Jurusan</strong></h4>
                        <h4>lorem</h4>
                        <h4 class="mt-md-5  "><strong>Alamat Kantor</strong></h4>
                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo praesentium ut eligendi
                        </h4>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="container text-center">
                        <h3>Visi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem quibusdam ullam
                            doloribus! Officia aliquid ea dolorum dicta suscipit in ipsa rerum voluptate, sunt ipsum id
                            aspernatur veritatis nemo quidem.</p>
                        <h3>Misi</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquam quis, voluptatum cum,
                            dolorum magnam accusantium quibusdam enim, repudiandae nostrum tempore a cupiditate eius
                            dolor assumenda maiores dignissimos voluptatem deleniti.
                            Necessitatibus est eos enim recusandae saepe nesciunt delectus quo quis, earum et porro iste
                            hic deserunt laudantium inventore ex sunt provident natus magni temporibus, vel, distinctio
                            neque! Ab, quo maiores.
                            Itaque totam aperiam ab quia delectus, veniam asperiores vel officia ex nostrum fugiat, hic
                            adipisci ut harum fugit. Eius aliquam dicta a tenetur autem placeat reprehenderit commodi
                            quod eos quis.</p>
                    </div>
                </div>
            </div>
            <!-- nama prodi -->
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h3>Program Studi</h3>
                </div>
                <div class="col-lg-6 col-md-12 ps-4">
                    <p class="text-md-end">Program Studi Teknik Geomatika (GT)</p>
                    <p class="text-md-end">Program Studi Perencanaan Wilayah dan Kota (PWK)</p>
                    <p class="text-md-end">Program Studi Teknik Sipil (SI)</p>
                    <p class="text-md-end">Program Studi Arsitektur (AR)</p>
                </div>
                <div class="col-lg-6 col-md-12 ps-4">
                    <p>Program Studi Teknik Lingkungan</p>
                    <p>Program Studi Teknik Kelautan</p>
                    <p>Program Studi Desain Komunikasi Visual</p>
                    <p>Program Studi Arsitektur Lanskap</p>
                    <p>Program Studi Teknik Perkeretaapian</p>
                </div>
            </div>
        </div>

        <!-- jurusan JTIP -->
        <div class=" tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="container p-4">
                <!-- gambar dan deskripsi jurusan JTIP -->
                <div class="row justify-content-around mb-5">
                    <div class="col-lg-6 col-md-12 ps-4">
                        <img class="gambar-1 ratio ratio-1x1" src="../assets/Logo_Mockup_125.jpg" alt="" srcset="">
                    </div>
                    <div class="col-lg-6 col-md-12 ps-4 my-auto">
                        <h4><strong>Kepala Jurusan</strong></h4>
                        <h4>lorem</h4>
                        <h4 class="mt-md-5  "><strong>Alamat Kantor</strong></h4>
                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo praesentium ut eligendi
                        </h4>
                    </div>
                </div>

                <!-- visi dan misi -->
                <div class="row justify-content-around">
                    <div class="container text-center">
                        <h3>Visi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem quibusdam ullam
                            doloribus! Officia aliquid ea dolorum dicta suscipit in ipsa rerum voluptate, sunt ipsum id
                            aspernatur veritatis nemo quidem.</p>
                        <h3>Misi</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquam quis, voluptatum cum,
                            dolorum magnam accusantium quibusdam enim, repudiandae nostrum tempore a cupiditate eius
                            dolor assumenda maiores dignissimos voluptatem deleniti.
                            Necessitatibus est eos enim recusandae saepe nesciunt delectus quo quis, earum et porro iste
                            hic deserunt laudantium inventore ex sunt provident natus magni temporibus, vel, distinctio
                            neque! Ab, quo maiores.
                            Itaque totam aperiam ab quia delectus, veniam asperiores vel officia ex nostrum fugiat, hic
                            adipisci ut harum fugit. Eius aliquam dicta a tenetur autem placeat reprehenderit commodi
                            quod eos quis.</p>
                    </div>
                </div>

                <!-- nama prodi -->
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h3>Program Studi</h3>
                    </div>
                    <div class="col-lg-6 col-md-12 ps-4">
                        <p class="text-md-end">Program Studi Teknik Elektro (EL)</p>
                        <p class="text-md-end">Program Studi Teknik Geofisika (TG)</p>
                        <p class="text-md-end">Program Studi Teknik Informatika (IF)</p>
                        <p class="text-md-end">Program Studi Teknik Geologi</p>
                        <p class="text-md-end">Program Studi Teknik Mesin</p>
                        <p class="text-md-end">Program Studi Teknik Industri</p>
                        <p class="text-md-end">Program Studi Teknik Fisika</p>
                        <p class="text-md-end">Program Studi Teknik Kimia</p>
                    </div>
                    <div class="col-lg-6 col-md-12 ps-4">
                        <p>Program Studi Teknik Biosistem</p>
                        <p>Program Studi Teknologi Industri Pertanian</p>
                        <p>Program Studi Teknologi Pangan</p>
                        <p>Program Studi Teknik Sistem Energi</p>
                        <p>Program Studi Teknik Pertambangan</p>
                        <p>Program Studi Teknik Material</p>
                        <p>Program Studi Teknik Telekomunikasi</p>
                        <p>Rekayasa Kehutanan</p>
                        <p>Program Studi Teknik Biomedik</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script></script>
@endsection
