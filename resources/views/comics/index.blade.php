@extends("layouts.main")

@section("title")
  Tizio
@endsection

@section("main-content")
<body>

  <div class="page-title">
    <h1>Lista dei Fumetti</h1>
  </div>

  <div class="container">

    @foreach($comics as $comic)
    <div class="single-comic">
      <img src="{{$comic->poster}}" alt="{{$comic->title}}">
      <h2>{{$comic->title}}</h2>
      <h4>{{$comic->author}}</h4>
      <h5>{{$comic->edition}}</h5>
      <h6>{{$comic->comics}}</h6>
      <p><strong>Anno: </strong>{{$comic->year}}</p>
      <p>{{$comic->pages}} pages</p>
      <p>{{$comic->description}}</p>
      <p>prezzo: {{$comic->price}} €</p>
    </div>
    @endforeach

  </div>

</body>
</html>
@endsection
