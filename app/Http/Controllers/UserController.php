<?php

namespace App\Http\Controllers;

use App\angkatan;
use App\Pesan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerAngkatan(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required',
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

            $data = new angkatan();
            $data->image = "$profileImage";
            $data->nim = $request->nim;
            $data->nama = $nama;
            $data->angkatan = $request->angkatan;
            $data->motto = $request->motto;
            $data->nomor = $request->nomor;
            $data->instagram = $request->instagram;

            $data->save();

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
