<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            'id_prod' => 300,
            'nom_prod' => 'laptop',
            'desc_prod' => 'laptop tantos tantos etc etc',
            'carac_prod' => 'ram no se q weas mas',
            'precio_prod' => 1000,
            'tipo_prod' => 'laptop',
            'cant_prod' => 4,
            'fecha_prod' => now(),
        ]);
    }
}
