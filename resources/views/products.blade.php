@extends("layouts.main")

@section("content")

<main>
  <div class="container">

    @foreach($types as $section)
    <section>
      <h2>Le {{ $section["title"] }}</h2>
      <div class="cards">
        @foreach($section["type"] as $card)
        <div class="card-container">
          <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
        </div>
        @endforeach
      </div>
    </section>
    @endforeach

  </div>
</main>

@endsection
