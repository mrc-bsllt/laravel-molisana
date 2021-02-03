<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <title>Laravel</title>
    </head>

    <body>

       @include("templates.header")

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

       <footer>
         <div class="container">

           <div class="left"></div>
           <div class="right"></div>
           
         </div>
       </footer>

    </body>
</html>
