@extends('layouts.main')

@section('content')
  <main>
    <div id="wrapper">
      <!-- SEZIONE LE LUNGHE -->
      <section class="container">
        <h2>LE LUNGHE</h2>
        <div class="cards">
          @foreach ($lunghe as $pasta)
          <div class="card">
            <!-- Img del tipo di pasta   -->
            <img src="{{$pasta['src']}}" alt="">
            <div class="card-text">
              <!-- link alla pagina prodotto specifica  -->
              <a href="{{ route('product', ['id' => $pasta["id"]]) }}">{{ $pasta["titolo"] }}</a>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      <!-- /SEZIONE LE LUNGHE -->

      <!-- SEZIONE LE CORTE -->
      <section class="container">
        <h2>LE CORTE</h2>
        <div class="cards">
          @foreach ($corte as $pasta)
            <div class="card">
              <!-- Img del tipo di pasta   -->
              <img src="{{$pasta['src']}}" alt="">
              <div class="card-text">
                <!-- link alla pagina prodotto specifica  -->
                <a href="{{ route('product', ['id' => $pasta["id"]]) }}">{{ $pasta["titolo"] }}</a>
              </div>
            </div>
          @endforeach
        </div>
      </section>
      <!-- /SEZIONE LE CORTE -->

      <!-- SEZIONE LE CORTISSIME -->
      <section class="container">
        <h2>LE CORTISSIME</h2>
        <div class="cards">
          @foreach ($cortissime as $pasta)
	          <div class="card">
              <!-- Img del tipo di pasta   -->
		          <img src="{{$pasta['src']}}" alt="">
              <div class="card-text">
                <!-- link alla pagina prodotto specifica  -->
                <a href="{{ route('product', ['id' => $pasta["id"]]) }}">{{ $pasta["titolo"] }}</a>
              </div>
	          </div>
          @endforeach
        </div>
      </section>
      <!-- /SEZIONE LE CORTISSIME -->
    </div>
  </main>
@endsection
