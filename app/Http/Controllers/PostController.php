<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    
    public function index()
    {
        $posts = Post::latest()->with(['user', 'likes'])->paginate(20);

        // return view('posts.index', compact('posts'));

        $user = Auth::user()->id;
        $wordList = DB::table('cart')->where('id_user', '=', $user)->get();
        $wordCount= $wordList->count();
        
        return view('posts.index', [
            'wordCount' => $wordCount,
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [

            'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }
}