@extends("layouts.videogames")

@section("title", $platform->name)

@section("content")
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">{{$platform->description}}</p>
  </div>
</div>

<div class="d-flex gap-3 mt-4">
  <a href="{{route("platforms.edit", $platform)}}" class="btn btn-outline-warning">Modifica</a>
  <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
  <a href="{{route("platforms.index")}}" class="btn btn-primary">Torna alle piattaforme</a>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina la piattaforma</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi eliminare la piattaforma?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route("platforms.destroy", $platform)}}" method="POST">
          @csrf
          @method("DELETE")
      
          <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection