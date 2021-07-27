@extends('layouts.app')

@section('content')
    <div class="produit mt-4">
        <h4>{{ $product->name }}</h4>
        <span>{{ $product->description }}</span>
        <span>{{ $product->price }}</span>
    </div>
@endsection

<style>
    .produit{
        margin:0 auto;
        width:80%;
        background:white;
    }
</style>