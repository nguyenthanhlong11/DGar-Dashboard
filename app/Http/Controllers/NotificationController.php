<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function getList()
    {
        $notifications = DB::table('notifications')
            ->join('users', 'notifications.id', '=', 'users.id')
            ->join('notify_types', 'notifications.id', '=', 'notify_types.id')
            ->select('users.name', 'users.image', 'notify_types.type_name', 'notify_types.content', 'notify_types.image', 'notifications.*')
            ->get();
        return $notifications;
    }

    public function viewNotification($id)
    {
        $notification = Notification::where('user_id', $id)->get();
        return $notification;
    }

    public function deleteNotification($id)
    {
        $notification = Notification::find($id);
        $notification->delete();
        return "deleted!";
    }
}
