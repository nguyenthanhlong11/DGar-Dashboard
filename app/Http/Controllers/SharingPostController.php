<?php

namespace App\Http\Controllers;

use App\Models\SharingPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SharingPostController extends Controller
{
    public function getList()
    {
        $posts = DB::table('sharing_posts')
            ->join('users', 'sharing_posts.user_id', '=', 'users.id')
            ->select('users.name', 'users.image as avatar', 'sharing_posts.*')
            ->get();
        return $posts;
    }

    public function viewPost($id)
    {
        $post = SharingPost::where('user_id', $id)->get();
        return $post;
    }

    public function addPost(Request $request, $id)
    {
        $post = new SharingPost();
        $post->user_id = $id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->image;
        $post->save();
        return $post;
    }

    public function deletePost($id)
    {
        $post = SharingPost::find($id);
        $post->delete();
        return "deleted!";
    }
}
