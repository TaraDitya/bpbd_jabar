<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bpbd jabar</title>
    <!-- favicons -->
    <link href="https://bpbd.jabarprov.go.id/images/logo-bpbd.png" rel="icon">
    <link href="https://bpbd.jabarprov.go.id/images/logo-bpbd.png" rel="apple-touch-icon">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i
    ,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- css -->
    <link href="https://bpbd.jabarprov.go.id/assets/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://bpbd.jabarprov.go.id/assets/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="https://bpbd.jabarprov.go.id/assets/frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="https://bpbd.jabarprov.go.id/assets/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!--  main css -->
    <link rel="stylesheet" href="./storage/css/style.css">
    <link rel="stylesheet" href="./storage/css/splide.css">

    <script type="text/javascript" class="flasher-js">
    (function() {    var rootScript = 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.1/dist/flasher.min.js';    
    var FLASHER_FLASH_BAG_PLACE_HOLDER = {};    
    var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER);    
    function mergeOptions(first, second) {        
    return {            
      context: merge(first.context || {}, second.context || {}),            
      envelopes: merge(first.envelopes || [], second.envelopes || []),            
      options: merge(first.options || {}, second.options || {}),            
      scripts: merge(first.scripts || [], second.scripts || []),            
      styles: merge(first.styles || [], second.styles || []),        
      };    
    }    
    function merge(first, second) {        
      if (Array.isArray(first) && Array.isArray(second)) {            
      return first.concat(second).filter(function(item, index, array) {                
      return array.indexOf(item) === index;            
    });        
    }        
    return Object.assign({}, first, second);    
    }    
    function renderOptions(options) {        
      if(!window.hasOwnProperty('flasher')) {            
        console.error('Flasher is not loaded');            
        return;        
      }        
      requestAnimationFrame(function () {            
        window.flasher.render(options);        
      });    
    }    
    function render(options) {        
      if ('loading' !== document.readyState) {            
        renderOptions(options);            
        return;        
      }        
      document.addEventListener('DOMContentLoaded', function() {            
      renderOptions(options);        
      });    
    }    
    if (1 === document.querySelectorAll('script.flasher-js').length) {        
      document.addEventListener('flasher:render', function (event) {            
      render(event.detail);        
      });    
    }    
    if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript + '"]')) {        
      render(options);    
    } else {        
      var tag = document.createElement('script');        
      tag.setAttribute('src', rootScript);        
      tag.setAttribute('type', 'text/javascript');        
      tag.onload = function () {            
        render(options);        
      };        
      document.head.appendChild(tag);    
    }})();
      </script>
      <script src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.1/dist/flasher.min.js" type="text/javascript"></script>
              
</head>
<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
<!-- header -->
<header id="header" class="header fixed-top header-scrolled" >
  <div class="carousel carousel-xl d-flex align-items-center jutify-items-between">
    <div class="container">
    <a href="#" class="logo d-flex align-items-center">
    <img src="./storage/img/logo-navbar.png" alt>
    </a>
    </div>
    <!-- navbar -->
    <div class="container">
  <nav id="navbar" class="navbar  navbar-expand-lg text-white">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" 
    aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-white dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </button>
          <ul class="dropdown-menu dropdown-menu-white">
            <li><a class="dropdown-item" href="#">Profile Badan</a></li>
            <li><a class="dropdown-item" href="#">Profile Pejabat</a></li>
            <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-white dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
          Informasi Publik
          </button>
          <ul class="dropdown-menu dropdown-menu-white">
            <li><a class="dropdown-item" href="#">Daftar Informasi</a></li>
            <li><a class="dropdown-item" href="#">PPID</a></li>
            <li><a class="dropdown-item" href="#">Lapor!</a></li>
            <li><a class="dropdown-item" href="#">Survey Kepuasan Masyarakat</a></li>
            <li><a class="dropdown-item" href="#">Indeks Kepuasan Masyarakat</a></li>
            <li><a class="dropdown-item" href="#">BPBD Kab/Kota Jawa Barat</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-white dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
          Seputar BPBD Jabar
          </button>
          <ul class="dropdown-menu dropdown-menu-white">
            <li><a class="dropdown-item" href="#">Berita Terkini</a></li>
            <li><a class="dropdown-item" href="#">Artikel</a></li>
            <li><a class="dropdown-item" href="#">Infografis</a></li>
            <li><a class="dropdown-item" href="#">Konten Edukasi</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-white dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
            Info Kebencanaan
          </button>
          <ul class="dropdown-menu dropdown-menu-white">
            <li><a class="dropdown-item" href="#">Infografis Kebencanaan</a></li>
            <li><a class="dropdown-item" href="#">Analisis Dampak Bencana</a></li>
            <li><a class="dropdown-item" href="#">Sistem  Informasi BARATA</a></li>
            <li><a class="dropdown-item" href="#">Peta KRB</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<!-- akhir navbar -->
  </div>
