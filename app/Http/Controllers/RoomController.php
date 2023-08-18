<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function admin(){
        $rooms = Room::all();
        return view('admin.pages.rooms', ['rooms' => $rooms]);
    }

    public function index(){
        $rooms = Room::all();
        return view('pages.rooms', ['rooms' => $rooms]);
    }

    public function create(){
        return view('admin.pages.addRomm');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'nbr_lits' => 'required|integer',
            'nbr_bains' => 'required|integer',
            //'nbr_stars' => 'required|integer',
            'description' => 'required|max: 255',
            'prix' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $filename = time().'.'.$request->file('image')->extension();
            $path = $request->file('image')->storeAs(
                'roomsImages',
                $filename,
                'public'
            );

            Room::create([
                'name' => $request->name,
                'nbr_lits' => $request->nbr_lits,
                'nbr_bains' => $request->nbr_bains,
                'nbr_stars' => 5,
                'description' => $request->description,
                'prix' => $request->prix,
                'image_url' => $path,
            ]);

            return redirect()->route('rooms.index')->with('success', 'Chambre ajoutée avec succès');
        }else{
            return redirect()->back()->with('error', 'Image invalide');
        }
    }

    public function show(String $id){
        $room = Room::findOrFail($id);
        return view('admin.pages.room', ['room' => $room]);
    }

    public function edit(String $id){
        $room = Room::findOrFail($id);
        return view('admin.pages.editRomm', ['room' => $room]);
    }

    public function update(Request $request, String $id){
        $request::validate([
            'name' => 'required',
            'nbr_lits' => 'required|integer',
            'nbr_bains' => 'required|integer',
            'nbr_stars' => 'required|integer',
            'description' => 'required|max: 255',
            'prix' => 'required|float',
            'image' => 'required',
        ]);

        $room = Room::findOrFail($id);
        $path = $room->image_url;

        if($request->hasFile('image')){
            $filename = time().'.'.$request->file('image')->extension();
            $path = $request->file('image')->storeAs(
                'roomsImages',
                $filename,
                'public'
            );
        }
        $room->update([
            'name' => $request->name,
            'nbr_lits' => $request->nbr_lits,
            'nbr_bains' => $request->nbr_bains,
            'nbr_stars' => $request->nb_stars,
            'description' => $request->description,
            'prix' => $request->prix,
            'image_url' => $path,
        ]);

        return redirect()->route('rooms.index')->with('success', 'Chambre mise à jour avec succès');
    }

    public function destroy(String $id){
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Chambre supprimée à jour avec succès');
    }
}