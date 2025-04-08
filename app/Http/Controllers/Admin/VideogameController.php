<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Platform;
use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogames = Videogame::all();
        return view("videogames.index", compact("videogames"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $platforms = Platform::all();

        return view("videogames.create", compact("platforms"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newVideogame = new Videogame();

        $newVideogame->name = $data['name'];
        $newVideogame->description = $data['description'];
        $newVideogame->release_year = $data['release_year'];
        $newVideogame->platform_id = $data['platform_id'];

        $newVideogame->save();

        return redirect()->route("videogames.show", $newVideogame);
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        return view("videogames.show", compact("videogame"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        $platforms = Platform::all();

        return view("videogames.edit", compact('videogame', 'platforms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        $data = $request->all();

        $videogame->name = $data['name'];
        $videogame->description = $data['description'];
        $videogame->release_year = $data['release_year'];
        $videogame->platform_id = $data['platform_id'];

        $videogame->update();

        return redirect()->route("videogames.show", $videogame);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();

        return redirect()->route("videogames.index");
    }
}
