<?php

namespace App\Http\Controllers;

use App\angkatan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $nama = Auth::user()->name;
        $user = User::all()->where('id',$id);
        return view('admin.index', compact('user','nama'));
    }

    public function registerAngkatan()
    {
        $a = angkatan::all()->where('angkatan',2016)->count();
        $b = angkatan::all()->where('angkatan',2017)->count();
        $c = angkatan::all()->where('angkatan',2018)->count();
        $d = angkatan::all()->where('angkatan',2019)->count();
        $e = angkatan::all()->where('angkatan',2020)->count();
        $jumlah16 = $a/78*100;
        $jumlah17 = $b/82*100;
        $jumlah18 = $c/68*100;
        $jumlah19 = $d/60*100;
        $jumlah20 = $e/100*100;
        return view('admin.registrasi.angkatan', compact(
            'jumlah16',
            'jumlah17',
            'jumlah18',
            'jumlah19',
            'jumlah20',
            'a',
            'b',
            'c',
            'd',
            'e',
        ));
    }
}
