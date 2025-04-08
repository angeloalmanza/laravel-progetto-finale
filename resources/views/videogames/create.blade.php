@extends("layouts.videogames")

@section("title", "Crea un nuovo videogioco")

@section("content")
<form action="{{route("videogames.store")}}" method="POST">
    @csrf

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome videogioco</label>
        <input type="text" name="name" id="name">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="platform_id">Piattaforma</label>
        <select name="platform_id" id="platform_id">
            @foreach($platforms as $platform)
                <option value="{{$platform->id}}">{{$platform->name}}</option>     
            @endforeach
        </select>
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="release_year">Anno di rilascio</label>
        <select name="release_year" id="release_year">
            @for ($year = date('Y'); $year >= 1990; $year--)
                <option value="{{ $year }}">{{ $year }}</option>
            @endfor
        </select>
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione videogioco</label>
        <textarea name="description" id="description" width="100%" rows="5"></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Crea">
</form>
@endsection