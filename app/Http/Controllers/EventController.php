<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function admin(){
        $events = Event::all();
        return view('admin.pages.events', ['events' => $events]);
    }

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

        
        if($request->hasFile('image')){
            $filename = time().'.'.$request->file('image')->extension();
            $path = $request->file('image')->storeAs(
                'eventsImages',
                $filename,
                'public'
            );

        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'image_url' => $path,
            'video_url' => $request->video_url,
        ]);
        
        return redirect()->back()->with('success', 'Evènement ajouté avec succès');
    }else{
        return redirect()->back()->with('error', 'Image invalide');
    }

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
        $path = $event->image_url;

        if($request->hasFile('image')){
            $filename = time().'.'.$request->file('image')->extension();
            $path = $request->file('image')->storeAs(
                'eventsImages',
                $filename,
                'public'
            );
        }

        $event->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'image_url' => $request->fileInput,
            'video_url' => $request->video_url,
        ]);

        return redirect()->back()->with('success', 'Evènement mise à jour avec succès');
    }

    public function destroy(String $id){
        $event = Event::findOrfail($id);
        $event->delete();
        return redirect()->back()->with('success', 'Evènement supprimé avec succès');
    }
}