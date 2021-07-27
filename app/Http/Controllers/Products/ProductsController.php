<?php

namespace App\Http\Controllers\Products;

use App\Models\User;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller {

    public function index()
    {
        $products = Product::get();

        $user = Auth::user()->password;

        return view ('products.products', [
            'user' => $user,
            'products' => $products,
        ]);
    }
}