</header>
<!-- akhir header -->
<div style="margin-bottom: 0px;">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
      <style>
         
        .card-info {
            display: inline-block;
            position: relative;
            width: 100%;
            margin-bottom: 30px;
            border-radius: 40px;
            color: rgba(0, 0, 0, 0.87);
            background: #fff;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
        }

        .card-info .card-image {
            width: 100px;
            position: relative;
            background: whitesmoke;
            overflow: hidden;
            margin-left: 30px;
            margin-top: -50px;
            border-radius: 20px;
            box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .card-body-info {
            margin-left: 30px;
            margin-right: 30px;
        }

        .card-info .card-image .card-caption {
            position: absolute;
            bottom: 15px;
            left: 15px;
            color: #fff;
            font-size: 1.3em;
            text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
        }

        .card-info img {
            /* width: 100%; */
            height: auto;
        }

        .img-raised {
            box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .carousel-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.286));
        }

        .carousel-item .slide-dark {
            position: relative;
            z-index: -1;
        }

        #image {
            width: 11%;
            float: left;
            margin-right: 2%;
        }

        #image img {
            max-width: 100%;
        }

        #image-artikel {
            width: 25%;
            float: left;
            margin-right: 2%;
        }

        #image-artikel img {
            max-width: 100%;
        }

        #content {
            text-align: left;
            float: right;
            width: 70%;
        }


        @media  only screen and (max-width: 480px) {

            #image,
            #content {
                width: 100%;
                margin: 0;
            }


        }

        .container-infografis {
            position: relative;
            width: 100%;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #0000009d;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .container-infografis:hover .overlay {
            height: 100%;
        }

        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #tab-gallery .columns .column {
            float: left;
        }

        #tab-gallery .columns .column img {
            opacity: 0.8;
            cursor: pointer;
        }

        #tab-gallery .columns .column img:hover {
            opacity: 1;
        }

        #tab-gallery .columns::after {
            content: "";
            display: table;
            clear: both;
        }

        #tab-gallery .tab-container {
            position: relative;
            margin-bottom: 20px;
        }

        #tab-gallery .tab-container #expanded-img {
            width: 100%;
        }
    
      </style>
    
    <!-- hero section -->
  <div id="carouselExampleCaptions" class="carousel slide d-flex justify-content-center align-items-center">
    <div class="carousel-inner">
      <div class="carousel-item carousel-banner active" data-bs-intervl="10000">
        <img src="./storage/img/58801923slide-bpbd.webp" class="w-100 slide-dark" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <center>
            <div class="carousel-caption">
              "SELAMAT DATANG DI WEBSITE UNOFFICIAL"
              <H2><b>"Badan Penanggulangan Bencana Daerah"
                <br>
                "Provinsi Jawa Barat"
              </b></H2>
            </div>
          </center>
        </div>
      </div>
      <div class="carousel-item carousel-banner active" data-bs-intervl="10000">
        <img src="storage/img/logo-slide.jpeg" class="w-100 slide-dark" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <center>
            <div class="carousel-caption">
              "SELAMAT DATANG DI WEBSITE UNOFFICIAL"
              <H2><b>"Badan Penanggulangan Bencana Daerah"
                <br>
                "Provinsi Jawa Barat"
              </b></H2>
            </div>
          </center>
        </div>
      </div>
      <div class="carousel-item carousel-banner active" data-bs-intervl="10000">
        <img src="storage/img/logo-slide.jpeg" class="w-100 slide-dark" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <center>
            <div class="carousel-caption">
              SELAMAT DATANG DI WEBSITE UNOFFICIAL
              <H2><b>Badan Penanggulangan Bencana Daerah
                <br>
                Provinsi Jawa Barat
              </b></H2>
            </div>
          </center>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- akhir hero section -->
