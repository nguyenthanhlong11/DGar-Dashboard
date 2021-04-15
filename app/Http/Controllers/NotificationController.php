<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function getList(){
        $notifications = Notification::all();
        return $notifications;
    }

    public function viewNotification($id){
        $notification = Notification::where('user_id',$id)->get();
        return $notification;
    }

    public function deleteNotification($id){
        $notification = Notification::find($id);
        $notification->delete();
        return "deleted!";
    }
}
