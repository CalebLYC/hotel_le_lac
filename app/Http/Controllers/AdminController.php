<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $rooms = Room::latest()->take(5)->get();
        return view('admin.pages.index', ['rooms' => $rooms]);
    }
}