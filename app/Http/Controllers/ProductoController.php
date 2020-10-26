<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function product()
    {
        $productos = Producto::firstOrFail();
        return response()->json($productos,200);
    }
}
