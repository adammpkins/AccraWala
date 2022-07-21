<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use App\Models\Stop;
use App\Models\Station;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StopsController extends Controller
{
    public function create($id)
    {
        $stations = Station::all();
        $itinerary = Itinerary::find($id);

        return Inertia::render('Stops/Create', [
            'stations' => $stations,
            'itinerary' => $itinerary,
        ]);
    }

    public function store(Request $request)
    {
        $itinerary = Itinerary::find($request->itinerary_id);
        $stop = new Stop();
        $stop->station_id = $request->station_id;
        $stop->title = $request->title;
        $stop->body = $request->body;
        $stop->itinerary_id = $request->itinerary_id;
        //upload the photo
        if ($request->hasFile('photo')) {
            $stop->photo = $request->photo->store('stop_photos', 'public');
        }
        $stop->authorid = $request->authorid;
        if ($stop->order == null) {
            $stop->order = $itinerary->stops->count() + 1;
        }
        $stop->save();

        return redirect('/itineraries/' . $itinerary->id);
    }

    public function edit($id)
    {
        $stop = Stop::find($id);
        $stations = Station::all();
        $itinerary = Itinerary::find($stop->itinerary_id);
        return Inertia::render('Stops/Edit', [
            'stop' => $stop,
            'stations' => $stations,
            'itinerary' => $itinerary,
        ]);
    }

    public function show(Itinerary $itinerary, Stop $stop)
    {
        return Inertia::render('Stops/Show', [
            'stop' => $stop,
            'itinerary' => $itinerary,
        ]);
    }

    public function destroy(Itinerary $itinerary, Stop $stop)
    {
        $stop->delete();
        return redirect('/itineraries/' . $itinerary->id);
    }
}
