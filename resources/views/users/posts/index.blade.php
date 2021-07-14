@extends('layouts.app')

@section('content')
    <div class="div">
        <div class="p-6">
            <h1>{{ $user->name }}</h1>
            <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and received </p>
        </div>

        <div>
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post"/>
                    
                @endforeach

                {{ $posts->links() }}
                
            @else
                <p>{{ $user->name }} does not have any posts</p>
            @endif
        </div>
    </div>
    
@endsection

<style>
    .div{
        /* background: orange; */
    }
</style>
