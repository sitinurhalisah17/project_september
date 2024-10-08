<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}">
</head>
<body style="overflow-x: hidden">
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
                    <img src="foto/IMG_jpg.webp" class="d-block w-100" alt="First Slide" style="width: 20%; height: 800px; margin-top: 3%;">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="/politik1" style="color: inherit; text-decoration: none;">
                            <h2>Istri Gus Dur hadir ke MPR terima surat tak <br> berlakunya TAP MPR II/2001</h2>
                        </a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="foto/IMG-20240924-WA0015_3.jpg.webp" class="d-block w-100" alt="Second Slide" style="width: 20%; height: 800px; margin-top: 3%;">
                    <div class="carousel-caption d-none d-md-block">
                     <a href="/hukum2" style="color: inherit; text-decoration: none;">
                        <h2>Kapolri apresiasi "soft approach" tim <br>pembebasan pilot Philip</h2>
                     </a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="foto/1000032179_2.jpg.webp" class="d-block w-100" alt="Third Slide" style="width: 20%; height: 800px; margin-top: 3%;">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="/hukum3" style="color: inherit; text-decoration: none;">
                            <h2>Porli Bongkar Kasus Penyebaran data <br> Elektronik BKN</h2>
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

    <main>
        <section>
            <div class="text">
                <p style="font-size: 190%; margin-left: 16%; margin-top: 8%;"><b>Terkini</b></p>
            </div>

            <div class="container pt-5">

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <tr>
                        <img src="foto/17.jpg.webp" alt="Gambar" class="img-fluid" style="width: 60%; height: 100%; margin-left: -40px;">                
                    </tr>                
                </div>
                <div class="col-sm-12 col-md-6">
                    <td>
                        <h3 style="margin-left: -250px;" >     
                            <a href="/hometerkini" id="text" style="color: inherit; text-decoration: none;" onclick="this.style.color='red';">
                                Harga pangan hari ini: Minyak goreng tercatat <br>
                                Rp18.250 per liter <br>      
                            </a> 
                        </h3>
                        <h5 style="margin-left: -250px; padding-top: 2%;">
                        Harga beberapa komoditas pangan, seperti minyak goreng <br>
                        kemasan, bawang putih, bawang merah, cabai merah keriting, naik ...
                        </h5>   
                    </td>
                </div>
            </div>
        </div>

        <div class="container pt-5">

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <tr>
                        <img src="foto/rupiah.webp" alt="Gambar" class="img-fluid" style="width: 60%; height: 100%; margin-left: -40px;">                
                    </tr>                
                </div>
                <div class="col-sm-12 col-md-6">
                    <td>
                        <h3 style="margin-left: -250px;">    
                            <a href="/hometerkini1" id="text" style="color: inherit; text-decoration: none;" onclick="this.style.color='red';">
                                Rupiah Kamis pagi melemah 23 poin <br>
                                menjadi Rp15.425 per dolar AS       
                            </a>   
                           
                        </h3>
                        <h5 style="margin-left: -250px; padding-top: 2%;">
                            Nilai tukar (kurs) rupiah terhadap dolar AS yang <br>
                            ditransaksikan antarbank di Jakarta pada Kamis pagi <br> melemah 23 poin ...
                        </h5>   
                    </td>
                </div>
            </div>
        </div>

        <div class="container pt-5">

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <tr>
                        <img src="foto/img.webp" alt="Gambar" class="img-fluid" style="width: 60%; height: 100%; margin-left: -40px;">                
                    </tr>                
                </div>
                <div class="col-sm-12 col-md-6">
                    <td>
                        <h3 style="margin-left: -250px;">    
                            <a href="/hometerkini2" id="text" style="color: inherit; text-decoration: none;" onclick="this.style.color='red';">
                                Kemendagri: Lomba Desa 2024 <br>kontribusi capai target prioritas <br> nasional                            
                            </a>   
                           
                        </h3>
                        <h5 style="margin-left: -250px; padding-top: 2%;">
                            Direktur Jenderal Bina Pemerintahan Desa <br> Kementerian Dalam Negeri La Ode Ahmad P. Bolombo <br> berharap Lomba Desa dan ...     

                        </h5>   
                    </td>
                </div>
            </div>
        </div>
        <div class="container pt-5">

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <tr>
                        <img src="foto/foto.jpg" alt="Gambar" class="img-fluid" style="width: 60%; height: 100%; margin-left: -40px;">                
                    </tr>                
                </div>
                <div class="col-sm-12 col-md-6">
                    <td>
                        <h3 style="margin-left: -250px;">    
                            <a href="/hometerkini3" id="text" style="color: inherit; text-decoration: none;" onclick="this.style.color='red';">
                                Khofifah ajak semua pihak terus <br> serukan perdamaian di Palestina                            
                            </a>   
                           
                        </h3>
                        <h5 style="margin-left: -250px; padding-top: 2%;">
                            Ketua Umum PP Muslimat Nahdlatul Ulama Khofifah <br> Indar Parawansa menyebut Hari Perdamaian <br> Internasional atau ...                        </h5>   
                    </td>
                </div>
            </div>
        </div>

       <footer class="text-black mt-5">
          <div class="text-center py-2" style="background-color: beige">
            <p class="mb-0">&copy; 2024 BERITA TERBARU</p>
          </div>
       </footer>
        </section>
    </main>

    <script src="{{ asset('asset/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
