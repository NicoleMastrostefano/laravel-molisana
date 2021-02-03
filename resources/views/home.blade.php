<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset("css/app.css")}}">
  </head>
  <body>
     @include("partials.header")
     <main>
      <section class="container">
        <h2>LE LUNGHE</h2>
        <div class="cards">
          @foreach ($lunghe as $pasta)
          <div class="card">
            <img src="{{$pasta['src']}}" alt="">
          </div>
          @endforeach
        </div>
      </section>
      <section class="container">
        <h2>LE CORTE</h2>
	      <div class="cards">
		      @foreach ($corte as $pasta)
			      <div class="card">
				      <img src="{{$pasta['src']}}" alt="">
			      </div>
          @endforeach
	      </div>
      </section>
      <section class="container">
        <h2>LE CORTISSIME</h2>
        <div class="cards">
          @foreach ($cortissime as $pasta)
	          <div class="card">
		          <img src="{{$pasta['src']}}" alt="">
	          </div>
          @endforeach
        </div>
      </section>
     </main>
     @include("partials.footer")
  </body>
</html>
