@extends('layouts.main')
@section('content')
    <main>
      <div id="product-wrapper">
        <div class="container">
          <h1>{{ $product["titolo"] }}</h1>
          <img src="{{ $product['src-h']}}" alt="">
          <img src="{{ $product['src-p']}}" alt="">
          <p> {!! $product["descrizione"] !!}</p>
        </div>
      </div>
    </main>
@endsection
