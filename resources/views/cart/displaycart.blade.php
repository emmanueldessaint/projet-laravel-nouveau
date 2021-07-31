@extends('layouts.app')

@section('content')
<div class="">
    <div class="disposition mt-4">
        @foreach ($products as $product)
            <div>{{ $product->id }}</div>
            <div>{{ $product->description }}</div>
            

        @endforeach
    </div>
</div>
@endsection