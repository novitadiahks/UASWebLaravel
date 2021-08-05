<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contentController extends Controller
{
    public function profile(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('profile');
        }
    }
    public function berita(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('berita');
        }
    }

    public function alumni(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('alumni');
        }
    }

    public function guru()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('guru');
        }
    }

    public function ppdb()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('ppdb');
        }
    }
    public function ppdbStore(Request $request)
    {
        DB::table('ppdb')->insert(['nama' => $request->nama,
        'email' => $request->email,
        'tempatLahir' => $request->ttl1,
        'tanggalLahir' => $request->ttl2,
        'alamat' => $request->alamat,
        'asal' => $request->asalSekolah,
        'nisn' => $request->nisn
        ]);
        return redirect ('/ppdb')->with('status', 'Pendaftaran Berhasil!');
    }

    public function kontak()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('kontak');
        }
    }

    public function gallery()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('gallery');
        }
    }

    public function kesiswaan()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('kesiswaan.kesiswaan');
        }
    }

    public function beladiri()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('kesiswaan.beladiri.beladiri');
        }
    }

    public function kti()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('kesiswaan.kti.kti');
        }
    }
    public function musik()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('kesiswaan.musik.musik');
        }
    }    
    public function osis()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('kesiswaan.osis.osis');
        }
    }
    public function pmr()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('kesiswaan.pmr.pmr');
        }
    }
    public function pramuka()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('kesiswaan.pramuka.pramuka');
        }
    }
}
