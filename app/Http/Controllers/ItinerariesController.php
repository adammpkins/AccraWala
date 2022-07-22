<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Itinerary;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ItinerariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itineraries = Itinerary::all();
        $user = auth()->user();
        return Inertia::render('Itineraries/Index', [
            'itineraries' => $itineraries,
            'loggedIn' => auth()->check(),
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Itineraries/Create');
    }

    public function destroy($id)
    {
        $itinerary = Itinerary::find($id);
        $itinerary->delete();
        return redirect('/itineraries');
    }

    //Destroy itinerary

    public function show($id)
    {
        $itinerary = Itinerary::find($id)->load('stops');
        $user = auth()->user();
        return Inertia::render('Itineraries/Show', [
            'itinerary' => $itinerary,
            'loggedIn' => auth()->check(),
            'user' => $user,
        ]);
    }

    public function edit($id)
    {
        $itinerary = Itinerary::find($id);
        return Inertia::render('Itineraries/Edit', [
            'itinerary' => $itinerary,
        ]);
    }

    public function update(Request $request, $id)
    {
        $itinerary = Itinerary::find($id);
        $itinerary->title = $request->title;
        $itinerary->gen_narrative = $request->gen_narrative;
        //upload the photo
        if ($request->hasFile('f_photo')) {
            $itinerary->f_photo = $request->f_photo->store('public/itinerary_photos');
        }
        $itinerary->authorid = $request->authorid;
        $itinerary->save();

        return redirect('/itineraries');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itinerary = new Itinerary();
        $itinerary->title = $request->title;
        $itinerary->gen_narrative = $request->gen_narrative;
        //upload the photo
        if ($request->hasFile('f_photo')) {
            $itinerary->f_photo = $request->f_photo->store('itinerary_photos', 'public');
        }
        //set authorid to the currently logged in user
        $itinerary->authorid = auth()->user()->name;
        $itinerary->save();

        return redirect('/itineraries');
    }

}
