@extends("layouts.videogames")

@section("title",  $videogame->name)

@section("content")
<div class="card w-75 mt-4">
  <div class="card-body">
    <p class="card-text">{{$videogame->description}}</p>
    <p><strong>Anno di uscita: </strong>{{$videogame->release_year}}</p>
  </div>
</div>
@endsection