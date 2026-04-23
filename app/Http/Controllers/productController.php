<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('products.index', ['items' => $products]);
    }
    public function store(Request $request)
    {
        product::create([
            'name' => $request->name123,
            'price' => $request->price123,
        ]);
        return redirect('/products');
    }
}
