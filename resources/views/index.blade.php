@extends('template/dashboard')
@section('contentt')
     
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <a href="/berita/create/" class="btn" style="background-color: beige">Tambah Berita</a><br>
            </div>
            <div class="col-md-6">
                <form action="/search" method="post">
                   @csrf
                  <div class="input-group mb-3">
                      <input type="text" name="cari" class="form-control" placeholder="Search" id="">
                      <button class="btn" style="background-color: beige" type="submit">Go</button>
                  </div>
                </form>
            </div>
        </div>
        Total Data Berita: {{$total}}
        <table class="table">
            <thead class="table" style="background-color: beige">
                <tr>
                    <td>NO</td>
                    <td>JUDUL</td>
                    <td>ISI BERITA</td>
                    <td>TANGGAL PUBLIKASI</td>
                    <td>KATEGORI</td>
                    <td>FOTO</td>
                    <td>AKSI</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($berita as $key => $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->isi_berita}}</td>
                    <td>{{$item->tanggal_publikasi}}</td>
                    <td>{{$item->kategoris->nama_kategori}}</td>


                    <td><img src="{{ asset('storage/foto/'.$item->foto)}}" alt="" style="width: 80px; height:80px"></td>
                    <td>
                        <a href="/berita/delete/{{$item->id}}" onclick="return window.confirm('Yakin hapus berita ini?')" class="btn btn-danger">Hapus</a>
                        <a href="/berita/edit/{{$item->id}}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection