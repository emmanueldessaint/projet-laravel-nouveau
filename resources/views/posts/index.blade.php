@extends('layouts.app')

@section('content')
    <div class="">
        <div class="width bg-white rounded pb-1 ">
            @auth
                <form action="{{ route('posts') }}" method="post" class="mb-4 ml-4 pt-4">
                    @csrf
                    <div class="mb-4 mr-4 class-posts d-flex flex-column">
                        <label for="body" class=""></label>
                        <textarea name="body" id="body" cols="30" rows="4" class=" w-100 p-4 rounded-lg fenetre-poste 
                        @error('body') border-red-500 @enderror" placeholder="Postez quelque chose!"></textarea>
                        
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
                <p class="ml-4">Il n'y a pas encore de posts.</p>
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
.width{
    margin-top:3em;
    margin-left:15%;
    margin-right:15%;
}
</style>