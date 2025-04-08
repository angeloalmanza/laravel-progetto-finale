@extends("layouts.videogames")

@section("title",  $videogame->name)

@section("content")
<div class="card w-75 mt-4">
  <div class="card-body">
    <p><strong>Piattaforma:</strong> {{ $videogame->platform->name ?? '-' }}</p> 
    <p class="card-text">{{$videogame->description}}</p>
    <p><strong>Anno di uscita: </strong>{{$videogame->release_year}}</p>
  </div>
</div>

<div class="d-flex gap-3 mt-4">
  <a href="{{route("videogames.edit", $videogame)}}" class="btn btn-outline-warning">Modifica</a>
  <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
  <a href="{{route("videogames.index")}}" class="btn btn-primary">Torna ai videogiochi</a>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il videogioco</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi eliminare il videogioco?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route("videogames.destroy", $videogame)}}" method="POST">
          @csrf
          @method("DELETE")
      
          <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection