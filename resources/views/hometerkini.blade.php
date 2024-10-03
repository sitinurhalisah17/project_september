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
              </ul>
           </div>
        </div>      
    </nav>
    <main>
        <section>
            <div class="text">
                <p style="padding-top: 5%; margin-left: 16%; font-size: 20px;"> >Ekonomi > Bisnis > Harga pangan hari ini: Minyak goreng tercatat Rp.18.250 per liter </p>
            </div>
            <div class="col">
                <td>
                   <a href="/hometerkini/{id}/{{$berita->id}}"><h1 style="margin-left: 16%; margin-top: 5%;">   {{$berita->judul}}   
                    {{-- Harga pangan hari ini: Minyak goreng <br>
                    tercatat Rp18.250 per liter <br>       --}}
                   </h1> </a> 
                </td>
                <img src="{{asset('/storage/foto/'.$item->foto)}}" alt="Gambar" style="width: 70%; height: 100%; margin-left: 16%; margin-top: 3%;">
                {{-- <td>
                    <h4 style="margin-left: 16%;">      
                     Pedagang menunjukkan minyak goreng Minyakita di Pasar Anyar, Kota Tangerang, <br> Banten, Senin
                     (15/7/2024).FOTO/Sulthony Hasanuddin/Spt.<br>      
                    </h4> 
                </td> --}}
            </div>
            <div class="col">{{$item->isi_berita}}
                {{-- <td>
                    <h2 style="background-color: rgb(245, 219, 227); width: 50%; height: 70%; margin-left: 16%; margin-top: 3%;">
                        <p style="margin-left: 15%;">

                            harga rata-rata nasional minyak goreng kemasan<br>
                            sederhana tercatat berada di angka Rp18.250 per <br>
                            liter, sedangkan curah Rp15.900 per liter <br>
                        </p>
                    </h2>
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Jakarta (BERITA TERBARU) - Harga beberapa komoditas pangan, seperti minyak goreng <br> kemasan,     
                        bawang putih, bawang merah, cabai merah keriting, naik meski tak signifikan pada <br>
                        Kamis pagi.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">   
                        Berdasarkan data Panel Harga Badan Pangan Nasional (Bapanas) yang diakses pada <br>   
                        pukul 07.35 WIB, harga rata-rata nasional minyak goreng kemasan sederhana tercatat <br>
                        berada di angka Rp18.250 per liter, sedangkan minyak goreng curah Rp15.900 per liter.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Bawang merah juga mengalami kenaikan dibandingkan pekan lalu menjadi Rp27.180 per kg, <br>
                        bawang putih bonggol Rp40.150 per kg, cabang merah keriting naik menjadi <br>
                        Rp35.830 per kg.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Telur ayam ras yang pada Rabu kemarin tercatat Rp28.190 per kg juga naik menjadi <br>
                        Rp28.610 per kg. Adapun daging ayam ras naik Rp900 dibandingkan pekan lalu menjadi <br>
                        Rp35.280 per kg.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Beras premium tercatat berada di harga rata-rata Rp15.440 per kg, beras medium <br>
                        Rp13.670 per kg, dan beras SPHP Rp12.600 per kg.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Untuk harga ikan, ikan tongkol berada pada harga rata-rata Rp34.060 per kg, ikan <br>
                        kembung Rp37.940 per kg, dan ikan bandeng Rp34.530 per kg.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Harga gula konsumsi turun menjadi Rp17.740 per kg, tepung terigu kemasan Rp13.100 per <br>
                        kg, dan terigu curah Rp10.300 per kg.
                    </h4> 
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Adapun harga daging sapi murni tercatat berada di angka rata-rata Rp136.180 per kg.
                    </h4> 


                </td> --}}

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