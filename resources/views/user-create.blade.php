@extends('template')
@section('content')

<div class="container pt-5">
    
    <h3 style="margin-top: 8%;">Input Data Pengguna</h3>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    @endif
    <form action="/user/create" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" class="@error('name') error @enderror" id="" value="{{ old('name') }}"></td>
                <td>
                    @error('name')
                        {{ $message }}
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="" value="{{ old('email') }}"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="levels_id" id="">
                        @foreach ($level as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_level }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    @error('level')
                        {{ $message }}
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
                <td>
                    @error('password')
                        {{ $message }}
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto" id=""></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection