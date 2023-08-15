<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('admin.pages.events', ['events' => $events]);
    }

    public function create(){
        return view('admin.pages.addEvent');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:255',
            'date' => 'required|date',
        ]);

        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'image_url' => $request->image_url,
            'video_url' => $request->video_url,
        ]);

        return redirect()->back()->with('success', 'Evènement ajouté avec succès');
    }

    public function show(String $id){
        $event = Event::findOrfail($id);
        return view('pages.event', ['event' => $event]);
    }

    public function edit(String $id){
        $event = Event::findOrfail($id);
        return view('admin.pages.editEvent', ['event' => $event]);
    }

    public function update(Request $request, String $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:255',
            'date' => 'required|date',
        ]);

        $event = Event::findOrfail($id);

        $event->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'image_url' => $request->image_url,
            'video_url' => $request->video_url,
        ]);

        return redirect()->back()->with('success', 'Evènement mise à jour avec succès');
    }

    public function delete(String $id){
        $event = Event::findOrfail($id);
        $event->delete();
        return redirect()->back()->with('success', 'Evènement supprimé avec succès');
    }
}