<br><br>
<!-- blog -->
  <div class="carousel py-3 mb-5 d-flex justify-content-center align-items-center">
    <section id="blog" class="blog">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <header class="section-header">
        <p class="text-dark d-flex align-items-center justify-content-center fs-3 fw-bold" >Seputar BPBD JABAR</p>
        </header>
      </div>
      <br>
      <div class="container">
      <div class="row">
        <div class="col-sm" id="tab-gallery">
        <h5>
          <b>Berita Terkini</b>
        </h5>
        <hr>
          <div class="tab-container">
            <img class="card-img rounded img-fluid" id="expanded-img" src="./storage/img/berita.png" alt="Card image">
            <br>
          </div>
          <div class="columns mt-2 row">
            <div class="column col-sm">
              <img src="./storage/img/58723788berita (2).png" id="tab-0" style="width: 100%; height: 60px; 
              object-fit: cover;" class="rounded" alt="">
            </div>
            <div class="column col-sm">
              <img src="./storage/img/68084740berita-1.png" id="tab-1" style="width: 100%; height: 60px; 
              object-fit: cover;" class="rounded" alt="">
            </div>
            <div class="column col-sm">
              <img src="./storage/img/73032051berita-3.png" id="tab-2" style="width: 100%; height: 60px; 
              object-fit: cover;" class="rounded" alt="">
            </div>
            <div class="column col-sm">
              <img src="./storage/img/30187277berita-2.png" id="tab-3" style="width: 100%; height: 60px; 
              object-fit: cover;" class="rounded" alt="">
            </div>
            <div class="column col-sm">
             <img src="./storage/img/89063031berita-4.png" id="tab-4" style="width: 100%; height: 60px; 
             object-fit: cover;" class="rounded" alt="">
            </div>
          </div>
          <br>
          <a href class="text-secondary mt-2"><i>
          <u>selengkapnya -></u>
          </i></a>
        </div>
        <div class="col-sm">
          <h5 class>
          <b>Artikel</b>
          </h5>
          <hr>
          <div class="sidebar-item resent-posts">
            <div class="row">
              <div id="image-artikel" class>
                <img src="./storage/img/5550berita-4.png" style="width: 120px; 
                margin-bottom: 10px; heigth: 70px; object-fit: cover;" alt="">
              </div>
              <div id="content" class="text-dark">
                <h6>
                <b>
                  <a href="https://bpbd.jabarprov.go.id/artikel/wisata/banjir-bandung" class="text-dark">Banjir Bandung</a>
                </b>
                </h6>
                <p datetime="2020-01-01">15 nov 2022</p>
              </div>
            </div>
            <div class="row">
              <div id="image-artikel">
                <img src="storage/img/5550berita-4.png" style="width: 120px; margin-bottom: 10px; height: 70px; 
                object-fit: cover;" alt="">
              </div>
              <div id="content" class="text-dark">
                <h6>
                  <b>
                   <a href="https://bpbd.jabarprov.go.id/artikel/pendidikan/gempa-cianjur" class="text-dark">Gempa Cianjur</a>
                  </b>
                </h6>
                <p datetime="2020-01-01">15 nov 2022</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div id="image-artikel">
              <img src="./storage/img/5550berita-4.png" style="width: 120px; 
              margin-bottom: 10px; height: 70px; object-fit: cover;" alt="">
            </div>
            <div id="content" class="text-dark">
              <h6>
                <b>
                  <a href="https://bpbd.jabarprov.go.id/artikel/wisata/longsor-bogor" class="text-dark">Longsor Bogor</a>
                </b>
              </h6>
              <p datetime="2020-01-01">18 feb 2023</p>
            </div>
          </div>
            <h5 class="mt-1">
              <b>Infografis</b>
            </h5>
          <div class="row">
            <div class="col">
              <div class="container-infografis">
                <img src="./storage/img/44999876longsor.png" class="image rounded" alt="">
                <div class="overlay">
                <div class="text">Longsor</div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="container-infografis">
                <img src="./storage/img/38264347hari-gizi.png" class="image rounded" alt="">
                <div class="overlay">
                <div class="text">Hari Gizi</div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="container-infografis">
                <img src="./storage/img/96156631hari-bumi.png" class="image rounded" alt="">
                <div class="overlay">
                <div class="text">Hari Bumi</div>
                </div>
              </div>
            </div>
          </div>
        <br>
        <a href="" class="text-secondary mt-2">
          <i>
            <u>
              Selengkapnya ->
            </u>
          </i>
        </a>
        </div>
      </div>
    </div>
    </div>
  </section>
