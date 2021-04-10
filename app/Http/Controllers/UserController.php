<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\WarningPost;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getList(){
        $users = Users::all();
        return $users;
    }

    public function viewProfile($id){
        $user = Users::find($id);
        return $user;
    }
    public function editProfile($id){
        $user = Users::find($id);
        return $user;
    }

    public function updateProfile($id, Request $request){
        $user = Users::find($id);
        $user->name=$request->name;
        $user->image=$request->image;
        $user->address=$request->address;
        $user->save();
        return $user;
    }

    public function countPosts(){
        $users = WarningPost::join('users', WarningPost::raw('user_id'),'=','users.id')  
        ->groupBy('user_id','users.name', 'users.email')  
        ->select('users.name', 'users.email', WarningPost::raw('COUNT(user_id) as total_posts'))
        ->get();
        return $users;
    }
    
    function changePassword(Request $request)
   {
       $user_id = $request->id;
       $oldPass = $request->oldPass;
       $newPass = $request->newPass;
       $hasPass = Hash::make($newPass);
       $user = Users::find($user_id);

       $check = array(
           "email"=>$user->email,
           "password"=>$oldPass
       );
       if (Auth::attempt($check)) {
        Users::where('id',$user_id)->update(['password'=>$hasPass]);
       return 200;
       } else {
           return 400;
       }
  //  return $user;
   }
}
