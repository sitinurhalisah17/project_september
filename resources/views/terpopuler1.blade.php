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
                <p style="padding-top: 5%; margin-left: 16%; font-size: 20px;"> >International Corner Dua kendaraan militer Malaysia diserang warga sipil di Lebanon </p>
            <div class="col">
                <td>
                    <h1 style="margin-left: 16%; margin-top: 5%;">      
                        Dua kendaraan militer Malaysia <br> diserang warga sipil di Lebanon     
                    </h1> 
                </td>
                <img src="foto/Mobil-dan-kendaraan-dinas-UNIFIL-PBB-Lebanon.jpg.webp" alt="Gambar" style="width: 70%; height: 100%; margin-left: 16%; margin-top: 3%;">
                <td>
                    <h4 style="margin-left: 16%;">      
                        Ilustrasi kendaraan UNIFIL di Lebanon/Anadolu/py    
                    </h4> 
                </td>
            </div>
            <div class="col">
                <td>
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Kuala Lumpur- Divisi Intelijen dan Komunikasi Strategis Markas Besar <br>
                        Angkatan Bersenjata Malaysia dalam sebuah keterangan di Kuala Lumpur, Jumat, <br> menyatakan telah terjadi insiden penyerangan oleh warga sipil terhadap dua <br> kendaraan militer dari Malaysia Battalion 850-11 (Malbatt 850-11) di Lebanon <br> pada Rabu (18/9).
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        Dalam keterangan untuk media itu, disebutkan bahwa peristiwa tersebut terjadi sekitar <br>
                        pukul 17.32 waktu Lebanon (pukul 22.32 WIB), saat dua kendaraan Malbatt 850-11 Fitted <br> For Radio (FFR) yang ditumpangi tiga petugas dan tujuh anggota barisan lainnya <br> dalam perjalanan kembali ke Kamp Marakah.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Konvoi dua kendaraan itu dilakukan setelah menyelesaikan tugas perlindungan pasukan <br> di Kamp Shama, Markas Pasukan Interim Perserikatan Bangsa-Bangsa  <br>di Lebanon (UNIFIL).
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Keterangan itu menyebutkan saat kendaraan melewati jalur Tes Road-Burj Al Qibli di <br> kota Tirus, terjadi kemacetan yang luar biasa.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Banyak warga sipil yang sedang mengatur lalu lintas dimana banyak ambulans dan <br> mobil pemadam kebakaran melintas dari kedua arah.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Tiba-tiba, sekelompok warga sipil bertindak agresif dan berusaha menghentikan <br> kedua kendaraan Malbatt.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Hampir 30 warga sipil kemudian melemparkan batu dan menyayat seluruh ban <br> kendaraan Malbatt menggunakan senjata tajam.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Untuk menghindari kejadian yang lebih buruk, ketua pergerakan memerintahkan <br> kedua kendaraan untuk berhenti di pinggir jalan yang aman dan tetap berada <br>di dalam kendaraan menunggu bantuan.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Angkatan Bersenjata Lebanon (LAF) tiba di lokasi dan selanjutnya berhasil <br> mengendalikan situasi.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        LAF, menurut keterangan tersebut, juga membantu mengoordinasikan “loader” <br>untuk membawa kembali kendaraan dan anggota Malbatt ke Kamp Marakah.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Seluruh anggota dan kendaraan mereka tiba di Kamp Marakah dengan selamat pada <br> pukul 19.39 waktu Lebanon (pukul 00.39 WIB).                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Tidak ada korban luka yang diderita petugas Malbatt dan anggota yang terlibat, <br> namun kedua kendaraan mengalami beberapa kerusakan.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Malbatt 850-11 akan melanjutkan tugas rutin sebagaimana diamanatkan UNIFIL.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Angkatan Bersenjata Malaysia meminta seluruh pihak untuk tidak membuat spekulasi <br> apapun atas kejadian yang dapat mencerminkan citra mereka khususnya dan <br> Kementerian Pertahanan Malaysia pada umumnya.                    
                    </h4> 

                    <h5 style="margin-left: 16%; padding-top: 3%;">      
                        Pewarta: Virna P Setyorini <br>
                        Editor: Primayanti <br>
                        Copyright © Berita Terbaru 2024
                    </h5> 
                </td>
                <footer class="text-black mt-5">
                    <div class="text-center py-2" style="background-color: beige">
                      <p class="mb-0">&copy; 2024 BERITA TERBARU</p>
                    </div>
                 </footer>
            </div>
        </section>
    </main>
</body>
</html>
<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>