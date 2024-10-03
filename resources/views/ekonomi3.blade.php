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
            <a href="/terkini" class="navbar-brand" style="margin-right: 10%;">Terpopuler</a>
            <a href="/terpopuler" class="navbar-brand" style="margin-right: 10%;">Top News</a>
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
              </ul>
           </div>
        </div>      
    </nav>
    <main>
        <section>
            <div class="text">
                <p style="padding-top: 5%; margin-left: 16%; font-size: 20px;"> > Ekonomi > Bisnis > Harga emas Antam Sabtu beruntun stabil Rp1,461 juta per gram</p>
            </div>
            <div class="col">
                <td>
                    <h1 style="margin-left: 16%; margin-top: 5%;">      
                        Harga emas Antam Sabtu beruntun stabil <br> Rp1,461 juta per gram                 
                    </h1> 
                    <h5 style="margin-left: 16%;">
                        Sabtu, 28 September 2024 08:20 WIB     
                    </h5>
                </td>
                <img src="foto/emas.jpg" alt="Gambar" style="width: 50%; height: 100%; margin-left: 16%; margin-top: 3%;">
                <td>
                    <h4 style="margin-left: 16%;">      
                        Salah satu produk emas dari PT Aneka Tambang Tbk atau Antam. HO-Antam.
                    </h4> 
                </td>
            </div>
            <div class="col">
                <td>
                    <h2 style="background-color: rgb(245, 219, 227); width: 50%; height: 70%; margin-left: 16%; margin-top: 3%;">
                        <p style="margin-left: 15%;">
                            harga jual kembali (buyback) emas batangan pada <br> Sabtu (28/9), tetap Rp1.301.000 per gram
                        </p>
                    </h2>
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Jakarta - Harga emas batangan PT Aneka Tambang Tbk (Antam) yang <br> dipantau dari laman Logam Mulia di Jakarta, Sabtu pagi, tetap berada pada angka <br> Rp1.461.000 per gram, yang pada sehari sebelumnya juga berada di harga yang sama.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        Adapun harga jual kembali (buyback) emas batangan pada Sabtu (28/9), tetap <br> Rp1.301.000 per gram.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Transaksi harga jual dikenakan potongan pajak, sesuai dengan PMK No. 34/PMK.10/2017.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Penjualan kembali emas batangan ke PT Antam Tbk dengan nominal lebih dari Rp10 juta, <br>dikenakan PPh 22 sebesar 1,5 persen untuk pemegang NPWP dan 3 persen untuk <br> non-NPWP.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">    
                        PPh 22 atas transaksi buyback dipotong langsung dari total nilai buyback.  
                    </h4> 

                    <h5 style="margin-left: 16%; padding-top: 3%;">      
                        Pewarta: Ahmad Muzdaffar Fauzan <br>
                        Editor: Agus Salim <br>
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