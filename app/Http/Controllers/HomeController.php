<?php

namespace App\Http\Controllers;

use App\Activity;
use App\angkatan;
use App\Berita;
use App\Gallery;
use App\Pesan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

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
        return view('admin.index');
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

    public function profile()
    {
        $id = Auth::user()->id;
        $user = User::all()->where('id',$id);
        return view('admin.profile',compact('user'));
    }

    public function gallery()
    {
        $data = Gallery::all();
        return view('admin.gallery',compact('data'));
    }

    public function beritaAcara()
    {
        $data = Berita::all();
        return view('admin.berita-acara', compact('data'));
    }

    public function detailBerita($id)
    {
        $data = Berita::find($id);
        return view('admin.detailBerita',compact('data'));
    }

    public function pesan()
    {
        $data = Pesan::all();
        return view('admin.pesan',compact('data'));
    }

    public function user()
    {
        $data = User::all();
        return view('admin.user',compact('data'));
    }

    public function detailUser($name)
    {
        $data = DB::table('activity')
                ->join('users','users.id','activity.id_user')
                ->select('activity.*')
                ->where('users.name',$name)
                ->get();
        $user = User::where('name',$name)->first();
        return view('admin.detailUser',compact('data','user'));
    }

    public function history()
    {
        $id = Auth::user()->id;
        $data = Activity::where('id_user',$id)->orderBy('updated_at', 'desc')->paginate(5);
        return view('admin.history',compact('data'));
    }

    // Create Function

    public function createBerita(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($files = $request->file('image')) {
            $profileImage = $files->getClientOriginalName();
            $files->move('images/berita/', $profileImage);
            $insert['image'] = "$profileImage";
            $data = new Berita;
            $data->judul = $request->judul;
            $data->kategori = $request->kategori;
            $data->isi = $request->isi;
            $data->image = "$profileImage";
            $data->id_user = $id;
            $data->save();

            Activity::create([
                'id_user' => $id,
                'subjek' => "Berita & Acara",
                'pesan' => "Create Berita ".$request->judul,
                'icon' => "mdi-book-open-page-variant",
                'status' => 0
            ]);
            return back()->with('success','Data berhasil disimpan');
        }else{
            return back()->with('danger','Gambar tidak sesuai!');
        }
    }

    public function createGallery(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'judul' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($files = $request->file('image')) {
            $profileImage = $files->getClientOriginalName();
            $files->move('images/gallery/', $profileImage);
            $insert['image'] = "$profileImage";
            $data = new Gallery;
            $data->judul = $request->judul;
            $data->image = "$profileImage";
            $data->id_user = $id;
            $data->save();
            Activity::create([
                'id_user' => $id,
                'subjek' => "Gallery",
                'pesan' => "Create Gallery ".$request->judul,
                'icon' => "mdi-folder-multiple-image",
                'status' => 0
            ]);
            return back()->with('success','Gallery berhasil ditambahkan');
        }else{
            return back()->with('danger','Gambar tidak sesuai!');
        }
    }

    // Update Function

    public function updateProfilImage(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->oldImage!="default.jpg"){
            if (file_exists(public_path('images/user/',$request->oldImage))) {
                File::delete(public_path('images/user/'.$request->oldImage));
                    if ($files = $request->file('image')) {
                        $profileImage = $files->getClientOriginalName();
                        $files->move('images/user/', $profileImage);
                        $insert['image'] = "$profileImage";
                        User::where('id',$request->id)
                            ->update([
                            'image' =>  "$profileImage"
                    ]);
                    }
            }
        }else{
            if ($files = $request->file('image')) {
                $profileImage = $files->getClientOriginalName();
                $files->move('images/user/', $profileImage);
                $insert['image'] = "$profileImage";
                User::where('id',$request->id)
                    ->update([
                    'image' =>  "$profileImage"
            ]);
            }
        }
        Activity::create([
            'id_user' => $id,
            'subjek' => "Profile",
            'pesan' => "Update Profile Image ",
            'icon' => "mdi-account-box",
            'status' => 0
        ]);
        return back()->with('success','Foto profil berhasil di ubah!');
    }

    public function updateGallery(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required'
        ]);

        if($request->image==null){
            Gallery::where('id',$request->id)
                ->update([
                'judul' =>  $request->judul,
                ]);
        }else{
            if (file_exists(public_path('images/gallery/',$request->oldImage))) {
                File::delete(public_path('images/gallery/'.$request->oldImage));
                    if ($files = $request->file('image')) {
                        $profileImage = $files->getClientOriginalName();
                        $files->move('images/gallery/', $profileImage);
                        $insert['image'] = "$profileImage";
                        Gallery::where('id',$request->id)
                            ->update([
                            'image' =>  "$profileImage",
                            'judul' =>  $request->judul,
                    ]);
                    }
            }
        }
        Activity::create([
            'id_user' => $id,
            'subjek' => "Gallery",
            'pesan' => "Update Gallery ".$request->judul,
            'icon' => "mdi-folder-multiple-image",
            'status' => 0
        ]);
        return back()->with('success','Gallery berhasil di ubah!');
    }

    public function updateBerita(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required',
            'isi' => 'required',
        ]);
        if($request->image==null){
            Berita::where('id',$request->id)
                ->update([
                'judul' =>  $request->judul,
                'kategori' =>  $request->kategori,
                'isi' =>  $request->isi,
                ]);
        }else{
            if (file_exists(public_path('images/berita/',$request->oldImage))) {
                File::delete(public_path('images/berita/'.$request->oldImage));
                    if ($files = $request->file('image')) {
                        $profileImage = $files->getClientOriginalName();
                        $files->move('images/berita/', $profileImage);
                        $insert['image'] = "$profileImage";
                        Berita::where('id',$request->id)
                            ->update([
                            'image' =>  "$profileImage",
                            'judul' =>  $request->judul,
                            'kategori' =>  $request->kategori,
                            'isi' =>  $request->isi,
                    ]);
                    }
            }
        }
        Activity::create([
            'id_user' => $id,
            'subjek' => "Berita & Acara",
            'pesan' => "Update Berita & Acara ".$request->judul,
            'icon' => "mdi-book-open-page-variant",
            'status' => 0
        ]);
        return back()->with('success','Data berhasil di ubah!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'oldPassword'  => 'required',
            'newPassword'  => 'required'
        ]);
        $password = Auth::user()->password;
        if(Hash::check($request->oldPassword, $password)){
            User::where('id',$request->id)
            ->update([
            'password' => Hash::make($request->newPassword)
            ]);
            Activity::create([
                'id_user' => $request->id,
                'subjek' => "Profile",
                'pesan' => "Update Profile Password ",
                'icon' => "mdi-account-box",
                'status' => 0
            ]);
            return back()->with('success','Password berhasil di ubah!');
        } else {
            return back()->with('danger','Password gagal di ubah!');
        }
    }

    public function updateUsername(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,name'
        ]);
        User::where('id',$request->id)
            ->update([
            'name' =>$request->username
            ]);
            Activity::create([
                'id_user' => $request->id,
                'subjek' => "Profile",
                'pesan' => "Update Profile Username ",
                'icon' => "mdi-account-box",
                'status' => 0
            ]);
        return back()->with('success','Username berhasil di ubah!');
    }

    // Delete Function

    public function deleteBerita(Request $request)
    {
        $idUser = Auth::user()->id;
        $id = $request->id;
        Berita::where('id',$id)->delete();
        Activity::create([
            'id_user' => $idUser,
            'subjek' => "Berita & Acara",
            'pesan' => "Delete Berita & Acara ".$request->judul,
            'icon' => "mdi-book-open-page-variant",
            'status' => 0
        ]);
        return back()->with('success','Data Berhasil dihapus!');
    }

    public function deleteGallery(Request $request)
    {
        $idUser = Auth::user()->id;
        $id = $request->id;
        Gallery::where('id',$id)->delete();
        Activity::create([
            'id_user' => $idUser,
            'subjek' => "Gallery",
            'pesan' => "Delete Gallery ".$request->judul,
            'icon' => "mdi-folder-multiple-image",
            'status' => 0
        ]);
        return back()->with('success','Data Berhasil dihapus!');
    }

    public function deletePesan(Request $request)
    {
        $idUser = Auth::user()->id;
        $id = $request->id;
        Pesan::where('id',$id)->delete();
        Activity::create([
            'id_user' => $idUser,
            'subjek' => "Kotak Masuk",
            'pesan' => "Delete Kotak Masuk ".$request->judul,
            'icon' => "mdi mdi-comment-account",
            'status' => 0
        ]);
        return back()->with('success','Data Berhasil dihapus!');
    }
}
