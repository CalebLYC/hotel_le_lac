<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Event;
use App\Models\Room;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function home(){
        $rooms = Room::latest()->take(3)->get();
        $events = Event::latest()->take(5)->get();
        $comments = Comment::all();
        return view('welcome', ['rooms' => $rooms, 'events' => $events, 'comments' => $comments]);
    }
}