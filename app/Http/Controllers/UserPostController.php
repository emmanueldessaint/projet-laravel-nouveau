<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserPostController extends Controller
{
    public function index(User $user)
    {
       $posts = $user->posts()->with(['user', 'likes'])->paginate(20);

       $user = Auth::user()->id;
       $wordList = DB::table('cart')->where('id_user', '=', $user)->get();
       $wordCount= $wordList->count();

        return view('users.posts.index', [
            'wordCount' => $wordCount,
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
