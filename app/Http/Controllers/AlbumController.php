<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Band;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('albums.index', ['albums' => Album::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'year' => 'required|max:255',
            'times_sold' => 'required|max:255',
        ]);

        Album::create($request->except('_token'));
        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show($album)
    {
        return view('albums.show', ['albums' => Album::find($album)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($album)
    {
        $filter = [];
        $albums = Album::find($album);
        foreach($albums->songs as $song){
            array_push($filter,$song->id);
        }
        return view('albums.edit', ['albums' => Album::find($album),'songs' => Song::all()->except($filter)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $album)
    {
        $request->validate([

            'name'=> 'required|max:191',
            'year'=> 'required|max:191',
            'times_sold'=> 'required|max:191',

        ]);

        Album::find($album)->update($request->except(['id', '_token']));
        return redirect()->route('albums.index');
    }
    public function storesongs(Request $request, $album_id)
    {
        $album = Album::find($album_id);
        $album->songs()->attach($request->input('song_id'));
        return redirect()->route('albums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy($album)
    {
        Album::destroy($album);
        return redirect()->route('albums.index');
    }
}
