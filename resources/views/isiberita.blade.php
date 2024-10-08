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
            <div class="col">
                <td>
                   <a href="/isiberita/{id}/{{$berita->id}}"  style="color: inherit; text-decoration: none;"><h3 style="margin-left: 16%; margin-top: 5%;">   {{$berita->judul}}   
                   </h3> </a> 
                </td>
                <img src="{{asset('/storage/foto/'.$berita->foto)}}" alt="Gambar" style="width: 60%; height: 100%; margin-left: 16%; margin-top: 3%;">
            </div>
            <div class="col-lg-8 max-auto" style="margin-left: 16%; margin-top: 3%;">{{$berita->isi_berita}} 
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