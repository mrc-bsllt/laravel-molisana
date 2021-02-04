@extends("layouts.main-lt")

@section("content")
<main id="product">
  <div class="container">
    <h2>{{ $product["titolo"] }}</h2>
    <img src="{{ $product['src-h'] }}" alt="{{ $product["titolo"] }}">
    <img src="{{ $product['src-p'] }}" alt="{{ $product["titolo"] }}">
    <p>{!! $product['descrizione'] !!}</p>
  </div>
</main>
@endsection
