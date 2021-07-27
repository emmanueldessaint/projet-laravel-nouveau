@extends('layouts.app')

@section('content')
<div class="">
    <div class="disposition mt-4">
        @foreach ($products as $product)
            <x-product :product="$product"/>

        @endforeach
    </div>
</div>
@endsection

<style>
    .disposition{
        display:flex;
        flex-wrap: wrap;
        justify-content: center;
        width:80vw;
        margin: 0 auto;
        background-color:white;
    }
</style>