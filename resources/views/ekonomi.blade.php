<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href={{ asset('asset/bootstrap/css/bootstrap.min.css')}}>
</head>
<body>
  <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
    <div class="container" style="margin-right: 20%;">
        <a href="/home" class="navbar-brand" style="margin-right: 10%;">Terkini</a>
        <a href="/terpopuler" class="navbar-brand" style="margin-right: 10%;">Terpopuler</a>
        <a href="/topnews" class="navbar-brand" style="margin-right: 10%;">Top News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a href="/login" class="nav-link" style="margin-left: 30%;">LOGIN</a>
                </li>
                <li class="navbar-item">
                    <a href="/logout" class="nav-link" style="margin-left: 100%;">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-sm fixed-top" style="background-color:beige; margin-top:4%; width: 100%; height: 8%;" >
    <div class="container" style="margin-right: 20%;">
       <a href="#" class="navbar-brand">Berita Terbaru</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="navbar-nav mt-1">
            <li class="navbar-item"  style="margin-left: 25%;">
                <a href="/home" class="nav-link">HOME</a>
            </li>
            <li class="navbar-item" style="margin-left: 25%;">
                <a href="/politik" class="nav-link">POLITIK</a>
            </li>
            <li class="navbar-item" style="margin-left: 15%;">
                <a href="/hukum" class="nav-link">HUKUM</a>
            </li>
            <li class="navbar-item" style="margin-left: 20%;">
                <a href="/ekonomi" class="nav-link">EKONOMI</a>
            </li>
            <div class="col-md-6">
                <form action="/searchberita" method="post" style="margin-left: 10%; height: 20px; width:15">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="cari" class="form-control" placeholder="Search" id="">
                        <button class="btn btn-primary" type="submit">Go</button>
                    </div>
                </form>
            </div>
          </ul>
       </div>
    </div>      
</nav> 
</nav>
    <main>
        <section>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="foto/preview.jpeg.webp" class="d-block w-100" alt="First Slide" style="width: 20%; height: 800px; margin-top: 3%;">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="/ekonomi1" style="color: inherit; text-decoration: none;">
                          <h2>Rupiah diperkirakan melemah karena <br> data perekonomian China</h2>
                        </a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="foto/pertamina.jpg.webp" class="d-block w-100" alt="Second Slide" style="width: 20%; height: 800px; margin-top: 3%;">
                    <div class="carousel-caption d-none d-md-block">
                      <a href="/ekonomi2" style="color: inherit; text-decoration: none;">
                        <h2>60 UMKM binaan Pertamina meriahkan <br>MotoGP Mandalika</h2>
                      </a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="foto/antarafoto-pilot-susi-air-bebas-dari-opm-210924-app-1.jpg.webp" class="d-block w-100" alt="Third Slide" style="width: 20%; height: 800px; margin-top: 3%;">
                    <div class="carousel-caption d-none d-md-block">
                      <a href="/ekonomi3" style="color: inherit; text-decoration: none;">
                        <h2>Harga emas Antam Sabtu beruntun stabil <br>
                          Rp1,461 juta per gram</h2>
                      </a>
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
        </section>
    </main>
</body>
</html>
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>