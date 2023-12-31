<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function admin(){
        $comments = Comment::all();
        return view('admin.pages.comments', ['comments' => $comments]);
    }

    public function store(Request $request){
        $request->validate([
            'content' => 'required',
        ]);

        Comment::create([
            'content' => $request->content,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->back()->with('success', 'Merci pour votre commentaire');
    }

    public function destroy(String $id){
        $comment = Comment::findOrFail($id);
        $comment->delete();
    }
}