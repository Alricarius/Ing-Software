<?php

namespace Tests\Feature;

use Carbon\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\producto;
use Faker\Factory as FakerFactory;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    public function testGetProduct()
    {
        $producto = Producto::factory()->create();
        $response = $this->json('GET', '/api/producto');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'id_prod', 'nom_prod', 'desc_prod', 'carac_prod', 'precio_prod', 'fecha_prod', 'tipo_prod', 'cant_prod'
        ]);
    }
}
