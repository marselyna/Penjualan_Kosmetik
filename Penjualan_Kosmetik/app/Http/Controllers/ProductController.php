<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $cart = [];

    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $this->cart[] = $product;
        return redirect()->route('cart');
    }

    public function cart()
    {
        return view('cart', ['cart' => $this->cart]);
    }
}