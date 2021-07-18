@props(['post' => $post])

<div class="mb-4 mr-4 ml-4 d-flex class-posts flex-column background rounded ">
    <div class="pt-2">
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
                    <button type="submit" class=" ml-2 background btn btn-link pt-1"><small>Aimer</small></button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" ml-2 btn btn-link pt-1"><small>Ne plus aimer</small></button>
                </form>
            @endif
        @endauth

        <span><small class="ml-3">{{ $post->likes->count() }} {{ Str::plural('j\'aime', $post->likes->count()) }}</small></span>
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