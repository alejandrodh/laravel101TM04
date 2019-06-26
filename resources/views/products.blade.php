@extends('welcome')

@section('title', 'Agregar producto')

@section('content')

<h2>Lista de productos</h2>

    @forelse ($products as $product)
        <article class="">
          <p>Nombre: {{$product->name}}</p>
          <p>Descripción: {{$product->description}}</p>
          <p>Precio: {{$product->price}}</p>
          <img src="/storage/products/{{$product->featured_img}}" alt="">
          <a href="/product/{{$product->id}}">Ver más</a>
          <a href="/product/edit/{{$product->id}}">Editar</a>
        </article>
    @empty
      <p>No hay productos en esta categoria</p>
    @endforelse


@endsection