</div>
<!-- akhir blog -->
<div style="background: #EE8200; border-top-left-radius: 110px; border-top-right-radius: 110px;" class="text-white py-5">
  <div class="container">
        <center>
          <h1>
            <b>Data Bencana  Jawa Barat</b>
          </h1>
          Sumber : 
          <span>
            <a href="https://barata.jabarprov.go.id/" style="color: white; text-decoration: none;">barata.jabarprov.go.id</a>
          </span>
          <div class="mb-2">
            <p>01 jan 2023 - 12 aug 2023</p>
          </div>
          <div class="row">
            <div class="col-sm">
              <h1>
                <b id="kejadian_bencana">813</b>
              </h1>
              <span>Kejadian Bencana</span>
            </div>
            <div class="col-sm">
              <h1>
                <b id="mengungsi">3190</b>
              </h1>
              <span>Mengungsi</span>
            </div>
            <div class="col-sm">
              <h1>
                <b id="meninggal">23</b>
              </h1>
              <span>Meninggal</span>
            </div>
            <div class="col-sm">
              <h1>
                <b id="terdampak">418851</b>
              </h1>
              <span>Terdampak</span>
            </div>
          </div>
        </center>
  </div>
</div>
<br>
<div class="container">
  <h4 style="color: #EE8200;" class="text-center mt-4">
  <b>Info Cuaca dan Peringatan Dini</b>
  </h4>
  <div class="text-center">Sumber : bmkg.go.id</div>
  <br>
  <div class="row mb-2">
    <div class="col-sm">
      <div class="texte-center" style="color: black;">
        <b>Perkiraan Cuaca</b>
      </div>
      <hr>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <center>
                kab. Bandung
                <br>
                07:00
                <br>
                <img src="./storage/img/cuaca.png" width="100" alt="">
                <br>
                berawan
                <br>
                24 *C
                <br>
                85 %
              </center>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <center>
                kab. Bandung
                <br>
                07:00
                <br>
                <img src="./storage/img/cuaca.png" width="100" alt="">
                <br>
                berawan
                <br>
                24 *C
                <br>
                85 %
              </center>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <center>
                kab. Bandung
                <br>
                07:00
                <br>
                <img src="./storage/img/cuaca.png" width="100" alt="">
                <br>
                berawan
                <br>
                24 *C
                <br>
                85 %
              </center>
            </div>
          </div>
        </div>
      </div>
      <img src="./storage/img/peringatan-dini.png" class="img-fluid mt-3 mb-2" alt="">
      <a href="" class="text-left text-secondary">
        <i>
          <u>Selengkapnya -></u>
        </i>
      </a>
    </div>
    <div class="col-sm">
      <div class="text-center" style="color: black;">
        Gempa Bumi Terkini
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          <img src="./storage/img/gempa.png" class="img-fluid" alt="">
        </div>
        <div class="col">
          <br>
          <h6>10 Mei 2022, 10:43:23 WIB</h6>
        
        <i class="bi bi-activity text-danger">
          <span class="text-black">Magnitude : 5.4</span>
          </i>
          <br>
        <i class="bi bi-record-circle text-success">
          <span class="text-black">Kedalaman: 340 km</span></i>
        <br>
        <i class="bi bi-geo-alt-fill text-warning">
          <span class="text-black">Lokasi: 5.922 LS - 128.36 BT</span></i>
        <br>
        <i class="bi bi-record-circle text-danger">
          <span class="text-black">241 km Tenggara BURUSELATAN-MALUKU</span>
        </i>
        <br>
        <i class="bi bi-water" style="color: #ee6c20">
        <span class="text-black">Tidak Berpotensi TSUNAMI</span></i>
      </div>
      </div>
      <a href="" class="text-left text-secondary">
            <i>
              <u>Selengkapnya -></u>
            </i>
      </a>
    </div>
  </div>
</div>
<br>
<div class="text-center mb-5 text-white bg-dark" style="background-size: 100%; background-repeat: no-repeat; background-image: url('./storage/img/info-kebencanaan.png');">
<br>
<br>
<br>
<br>
<h1 class>
  Info Kebencanaan
