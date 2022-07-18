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
            $stop->photo = $request->photo->store('public/stop_photos');
        }
        $stop->authorid = $request->authorid;
        $stop->save();

        return redirect('/itineraries/' . $itinerary->id);
    }
}
