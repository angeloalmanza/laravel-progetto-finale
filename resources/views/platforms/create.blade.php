@extends("layouts.videogames")

@section("title", "Crea una nuova piattaforma")

@section("content")
<form action="{{route("platforms.store")}}" method="POST">
    @csrf

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Piattaforma</label>
        <input type="text" name="name" id="name">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione piattaforma</label>
        <textarea name="description" id="description" width="100%" rows="5"></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Crea">
</form>
@endsection