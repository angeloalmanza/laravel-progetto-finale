<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();

        return view("genres.index", compact("genres"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("genres.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newGenre = new Genre();

        $newGenre->name = $data['name'];
        $newGenre->color = $data['color'];

        $newGenre->save();

        return redirect()->route("genres.show", $newGenre);
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        return view("genres.show", compact("genre"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        $genres = Genre::all();
        
        return view("genres.edit", compact("genre", "genres"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $data = $request->all();

        $genre->name = $data['name'];
        $genre->color = $data['color'];

        $genre->update();

        return redirect()->route("genres.update", $genre);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect()->route("genres.index");
    }
}
