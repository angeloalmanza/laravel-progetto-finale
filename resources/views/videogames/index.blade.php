@extends("layouts.videogames")

@section("title", "Tutti i videogiochi")

@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome videogioco</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($videogames as $videogame)
    <tr>
      <td>{{$videogame->name}}</td>
      <td><a href="{{route("videogames.show", $videogame)}}" class="btn btn-outline-primary">Dettagli</a></td>
      <td><a href="{{route("videogames.edit", $videogame)}}" class="btn btn-outline-warning">Modifica</a></td>
      <td><button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="d-flex gap-3 mt-4">
  <a href="{{route("videogames.create")}}" class="btn btn-primary">Crea un nuovo videogioco</a>
  {{-- <a href="{{route("types.index")}}" class="btn btn-success">Gestisci le tipologie dei progetti</a>
  <a href="{{route("technologies.index")}}" class="btn btn-warning">Gestisci le tecnologie dei progetti</a> --}}
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