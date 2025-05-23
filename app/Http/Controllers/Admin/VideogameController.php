<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $genres = Genre::all();

        return view("videogames.create", compact("platforms", "genres"));
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

        if(array_key_exists("image", $data)) {
            $img_url = Storage::putFile("videogames", $data['image']);
        }
        $newVideogame->image = $img_url;

        $newVideogame->save();

        if($request->has('genres')){
            $newVideogame->genres()->attach($data['genres']);
       }

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

        $genres = Genre::all();

        return view("videogames.edit", compact('videogame', 'platforms', 'genres'));
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

        if(array_key_exists("image", $data)) {
            Storage::delete($videogame->image);
            $img_url = Storage::putFile("videogames", $data['image']);
            $videogame->image = $img_url;
        }

        $videogame->update();

        if($request->has('genres')){
            $videogame->genres()->sync($data['genres']);
        }else{
            $videogame->genres()->detach();
        }

        return redirect()->route("videogames.show", $videogame);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        if($videogame->image){
            Storage::delete($videogame->image);
        }
        
        $videogame->delete();

        return redirect()->route("videogames.index");
    }
}
