<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('main')->with('products', $products);
        // product_images/4KspeHSGLHcoNFo6fnRKuJOzpqv27bGGfwRXUIRn.jpg
    }
    public function create(ProductFormRequest $request)
    {
        $imgPath = $request->file('image')->store('product_images', 'public');
        $product = Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'label'=>$request->label,
            'size'=>$request->size,
            'description'=>$request->description,
            'image'=>$imgPath
        ]);
        return to_route('main.index');
    }
}
