<?php

namespace App\Http\Controllers\Cart;

use App\Models\Cart;
use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DisplayCartController extends Controller {

    
    public function index()
    {
        $user = Auth::user()->id;  

        $wordList = DB::table('cart')->where('id_user', '=', $user)->get('quantity');
        $wordCount= $wordList->count();
        // $products = DB::table('cart')->where('id_user', '=', $user);
        $carts = Cart::where('id_user', '=', $user)->get();

        $products = [];
        foreach ($carts as $cart) {
           $myProduct = Product::where('id', '=' , $cart->id_product)->first();     
           array_push($products, $myProduct);  
        }

        
        // dd($products);

        

        return view('cart.displaycart', [
            'products' => $products,
            'wordCount' => $wordCount,
        ]);
    }
}
