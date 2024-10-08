<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    //
    public function show(){
        $data['berita'] = Berita::all();
        $data['total'] = Berita::count();
        return view('index', $data);
    }

    public function search(Request $request){
        $data['berita'] = Berita::where('judul',$request->cari)->orWhere('kategoris_id',$request->cari)->get();
        $data['total'] = $data['berita']->count();
        return view('index',$data);
    }

    public function searchberita(Request $request){
        $data['berita'] = Berita::where('judul',$request->cari)->orWhere('kategoris_id',$request->cari)->get();
        $data['total'] = $data['berita']->count();
        return view('home',$data);
    }

    public function create(){
        $data['kategori'] = Kategori::all();
        return view('berita-create', $data);
    }

    public function add(Request $request){
        $validatedata = $request->validate([
            'judul' => 'required',
            'isi_berita' => 'required',
            'tanggal_publikasi' => 'required',
            'kategoris_id' => 'required',
            'foto' => 'image'
        ]);

        $fileName = '';
        if ($request-> file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $berita = Berita::create([
            'judul' => $request->judul,
            'isi_berita' => $request->isi_berita,
            'tanggal_publikasi' => $request->tanggal_publikasi,
            'kategoris_id' => $request->kategoris_id,
            'foto' => $fileName

        ]);

        if ($berita) {
            Session::flash('pesan', 'Data berhasil ditambahkan');
        }else{
            Session::flash('pesan', 'Data gagal ditambahkan');
        }

        return redirect('index');
    }

    public function delete(Request $request)
    {
        $berita = Berita::find($request->id);
        $delete = Berita::where('id', $request->id)->delete();
        if ($delete) {
            if ($berita->foto){
                Storage::delete('foto/'.$berita->foto);
            }
            Session::flash('pesan', 'Data berhasil dihapus');
        } else {
            Session::flash('pesan', 'Data gagal dihapus');
        }

        return redirect('index');
    }

    public function edit(Request $request){
        $data['kategori'] = Kategori::all();
        $data['berita'] = Berita::find($request->id);
        return view('berita-edit', $data);
    }

    public function update(Request $request){
        $fileName = '';
        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $update = Berita::where('id', $request->id)->update([
            'judul' => $request->judul,
            'isi_berita' => $request->isi_berita,
            'tanggal_publikasi' => $request->tanggal_publikasi,
            'kategoris_id' => $request->kategoris_id,
            'foto' => $fileName

        ]);

        if($update) {
            Session::flash('pesan', 'Data berhasil diubah');
        }else{
            Session::flash('pesan', 'Data gagal diubah');
        }

        return redirect('index');
    }

    public function home(){
        $data['berita'] = Berita::all();
        return view('/home', $data);
    }

    public function isiberita($id){
        $data['berita'] = Berita::where('id', $id)->first(); 
        return view('isiberita', $data);
    }
    
    public function hometerkini($id){
        $data['berita'] = Berita::where('id', $id)->first(); 
        return view('hometerkini', $data);
    }
    public function hometerkini1(){
        return view('hometerkini1');
    }
    public function hometerkini2(){
        return view('hometerkini2');
    }
    public function hometerkini3(){
        return view('hometerkini3');
    }

    public function terpopuler(){
        return view('terpopuler');
    }
    public function terpopuler1(){
        return view('terpopuler1');
    }
    public function terpopuler2(){
        return view('terpopuler2');
    }
    public function terpopuler3(){
        return view('terpopuler3');
    }
    public function terpopuler4(){
        return view('terpopuler4');
    }

    public function topnews(){
        return view('topnews');
    }
    public function topnews1(){
        return view('topnews1');
    }
    public function topnews2(){
        return view('topnews2');
    }
    public function topnews3(){
        return view('topnews3');
    }
    public function topnews4(){
        return view('topnews4');
    }

    public function hukum(){
        return view('hukum');
    }
    public function hukum1(){
        return view('hukum1');
    }
    public function hukum2(){
        return view('hukum2');
    }
    public function hukum3(){
        return view('hukum3');
    }

    public function ekonomi(){
        return view('ekonomi');
    }
    public function ekonomi1(){
    return view('ekonomi1');
    }

    public function ekonomi2(){
        return view('ekonomi2');
    }
    public function ekonomi3(){
        return view('ekonomi3');
    }

    public function politik(){
        return view('politik');
    }
    public function politik1(){
        return view('politik1');
    }

    public function showdb(){
        return view('admin.dashboard');
    }
}
