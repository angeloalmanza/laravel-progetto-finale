@extends("layouts.videogames")

@section("title", "Piattaforme")

@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">Piattaforma</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($platforms as $platform)
    <tr>
      <td>{{$platform->name}}</td>
      <td><a href="{{route("platforms.show", $platform)}}" class="btn btn-outline-primary">Dettagli</a></td>
      <td><a href="{{route("platforms.edit", $platform)}}" class="btn btn-outline-warning">Modifica</a></td>
      <td><button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="d-flex gap-3 mt-4">
<a href="{{route("platforms.create")}}" class="btn btn-primary">Crea una nuova piattaforma</a>
<a href="{{route("videogames.index")}}" class="btn btn-primary">Ritorna ai videogiochi</a>
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