</h1>
<br>
<br>
<br>
<br>
<br>
<div class="container" style="margin-bottom: 100px">
  <div class="row">
    <div class="col-sm">
      <div class="card-info" style="background: rgb(29, 29, 29); margin-top: 35px;">
          <div class="card-image">
            <img class="p-4" style="width: 100px;" src="./storage/img/infografis.png" alt="">
          </div>
      <div class="text-start card-body-info text-white">
      <br>
      <h3 class>
        <b>Infografis Bencana</b>
      </h3>
      <br>
      <p class> Informasi jumlah dan dampak kejadian bencana dalam kurun waktu tertentu.</p>
        <br>
        <center>
          <a href="" class="btn btn-light text-dark" style="border-radius: 30px;
           width: 80%; margin-bottom: 40px;">Lihat</a>
        </center>
      </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card-info" style="background: rgb(29, 29, 29); margin-top: 35px;">
        <div class="card-image">
        <img class="p-4" style="width: 100px;" src="./storage/img/analisis.png" alt="">
        </div>
      
      <div class="text-start card-body-info text-white">
      <br>
      <h3 class>
        <b>Analisis Dampak Bencana</b>
      </h3>
      <br>
      <p>Kajian analisis dampak bencana alam yang terjadi di provinsi Jawa Barat.</p>
        <br>
        <center>
          <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 40px;">Lihat</a>
        </center>
      </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card-info" style="background: rgb(29, 29, 29); margin-top: 35px;">
        <div class="card-image">
        <img class="p-4" style="width: 80px;" src="./storage/img/barata.png" alt="">
        
      </div>
      <div class="text-start card-body-info text-white">
      <br>
      <h3 class>
        <b>Sistem Informasi BARATA</b>
      </h3>
      <br>
      <p>Jawa Barat Tangguh Bencana, aplikasi informasi kejadian dan penanganan bencana di Jawa Barat</p>
        <br>
        <center>
          <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; 
          margin-bottom: 40px;">Lihat</a>
        </center>
        </div>
        </div>
      </div>
    <div class="col-sm">
      <div class="card-info" style="background: rgb(29, 29, 29); margin-top: 35px;">
        <div class="card-image">
        <img class="p-2" style="width: 85px;" 
        src="./storage/img/kelas-kebencanaan.png" alt="">
        </div>
      
      <div class="text-start card-body-info text-white">
      <br>
      <h3 class>
        <b>Kelas Kebencanaan</b>
      </h3>
      <br>
      <p>Informasi jumlah dan dampak kejadian bencana dalam kurun waktu tertentu.</p>
        <br>
        <center>
          <a href="" class="btn btn-light text-dark" style="border-radius: 30px; 
          width: 80%; margin-bottom: 40px;">Lihat</a>
        </center>
      </div>
      </div>
    </div>
  </div>
