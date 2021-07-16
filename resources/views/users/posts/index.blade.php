@extends('layouts.app')

@section('content')
    <div class="width bg-white pb-1">
        <div class="p-6 ml-5 mt-3">
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
    .width{
        margin-top:3em;
        margin-left:15%;
        margin-right:15%;
}
</style>
