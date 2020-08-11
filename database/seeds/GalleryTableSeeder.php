<?php

use App\Gallery;
use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'judul' => 'Anggota Himaprosif',
            'image' => '1.jpg',
            'id_user' => 1,
        ]);
        Gallery::create([
            'judul' => 'Rapat Kerka Himaprosif',
            'image' => '3.jpg',
            'id_user' => 1,
        ]);
        Gallery::create([
            'judul' => 'Tim Futsal Sistem Informasi',
            'image' => '2.jpg',
            'id_user' => 1,
        ]);
        Gallery::create([
            'judul' => 'Pelepasan Wisuda',
            'image' => '4.jpg',
            'id_user' => 1,
        ]);
        Gallery::create([
            'judul' => 'Anggota Hiking',
            'image' => '5.jpg',
            'id_user' => 1,
        ]);
        Gallery::create([
            'judul' => 'Study Banding',
            'image' => '6.jpeg',
            'id_user' => 1,
        ]);
    }
}