</div>
<br>
</div>
<div style="background: white; border-top-left-radius: 110px; border-top-right-radius: 110px;">
  <div class="container">
    <br><br><br>
    <h1 class="text-dark text-center">
      <b>Konten Edukasi</b>
    </h1>
    <br><br>
    <div class="row">
      <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="splide01">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="splide01-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="splide01-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button></div><div class="splide__track" id="splide01-track" style="padding-left: 0px; padding-right: 0px;">
          <div class="splide__list" id="splide01-list" style="transform: translateX(-1735.97px);">
            <div class="col-sm-4 splide__slide m-2 splide__slide--clone is-active" id="splide01-clone01" style="width: calc(33.3333%);" aria-hidden="true">
              <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #EE8200; border-radius: 30px;">
                <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                  <center>
                    <h5 class="text-white"><b>Banjir</b></h5><br>
                      <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/kCxhbS8WI9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                  </center>
                  <br><br>
                  <center>
                    <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-sm-4 splide__slide m-2 splide__slide--clone" id="splide01-clone02" style="width: calc(33.3333%);" aria-hidden="true">
              <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #007bee; border-radius: 30px;">
                <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                  <center>
                    <h5 class="text-white"><b>Longsor</b></h5><br>
                    <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/UAPce7ywdeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                  </center>
                  <br><br>
                  <center>
                    <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-sm-4 splide__slide m-2 splide__slide--clone" id="splide01-clone03" style="width: calc(33.3333%);" aria-hidden="true">
              <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #f3dd15; border-radius: 30px;">
                <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                  <center>
                    <h5 class="text-white"><b>Gempa</b></h5><br>
                    <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/8-ZZ3uzZkp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                  </center>
                  <br><br>
                  <center>
                    <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-sm-4 splide__slide m-2 splide__slide--clone is-active" id="splide01-clone04" style="width: calc(33.3333%);" aria-hidden="true">
              <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #EE8200; border-radius: 30px;">
                <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                  <center>
                    <h5 class="text-white"><b>Banjir</b></h5><br>
                    <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/kCxhbS8WI9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                  </center>
                  <br><br>
                  <center>
                    <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-sm-4 splide__slide m-2 splide__slide--clone" id="splide01-clone05" style="width: calc(33.3333%);" aria-hidden="true">
              <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #007bee; border-radius: 30px;">
                <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                  <center>
                    <h5 class="text-white"><b>Longsor</b></h5><br>
                    <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/UAPce7ywdeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                  </center>
                  <br><br>
                  <center>
                    <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                  </center>
                </div>
              </div>
            </div>
        <div class="col-sm-4 splide__slide m-2 splide__slide--clone is-prev" id="splide01-clone06" style="width: calc(33.3333%);" aria-hidden="true">
          <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #f3dd15; border-radius: 30px;">
            <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                <center>
                  <h5 class="text-white"><b>Gempa</b></h5><br>
                  <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/8-ZZ3uzZkp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                </center>
                <br><br>
                <center>
                  <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                </center>
            </div>
          </div>
        </div>
        <div class="col-sm-4 splide__slide m-2 is-active is-visible" id="splide01-slide01" style="width: calc(33.3333%);" tabindex="0">
          <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #EE8200; border-radius: 30px;">
            <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                <center>
                  <h5 class="text-white"><b>Banjir</b></h5><br>
                  <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/kCxhbS8WI9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                </center>
                <br><br>
                <center>
                  <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;">Lihat</a>
                </center>
            </div>
          </div>
        </div>
        <div class="col-sm-4 splide__slide m-2 is-next is-visible" id="splide01-slide02" style="width: calc(33.3333%);" tabindex="0">
          <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #007bee; border-radius: 30px;">
            <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                <center>
                    <h5 class="text-white"><b>Longsor</b></h5><br>
                    <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/UAPce7ywdeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                </center>
                <br><br>
                <center>
                  <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;">Lihat</a>
                </center>
            </div>
          </div>
        </div>
          <div class="col-sm-4 splide__slide m-2" id="splide01-slide03" style="width: calc(33.3333%);" aria-hidden="true">
            <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #f3dd15; border-radius: 30px;">
              <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                <center>
                    <h5 class="text-white"><b>Gempa</b></h5><br>
                    <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/8-ZZ3uzZkp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                </center>
                <br><br>
                <center>
                    <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-4 splide__slide m-2 splide__slide--clone is-active" id="splide01-clone07" style="width: calc(33.3333%);" aria-hidden="true">
            <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #EE8200; border-radius: 30px;">
              <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                <center>
                    <h5 class="text-white"><b>Banjir</b></h5><br>
                    <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/kCxhbS8WI9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                </center>
                <br><br>
                <center>
                  <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-4 splide__slide m-2 splide__slide--clone" id="splide01-clone08" style="width: calc(33.3333%);" aria-hidden="true">
            <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #007bee; border-radius: 30px;">
              <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                <center>
                  <h5 class="text-white"><b>Longsor</b></h5><br>
                  <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/UAPce7ywdeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                </center>
                <br><br>
                <center>
                  <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-4 splide__slide m-2 splide__slide--clone" id="splide01-clone09" style="width: calc(33.3333%);" aria-hidden="true">
            <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #f3dd15; border-radius: 30px;">
              <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                <center>
                  <h5 class="text-white"><b>Gempa</b></h5><br>
                  <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/8-ZZ3uzZkp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                </center>
                <br><br>
                <center>
                  <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-4 splide__slide m-2 splide__slide--clone is-active" id="splide01-clone10" style="width: calc(33.3333%);" aria-hidden="true">
            <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #EE8200; border-radius: 30px;">
              <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                <center>
                  <h5 class="text-white"><b>Banjir</b></h5><br>
                  <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/kCxhbS8WI9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                </center>
                <br><br>
                <center>
                  <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-4 splide__slide m-2 splide__slide--clone" id="splide01-clone11" style="width: calc(33.3333%);" aria-hidden="true">
            <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #007bee; border-radius: 30px;">
              <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                <center>
                  <h5 class="text-white"><b>Longsor</b></h5><br>
                  <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/UAPce7ywdeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                </center>
                <br><br>
                <center>
                  <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-4 splide__slide m-2 splide__slide--clone" id="splide01-clone12" style="width: calc(33.3333%);" aria-hidden="true">
            <div class="card border-0 aos-init aos-animate" data-aos="fade-in" style="background: #f3dd15; border-radius: 30px;">
              <div class="card-body aos-init aos-animate" data-aos="zoom-in"><br>
                <center>
                    <h5 class="text-white"><b>Gempa</b></h5><br>
                    <iframe style="width: 90%; border-radius: 30px;" src="https://www.youtube.com/embed/8-ZZ3uzZkp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" tabindex="-1"></iframe>
                </center>
                <br><br>
                <center>
                    <a href="" class="btn btn-light text-dark" style="border-radius: 30px; width: 80%; margin-bottom: 20px;" tabindex="-1">Lihat</a>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
