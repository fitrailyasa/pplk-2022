@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'booklet')

@section('style')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/GANTI.css">
    <link rel="stylesheet" href="../css/main-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main-style.css">
    <link rel="stylesheet" href="../css/styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@endsection

@section('content')
    <!-- CONTENT -->
    <div class="container-fluid booklet">

        <div class="row justify-content-around">   
            <div class="col-8">
                <div class="card-booklet text-center mx-auto" >
                    <svg class="none-booklet mt-5" width="20" height="20"  viewBox="0 0 27 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="icon-booklet" fill-rule="evenodd" clip-rule="evenodd" d="M13.5 0C6.04416 0 0 6.04416 0 13.5V16.5714C0 23.4355 5.56446 29 12.4286 29H14.5714C21.4355 29 27 23.4355 27 16.5714V13.5C27 6.04416 20.9558 0 13.5 0ZM7.51077 7.13672C8.56584 7.13672 9.42115 6.40131 9.42115 5.49414C9.42115 4.58697 8.56584 3.85156 7.51077 3.85156C6.4557 3.85156 5.60039 4.58697 5.60039 5.49414C5.60039 6.40131 6.4557 7.13672 7.51077 7.13672ZM8.43242 10.3086C7.99448 10.3086 7.63945 10.6636 7.63945 11.1016C7.63945 11.5395 7.99448 11.8945 8.43242 11.8945H23.7852C24.2231 11.8945 24.5781 11.5395 24.5781 11.1016C24.5781 10.6636 24.2231 10.3086 23.7852 10.3086H8.43242ZM3.46484 13.3672C3.0269 13.3672 2.67188 13.7222 2.67188 14.1602C2.67188 14.5981 3.0269 14.9531 3.46484 14.9531H23.6572C24.0952 14.9531 24.4502 14.5981 24.4502 14.1602C24.4502 13.7222 24.0952 13.3672 23.6572 13.3672H3.46484ZM2.67188 17.2188C2.67188 16.7808 3.0269 16.4258 3.46484 16.4258H23.6572C24.0952 16.4258 24.4502 16.7808 24.4502 17.2188C24.4502 17.6567 24.0952 18.0117 23.6572 18.0117H3.46484C3.0269 18.0117 2.67188 17.6567 2.67188 17.2188ZM3.46484 19.5977C3.0269 19.5977 2.67188 19.9527 2.67188 20.3906C2.67188 20.8286 3.0269 21.1836 3.46484 21.1836H23.6572C24.0952 21.1836 24.4502 20.8286 24.4502 20.3906C24.4502 19.9527 24.0952 19.5977 23.6572 19.5977H3.46484Z" fill="black"/>
                    </svg>
                </div>
            </div>
        </div>
    </div> 
</div>
.<div class="container-fluid booklet-text">
    <div class="row justify-content-center">
        <div class="col-9 text-center">
            <h1 class="text-white fw-bold">BOOKLET</h1>
            <div class="card-body justify-content-center border">
             <div class="col">
                 <h3 class="card-title">KEBUTUHAN MABA</h3>
                 <p class="card-text mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur culpa quidem facilis placeat porro voluptatibus quia quod iste voluptates, ipsam quaerat amet harum sit officia odit blanditiis? Facilis consectetur aut quia, natus laudantium ex pariatur assumenda, neque magnam, asperiores est adipisci error deleniti dolorum laborum tenetur omnis molestiae sunt voluptas.</p>
             </div>
        </div>
    </div>
</div>
<div class="slide bg-black">
   <div id="myCarousel" class="carousel" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>
 
     <!-- Wrapper for slides -->
     <div class="carousel-inner">
 
       <div class="item active">
               <div class="card fun-fact-card">
                   <div class="card-body-ff">
                       <h2 class="card-title">
                           Fun Fact
                       </h2>
                       <p class="card-text">
                           Segi empat menggabarkan stabilitas, kedamaian, soliditas, dan kesetaraan.
                       </p>
                   </div>
               </div>
       </div>
 
       <div class="item">
               <div class="card fun-fact-card">
                   <div class="card-body-ff">
                       <h2 class="card-title">
                           Fun Fact
                       </h2>
                       <p class="card-text">
                           Segi empat menggabarkan stabilitas, kedamaian, soliditas, dan kesetaraan.
                       </p>
                   </div>
               </div>
       </div>
        
       <div class="item">
           <div class="card fun-fact-card">
               <div class="card-body-ff">
                   <h2 class="card-title">
                       Fun Fact
                   </h2>
                   <p class="card-text">
                       Segi empat menggabarkan stabilitas, kedamaian, soliditas, dan kesetaraan.
                   </p>
               </div>
           </div>
       </div>
     
   
     </div>
 
     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
 </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/custom.js"></script>
@endsection
