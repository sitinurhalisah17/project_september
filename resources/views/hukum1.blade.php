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
    <main>
        <section>
            <div class="text">
                <p style="padding-top: 10%; margin-left: 16%; font-size: 20px;"> > Hukum > Polres Bekasi buka kanal aduan terkait kasus jasad Kali Bekasi </p>
            </div>
            <div class="col">
                <td>
                    <h1 style="margin-left: 16%; margin-top: 5%;">      
                        Polres Bekasi buka kanal aduan terkait <br> kasus jasad Kali Bekasi  
                    </h1> 
                    <h5 style="margin-left: 16%;">
                        Selasa, 24 September 2024 15.06 WIB
                    </h5>
                </td>
                <img src="foto/IMG_20240924_113124.jpg.webp" alt="Gambar" style="width: 70%; height: 100%; margin-left: 16%; margin-top: 3%;">
                <td>
                    <h4 style="margin-left: 16%;">      
                        Lokasi sekitar penemuan tujuh jasad di pinggir kali belakang Masjid Al Ikhlas, <br> Perumahan Pondok Gede Permai, Jatiasih, Bekasi, Jawa Barat, Selasa <br> (24/9/2024).Melalusa Susthira                     
                    </h4> 
                </td>
            </div>
            <div class="col">
                <td>
                    <h2 style="background-color: rgb(245, 219, 227); width: 50%; height: 70%; margin-left: 16%; margin-top: 3%;">
                        <p style="margin-left: 15%;">
                            Kami membuka komplain kepada warga siapa <br> pihak keluarga, sahabat atau teman yang merasa <br> anaknya belum kembali
                        </p>
                    </h2>
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Bekasi - Kapolres Metro Bekasi Kota Kombes Pol Dani Hamdani mengatakan <br> pihaknya membuka kanal aduan bagi keluarga yang merasa kehilangan anggota <br>keluarganya terkait kasus penemuan tujuh jasad di Kali Bekasi.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        "Kami membuka komplain kepada warga siapa pihak keluarga, sahabat atau teman yang <br> merasa anaknya belum kembali," kata Dani di Jatiasih, Bekasi, Jawa Barat, Selasa.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Hal itu disampaikan-nya saat Komisi III DPR RI melakukan kunjungan kerja (kunker) <br> spesifik untuk memantau lokasi penemuan tujuh jasad di pinggir kali belakang Masjid Al <br> Ikhlas, Perumahan Pondok Gede Permai, Jatiasih, Bekasi, Jawa Barat.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Dia menyebut bahwa hingga saat ini sudah ada lima keluarga yang datang untuk <br> membuat laporan kehilangan anggota keluarganya.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Dia juga menyebut sampai saat ini masih dilakukan identifikasi terhadap tujuh jenazah <br> yang ditemukan mengapung di Kali Bekasi pada Minggu (22/9) itu.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        "Karena pada tubuh jenazah tidak ditemukan identitas, tidak ada dompet, tidak ada data <br> apa pun," ujarnya.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Dia mengatakan pihaknya akan mencoba mengupayakan identifikasi jenazah dari ponsel <br> atau handphone yang ditemukan.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        "Handphone awalnya ditemukan ada dua, itu juga kena air sehingga coba kami kirim ke <br>siber untuk dibuka, tapi sampai saat ini masih proses. Itu dari handphone kami mencoba <br> mencari identitas siapa-siapa korban ini. Untuk sampai hari ini (ponsel) belum (dapat <br>dibuka)," tuturnya.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Dia lantas menceritakan kronologi singkat awal mula penemuan tujuh jasad mengapung <br> di Kali Bekasi itu pada Minggu (22/9) pagi.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Dia mengatakan awalnya warga melaporkan ditemukan lima mayat, namun setelah <br> dilakukan pengecekan oleh polisi total mayat yang ditemukan bertambah menjadi tujuh.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        "Proses evakuasi berlangsung hingga sekitar pukul 8 atau 9 pagi. Kemudian dari pihak <br> kami telah melakukan evakuasi dibantu dari Basarnas, BPBD, kami menelusuri lagi <br> sungai, kita khawatirkan masih ada korban lain yang masih ada di sungai," kata Dani.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Ketujuh mayat yang ditemukan di Kali Bekasi itu kemudian dibawa ke RS Polri Kramat <br> Jati, Jakarta Timur, untuk diidentifikasi.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Sebelumnya, warga menemukan tujuh mayat mengambang di Kali Bekasi, tepatnya <br>belakang Masjid Al Ikhlas Perumahan Pondok Gede Permai RT004/RW008, Jatirasa,<br> Jatiasih, Kota Bekasi pada Minggu (22/9) pagi pada pukul 06.00 WIB dan dilaporkan <br> pukul 07.00 WIB.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Polisi menyebutkan penemuan tujuh mayat itu diduga karena tawuran. Terlebih, saat itu <br>polisi sedang patroli untuk mencegah peristiwa itu.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Polisi telah menangkap 15 orang tersangka dan tiga di antaranya membawa senjata <br> tajam.                    
                    </h4> 

                    <h5 style="margin-left: 16%; padding-top: 3%;">      
                        Pewarta: Melalusa Susthira Khalida <br>
                        Editor: Chandra Hamdani Noor <br>
                        Copyright © Berita Terbaru 2024                        
                    </h5> 

                </td>
            </div>
            
       <footer class="text-black mt-5">
        <div class="text-center py-2" style="background-color: beige">
          <p class="mb-0">&copy; 2024 BERITA TERBARU</p>
        </div>
     </footer>
     
        </section>
    </main>
</body>
</html>
<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>