</div>
<div class="card text-white text-center">
  <img class="card-img" style="width: 100%;height: 600px; object-fit: cover;"
  src="./storage/img/background-kontak.png" alt="Card image">
  <div class="card-img-overlay" style>
    <br>
    <br>
    <h2>
      <b>Kontak Cepat</b>
    </h2>
    <h2>Jika Terjadi Bencana</h2>
    <br>
    <br>
    <h2>Call Center</h2>
    <h1>
      <b>082317012056</b>
    </h1>
    <i>(Whatsapp Only)</i>
    <br>
    <br>
    <h2>Humas</h2>
    <h1>
      <b>081320992800</b>
    </h1>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-sm">bpbd@jabarprov.go,id</div>
      <div class="col-sm">bpbdprovjabar@gmail.com</div>
      <div class="col-sm">humasbpbdjabar@jabarprov.go.id</div>
      <div class="col-sm">humasbpbdjabar@gmail.com</div>
    </div>
  </div>
</div>
<div style="background: #ffd4bb">
<br>
<br>
<h2 class="text-dark text-center">
  <b>Media sosial</b>
</h2>
<br><br>
<div class="row">
  <div class="col-sm-5">
    <img src="./storage/img/temukan-kami.png" style="width: 100%;" alt="">
  </div>
  <div class="col">
    <div class="card bg-white mt-4 border-0" style="border-radius: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.241)">
      <div class="card-body">
        <div class="row">
          <div id="image">
            <img src="./storage/img/fb.png" style="width: 100%;" alt="">
          </div>
          <div id="content" class="text-dark">
            <h4 class="mt-1">http://facebook.com//bpbd</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="card bg-white mt-4 border-0" style="border-radius: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.241)">
      <div class="card-body">
        <div class="row">
          <div id="image">
            <img src="./storage/img/tw.png" style="width: 100%;" alt="">
          </div>
          <div id="content" class="text-dark">
            <h4 class="mt-1">http://www.twitter.com//bpbd</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="card bg-white mt-4 border-0" style="border-radius: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.241)">
      <div class="card-body">
        <div class="row">
          <div id="image">
            <img src="./storage/img/ig.png" style="width: 100%;" alt="">
          </div>
          <div id="content" class="text-dark">
            <h4 class="mt-1">http://instagram.com//bpbd</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="card bg-white mt-4 border-0" style="border-radius: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.241)">
      <div class="card-body">
        <div class="row">
          <div id="image">
            <img src="./storage/img/tt.png" style="width: 100%;" alt="">
          </div>
          <div id="content" class="text-dark">
            <h4 class="mt-1">http://tiktok.com//bpbd</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div style="width: 100%;  height: 100%; object-fit: cover; background-repeat: no-repeat; background-image: url('./storage/img/background-link-terkait.png');">
<div class="container">
  <center>
    <br><br>
    <h2 class="text-dark">
      <b>Link Terkait</b>
    </h2>
    <br><br>
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="card mb-3 border-0" style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
        <div class="p-3">
          <img src="./storage/img/logo-bnbp.png" class="img-fluid" alt="">
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card mb-3 border-0" style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
        <div class="p-3">
          <img src="./storage/img/logo-jabar.png" class="img-fluid" style="width: 147px;" alt="">
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card mb-3 border-0" style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
        <div class="p-3">
          <img src="./storage/img/logo-damkar.png" class="img-fluid" style="width: 163px;" alt="">
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card mb-3 border-0" style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
        <div class="p-3">
          <img src="./storage/img/logo-bmkg.png" class="img-fluid" style="width: 137px;" alt="">
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card mb-3 border-0" style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
        <div class="p-3">
          <img src="./storage/img/logo-ppd.png" class="img-fluid" style="width: 174px;" alt="">
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card mb-3 border-0" style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
        <div class="p-3">
          <img src="./storage/img/logo-magma.png" class="img-fluid" style="width: 160px;" alt="">
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card mb-3 border-0" style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
        <div class="p-3">
          <img src="./storage/img/logo-mineral.png" class="img-fluid" style="width: 160px;" alt="">
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card mb-3 border-0" style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
        <div class="p-3">
          <img src="./storage/img/logo-inarisk.png" class="img-fluid" style="width: 160px;" alt="">
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card mb-3 border-0" style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
        <div class="p-3">
          <img src="./storage/img/logo-lpse.png" class="img-fluid" style="width: 160px;" alt="">
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card mb-3 border-0" style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
        <div class="p-3">
          <img src="./storage/img/logo-upg.png" class="img-fluid" style="width: 160px;" alt="">
        </div>
        </div>
      </div>
    </div>
  </center>
