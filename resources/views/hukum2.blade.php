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
                <p style="padding-top: 10%; margin-left: 16%; font-size: 20px;"> > Hukum > Kapolri apresiasi "soft approach" tim pembebasan pilot Philip </p>
            </div>
            <div class="col">
                <td>
                    <h1 style="margin-left: 16%; margin-top: 5%;">      
                        Kapolri apresiasi "soft approach" tim <br> pembebasan pilot Philip                    
                    </h1> 
                    <h5 style="margin-left: 16%;">
                        Selasa, 24 September 2024 17:39 WIB                    
                    </h5>
                </td>
                <img src="foto/IMG-20240924-WA0015_3.jpg.webp" alt="Gambar" style="width: 70%; height: 100%; margin-left: 16%; margin-top: 3%;">
                <td>
                    <h4 style="margin-left: 16%;">      
                        Kapolri Jenderal Pol. Listyo Sigit Prabowo berbicara dengan tim negosiator pembebasan <br> pilot Susi Air, Philip Mark Mehrtens, yang disandera oleh Kelompok Kriminal Bersenjata <br> (KKB) pimpinan Egianus Kogoya di Gedung Mabes Polri, Jakarta, Selasa <br> (24/9/2024). /HO-Divisi Humas Polri.                    
                    </h4> 
                </td>
            </div>
            <div class="col">
                <td>
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Jakarta - Kapolri Jenderal Pol. Listyo Sigit Prabowo mengapresiasi pendekatan <br> soft approach yang dilakukan oleh tim negosiator pembebasan pilot Susi Air, Philip Mark <br> Mehrtens yang disandera oleh kelompok kriminal bersenjata (KKB).                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        Apresiasi itu disampaikan ketika menemui secara langsung tim pembebasan pilot Philip <br> di Gedung Mabes Polri, Jakarta, Selasa.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        “Saya sangat mengapresiasi karena tim ini menggunakan pendekatan soft approach <br>karena kita tahu, dalam operasi pembebasan ini, keselamatan sandera merupakan <br> prioritas utama,” kata Sigit, dilansir dari keterangan resmi.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Ia mengaku bersyukur bahwa pendekatan dengan cara tersebut dapat membebaskan <br>Philip dengan keadaan selamat.     
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        “Alhamdulillah, sandera dapat bebas dengan aman dan selamat. Kondisinya pun dalam <br> keadaan sehat ketika kembali," ucapnya.   
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Dalam pertemuan tersebut, Kapolri mendengarkan cerita detik-detik pembebasan pilot <br> Susi Air tersebut dari tim yang terlibat.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Mereka bercerita bahwa Kapten Philip disandera pada tanggal 7 Februari 2023 oleh <br> anggota KKB Nduga pimpinan Egianus Kogoya. Peristiwa itu terjadi ketika Mark <br> melakukan penerbangan menuju Distrik Paro, Kabupaten Nduga, Provinsi Papua <br> Pegunungan.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Atas kejadian tersebut, TNI dan Polri menggelar Operasi Paro dengan melibatkan 978 <br>personel yang terdiri atas 513 anggota TNI dan 465 anggota Polri. Cara yang diterapkan <br> adalah mengedepankan pendekatan soft approach melalui upaya negosiasi.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Usai menjadi korban penyanderaan KKB kurang lebih selama 1 tahun 7 bulan, pada <br> akhirnya, Philip berhasil dievakuasi oleh tim pembebasan sandera pada tanggal 21 <br> September 2024.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Ketika itu, Philip dijemput oleh tim gabungan di Kampung Yuguru, Distrik Maibarok, <br> Kabupaten Nduga, dan langsung diterbangkan menuju Mako Brimob Batalyon B/Timika <br> untuk proses cek kesehatan.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Setelah dinyatakan sehat, Philip diterbangkan dari Timika menuju ke Jakarta dengan <br>menggunakan pesawat terbang milik TNI AU.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Setibanya di Jakarta, Philip diserahkan oleh Pemerintah RI yang diwakili oleh Menko <br> Polhukam Hadi Tjahjanto kepada Duta Besar Selandia Baru untuk Indonesia Kevin <br> Burnett yang mewakili pemerintah negaranya.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Adapun pertemuan tersebut dihadiri oleh Astamaops Kapolri, Irjen Pol. Verdianto <br>Iskandar Bitticaca, Wakapolda Papua sekaligus Kaops Damai Cartenz Brigjen Pol. Faizal <br> Ramadhani, Kabid TIK Polda Papua sekaligus Kasatgas Gakkum Ops Damai Cartenz <br>Kombes Pol. I Gusti Gde Era Adhinata, dan Kapolres Mimika AKBP I Komang Budiartha.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Hadir pula tim negosiator pembebasan pilot Susi Air yakni, Edison Gwijangge, Yospian <br>Wandikbo dan Erlina Gwijangge.                    
                    </h4> 

                    <h5 style="margin-left: 16%; padding-top: 3%;">      
                        Pewarta: Nadia Putri Rahmani <br>
                        Editor: Tasrief Tarmizi <br>
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