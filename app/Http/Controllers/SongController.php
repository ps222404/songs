<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;


class SongController extends Controller
{
    public function index()
    {
        return view('songs.index', ['songs' => Song::all()]);
    }

    public function show($id)
    {

        return view('songs.show', ['song' => Song::find($id) ]);

    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'singer' => 'required|max:50',
        ]);

        Song::create($request->except('_token'));
        return redirect()->route('songs.index');
    }

    public function create()
    {
        return view('songs.create');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:100',
            'singer' => 'max:50',
        ]);

        Song::find($id)->update($request->except(['id', '_token']));
        return redirect()->route('songs.index');
    }
    public function edit($id)
    {
        return view('songs.edit', ['song' => Song::find($id) ]);

    }
    public function destroy($id){
        Song::destroy($id);
        return redirect()->route('songs.index');

    }
}





