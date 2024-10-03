@extends('template/dashboard')
@section('contentt')

    <div class="container pt-5">
    <h3>Data Pengguna</h3>
    <div class="row">
        <div class="col-md-6">
            <a href="/user/create"> <button class="btn btn-primary">Tambah Data</button></a>
        </div>
        <div class="col-md-6">
            <form action="/user" method="post">
               @csrf
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Search" name="cari" id="">
                  <button class="btn btn-success" type="submit">Cari</button>
                </div>
           </form>
        </div>
    </div>
        Total Data Pengguna: {{ $total_user}}
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>LEVEL</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            @foreach ($user as $key => $item)
               <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ optional($item->level)->nama_level }}</td>
                  <td><img src="{{ asset('storage/foto/'. $item->foto) }}" alt="" style="width: 50px" height="50px"></td>
                  <td>
                    <a href="user/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                    <a href="user/edit/{{ $item->id }}" class="btn btn-info">Edit</a>
                  </td>
               </tr>             
            @endforeach
        </table>
    </div>
@endsection