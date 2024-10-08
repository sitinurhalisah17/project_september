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
                <p style="padding-top: 5%; margin-left: 16%; font-size: 20px;"> > Sepakbola > Indonesia > PSSI targetkan Mees-Eliano perkuat timnas saat lawan Bahrain</p>
            <div class="col">
                <td>
                    <h4 style="color: red; margin-left: 16%;  margin-top: 5%;">
                        Sepak Bola Nasional
                    </h4>
                    <h1 style="margin-left: 16%;">      
                        PSSI targetkan Mees-Eliano perkuat timnas <br> saat lawan Bahrain                    
                    </h1> 
                </td>
                <img src="foto/antarafoto-indonesia-lawan-australia-1009224-hma-1_2.jpg.webp" alt="Gambar" style="width: 70%; height: 100%; margin-left: 16%; margin-top: 3%;">
                <td>
                    <h4 style="margin-left: 16%;">      
                        Pesepak bola Timnas Indonesia berfoto sebelum melawan Timnas Australia dalam <br>pertandingan Grup C putaran ketiga Kualifikasi Piala Dunia 2026 Zona Asia di Stadion <br>Utama Gelora Bung Karno, Senayan, Jakarta, Selasa (10/9/2024). FOTO/Hafidz Mubarak <br> A/sgd/tom/am.                    
                    </h4> 
                </td>
            </div>
            <div class="col">
                <td>
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        Jakarta - PSSI menargetkan dua pemain naturalisasi Mees Hilgers dan Eliano <br> Reijnders dapat memperkuat tim nasional Indonesia saat melawan tuan rumah Bahrain <br> pada laga Grup C kualifikasi Piala Dunia 2026 zona Asia, 10 Oktober 2024.   
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        "Dua pekan ke depan ini menjadi periode yang sangat penting," ujar Ketua Umum PSSI <br> Erick Thohir di Jakarta, Sabtu.  
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Pria yang juga Menteri BUMN itu mengatakan, naturalisasi atau pewarganegaraan Mees <br> dan Eliano sudah mendapatkan persetujuan dari Presiden Joko Widodo.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Presiden, Erick melanjutkan, telah menandatangani Keputusan Presiden (Keppres) <br> naturalisasi kedua pemain tersebut.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        "Jadi tinggal mengangkat sumpah minggu depan," kata dia.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">     
                        PSSI berupaya agar pengucapan sumpah setia dua bek berusia 23 tahun itu sebagai WNI, <br> yang dilakukan di Belanda, dapat berjalan tepat waktu.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Sebab, setelah itu, masih ada proses pergantian asosiasi kedua pemain dari KNVB ke <br> PSSI. Ketika hal-hal itu sudah tuntas, barulah Mees dan Eliano dapat didaftarkan ke skuad <br>timnas untuk kualifikasi Piala Dunia 2026.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        "Bergabungnya mereka akan menjadi kekuatan tambahan bagi timnas," tutur Erick.     
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Erick menegaskan, timnas berupaya mengumpulkan setidak-tidaknya 15 poin dari <br>laga-laga Grup C putaran ketiga kualifikasi Piala Dunia 2026 zona Asia.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        Dengan jumlah poin tersebut, dia memperkirakan Indonesia dapat mengisi peringkat <br> dua besar Grup C yang akan membawa tim asuhan pelatih Shin Tae-yong lolos langsung <br> ke Piala Dunian 2026.   
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">    
                        "Kita memerlukan 15 poin dari 10 pertandingan di Grup C," ujar Erick.
  
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Timnas Indonesia kini berada di posisi keempat klasemen sementara Grup C dengan dua <br> poin dari dua pertandingan. Skuad berjuluk "Garuda" masih memiliki delapan <br> pertandingan tersisa di grup yang beranggotakan Indonesia, Jepang, Arab Saudi, <br> Bahrain, Australia dan China itu.     
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">  
                        Terdekat, pada Oktober 2024, Indonesia akan melawan tuan rumah Bahrain pada 10 <br>Oktober di Riffa dan China pada 15 Oktober di Qingdao.    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">  
                        Erick Thohir menegaskan, untuk menuju ke kedua negara itu, Indonesia akan <br> menumpang pesawat komersial dan carter. Pesawat carter akan digunakan untuk <br> keberangkatan dari Bahrain menuju China supaya kondisi pemain tetap terjaga.  
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">  
                        "Kami tidak ingin pemain cedera. Nantinya, ketika kembali ke Indonesia dari China, <br> timnas kembali menumpang pesawat komersial," tutur dia.
                    </h4> 

                    <h5 style="margin-left: 16%; padding-top: 3%;">      
                        Pewarta: Michael Siahaan <br>
                        Editor: Irwan Suhirwandi <br>
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