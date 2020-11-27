<?php

namespace Tests\Feature;

use Carbon\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\producto;
use App\Models\imagen;
use Faker\Factory as FakerFactory;
use Tests\TestCase;
use Database\Factories\ProductoFactory;


class ProductTest extends TestCase
{
    use RefreshDatabase;
    public function testGetItem()
    {
        $id = 345;
        //creo el producto con un id determinado

        $producto = Producto::factory()->create([
            'id_prod' => $id,
        ]);

        $imagen = imagen::factory(4)->create([
            'fk_prod' => $id,
        ]);

        //creo la peticion http por el metodo post que a diferencia del get, requeire un mensaje que le envia el cliente
        $response = $this->json('GET', "api/producto/$id");

        //verificamos que la estructura del json que me devuelve contiene todos estos datos
        $response->assertJsonStructure([
            'id_prod','nom_prod','desc_prod','carac_prod','precio_prod','tipo_prod','fecha_prod','cant_prod', 'upload_imagen' => [
                '*'=>[
                    'id_img', 'img', 'fk_prod'
                    ]
                ] 
        ]);

        //verificamos que nos devuelve un estado de 201
        $response->assertStatus(201);
        //verifica si el producto tiene 3 imagenes asociadas, lo cual es verdaderi
        $this->assertCount(4, $response->json()['upload_imagen']);

        //verifica si devolvío el producto cuyo id es el mismo que se envío por post
        $this->assertEquals($response['id_prod'], $id);   
    }

    public function test_get_products_view()
    {
        $productos = Producto::factory(25)->create();

        $request = $this->json('GET', 'api/productos');
        $request->assertStatus(200);
        $this->assertCount(20, $request->json());
        $request->assertJsonStructure(['*' =>
            ['id_prod', 'img', 'nom_prod', 'precio_prod']
        ]);
    }

    public function test_insert_new_product()
    {
        $name = 'nuevo producto';
        $producto = [
            'nom' => $name,
            'desc' => 'descripcion 1',
            'carac' => 'caracteristicas',
            'precio' => 999,
            'tipo' => 'algun tipo',
            'cant' => 10,
            'img' => null,
        ];



        $request = $this->json('POST' , 'api/producto', $producto);
        $request->assertStatus(201);
        $this->assertDatabaseHas('producto',[
            'nom_prod' => $name,
            'desc_prod' => $producto['desc'],
            'carac_prod' => $producto['carac'],
            'precio_prod' => $producto['precio'],
            'tipo_prod' => $producto['tipo'],
            'cant_prod' => $producto['cant'],
        ]);

        $this->assertDatabaseHas('imagen',[
            'img' => null,
        ]);
    }

    public function testProductoRepetido()
    {
        $nombre = 'nombre';
        $request = $this->json('GET', "api/verificar/$nombre");
        $request->assertStatus(200);
        $request->assertJsonStructure(['estado']);
        $this->assertFalse($request->json()['estado']);
        $data = [
            'nom' => 'nombre',
            'desc' => 'descripcion 1',
            'carac' => 'caracteristicas',
            'precio' => 999,
            'tipo' => 'algun tipo',
            'cant' => 10,
            'img' => null,
        ];
        $this->json('POST', 'api/producto', $data);
        $request = $this->json('GET', "api/verificar/$nombre");
        $this->assertTrue($request->json()['estado']);
        $data2 = [
            'nom' => 'palabra',
            'desc' => 'descripcion 1',
            'carac' => 'caracteristicas',
            'precio' => 999,
            'tipo' => 'algun tipo',
            'cant' => 10,
            'img' => null,
        ];
        $nombre2 = 'palabra';

        $request = $this->json('GET', "api/verificar/$nombre2");
        $this->assertFalse($request->json()['estado']);

        $this->json('POST', 'api/producto', $data2);
        $request = $this->json('GET', "api/verificar/$nombre2");
        $this->assertTrue($request->json()['estado']);
    }
}
