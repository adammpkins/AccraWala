<?php

namespace App\Http\Controllers;

use App\Models\StationMedia;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Station;

class StationMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stationmedia = StationMedia::all()->load('station');
        return Inertia::render('StationMedia/Index', [
            'stationmedia' => $stationmedia,
            'loggedIn' => auth()->check(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stations = Station::all();
        return Inertia::render('StationMedia/Create', [
            'stations' => $stations,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stationmedia = StationMedia::find($id)->load('station');
        return Inertia::render('StationMedia/Show', [
            'stationmedia' => $stationmedia,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stationmedia = StationMedia::find($id);
        $stations = Station::all();
        return Inertia::render('StationMedia/Edit', [
            'stationmedia' => $stationmedia,
            'stations' => $stations,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stationmedia = StationMedia::find($id);
        $stationmedia->station_id = $request->station_id;
        $stationmedia->title = $request->title;
        $stationmedia->description = $request->description;
        if ($request->hasFile('file')) {
            $stationmedia->file = $request->file->store('media', 'public');
        }
        $stationmedia->save();
        return redirect('/media');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stationmedia = new StationMedia();
        $stationmedia->station_id = $request->station_id;
        $stationmedia->title = $request->title;
        $stationmedia->description = $request->description;
        if ($request->hasFile('file')) {
            $stationmedia->file = $request->file->store('media', 'public');
        }
        $stationmedia->save();
        return redirect('/media');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stationmedia = StationMedia::find($id);
        $stationmedia->delete();
        return redirect('/media');
    }
}
