<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('bands.index', ['bands' => Band::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bands.create');
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
            'genre' => 'required|max:255',
            'founded' => 'required|max:4',
            'active_till' => 'required|max:255',
        ]);

        Band::create($request->except('_token'));
        return redirect()->route('bands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \app\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function show($band)
    {

        return view('bands.show', ['bands' => Band::find($band) ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \app\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit($band)
    {
        return view('bands.edit', ['bands' => Band::find($band) ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$band)
    {
        $request->validate([

            'name'=> 'required|max:191',
            'genre'=> 'required|max:191',
            'founded'=> 'required|max:191',
            'active_till'=> 'required|max:191',
        ]);

        Band::find($band)->update($request->except(['id', '_token']));
        return redirect()->route('bands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \app\Models\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy($band)
    {
        Band::destroy($band);
        return redirect()->route('bands.index');
    }
}
