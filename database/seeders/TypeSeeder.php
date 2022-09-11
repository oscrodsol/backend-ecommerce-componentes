<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'CPU',
            'description' => 'Unidad de procesamiento central etc',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('types')->insert([
            'name' => 'GPU',
            'description' => 'Unidad de procesamiento grafico',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('types')->insert([
            'name' => 'Motherboard',
            'description' => 'Placa base central',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('types')->insert([
            'name' => 'RAM',
            'description' => 'Memoria principal del PC',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('types')->insert([
            'name' => 'Storage',
            'description' => 'Almacenamiento permanente PC',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('types')->insert([
            'name' => 'PSU',
            'description' => 'Fuente de alimentacion',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
    }
}
