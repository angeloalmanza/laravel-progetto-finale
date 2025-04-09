@extends("layouts.videogames")

@section("title", "Modifica il genere")

@section("content")
<form action="{{route("genres.update", $genre)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Genere</label>
        <input type="text" id="name" name="name" value="{{$genre->name}}">
    </div>

     <div class="form-control mb-3 d-flex flex-column">
        <label for="color">Scegli un colore</label>
        <input type="color" id="color" name="color" value="{{$genre->color}}">
    </div>

    <input type="submit" value="Modifica">
</form>
@endsection