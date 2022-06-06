<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Band;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = Band::All();

        return view('pages.index', compact('bands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'components' => 'required',
                'genre' => 'required',
                'live_on_stage' => 'required',
                'bio' => 'required',
                'stage_number' => 'required',
            ]
        );

        $data = $request->all();

        $new_band = new Band();
        $new_band->fill($data);
        $new_band->save();

        return redirect()->route('bands.show', $new_band);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band)
    {
        return view('pages.show', compact('band'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        return view('pages.edit', compact('band'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Band $band)
    {
        $request->validate(
            [
                'name' => 'required',
                'components' => 'required',
                'genre' => 'required',
                'live_on_stage' => 'required',
                'bio' => 'required',
                'stage_number' => 'required',
            ]
        );

        $data = $request->all();

        $band->fill($data);
        $band->save();

        return redirect()->route('bands.show', $band);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $band)
    {
        $band->delete();

        return redirect()->route('bands.index', compact('band'));
    }
}
