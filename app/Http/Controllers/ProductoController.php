<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use App\Models\ViewProduct;
class ProductoController extends Controller
{
    public function getItemProd(Request $request)
    {
        $item = Producto::findOrFail($request['id']);
        return response()->json($item->load('uploadImagen'), 201);
    }

    public function getProductsView()
    {
        $data = ViewProduct::all();

        return response()->json($data, 200);
    }
}
