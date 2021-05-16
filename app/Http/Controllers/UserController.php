<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Appointment;
use App\Models\WarningPost;
use App\Models\SharingPost;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getList()
    {
        $users = Users::all();
        return $users;
    }

    public function viewProfile($id)
    {
        $user = Users::find($id);
        return $user;
    }
    public function editProfile($id)
    {
        $user = Users::find($id);
        return $user;
    }

    public function updateProfile($id, Request $request)
    {
        $user = Users::find($id);
        $user->name = $request->name;
        $user->image = $request->image;
        $user->address = $request->address;
        $user->save();
        return $user;
    }

    public function countPosts()
    {
        $users = WarningPost::rightjoin('users', WarningPost::raw('user_id'), '=', 'users.id')
            ->groupBy('user_id', 'users.name', 'users.email','users.id')
            ->select('users.id','users.name', 'users.email', WarningPost::raw('COUNT(user_id) as total_posts'))
            ->get();
        return $users;
    }
    public function deleteUser($id){
        $user = Users::find($id);
        $schedule = Appointment:: all();
        $delete_schedule=0;
        $delete_warnpost=0;
        $delete_sharepost=0;
        $delete_noti=0;
        for($i=0; $i<count($schedule); $i++){
            if($schedule[$i]["user_id"]==$id){
                $delete_schedule=1;
                break;
            }
            else{
                $delete_schedule=0;
            }
        }
        if($delete_schedule==1){
            $delSchedule = Appointment:: where("user_id", $id)->delete();
        }
        $warning_post= WarningPost::all();
        for($i=0; $i<count($warning_post); $i++){
            if($warning_post[$i]["user_id"]==$id){
                $delete_warnpost=1;
                break;
            }
            else{
                $delete_warnpost=0;
            }
        }
        if($delete_warnpost==1){
            $delWarningPost= WarningPost:: where("user_id", $id)->delete();
        }
        $share_post= SharingPost::all();
        for($i=0; $i<count($share_post); $i++){
            if($share_post[$i]["user_id"]==$id){
                $delete_sharepost=1;
                break;
            }
            else{
                $delete_sharepost=0;
            }
        }
        if($delete_sharepost==1){
            $delSharingPost= SharingPost:: where("user_id", $id)->delete();
        }
        $noti= Notification::all();
        for($i=0; $i<count($noti); $i++){
            if($noti[$i]["user_id"]==$id){
                $delete_noti=1;
                break;
            }
            else{
                $delete_noti=0;
            }
        }
        if($delete_noti==1){
            $delNotification= Notification:: where("user_id", $id)->delete();
        }
        $user->delete();
        return "deleted!";
    }
    public function changePassword(Request $request)
    {
        $user_id = $request->id;
        $oldPass = $request->oldPass;
        $newPass = $request->newPass;
        $hasPass = Hash::make($newPass);
        $user = Users::find($user_id);

        $check = array(
            "username" => $user->username,
            "password" => $oldPass,
        );
        if (Auth::attempt($check)) {
            // Users::where('id',$user_id)->update(['password'=>$hasPass]);
            $user->password = $hasPass;
            $user->save();
            return 200;
        } else {
            return 400;
        }
//    return $check;
    }
}
