@extends("layouts.main-lt")

@section("content")
<main id="product">
  <div class="container">
    <h2>{{ $product["titolo"] }}</h2>
    <img src="{{ $product['src-h'] }}" alt="{{ $product["titolo"] }}">
    <img src="{{ $product['src-p'] }}" alt="{{ $product["titolo"] }}">
    <p>{!! $product['descrizione'] !!}</p>
  </div>

  @if ($id > 0)
    <a class="prev" href="{{ route('products', ['id' => $id -1]) }}"><i class="fas fa-angle-left"></i></a>
  @endif

  @if ($id != $last_product)
  <a class="next" href="{{ route('products', ['id' => $id +1]) }}"><i class="fas fa-angle-right"></i></a>
  @endif
</main>
@endsection
