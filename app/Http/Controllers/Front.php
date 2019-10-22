<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Validator;

class Front extends Controller
{
    public function index()
    {
        $post = Post::paginate(3);
        return view('first_page')->with(compact('post'));
    }


    public function showContent($id)
    {   
        $post = Post::findOrFail($id);
        $post->increment("views");
        $post->save();
        return view('content')->with(compact('post'));

        
    }
    

    public function store(Request $request, $id)
    {
       

        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'message' => 'required',

        ])->validate();
        


        $comment = new Comment;
        $comment->text = $request->text;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->phone = $request->phone;
        $comment->post_id = $id;

        

        $comment->save();

        $post = Post::findOrFail($id);

        return redirect()->route('content',$id)->with(compact('post'));


    }

}
