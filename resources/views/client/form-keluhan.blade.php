@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Form Keluhan')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/GANTI.css">
    <link rel="stylesheet" href="../css/style-form.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <!-- CONTENT -->
    <p>
        <div>
        <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScI0EE9pdqGDDqWtfM0WyQKXR7KQJUbV-oX956iEN7hn8WUwA/formResponse">

        <div class="content">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="row justify-content-center">
                <div class="col-md-6">
                <br><h3 style="color: #FFF;" class="heading mb-4" ></p>PPLK 2022 </h3>
                  <h6 style="color: #FFF;" >Program Pengenalan Lingkungan Kampus <br> Institut Teknologi Sumatera <br><br><br>
                  <img src="../assets/Logo-form.png" alt="Image" class="img-fluid"></h6> <br><br><br>
                </div>

                <div class="col-md-6">
                  <br><br>
                    <form class="mb-5" method="post" id="contactForm" name="contactForm">
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="entry.966698347" id="nama" placeholder="Nama">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="entry.1336220338" id="nim" placeholder="NIM">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="entry.950230856" id="kelompok" placeholder="Kelompok">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <textarea class="form-control" name="entry.355164863" id="keluhan" cols="30" rows="7" placeholder="Tuliskan keluhan anda"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                         <div class="image" name="entry.14879951"> </div>
                      <input id="default-btn" type="file">
                   </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="submit" value="Kirimkan keluhan" class="btn btn-primary rounded-0 py-2 px-4">
                      <span class="submitting"></span>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </p>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
