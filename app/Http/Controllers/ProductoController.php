<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\imagen;
use Illuminate\Support\Facades\DB;
use App\Models\ViewProduct;
class ProductoController extends Controller
{
    public function getItemProd($id)
    {
        $item = Producto::findOrFail($id);
        return response()->json($item->load('uploadImagen'), 201);
    }

    public function getProductsView()
    {
        $data = ViewProduct::all();

        return response()->json($data, 200);
    }

    public function insertProduct(Request $request)
    {
        $producto = new Producto();
        $producto->nom_prod = $request->nom;
        $producto->desc_prod = $request->desc;
        $producto->carac_prod = $request->carac;
        $producto->tipo_prod = $request->tipo;
        $producto->precio_prod = $request->precio;
        $producto->cant_prod = (isset($request->cant)) ? $request->cant:0;
        $producto->save();

        $nombre = null;
        if(isset($request->img))
        {
            $img = $request->file('img');
            $nombre = time()."_".$img->getClientOriginalName();
            $img->move('images', $nombre);
        }


        $id = Producto::orderby('id_prod', 'desc')->first();
        $imagen = new imagen();
        $imagen->img = $nombre;
        $imagen->fk_prod = $id->id_prod;
        $imagen->save();

        return redirect('/', 201);
    }

    public function getProductView($id)
    {
        return 'producto '.$id;//view('producto', compact('id'));
    }

    public function getProductRegistryView()
    {
        return view('registro_producto');
    }
}
