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

           <section>
             <h2>Le lunghe</h2>
             <div class="cards">
               @foreach($lunghe as $pasta)
               <div class="card-container">
                 <img src="{{ $pasta['src'] }}" alt="">
               </div>
               @endforeach
             </div>
           </section>

           <section>
             <h2>Le corte</h2>
             <div class="cards">
               @foreach($corte as $pasta)
               <div class="card-container">
                 <img src="{{ $pasta['src'] }}" alt="">
               </div>
               @endforeach
             </div>
           </section>

           <section>
             <h2>Le cortissime</h2>
             <div class="cards">
               @foreach($cortissime as $pasta)
               <div class="card-container">
                 <img src="{{ $pasta['src'] }}" alt="">
               </div>
               @endforeach
             </div>
           </section>

         </div>
       </main>

    </body>
</html>
