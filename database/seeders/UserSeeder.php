<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nick' => 'Pepe',
            'name' => 'Jairo',
            'surname' => 'Pelaez',
            'email' => 'hola@gmail.com',
            'password' => bcrypt('1234'),
            'image' => 'user',
            'birth_date' => 'user',
            'phone' => '+34987987987',
            '2SV' => false,
            'status' => true,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
    }
}
