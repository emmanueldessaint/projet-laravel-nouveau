<?php

namespace App\Http\Controllers\Products;

use App\Models\User;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class OneProductController extends Controller {

    
    public function index(Product $product)
    {
        // dd( $product = Product::get());

        // $posts = Post::latest()->with(['user', 'likes'])->paginate(20);
        
        return view('Products.singleproduct', [
            'product' => $product
        ]);
    }
}
