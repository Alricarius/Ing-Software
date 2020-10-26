<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function getItemProd(Request $request)
    {
        $item = Producto::findOrFail($request['id']);
        return response()->json($item->load('uploadImagen'), 201);
    }

    private function getImg($fk)
    {

    }
}
