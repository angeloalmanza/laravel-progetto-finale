@extends("layouts.videogames")

@section("title", "Tutti i videogiochi")

@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome videogioco</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($videogames as $videogame)
    <tr>
      <td>{{$videogame->name}}</td>
      <td><a href="{{route("videogames.show", $videogame)}}" class="btn btn-outline-primary">Dettagli</a></td>
    </tr>
    @endforeach
@endsection