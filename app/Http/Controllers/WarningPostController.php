<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WarningPost;

class WarningPostController extends Controller
{
    public function getList()
    {
        $posts=WarningPost::all();
        return $posts;
       
    }

    public function viewPost($id)
    {
        $post=WarningPost::find($id);
        return $post;
       
    }

    public function addPost(Request $request){   
        $post =new WarningPost();
        $post->user_id=1;
        $post->address=$request->address;
        $post->level=$request->level;
        $post->image=$request->image;
        $post->description=$request->description;
        $post->status=$request->status;
        $post->save();
        return $post;
    } 

    public function deletePost($id){
        $post=WarningPost::find($id);
        $post->delete();
        return "deleted!";
    }
}
