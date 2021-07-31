<?php

namespace App\Http\Controllers\Products;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;


class OneProductController extends Controller {

    
    public function index($id)
    {
       
        $user = Auth::user()->id;      
        $exist = DB::table('cart')->where('id_user', '=', $user)
                                  ->where('id_product', '=', $id)->count();


        if($exist === 0) {
            DB::table('cart')->insert([
                'quantity' =>  1,
                'id_product' => $id,
                'id_user' => $user,
            ]);
        }
        
        if($exist != 0) {
            DB::table('cart')
            ->where('id_user', '=', $user)
            ->where('id_product', '=', $id)
            ->increment('quantity',1);                       
        }

        return back();
    }
}
