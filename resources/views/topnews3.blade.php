<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href={{ asset('asset/bootstrap/css/bootstrap.min.css')}}>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
    <nav class="navbar navbar-expand-sm" style="background-color:beige">
        <div class="container" style="margin-right: 20%;">
           <a href="#" class="navbar-brand" style="font-size: 38px;">Berita Terbaru</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="navbar-nav">
                <li class="navbar-item"  style="margin-left: 35%;">
                    <a href="/home" class="nav-link">HOME</a>
                </li>
                <li class="navbar-item" style="margin-left: 40%;">
                    <a href="/politik" class="nav-link">POLITIK</a>
                </li>
                <li class="navbar-item" style="margin-left: 45%;">
                    <a href="/hukum" class="nav-link">HUKUM</a>
                </li>
                <li class="navbar-item" style="margin-left: 50%;">
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
                <p style="padding-top: 5%; margin-left: 16%; font-size: 20px;"> > Metro > Kriminalitas > Polisi dan BPBD evakuasi penemuan tujuh mayat di Kali Bekasi</p>
            <div class="col">
                <td>
                    <h1 style="margin-left: 16%;">      
                        Polisi dan BPBD evakuasi penemuan tujuh <br> mayat di Kali Bekasi                  
                    </h1> 
                </td>
                <img src="foto/mayat.jpg.webp" alt="Gambar" style="width: 70%; height: 100%; margin-left: 16%; margin-top: 3%;">
                <td>
                    <h4 style="margin-left: 16%; font-size: 15x;">      
                        Tujuh mayat tanpa identitas ditemukan di Kali Bekasi, Bekasi, Minggu (22/9/2024) <br>HO-Basarnas/pri.
                    </h4> 
                </td>
            </div>
            <div class="col">
                <td>
                    <h4 style="margin-left: 16%; padding-top: 3%;">  
                        Jakarta - Pihak Kepolisian dan Badan Penanggulangan Bencana Daerah <br> (BPBD) Kota Bekasi melakukan evakuasi tujuh mayat yang ditemukan di Kali Bekasi, <br> tepatnya belakang Masjid Al Ikhlas Perumahan Pondok Gede Permai RT004/RW008, <br> Jatirasa, Jatiasih, Kota Bekasi, Minggu. 
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        "Kami telah melaksanakan cek TKP kasus penemuan tujuh orang mayat laki-laki di <br>wilayah hukum Polsek Jatiasih," kata Kapolres Metro Bekasi Kota Kombes Pol Dani <br> Hamdani dalam keterangannya di Jakarta, Minggu.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Dani mengatakan penemuan tujuh mayat itu diketahui saksi MInggu pagi pada pukul <br> 06.00 WIB dan dilaporkan pukul 07.00 WIB.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Pada awalnya, saksi 2 sedang berjalan di dekat masjid Al-Ikhlas bertemu dengan ibu <br> yang mencari kucing hilang di sekitar kali.     
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">  
                        Saat mengecek ke kali, ditemukan lima mayat di lokasi. Kemudian saksi 2 <br> memberitahukan kepada saksi 1 untuk melaporkan ke Polsek Jatiasih, Koramil, <br> dan BNPB.
 
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">     
                        "Selanjutnya, saat Kapolsek Jatiasih mendatangi TKP dan mendapati tujuh  orang mayat <br> di kali Bekasi yang selanjutnya dievakuasi," tambahnya.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">              
                        Saat ini, pihak kepolisian tengah meminta keterangan para saksi dan membawa mayat <br>ke RSUD Kota Bekasi.  
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Kendati demikian, ketujuh mayat tersebut hingga kini belum diketahui ciri dan <br>identitasnya.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Dihubungi terpisah, Kepala Pelaksana BPBD Kota Bekasi Priadi Santoso mengatakan <br> saat ini timnya masih menunggu kemungkinan adanya korban bertambah di lokasi.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        "Tim masih menunggu di aliran sungai titik bawah jembatan Kemang Pratama, untuk <br> menjaga kemungkinan masih ada korban yang terbawa arus di Kali Bekasi," ujar Priadi.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        Priadi memperkirakan mayat belum membusuk, tapi wajah sudah mulai membengkak.
                    </h4>   

                    <h5 style="margin-left: 16%; padding-top: 3%;">      
                        Pewarta: Luthfia Miranda Putri <br>
                        Editor: Ade irma Junida <br>
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