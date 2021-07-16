@props(['post' => $post])

<div class="mb-4 mr-4 ml-4 d-flex class-posts flex-column background rounded ">
    <div>
        <a href="{{ route('users.posts', $post->user) }}" class="font-bold ml-3 ">{{ $post->user->name }}</a> 
        <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
    </div>
    <div class=" d-flex ml-3 justify-content-between">
        <p class="mb-2 mt-2">{{ $post->body }}</p>
    
    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500 delete-button mr-4">Supprimer</button>
        </form>
    @endcan
    </div>
    <div class="d-flex flex-row align-items-baseline">
        @auth
            @if (!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class=" ml-3 background btn btn-link pt-1">Like</button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" ml-3 btn btn-link pt-1">Unlike</button>
                </form>
            @endif
        @endauth

        <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
    </div>
</div>

<style>
   
.delete-button{
    background:rgb(255, 135, 135);
    margin-left:2em;
    border:none;
    opacity:1;
    font-weight:400;
    border-radius:5px;
    color:rgb(42, 42, 42);
}
</style>