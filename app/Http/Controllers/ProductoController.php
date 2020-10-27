<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
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
}
