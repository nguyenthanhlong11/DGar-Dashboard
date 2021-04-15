<?php

namespace App\Http\Controllers;
use App\Models\SharingPost;

use Illuminate\Http\Request;

class SharingPostController extends Controller
{
    public function getList()
    {
        $posts = DB::table('sharing_posts')
        ->join('users','sharing_posts.id','=','users.id')
        ->select('users.name','users.image','sharing_posts.*')
        ->get();
        return $posts;
       
    }

    public function viewPost($id)
    {
        $post=SharingPost::find($id);
        return $post;
       
    }

    public function addPost(Request $request, $id){   
        $post =new SharingPost();
        $post->user_id=$id;
        $post->address=$request->address;
        $post->content=$request->content;
        $post->image=$request->image;
        $post->save();
        return $post;
    } 

    public function deletePost($id){
        $post=SharingPost::find($id);
        $post->delete();
        return "deleted!";
    }
}
