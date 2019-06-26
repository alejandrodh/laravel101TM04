@extends('welcome')

@section('title', 'Detalle de producto')

@section('content')

<h2>Detalle {{$product->name}}</h2>

        <article class="">
          <p>Nombre: {{$product->name}}</p>
          <p>Descripción: {{$product->description}}</p>
          <p>Precio: {{$product->price}}</p>

          <form class="" action="/product/{id}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <button type="submit"> borrar </button>
          </form>

          <img src="/storage/products/{{$product->featured_img}}" alt="">
          <a href="/product/addtocart/{{$product->id}}">Agrerar al carrito</a>
        </article>



@endsection
