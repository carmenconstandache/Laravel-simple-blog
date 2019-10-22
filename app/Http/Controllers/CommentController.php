<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
class CommentController extends Controller
{
    public function index()
    {
       $comments = Comment::all();
       return view('comments')->with(compact('comments'));

    }

    public function create()
    {

        $post = Post::all();
        return view('front.comments')->with(compact('post'));

    }

    
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->text = $request->text;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->phone = $request->phone;
        $comment->post_id = $request->post_id;

        $comment->save();
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
       
        $comment->delete();

        return redirect()->route('comments');
    }

}
