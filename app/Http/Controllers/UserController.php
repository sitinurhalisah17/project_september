<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function login(){
        return view(view: 'login');
    }

    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (Auth::attempt($validasi)) {
            if (Auth::user()->levels_id == 1){
                return redirect('index');
            }else{
                return redirect('home');
            }
        }
        return redirect()->back()->with('pesan', 'mohon maaf login anda gagal');
    }

    public function show()
    {
        $data['user'] = User::orderby('name', 'asc')->get();
        $data['total_user'] = User::count();
        return view('user', $data);
    }

    public function search(Request $request)
    { 
        $data['user'] = User::where('name', $request->cari)->orwhere('email', $request->cari)->get();
        $data['total_user'] = $data['user']->count();
        return view('user', $data);
    }
    
    public function create(Request $request)
    {
        $data['level'] = Level::all();
        return view('user-create',$data);
    }

    public function add(Request $request)
    {
        $validatedata = $request->validate([
            'name' => ['required',],
            'email' => ['required', 'email'],
            'password' => ['required'],   
            'levels_id' => 'required',
            'foto' => 'image'
        ]);

        $fileName = '';

        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'levels_id' => $request->levels_id,
            'foto' => $fileName
        ]);

        // $user = User::create($validatedata);
        if ($user) {
            Session::flash('pesan', 'Data berhasil disimpan');
        }else{
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('user');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $delete = User::where('id', $request->id)->delete();
        if ($delete) {
            if ($user->foto){
                Storage::delete('foto/'.$user->foto);
            }
            Session::flash('pesan', 'Data berhasil dihapus');
        } else {
            Session::flash('pesan', 'Data gagal dihapus');
        }

        return redirect('user');

    }

    public function edit(Request $request)
    {
        $data['user'] = User::find($request->id);
        $data['level'] = Level::all();
        return view('user-edit', $data);
    }

    public function update(Request $request)
    {
        $update = User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'levels_id' => $request->levels_id
        ]);

        if ($update) {
            Session::flash('pesan', 'Data berhasil diubah');
        }else{
            Session::flash('pesan', 'Data gagal diubah');
        }
        return redirect('user');
    }

    // public function home(){
    //     $data['berita'] = Berita::all();
    //     return view('/home', $data);
    // }

    // public function isiberita($id){
    //     $data['berita'] = Berita::where('id', $id)->first(); 
    //     return view('isiberita', $data);
    // }
    
    // public function hometerkini($id){
    //     $data['berita'] = Berita::where('id', $id)->first(); 
    //     return view('hometerkini', $data);
    // }
    // public function hometerkini1(){
    //     return view('hometerkini1');
    // }
    // public function hometerkini2(){
    //     return view('hometerkini2');
    // }
    // public function hometerkini3(){
    //     return view('hometerkini3');
    // }

    // public function terpopuler(){
    //     return view('terpopuler');
    // }
    // public function terpopuler1(){
    //     return view('terpopuler1');
    // }
    // public function terpopuler2(){
    //     return view('terpopuler2');
    // }
    // public function terpopuler3(){
    //     return view('terpopuler3');
    // }
    // public function terpopuler4(){
    //     return view('terpopuler4');
    // }

    // public function topnews(){
    //     return view('topnews');
    // }
    // public function topnews1(){
    //     return view('topnews1');
    // }
    // public function topnews2(){
    //     return view('topnews2');
    // }
    // public function topnews3(){
    //     return view('topnews3');
    // }
    // public function topnews4(){
    //     return view('topnews4');
    // }

    // public function hukum(){
    //     return view('hukum');
    // }
    // public function hukum1(){
    //     return view('hukum1');
    // }
    // public function hukum2(){
    //     return view('hukum2');
    // }
    // public function hukum3(){
    //     return view('hukum3');
    // }

    // public function ekonomi(){
    //     return view('ekonomi');
    // }
    // public function ekonomi1(){
    // return view('ekonomi1');
    // }

    // public function ekonomi2(){
    //     return view('ekonomi2');
    // }
    // public function ekonomi3(){
    //     return view('ekonomi3');
    // }

    // public function politik(){
    //     return view('politik');
    // }
    // public function politik1(){
    //     return view('politik1');
    // }
    
    function dashboard(){
        return view('template/dashboard');
    }

    function logout() {
        Auth::logout();
        return redirect('/');
    }
}
