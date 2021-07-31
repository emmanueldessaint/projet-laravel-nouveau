<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    
    public function index(User $user)
    {
        
        $posts = Post::latest()->with(['user', 'likes'])->where('user_id', '=', Auth::user()->id)->paginate(20);

        $user = Auth::user()->id;
        $wordList = DB::table('cart')->where('id_user', '=', $user)->get();
        $wordCount= $wordList->count();

        return view('dashboard', [
            'wordCount' => $wordCount,
            'posts' => $posts,
            'user' => $user
        ]);
    }
}
