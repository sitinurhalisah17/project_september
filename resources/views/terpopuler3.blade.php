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
                <p style="padding-top: 5%; margin-left: 16%; font-size: 20px;"> >Metro > Kriminalitas > Nikita Mirzani jamin Vadel masuk penjara terkait persetubuhan anak</p>
            <div class="col">
                <td>
                    <h1 style="margin-left: 16%; margin-top: 5%;">      
                        Nikita Mirzani jamin Vadel masuk penjara <br> terkait persetubuhan anak                    
                    </h1> 
                </td>
                <img src="foto/1000211416.jpg.webp" alt="Gambar" style="width: 70%; height: 100%; margin-left: 16%; margin-top: 3%;">
                <td>
                    <h4 style="margin-left: 16%;">      
                        Artis Nikita Mirzani mendatangi Kantor Polres Metro Jakarta Selatan terkait kasus dugaan <br>
                        persetubuhan anak yang dialami anaknya, Laura Meizani atau Lolly, Jakarta, <br> Jumat (20/9/2024).Luthfia Miranda Putri.                    
                    </h4> 
                </td>
            </div>
            <div class="col">
                <td>
                    <h2 style="background-color: rgb(245, 219, 227); width: 50%; height: 70%; margin-left: 16%; margin-top: 3%;">
                        <p style="margin-left: 15%;">
                            saya jamin kalian masuk penjara
                          
                        </p>
                    </h2>
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Jakarta - Artis Nikita Mirzani menjamin terlapor Vadel Alfajar Bajideh atau VAB <br> (19) akan masuk penjara terkait kasus dugaan persetubuhan anak terhadap Laura <br> Meizani (LM) atau Lolly (17).                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        "Saya cuma bisa bilang untuk Vadel dan keluarganya, saya jamin kalian masuk penjara, <br>saya jamin," kata Nikita kepada wartawan di Polres Metro Jakarta Selatan, Jumat.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        LM adalah anak dari Nikita Mirzani.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Nikita mengatakan kedatangannya ke Polres Metro Jakarta Selatan untuk memastikan <br> pemeriksaan sang anak berjalan lancar dengan didampingi oleh Unit Pelayanan <br> Perempuan dan Anak serta Komnas Perempuan dan Anak.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      

                        Lebih lanjut, dia meyakini Vadel akan berhadapan langsung secepatnya untuk bisa <br> dimintakan keterangan lebih lanjut.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Dia berharap penyelidikan ini akan terus berkembang dan tidak menutup kemungkinan <br> bertambahnya jumlah terlapor.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        "Ya, bisa jadi nanti dikembangkan lagi, pokoknya sih ya, satu keluarganya Vadel," ujarnya.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Nikita mengatakan saat ini Vadel sudah bebas dari penjara Polsek Pesanggrahan dua hari <br> yang lalu lantaran sempat memukul orang.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        "Jadi, tanya aja sama Polsek sana. Jadi, emang ini orang preman, sok jagoan," ucapnya.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Terpisah, Kasie Humas Polres Metro Jakarta Selatan, AKP Nurma Dewi menyatakan akan <br> memanggil Vadel dalam waktu dekat untuk dimintai keterangan.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        "Vadel itu secepatnya, untuk apa lama-lama, setelah bukti nanti kita dapat, kemudian <br> saksi-saksi jelas dan memang udah dijadwalkan untuk dipanggil," ujarnya.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Polisi sebelumnya memeriksa artis Nikita Mirzani pada Selasa (17/9), terkait laporan <br> terhadap VA (19) mengenai kasus dugaan persetubuhan anak dan aborsi terhadap <br> putrinya.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Terlapor VA merupakan kekasih dari anak Nikita Mirzani, yakni Laura Meizani Mawardi <br> atau disapa Lolly (17).                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Kejadian itu dimulai pada Januari 2024 di Jalan Bintaro Permai Nomor 5 <br> (Bintaro Park View) RT 05/RW03, Pesanggrahan, Jakarta Selatan.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Atas perbuatannya, pelaku bisa dijerat dengan UU Nomor 35 Tahun 2014 tentang <br>Perubahan UU Nomor 23 Tahun 2002 tentang Perlindungan Anak.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">  
                        Sebagaimana dimaksud dalam pasal 76 d UU 35/2014 dan atau 77 A jo 45 A dan atau 421 <br> KUHP jo pasal 60 UU No 17 Tahun 2023 tentang kesehatan dan atau pasal 346 KUHP  <br>juncto 81.    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Ancaman hukuman maksimal 15 tahun penjara.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Laporan kasus itu tertuang dalam LP/B/2811/IX/2024/SPKT/Polres Metro Jaksel/ Polda <br> Metro Jaya.                    
                    </h4> 


                    <h5 style="margin-left: 16%; padding-top: 3%;">      
                        Pewarta: Luthfia Miranda Putri <br>
                        Editor: Edy Sujatmiko <br>
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