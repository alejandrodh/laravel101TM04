@extends('welcome')

@section('title', 'Detalle de producto')

@section('content')

<h2>Cart</h2>

        @forelse ($cart as $item)
          @php
            var_dump($item);
          @endphp
        @empty

        @endforelse
comprar

@endsection
