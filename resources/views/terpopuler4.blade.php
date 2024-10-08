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
                <p style="padding-top: 5%; margin-left: 16%; font-size: 20px;"> >Humaniora > SBY pamit ke Jokowi, dapat amanah jadi Penasihat Khusus Aliansi Pembasmi Malaria</p>
            <div class="col">
                <td>
                    <h1 style="margin-left: 16%; margin-top: 5%;">      
                        SBY pamit ke Jokowi, dapat amanah jadi <br> Penasihat Khusus Aliansi Pembasmi <br> Malaria   
                    </h1> 
                </td>
                <img src="foto/antarafoto-presiden-jokowi-bertemu-sby-210924-sgd-2_1.jpg.webp" alt="Gambar" style="width: 70%; height: 100%; margin-left: 16%; margin-top: 3%;">
                <td>
                    <h4 style="margin-left: 16%;">      
                        Presiden Joko Widodo (kanan) bersama Presiden ke-6 Susilo Bambang Yudhoyono atau SBY <br>(kedua kanan) menyampaikan keterangan pers di Istana Merdeka, Jakarta, <br> Sabtu (21/9/2024). FOTO/Sigid Kurniawan/nym/am.
                    </h4> 
                </td>
            </div>
            <div class="col">
                <td>
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Jakarta - Presiden Ke-6 RI Susilo Bambang Yudhoyono (SBY) mengumumkan <br>bahwa dirinya telah menerima amanah sebagai Penasihat Khusus Aliansi Sedunia Untuk <br> Membasmi Malaria.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        Pengumuman itu disampaikan SBY usai menghadap Presiden Joko Widodo (Jokowi) di <br> kompleks Istana Kepresidenan Jakarta, Sabtu, untuk menyampaikan secara langsung <br> kabar tersebut.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        "Pagi ini saya menghadap Bapak Presiden sehubungan dengan peran dan amanah yang <br> saya jalankan sebagai penasihat khusus Aliansi Sedunia Untuk Membasmi Malaria," kata <br> SBY kepada wartawan.                  
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Dalam pernyataannya, SBY menyebutkan bahwa ia akan berperan sebagai penasihat di <br> kawasan Asia Pasifik.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        "Saya sampaikan kepada Pak Jokowi, tugas ini penting dan saya terima karena memang <br> ada kewajiban internasional untuk segera mengenyahkan malaria dari muka bumi," <br> katanya.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Jika amanah tersebut tidak ia jalankan, kasus malaria di dunia diperkirakan makin <br> menjadi-jadi, bahkan mungkin saja bisa separah pandemi COVID-19 yang luar biasa, kata <br> SBY menambahkan.         
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Ia menegaskan pentingnya mengatasi masalah malaria yang masih mengancam, <br> khususnya di Indonesia, dengan daerah yang paling terdampak antara lain Papua, Nusa <br> Tenggara Timur, Maluku, dan Kalimantan Timur.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        SBY menyampaikan bahwa ia telah melapor kepada Presiden Jokowi mengenai perannya <br> tersebut, karena laporan itu merupakan bagian dari etika politik.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        "Apalagi saya mantan Presiden, wajib untuk menyampaikan kepada Presiden yang <br> sedang mengemban tugas," katanya.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Ia juga menyampaikan komitmennya untuk menurunkan angka penyakit malaria di <br> Indonesia dan akan berangkat ke New York untuk menghadiri pertemuan penting terkait <br> isu ini selama sekitar satu pekan.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        SBY juga berniat untuk menemui presiden terpilih Prabowo Subianto untuk <br> menyampaikan hal serupa, sehubungan dengan agenda summit Aliansi Sedunia Untuk <br> Membasmi Malaria di Indonesia pada tahun depan.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        "Karena tahun depan akan ada summit di Indonesia, tentu yang memimpin Pak Prabowo <br> nanti sebagai Presiden tahun depan dan seterusnya," katanya.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Dengan langkah ini, SBY menunjukkan dedikasinya terhadap kesehatan global dan <br> komitmennya untuk berkontribusi dalam usaha memberantas malaria, sebuah penyakit <br> yang masih menjadi tantangan serius di banyak negara.                    
                    </h4> 

                    <h5 style="margin-left: 16%; padding-top: 3%;">      
                        Pewarta: Andi Firdaus, Mentari Dwi Gayati <br>
                        Editor: Riza Mulyadi
                        <br>
                        Copyright © BERITA TERBARU 2024
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