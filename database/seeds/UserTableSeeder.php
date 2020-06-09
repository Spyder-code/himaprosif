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
            'email'=>"almi@yahoo.com",
            'password' => Hash::make("admin123"),
            'level' =>1,
            'image' =>"default.jpg",
        ]);
    }
}
