<?php

namespace App\Http\Controllers;

use App\Angkatan;
use App\Berita;
use App\Gallery;
use App\Pesan;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $gallery = Gallery::orderBy('updated_at', 'desc')->paginate(6);
        return view('user.index',compact('gallery'));
    }

    public function gallery()
    {
        $gallery = Gallery::orderBy('updated_at', 'desc')->paginate(6);
        return view('user.galery',compact('gallery'));
    }

    public function berita()
    {
        $berita = Berita::all()->where('kategori',"Berita");
        $acara = Berita::all()->where('kategori',"Acara");
        return view('user.berita', compact('berita','acara'));
    }

    public function detailBerita($judul)
    {
        $data = Berita::where('judul',$judul)->first();
        $idUser = $data->id_user;
        $user = User::find($idUser);
        $berita = Berita::where('kategori',"Berita")->orderBy('updated_at', 'desc')->paginate(3);
        $acara = Berita::where('kategori',"Acara")->orderBy('updated_at', 'desc')->paginate(3);
        return view('user.detailBerita',compact('berita','acara','data','user'));
    }

    public function registerAngkatan(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|unique:angkatans,nim',
            'nomor' => 'numeric|required',
            'angkatan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $nama = ucwords(strtolower($request->nama));
        if ($files = $request->file('image')) {
            $destinationPath = public_path('images/angkatan/'.$request->angkatan.'/');
            $profileImage =  $nama.".".$files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";

            Angkatan::create([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'nomor' => $request->nomor,
                'angkatan' => $request->angkatan,
                'instagram' => $request->instagram,
                'motto' => $request->motto,
                'image' => "$profileImage",
                'status' => 0,
            ]);
            return back()->with(['success' => 'Selamat anda sudah terdaftar sebagai mahasiswa Sistem Informasi Aktif']);
        }
    }

    public function contact(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'pesan' => 'required|max:255',
        ]);

        $data = new Pesan();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->pesan = $request->pesan;
        $data->save();

        return back()->with(['success' => 'Pesan berhasil terkirim']);
    }
}
