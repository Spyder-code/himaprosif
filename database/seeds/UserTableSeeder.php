<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"almi",
            'nama_lengkap'=>"Muhammad Aziz Almi",
            'divisi'=>"Web Developer",
            'email'=>"almi@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>1,
            'image' =>"default.jpg",
        ]);
        User::create([
            'name'=>"aji",
            'nama_lengkap'=>"Bramasta Kurnia Aji",
            'divisi'=>"Ketua Departemen",
            'email'=>"aji@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>1,
            'image' =>"default.jpg",
        ]);
        User::create([
            'name'=>"nadifah",
            'nama_lengkap'=>"Niswatin Nadifah Maghfiroh",
            'divisi'=>"Sekretaris",
            'email'=>"nadifah@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>2,
            'image' =>"default.jpg",
        ]);
        User::create([
            'name'=>"silvi",
            'nama_lengkap'=>"Silvia Nandasari",
            'divisi'=>"Editor",
            'email'=>"silvia@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>3,
            'image' =>"default.jpg",
        ]);
        User::create([
            'name'=>"dea",
            'nama_lengkap'=>"Dea Nur Zuraidah",
            'divisi'=>"Sosmed Publication",
            'email'=>"dea@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>3,
            'image' =>"default.jpg",
        ]);
        User::create([
            'name'=>"ilham",
            'nama_lengkap'=>"Ilham Akhyar Firdaus",
            'divisi'=>"Documentation",
            'email'=>"ilham@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>3,
            'image' =>"default.jpg",
        ]);
        User::create([
            'name'=>"kevin",
            'nama_lengkap'=>"Kevin Prianka Ramadhani",
            'divisi'=>"Editor",
            'email'=>"kevin@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>3,
            'image' =>"default.jpg",
        ]);
        User::create([
            'name'=>"dzakiya",
            'nama_lengkap'=>"Dzakiya Ismatul Ulya",
            'divisi'=>"Editor",
            'email'=>"dzakiya@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>3,
            'image' =>"default.jpg",
        ]);
        User::create([
            'name'=>"salsabila",
            'nama_lengkap'=>"Amalia Salsabila Ariyanto",
            'divisi'=>"Sosmed Publication",
            'email'=>"salsa@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>3,
            'image' =>"default.jpg",
        ]);
        User::create([
            'name'=>"putra",
            'nama_lengkap'=>"Putra Umamul Musthofa",
            'divisi'=>"Documentation",
            'email'=>"putra@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>3,
            'image' =>"default.jpg",
        ]);
    }
}
