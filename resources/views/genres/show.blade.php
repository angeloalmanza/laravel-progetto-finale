@extends("layouts.videogames")

@section("title", $genre->name)

@section("content")
<strong class="" style="color: {{$genre->color}};">Colore</strong>

<div class="d-flex gap-3 mt-4">
  <a href="{{route("genres.edit", $genre)}}" class="btn btn-outline-warning">Modifica</a>
  <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
  <a href="{{route("genres.index")}}" class="btn btn-primary">Torna ai generi</a>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il genere</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi eliminare il genere?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route("genres.destroy", $genre)}}" method="POST">
          @csrf
          @method("DELETE")
      
          <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection