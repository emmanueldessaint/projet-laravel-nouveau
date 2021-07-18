@extends('layouts.app')

@section('content')
    <div class="width bg-white rounded p-3">
        <div class="p-6">
            <h1 class="ml-4 pt-2">{{ auth()->user()->name }}</h1>
        @if ($posts->count())    
            <p class="ml-4">a posté {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} et a reçu {{ $user->receivedLikes->count() }} j'aime(s)</p>
        @else
            <p>{{ auth()->user()->name }} does not have any posts</p>
        @endif
        </div>

        <div>
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post"/>
                    
                @endforeach

                {{ $posts->links() }}
                
            @else
                {{-- <p>{{ auth()->user()->name }} does not have any posts</p> --}}
            @endif
        </div>
    </div>
    
@endsection

<style>
.width{
    margin-top:3em;
    margin-left:15%;
    margin-right:15%;
    
}
</style>