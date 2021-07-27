<?php

namespace App\Http\Controllers\Cart;

use App\Models\User;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DisplayCartController extends Controller {

    
    public function index()
    {
        return view('cart.displaycart');
    }
}
