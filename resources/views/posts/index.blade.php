@extends('layouts.app')

@section('content')
    <div class="">
        <div class="">
            @auth
                <form action="{{ route('posts') }}" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4 class-posts d-flex flex-column">
                        <label for="body" class=""></label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg fenetre-poste
                        @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>
                        
                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                                        
                        <button type="submit" class="bouton-post">Post</button>
                    </div>
                </form>
            @endauth

            @if ($posts->count())
                @foreach ($posts as $post)
                   <x-post :post="$post"/>
                @endforeach

                {{ $posts->links() }}
               
            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection

<style>
    .bouton-post{
    color:white;
    font-weight:bold;
    margin-top:1.6em;
    background:rgb(75, 148, 207);
    border-radius:3px;
    width:10em;
    height:3em;
    margin-bottom:20px;
    border:0px;
}
.fenetre-poste{
    width:20em;
}
</style>