<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Administrador 1',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123'),
            'phone'=>'1231112222',
            'alias'=>'admin',
            'imagen'=>'default.jpg'
        ]);

        DB::table('users')->insert([
            'name'=>'Benito Pablo Juarez Garcia',
            'email'=>'beni07@gmail.com',
            'password'=>Hash::make('456'),
            'phone'=>'1231112223',
            'alias'=>'beni',
            'imagen'=>'default.jpg'
        ]);
    }
}
