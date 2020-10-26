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
    public function testGetItem()
    {
        $id = 345;
        //creo el producto con un id determinado
        $producto = Producto::factory()->create([
            'id_prod' => $id,
            'nom_prod' => 'nombre 1',
            'desc_prod' => 'descripcion 1',
            'carac_prod'=> 'caracteristicas 1',
            'precio_prod' => 19993,
            'tipo_prod' => 'laptop',
            'fecha_prod' => Now(),
            'cant_prod' => 10,
        ]);

        //creo la peticion http por el metodo post que a diferencia del get, requeire un mensaje que le envia el cliente
        $response = $this->json('POST', 'api/producto', ['id' => $id]);

        //verificamos que existe algun elemento en la base de datos
        $this->assertDatabaseHas('producto', [
            'id_prod' => $producto->id_prod,
            'nom_prod' => $producto->nom_prod,
            'desc_prod' => $producto->desc_prod,
            'carac_prod'=> $producto->carac_prod,
            'precio_prod' => $producto->precio_prod,
            'tipo_prod' => $producto->tipo_prod,
            'fecha_prod' => $producto->fecha_prod,
            'cant_prod' => $producto->cant_prod,
        ]);

        //verificamos que la estructura del json que me devuelve contiene todos estos datos
        $response->assertJsonStructure([
            'id_prod','nom_prod','desc_prod','carac_prod','precio_prod','tipo_prod','fecha_prod','cant_prod'
        ]);

        //verificamos que nos devuelve un estado de 201
        $response->assertStatus(201);
        $response->assertJsonCount(8);
        $this->assertEquals($response['id_prod'], $id);

        
    }
}
