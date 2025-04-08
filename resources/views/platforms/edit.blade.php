@extends("layouts.videogames")

@section("title", "Modifica la piattaforma")

@section("content")
<form action="{{route("platforms.update", $platform)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Piattaforma</label>
        <input type="text" name="name" id="name" value="{{$platform->name}}">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione piattaforma</label>
        <textarea name="description" id="description" width="100%" rows="5">{{$platform->description}}</textarea>
    </div>

    <input type="submit" value="Modifica">
</form>
@endsection