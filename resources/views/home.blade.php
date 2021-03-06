@extends("layouts.main-lt")

@section("content")

<main id="home-main">
  <div class="container">

    @foreach($types as $section)
    <section>
      <h2>Le {{ $section["title"] }}</h2>
      <div class="cards">
        @foreach($section["type"] as $card)
        <div class="card-container">
          <img src="{{ $card->src }}" alt="{{ $card->titolo }}">
          <div class="layover">
            <a href="{{ route('products', ['slug' => $card->slug]) }}">{{ $card->titolo }}</a>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    @endforeach

  </div>
</main>

@endsection
