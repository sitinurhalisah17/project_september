@extends('template')
@section('content')
     
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="margin-top: 30%">
                    <div class="card-header text-center" style="background-color: beige;">
                        Form Berita
                    </div>
                    <div class="card-body">
                        <form action="/berita/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" placeholder="Masukan Judul Berita" name="judul" value="{{old('judul')}}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="isiberita">Isi Berita</label>
                                <input type="text" class="form-control" id="isiberita" placeholder="Masukan Isi Berita" name="isi_berita" value="{{old('isi_berita')}}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="tanggalpublikasi">Tanggal</label>
                                <input type="date" class="form-control" id="tanggalpublikasi" placeholder="Masukan Tanggal" name="tanggal_publikasi" value="{{old('tanggal_berita')}}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="kategori">Kategori</label>
                                <select name="kategoris_id" id="kategori">
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group pt-2">
                                <label for="image">Foto</label>
                                <input type="file" class="form-control-file" name="foto" id="image">
                            </div>
                            <button type="submit" class="w-100 btn-block mt-5" style="background-color: beige">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection