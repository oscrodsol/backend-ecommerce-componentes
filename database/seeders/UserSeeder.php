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
            'nick' => 'sudo',
            'name' => 'Pepe',
            'surname' => 'Pelaez',
            'email' => 'sudo@gmail.com',
            'password' => bcrypt('1234'),
            'image' => 'https://t4.ftcdn.net/jpg/04/10/43/77/360_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg',
            'birth_date' => "1979-01-01",
            'phone' => '+34987987987',
            'status' => true,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 21,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'nick' => 'admin',
            'name' => 'Marta',
            'surname' => 'Garcia',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'image' => 'https://t4.ftcdn.net/jpg/04/10/43/77/360_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg',
            'birth_date' => "1989-01-01",
            'phone' => '+34987987987',
            'status' => true,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 11,
            'role_id' => 11,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'nick' => 'elusuario',
            'name' => 'Carlos',
            'surname' => 'Gonzalez',
            'email' => 'user@gmail.com',
            'password' => bcrypt('1234'),
            'image' => 'https://t4.ftcdn.net/jpg/04/10/43/77/360_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg',
            'birth_date' => "1999-01-01",
            'phone' => '+34987987987',
            'status' => true,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 21,
            'role_id' => 1,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

    }
}
