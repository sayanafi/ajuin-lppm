<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('/ajuin/css_home/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/ajuin/css_home/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('/ajuin/owlcarousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/ajuin/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/ajuin/owlcarousel/owl.theme.default.min.css') }}">
    
    
    
    <title>Ajuin - Homepage</title>
</head>
<style>
  .owl-prev{
    left: -30px;
  }
  .owl-next{
    right: -30px;
  }
  .owl-prev, .owl-next{
    position: absolute;
    top:30%;
  }
  .owl-prev span, .owl-next span{
    font-size: 60px;
    color: #787878;
  }
  .owl-theme .owl-nav [class = "owl-"]:hover{
    background-color: transparent;
  }
</style>
<body style="font-family:  'Montserrat', sans-serif;">

       

          <div class="container-fluid bg-black" id="hero">
            <div class="p-5"></div>
            <nav class="navbar py-3 fixed-top navbar-expand-lg navbar-dark bg-transparent" data-toggle="affix">
              <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand fw-bolder text-primary" href="#" id="nav-brand">
                  <img src="assets_ajuin/logo-ajuin-putih.png" width="120" alt="logo">
                </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link active text-white  px-3 py-2" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white px-3 py-2" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white px-3 py-2" href="kerjasama.html">Kerjasama</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white px-3 py-2" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                      <a class="btn btn-primary px-4 py-1 rounded-3" href="{{ route('home') }}" >Ajukan Dokumen</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <h1 class="container text-white fw-bold display-3 pt-5 pb-4">Challenge For<br> Everythings</h1>
            <p class="container text-white fw-light">
              kita adalah debu-debu bintang yang terlihat kecil <br>dikejauhan, tetapi sesungguhnya kita adalah bintang<br>besar yang bersinar terang
            </p>
            <div class="container pt-3 pb-5"  id="get-started">
              <a href="{{ route('home') }}" class="btn btn-primary px-4 py-1 rounded-3 mb-3">Ajukan Dokumen</a>
            </div>
            <div class="p-4">

            </div>
          </div>
        <div class="container-fluid shadow py-5" data-bs-spy="scroll" class="scrollspy-example">
          <h1 class="d-flex justify-content-center fw-bold mt-5 mb-5">PARTNERSHIP</h1>
          <div class="container">
            <div class="owl-carousel owl-theme">
              <div class="item"><img src="assets_ajuin/its.png" width="210"  alt="" class="m-5"></div>
              <div class="item"><img src="assets_ajuin/geducation.png" width="120" alt=""class="m-5"></div>
              <div class="item"><img src="assets_ajuin/Map??a_University_logo.png" width="120" alt=""class="m-5"></div>
              <div class="item"> <img src="{{ asset('ajuin/assets_ajuin/FHCI_hires.png') }}" width="210" alt=""class="m-5"></div>
              <div class="item"><img src="{{ asset('ajuin/assets_ajuin/its.png') }}" width="210"  alt="" class="m-5"></div>
              <div class="item"><img src="{{ asset('ajuin/assets_ajuin/geducation.png') }}" width="120" alt=""class="m-5"></div>
              <div class="item"><img src="{{ asset('ajuin/assets_ajuin/Map??a_University_logo.png') }}" width="120" alt=""class="m-5"></div>
              <div class="item"> <img src="{{ ('ajuin/assets_ajuin/FHCI_hires.png') }}" width="210" alt=""class="m-5"></div>
          </div>
          </div>
  
        </div>

        <div class="container-fluid py-5 shadow">
          <h1 class="d-flex justify-content-center fw-bold mt-5 mb-5">KERJASAMA TAHUNAN</h1>
          <div class="row">
              <div class="col d-flex justify-content-center align-self-start">
              <img src="assets_ajuin/icon-documents.png" width="50px" alt="" class="">
            </div>
            <div class="col d-flex justify-content-center align-self-center">
              <img src="assets_ajuin/icon-documents.png" width="50px" alt="" class="">
            </div>
            <div class="col d-flex justify-content-center align-self-end">
              <img src="assets_ajuin/icon-documents.png" width="50px" alt="" class="">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center align-self-start">
            <h1 class="fw-bold display-1 text-primary">10</h1>
          </div>
          <div class="col d-flex justify-content-center align-self-center">
            <h1 class="fw-bold display-1 text-primary">16</h1>
          </div>
          <div class="col d-flex justify-content-center align-self-end">
            <h1 class="fw-bold display-1 text-primary">23</h1>
          </div>
            </div>

            <div class="row">
              <div class="col d-flex justify-content-center align-self-start">
                <h1 class="fw-normal text-black">Momenu</h1>
              </div>
              <div class="col d-flex justify-content-center align-self-center">
                <h1 class="fw-normal text-black">Momena</h1>
              </div>
              <div class="col d-flex justify-content-center align-self-end">
                <h1 class="fw-normal text-black">impleman</h1>
              </div>
            </div>

        

            <div class="row">
              <div class="col d-flex justify-content-center align-self-start">
                <h1 class="text-center fw-normal fs-6 text-black-50 px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim at id ut ante quis vitae adipiscing maecenas dictum.</h1>
              </div>
              <div class="col d-flex justify-content-center align-self-center">
                <h1 class="text-center fw-normal fs-6 text-black-50 px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim at id ut ante quis vitae adipiscing maecenas dictum.</h1>
              </div>
              <div class="col d-flex justify-content-center align-self-end">
                <h1 class="text-center fw-normal fs-6 text-black-50 px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim at id ut ante quis vitae adipiscing maecenas dictum.</h1>
              </div>
            </div>

            <div class="row pb-3">
              <div class="col d-flex justify-content-center align-self-start">
                <a href="kerjasama.html" class="fw-normal text-primary">Learn more</a>
              </div>
              <div class="col d-flex justify-content-center align-self-center">
                <a href="kerjasama.html#MOA" class="fw-normal text-primary">Learn more</a>
              </div>
              <div class="col d-flex justify-content-center align-self-end">
                <a href="kerjasama.html#IA" class="fw-normal text-primary">Learn more</a>
              </div>
            </div>

        </div>


        </div>
        <div class="container-fluid py-5">
          <h1 class="d-flex justify-content-center fw-bold py-5">Unesa News</h1>
          <div class="row">
              <div class="col d-flex justify-content-center m-2 mb-5">
                <a href="#">
                  <div class="card shadow-lg" style="width: 18rem;" >
                    <img src="ajuin/n1.jpg" class="card-img-top " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Kucing Lucu</h5>
                      <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis voluptas non, minus quam sint quidem omnis, neque. Minima iste repellendus odit deleniti ipsam, minus necessitatibus.</p>
                      <a href="#" class="btn btn-primary position-absolute top-100 start-50 translate-middle px-4 py-1">Baca</a>
                    </div>
                  </div>
                </a>   
              </div>
           
            
            <div class="col d-flex justify-content-center m-2 mb-5">
              <a href="">
                <div class="card shadow-lg" style="width: 18rem;">
                  <img src="ajuin/n2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">ITS News</h5>
                    <p class="card-text mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod odio, enim laudantium alias quasi, rerum fugiat sint obcaecati iusto nostrum eius, odit magnam voluptates praesentium?</p>
                    <a href="#" class="btn btn-primary position-absolute top-100 start-50 translate-middle px-4 py-1">Baca</a>
                  </div>
                </div>
              </a>
            </div>

            <div class=" col d-flex justify-content-center m-2 mb-5">
              <a href="">
                <div class="card shadow-lg" style="width: 18rem;">
                  <img src="ajuin/n3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">ITTelkom SBY News</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur quisquam architecto molestias magni ex facere laborum ducimus, ipsam neque voluptatum doloribus, saepe ratione accusantium, nesciunt.</p>
                    <a href="#" class="btn btn-primary position-absolute top-100 start-50 translate-middle px-4 py-1">Baca</a>
                  </div>
                </div>
              </a>
              
            </div>
            
        </div>
       <div class="container d-flex justify-content-center">
        <a href="#" class="btn btn-primary px-4 py-1 rounded-3 d-flex justify-content-center mb-3">selengkapnya</a>
       </div> 
       
        </div>

        

        
        
        <div class="container-fluid bg-primary">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-5 ">
            <div class="col-md-4 d-flex align-items-center ">
              
              <span class="text-white">&copy; 2021 Ajuin LPPM ITTelkom Surabaya, Inc</span>
            </div>
        
          </footer>
        </div>
        <script src="{{ asset('/ajuin/js_home/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('/ajuin/js_home/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/ajuin/js_home/custom.js') }}"></script>
    <script src="{{ asset('/ajuin/owlcarousel/jquery.min.js') }}"></script>
<script src="{{ asset('/ajuin/owlcarousel/owl.carousel.min.js') }}"></script>

<script>

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

document.onreadystatechange = function() {
    let lastScrollPosition = 0;
    const navbar = document.querySelector('.navbar');
  
    window.addEventListener('scroll', function(e) {
      lastScrollPosition = window.scrollY;
      
      if (lastScrollPosition > 100)
        navbar.classList.add('navbar-dark');
      else
        navbar.classList.remove('navbar-dark');
      
    });

    
  }

</script>

    
    
</body>
</html>

