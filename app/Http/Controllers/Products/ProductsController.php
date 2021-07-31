<?php

namespace App\Http\Controllers\Products;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller {

    public function index()
    {
        $products = Product::get();

        $user = Auth::user()->id;
        $totalQuantity = 0;

        $productUsers = DB::table('cart')->where('id_user', '=', $user)->get();
        foreach ($productUsers as $productUser) {
          $oneQuantity = $productUser->quantity;
            $totalQuantity += $oneQuantity;
        }

      

        
        return view ('products.products', [
            'wordCount' => $totalQuantity,
            'user' => $user,
            'products' => $products,
        ]);
    }
}