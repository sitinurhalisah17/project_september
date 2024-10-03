<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                <p style="padding-top: 5%; margin-left: 16%; font-size: 20px;"> >Ekonomi > Finansial > Rupiah Kamis pagi melemah 23 poin menjadi Rp15.425 per dolar AS </p>
            </div>
            <div class="col">
                <td>
                    <h1 style="margin-left: 16%; margin-top: 5%;">      
                     Rupiah Kamis pagi melemah 23 poin <br>
                     menjadi Rp15.425 per dolar AS <br>      
                    </h1> 
                </td>
                <img src="foto/rupiah.webp" alt="Gambar" style="width: 70%; height: 100%; margin-left: 16%; margin-top: 3%;">
                <td>
                    <h4 style="margin-left: 16%;">      
                     Petugas menunjukan uang pecahan dolar AS dan rupiah di Bank BSI, Jakarta, Selasa <br> (3/9/2024). n.
                     FOTO/Muhammad Adimaja/Spt.<br>      
                    </h4> 
                </td>
            </div>
            <div class="col">
                <td>
                    <h2 style="background-color: rgb(245, 219, 227); width: 50%; height: 70%; margin-left: 16%; margin-top: 3%;">
                        <p style="margin-left: 15%;">
                            melemah 23 poin atau 0,15 persen menjadi Rp15.425 <br> per dolar AS dari sebelumnya sebesar Rp15.402 per <br> dolar AS
                        </p>
                    </h2>
                    <h4 style="margin-left: 16%; padding-top: 3%;">      
                        Jakarta (BERITA TERBARU) - <br>
                        Nilai tukar (kurs) rupiah terhadap dolar AS yang ditransaksikan antarbank di Jakarta pada <br>
                        Kamis pagi melemah 23 poin atau 0,15 persen menjadi Rp15.425 per dolar AS dari <br>
                        sebelumnya sebesar Rp15.402 per dolar AS.
                    </h4> 
                    <h5 style="margin-left: 16%; padding-top: 3%;">      
                        Pewarta: Martha Herlinawati Simanjuntak <br>
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