</div>
</div>

  


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://bpbd.jabarprov.go.id/assets/frontend/assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
<script>
        function tabGallery(src) {
            $("#expanded-img").attr("src", src);
        }

        $("#tab-0").click(function() {
            tabGallery($(this).attr("src"));
        });
        $("#tab-1").click(function() {
            tabGallery($(this).attr("src"));
        });
        $("#tab-2").click(function() {
            tabGallery($(this).attr("src"));
        });
        $("#tab-3").click(function() {
            tabGallery($(this).attr("src"));
        });
        $("#tab-4").click(function() {
            tabGallery($(this).attr("src"));
        });
    </script>
    <!-- footer -->
    <footer id="footer" class="footer">
      <div class="footer-top bg-dark text-white">
        <div class="container">
          <div class="row gy-4">
            <div class="col-sm footer-info">
              <h6 class>
                <b>ALAMAT KANTOR</b>
              </h6>
              <br>
              <a href="#" class="logo d-flex align-items-center">
                <span class="text-center">BPBD JABAR</span>
              </a>
              <p>Jalan Soekarno Hatta No. 629 Kota Bandung</p>
              <br>
              <b>KONTAK</b>
              <br>
              Call center. 0821124243629
              <br>
              Telp. 082317012056
              <br>
              Fax. (022) 7310952
              <br>
              bpbd@jabarprov.go.id
              <br>
              bpbdprovjabar@gmail.com
              <br><br>
              <b>HUMAS BPBD JABAR</b>
              <br>
               Telp. 081320992800
              <br>
               humasbpbdjabar@jabarprov.go.id
              <br>
               humasbpbdjabar@gmail.com
              <br>
            </div>
            <div class="col-sm footer-links">
              <h4 class="text-white">PETA LOKASI</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5594148223777!2d107.64489507390685!3d-6.943139167967042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e81482f75959%3A0xb6a64e4d14cf6918!2sBadan%20Penanggulangan%20Bencana%20Daerah%20Provinsi%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1692321341576!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-sm footer-links">
              <h4 class="text-white">TAUTAN CEPAT</h4>
              <a href class="text-center text-white">BARATA</a>
              <hr>
              <a href class="text-center text-white">peta KRB</a>
              <hr>
              <a href class="text-center text-white">Konten Edukasi</a>
              <hr>
              <a href class="text-center text-white">Berita Terkini</a>
              <hr>
              <a href class="text-center text-white">Infografis</a>
              <hr>
              <a href class="text-center text-white">PPID</a>
              <hr>
              <a href class="text-center text-white">Daftar Informasi</a>
              <hr>
            </div>
            <div class="col-sm footer-links">
              <h4 class="text-center">LAYANAN PENGADUAN</h4>
              <img src="./storage/img/lapor.png" class="img-fluid" alt="">
              <br><br>
              <h4 class="text-center">MEDIA SOSIAL</h4>
              <div class="mt-3 text-sm text-white">
                <a href="https://www.facebook.com/bpbd" class="facebook text-white">
                  <i class="bi bi-facebook text-white"></i> BPBD Provinsi Jawa Barat
                </a>
                <br>
                <a href="" class="tiktok text-white">
                  <i class="bi bi-tiktok text-white"></i> bpbdjabar
                </a>
                <br>
                <a href="https://twitter.com/bpbd" class="twitter text-white">
                  <i class="bi bi-twitter text-white"></i> @BPBDJabar
                </a>
                <br>
                <a href="" class="youtube tet-white">
                  <i class="bi bi-youtube text-white"></i> <span class="text-white">BPBD Prov. Jabar</span>
                </a>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright text-dark">
          @Copyright
          <strong>
            <span> BPBD JABAR</span>
          </strong>
          . All Right Reserved
        </div>
      </div>
    </footer>
    <!-- end footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center active">
      <i class="bi bi-arrow-up-short"></i>
    </a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
crossorigin="anonymous"></script>
<script src="https://bpbd.jabarprov.go.id/assets/frontend/assets/vendor/aos/aos.js"></script>
<script>
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            rewind: true,
        });

        splide.mount();
    </script>
    <script>
        var splide = new Splide('.splide2', {
            type: 'loop',
            perPage: 3,
            rewind: true,
        });

        splide.mount();
    </script>
</body>

</html>