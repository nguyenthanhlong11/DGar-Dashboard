<?php

namespace App\Http\Controllers;

use App\Models\WarningPost;
use Illuminate\Http\Request;

class WarningPostController extends Controller
{
    public function getList()
    {
        $posts = WarningPost::all();
        return $posts;

    }

    public function viewPost($id)
    {
        $post = WarningPost::where('user_id', $id)->get();
        return $post;
    }

    public function addPost(Request $request, $id)
    {
        $post = new WarningPost();
        $post->user_id = $id;
        $post->address = $request->address;
        $post->level = $request->level;
        $post->image = $request->image;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->save();
        return $post;
    }

    public function deletePost($id)
    {
        $post = WarningPost::find($id);
        $post->delete();
        return "deleted!";
    }

    public function getPostMonth()
    {
        // $post = WarningPost::select(WarningPost::raw("TO_CHAR(created_at, 'MON') as month"), WarningPost::raw('COUNT(id) as sum'))
        //     ->groupBy('month')->get();
        // $post_month = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        // foreach ($post as $post) {
        //     for ($i = 1; $i <= 12; $i++) {
        //         if ($i == $post["month"]) {
        //             $post_month[$i - 1] = $post["sum"];
        //         }
        //     }
        // }
        // return $post_month;
        $posts = WarningPost::select(WarningPost::raw("TO_CHAR(created_at, 'MON') as month"), WarningPost::raw('COUNT(id) as sum'))
            ->groupBy('month')->get();     
         $post_month = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $armonth = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
        foreach ($posts as $post) {
            for ($i = 0; $i <= 11; $i++) {
                if ($armonth[$i] == $post["month"]) {
                    $post_month[$i] = $post["sum"];
                }
            } 
        }
        return $post_month;
    }
}
