@extends("layouts.videogames")

@section("title", "Modifica il videogioco")

@section("content")
<form action="{{route("videogames.update", $videogame)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome videogioco</label>
        <input type="text" name="name" id="name" value="{{$videogame->name}}">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="platform_id">Piattaforma</label>
        <select name="platform_id" id="platform_id">
            @foreach($platforms as $platform)
                <option value="{{$platform->id}}" {{$videogame->platform_id == $platform->id ? 'selected' : ''}}>{{$platform->name}}</option>     
            @endforeach
        </select>
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="release_year">Anno di rilascio</label>
        <select name="release_year" id="release_year">
            @for ($year = date('Y'); $year >= 1990; $year--)
                <option value="{{ $year }}" 
                    @if (old('release_year', $videogame->release_year ?? '') == $year) selected @endif>
                    {{ $year }}
                </option>
            @endfor
        </select>
    </div>


    <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione videogioco</label>
        <textarea name="description" id="description" width="100%" rows="5">{{$videogame->description}}</textarea>
    </div>

    <input type="submit" value="Modifica">
</form>
@endsection