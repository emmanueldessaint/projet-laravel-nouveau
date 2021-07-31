@extends('layouts.app')

@section('content')
    <div class="produit mt-4">
        <h4>{{ $user }}</h4>
        <h4>{{ $id }}</h4>
        
        
    </div>
@endsection

<style>
    .produit{
        margin:0 auto;
        width:80%;
        background:white;
    }
</style>