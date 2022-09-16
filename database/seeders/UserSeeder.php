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
            'email' => 'hola@gmail.com',
            'password' => bcrypt('1234'),
            'image' => 'user',
            'birth_date' => "1979-01-01",
            'phone' => '+34987987987',
            'status' => true,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 3,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'nick' => 'admin',
            'name' => 'Marta',
            'surname' => 'Garcia',
            'email' => 'adios@gmail.com',
            'password' => bcrypt('1234'),
            'image' => 'user',
            'birth_date' => "1989-01-01",
            'phone' => '+34987987987',
            'status' => true,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 2,
            'role_id' => 2,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'nick' => 'elusuario',
            'name' => 'Carlos',
            'surname' => 'Gonzalez',
            'email' => 'jeje@gmail.com',
            'password' => bcrypt('1234'),
            'image' => 'user',
            'birth_date' => "1999-01-01",
            'phone' => '+34987987987',
            'status' => true,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 3,
            'role_id' => 1,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

    }
}
