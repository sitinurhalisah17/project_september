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
                <p style="padding-top: 5%; margin-left: 16%; font-size: 20px;"> > Ekonomi > Finansial Rupiah diperkirakan melemah karena data perekonomian China kurang baik</p>
            </div>
            <div class="col">
                <td>
                    <h1 style="margin-left: 16%; margin-top: 5%;">      
                        Rupiah diperkirakan melemah karena data <br> perekonomian China kurang baik                    
                    </h1> 
                    <h5 style="margin-left: 16%;">
                        Selasa, 24 September 2024 11:24 WIB                    
                    </h5>
                </td>
                <img src="foto/preview.jpeg.webp" alt="Gambar" style="width: 50%; height: 100%; margin-left: 16%; margin-top: 3%;">
                <td>
                    <h4 style="margin-left: 16%;">      
                        Ilustrasi - Petugas menunjukan uang pecahan dolar AS dan rupiah di Bank BSI, Jakarta. <br> FOTO/Muhammad Adimaja/Spt/am.                    
                    </h4> 
                </td>
            </div>
            <div class="col">
                <td>
                    <h2 style="background-color: rgb(245, 219, 227); width: 50%; height: 70%; margin-left: 16%; margin-top: 3%;">
                        <p style="margin-left: 15%;">
                            Rupiah hari ini diperkirakan melemah dipengaruhi <br> data perekonomian China yang kurang bagus                        
                        </p>
                    </h2>
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Jakarta - <br>
                        Nilai tukar (kurs) rupiah terhadap dolar AS pada perdagangan Selasa, diperkirakan <br> melemah dipengaruhi  data perekonomian China yang kurang baik.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        Pada awal perdagangan Selasa pagi, rupiah menanjak 16 poin atau 0,10 persen menjadi <br>Rp15.190 per dolar AS dari sebelumnya sebesar Rp15.206 per dolar AS.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        "Rupiah hari ini diperkirakan melemah dipengaruhi data perekonomian China yang <br> kurang bagus di tengah rencana The Fed untuk kembali cut rate sampai dengan di sisa <br> akhir tahun ini," kata analis Bank Woori Saudara Rully Nova saat dihubungi <br>di Jakarta, Selasa.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Ia menuturkan data pertumbuhan ekonomi China diproyeksikan sulit mencapai 5 persen <br>pada 2024. Sementara, China adalah salah satu mitra dagang utama Indonesia.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Dari dalam negeri, sentimen yang berkembang terkait dengan defisit anggaran <br> pemerintah yang terus melanjutkan tren peningkatan.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Rully memproyeksikan nilai tukar rupiah hari ini bergerak di kisaran Rp15.200 per dolar AS <br> sampai dengan Rp15.280 per dolar AS.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Sebelumnya, Menteri Keuangan (Menkeu) Sri Mulyani Indrawati mencatat bahwa defisit <br> APBN hingga Agustus 2024 mencapai Rp153,7 triliun, atau sebesar 0,68 persen dari PDB.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        “Tahun ini defisit didesain pada Rp522,8 triliun atau 2,29 persen dari PDB. Jadi, dalam hal <br>ini (defisit pada Agustus sebesar) 0,68 persen masih di dalam track untuk APBN 2024,” <br> ujar Sri Mulyani Indrawati di Jakarta, Senin.                    
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;"> 
                        Defisit tersebut salah satunya terjadi karena penerimaan negara yang menurun 2,5 <br>persen year-on-year (yoy) menjadi Rp1.777 triliun, sementara realisasi belanja pemerintah <br> berjalan on the track mencapai 58,1 persen dari pagu, atau Rp1.930,7 triliun.                    
                    </h4> 

                    <h5 style="margin-left: 16%; padding-top: 3%;">      
                        Pewarta: Martha Herlinawati Simanjuntak <br>
                        Editor: Faisal Yunianto <br>
                        Copyright © Berita Terbaru2024                  
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