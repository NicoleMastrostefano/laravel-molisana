<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="{{ asset("css/app.css")}}">
    </head>
    <body>
       <header>
         <img src="{{ asset("img/marchio-sito-test.png")}}" alt="La Molisana">
         <ul id="list_inline">
           <li class="active">
             <a href="#">Home</a>
           </li>
           <li>
             <a href="#">Prodotti</a>
           </li>
           <li>
             <a href="#">News</a>
           </li>
         </ul>
       </header>
       <main>

       </main>
       <footer></footer>

    </body>
</html>
