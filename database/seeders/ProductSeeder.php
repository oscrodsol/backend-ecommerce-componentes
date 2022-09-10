<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /////////////////////////   CPU   ///////////////////////

        DB::table('products')->insert([
            'name' => 'Ryzen 5 5600X',
            'price' => 229.98,
            'description' => 'Juega con lo mejor. Seis núcleos increíbles para quienes simplemente desean jugar.',
            'image' => '',
            'type_id' => 1,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Intel Core i5-12400F',
            'price' => 211.99,
            'description' => 'Con una nueva arquitectura híbrida de rendimiento sin precedentes',
            'image' => '',
            'type_id' => 1,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Intel Core i7-12700K',
            'price' => 489.00,
            'description' => 'Procesador de escritorio desbloqueado Intel® Core ™ i7-12700K de 12.ª generación.',
            'image' => '',
            'type_id' => 1,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Ryzen 9 5900X',
            'price' => 439.29,
            'description' => '12 núcleos para potenciar la experiencia de juego, la transmisión en vivo y mucho más',
            'image' => '',
            'type_id' => 1,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        /////////////////////////   GPU   ///////////////////////

        DB::table('products')->insert([
            'name' => 'GeForce GTX 1660 SUPER',
            'price' => 259.90,
            'description' => 'El mejor rendimiento de su clase con las capacidades gráficas avanzadas de la galardonada arquitectura NVIDIA Turing',
            'image' => '',
            'type_id' => 2,
            'specifications' => 'GPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Radeon RX 6600',
            'price' => 299.90,
            'description' => 'Junto con la nueva serie AMD Radeon RX 6000 de GPU RDNA2, esta podría decirse que es la mejor serie XFX de la historia',
            'image' => '',
            'type_id' => 2,
            'specifications' => 'GPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'GeForce RTX 3060',
            'price' => 439.90,
            'description' => 'Disfruta de los mayores éxitos de ventas de hoy como nunca antes con la fidelidad visual del trazado de rayos en tiempo real',
            'image' => '',
            'type_id' => 2,
            'specifications' => 'GPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Radeon RX 6700',
            'price' => 399.89,
            'description' => 'La tarjeta gráfica Sapphire Radeon RX 6700 de 10 GB es una tarjeta gráfica para juegos que cuenta con la arquitectura RDNA 2',
            'image' => '',
            'type_id' => 2,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        /////////////////////////   MOTHERBOARD   ///////////////////////

        DB::table('products')->insert([
            'name' => 'Gigabyte B560M DS3H V2',
            'price' => 86.99,
            'description' => 'Placa base Intel® B560 ultra duradera con VRM digital directo de 6 + 2 fases',
            'image' => '',
            'type_id' => 3,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'MSI MAG z490 TOMAHAWK',
            'price' => 151.00,
            'description' => 'Las placas base MSI Z490 son compatibles con la interfaz PCI-Express 4.0',
            'image' => '',
            'type_id' => 3,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Asus TUF GAMING B450-PLUS II',
            'price' => 146.05,
            'description' => 'TUF Gaming B450-PLUS II destila elementos esenciales de la última plataforma AMD',
            'image' => '',
            'type_id' => 3,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        /////////////////////////   RAM   ///////////////////////

        DB::table('products')->insert([
            'name' => 'Kingston FURY beast',
            'price' => 31.99,
            'description' => 'La memoria para PC FURY Beast DDR4 de Kingston ofrece un potente aumento de rendimiento',
            'image' => '',
            'type_id' => 4,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Corsair Vengeance',
            'price' => 77.06,
            'description' => 'La memoria Corsair Vengeance LPX se ha diseñado para overclocking de alto rendimiento',
            'image' => '',
            'type_id' => 4,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Netac Shadow',
            'price' => 63.95,
            'description' => 'Los productos de memoria Netac Shadow han pasado la prueba de compatibilidad',
            'image' => '',
            'type_id' => 4,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        /////////////////////////   STORAGE   ///////////////////////

        DB::table('products')->insert([
            'name' => 'WD Blue SN570',
            'price' => 93.99,
            'description' => 'Esta potente unidad interna ofrece hasta 5 veces la velocidad de nuestras mejores SSD',
            'image' => '',
            'type_id' => 5,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung 980',
            'price' => 113.99,
            'description' => 'La unidad Samsung 980 hereda el legado de la innovadora tecnología SSD',
            'image' => '',
            'type_id' => 5,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Seagate BarraCuda',
            'price' => 53.99,
            'description' => 'Impresionante versatilidad. Fiabilidad inigualable.',
            'image' => '',
            'type_id' => 5,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        /////////////////////////   PSU   ///////////////////////

        DB::table('products')->insert([
            'name' => 'Nox Urano VX 650',
            'price' => 40.44,
            'description' => 'Nuestras exitosas fuentes Urano evolucionan por dentro y por fuera.',
            'image' => '',
            'type_id' => 6,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Corsair RM750',
            'price' => 111.99,
            'description' => 'Las fuentes de alimentación completamente modulares y de nivel sonoro ultrarreducido',
            'image' => '',
            'type_id' => 6,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Thermaltake Smart RGB 700',
            'price' => 56.99,
            'description' => 'El pionero que construyó las luces RGB en las fuentes de alimentación',
            'image' => '',
            'type_id' => 6,
            'specifications' => 'CPU',
            'stock' => 15,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
    }
}
