<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href={{ asset('asset/bootstrap/css/bootstrap.min.css')}}>
</head>
<body style="overflow-x: hidden">
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
                <li class="navbar-item" style="margin-left: 30%;">
                    <a href="/politik" class="nav-link">POLITIK</a>
                </li>
                <li class="navbar-item" style="margin-left: 33%;">
                    <a href="/hukum" class="nav-link">HUKUM</a>
                </li>
                <li class="navbar-item" style="margin-left: 35%;">
                    <a href="/ekonomi" class="nav-link">EKONOMI</a>
                </li>

                <form action="/search" class="d-flex mt-1" method="GET" style="margin-left: 5%; height: 30px">
                    <!-- <label for="query">Cari Berita:</label> -->
                    <input type="text" id="query" name="query" required>
                    <input type="submit" value="Go">
                </form>


              </ul>
           </div>
        </div>      
    </nav>
    <main>
        <section>
            <div class="text">
                <p style="font-size: 190%; margin-left: 16%; margin-top: 8%;"><b>Terpopuler</b></p>
            </div>
            <div class="container pt-5">

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <tr>
                        <img src="foto/Mobil-dan-kendaraan-dinas-UNIFIL-PBB-Lebanon.jpg.webp" alt="Gambar" class="img-fluid" style="width: 60%; height: 100%; margin-left: -40px;">                
                    </tr>                
                </div>
                <div class="col-sm-12 col-md-6">
                    <td>
                       
                        <h3 style="margin-left: -250px;">     
                            <a href="/terpopuler1" style="color: inherit; text-decoration: none;" onclick="this.style.color='red';">
                                Dua kendaraan militer Malaysia <br> diserang warga sipil di Lebanon                        
                            </a> 
                        </h3>
                        <h5 style="margin-left: -250px; padding-top: 2%;">
                            Divisi Intelijen dan Komunikasi Strategis Markas Besar <br> Angkatan Bersenjata Malaysia dalam sebuah <br> keterangan di Kuala ...
                        </h5>   
                    </td>
                </div>
            </div>
        </div>

        <div class="container pt-5">

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <tr>
                        <img src="foto/IMG-20240921-WA0037.jpg.webp" alt="Gambar" class="img-fluid" style="width: 60%; height: 100%; margin-left: -40px;">                
                    </tr>                
                </div>
                <div class="col-sm-12 col-md-6">
                    <td>
                        <h3 style="margin-left: -250px;"> 
                            <a href="/terpopuler2" style="color: inherit; text-decoration: none;" onclick="this.style.color='red';">
                                Pilot Susi Air Philip Mark yang <br> disandera OPM dibebaskan                        
                            </a>     
                        </h3>
                        <h5 style="margin-left: -250px; padding-top: 2%;">
                            Pilot Susi Air Kapten Phillip Mark Marthens yang <br> disandera oleh Organisasi Papua Merdeka <br> (OPM)/Kelompok ...
                        </h5>   
                    </td>
                </div>
            </div>
        </div>

        <div class="container pt-5">

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <tr>
                        <img src="foto/1000211416.jpg.webp" alt="Gambar" class="img-fluid" style="width: 60%; height: 100%; margin-left: -40px;">                
                    </tr>                
                </div>
                <div class="col">
                    <td>
                        <h3 style="margin-left: -250px;"> 
                            <a href="/terpopuler3" style="color: inherit; text-decoration: none;" onclick="this.style.color='red';">
                                Nikita Mirzani jamin Vadel masuk <br> penjara terkait persetubuhan anak                        
                            </a>     
                        </h3>
                        <h5 style="margin-left: -250px; padding-top: 2%;">
                            Artis Nikita Mirzani menjamin terlapor Vadel Alfajar <br>Bajideh atau VAB (19) akan masuk penjara terkait kasus <br> dugaan ...                        
                        </h5>   
                    </td>
                </div>
            </div>
        </div>

        <div class="container pt-5">

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <tr>
                        <img src="foto/antarafoto-presiden-jokowi-bertemu-sby-210924-sgd-2_1.jpg.webp" alt="Gambar" class="img-fluid" style="width: 60%; height: 100%; margin-left: -40px;">                
                    </tr>                
                </div>
                <div class="col-sm-12 col-md-6">
                    <td>
                        <h3 style="margin-left: -250px;" style="color: inherit; text-decoration: none;" onclick="this.style.color='red';"> 
                            <a href="/terpopuler4" style="color: inherit; text-decoration: none;">
                                SBY pamit ke Jokowi, dapat amanah <br>jadi Penasihat Khusus Aliansi Pembasmi <br>Malaria                        
                            </a>     
                        </h3>
                        <h5 style="margin-left: -250px; padding-top: 2%;">
                            Presiden Ke-6 RI Susilo Bambang Yudhoyono (SBY) <br> mengumumkan bahwa dirinya telah menerima amanah sebagai <br>Penasihat ...                        
                        </h5>   
                    </td>
                </div>
            </div>
        </div>

        
        <div style="background-color: beige; margin-top: 5%" >
            <div class="footer container py-5">
               <div style="font-size: 38px; margin-left: -40px;">Berita Terbaru</div>
            </div>
            <div class="footer container py-5" style="font-size: 25px; margin-top:-2%" >
                <div class="row text-black">
                    <div class="col">
                        <ul class="list-group" style="list-style: none;">
                            <li class="">Terkini</li>
                            <li class="">Terpopuler</li>
                            <li class="">Top News</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-group" style="list-style: none;">
                            <li class="">Home</li>
                            <li class="">Politik</li>
                            <li class="">Hukum</li>
                            <li class="">Ekonomi</li>
                        </ul>
                    </div>
                    <div class="col" style="margin-left: 95px; margin-top:-7%">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                          </svg>
                    </div>
                </div>
            </div>
        </div>

        </section>
    </main>
    
</body>
</html>
<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>