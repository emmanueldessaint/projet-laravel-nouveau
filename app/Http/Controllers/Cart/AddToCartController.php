<?php

namespace App\Http\Controllers\Cart;

use App\Models\User;
use App\Models\Panier;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AddToCartController extends Controller {

    
    public function store(Product $product)
    {
        // dd($product->id);

        $user = Auth::user();
        

        Panier::create([
            'id_user' => $user->id,
            'id_product' => '111',
        ]);

        return back();
    }
}
