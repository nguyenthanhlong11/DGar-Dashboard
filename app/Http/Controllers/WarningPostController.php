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

    public function getPostMonth(){
        $post = WarningPost::select(WarningPost::raw('MONTH(created_at) as month'),WarningPost ::raw('COUNT(id) as sum'))
        ->groupBy('month')->get();
        $post_month=[0,0,0,0,0,0,0,0,0,0,0,0];
        foreach($post as $post){
        for($i=1;$i<=12;$i++){
          if($i==$post["month"]){
            $post_month[$i-1]=$post["sum"];
          }
        }
        }  
        return $post_month;
    } 
}
