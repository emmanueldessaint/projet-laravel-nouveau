@extends('layouts.app')

@section('content')
    <div class="width bg-white rounded">
        <div class="p-6">
            <h1>{{ auth()->user()->name }}</h1>
            
            {{-- <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and received </p> --}}
        </div>

        <div>
            {{-- @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post"/>
                    
                @endforeach

                {{ $posts->links() }}
                
            @else
                <p>{{ $user->name }} does not have any posts</p>
            @endif --}}
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