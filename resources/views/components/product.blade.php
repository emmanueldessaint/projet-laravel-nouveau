@props(['product' => $product])

<div class="m-4  contour  rounded background-primary">
    
        {{-- {{ route('product.show', $product->user) }} --}}
            <span>{{ $product->photo }}</span>
            <p  class="">{{ $product->name }}</p> 
            <p class="">{{ $product->description }}</p>
        
        
           
        
        
    
    <form action="{{  route('product.show', $product->id) }}"  class="mr-1">
        @csrf
        <button type="submit" class=""><small>Ajouter au panier</small></button>
    </form>
</div>
<style>
.contour{
    width:40%;
    height:20vh;
    
    /* font-size:1.4vw; */
    background-color:rgb(196, 196, 255);
    color:rgb(0, 0, 0);
}
a {
    text-decoration: none; 
    decoration: none; 
    
}
a:active {
    text-decoration: none; 
    decoration: none; 
    color:rgb(0, 0, 0);
}
</style>