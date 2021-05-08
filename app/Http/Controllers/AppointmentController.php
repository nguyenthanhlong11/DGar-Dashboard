<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function getListAppoint()
    {
        $appointment = DB::table('schedules')
            ->join('users', 'schedules.user_id', '=', 'users.id')
            ->join('warning_posts', 'schedules.post_id', '=', 'warning_posts.id' )
            ->select('users.name', 'users.image', 'warning_posts.address','warning_posts.image  as post_image', 'schedules.*')
            ->get();
        return $appointment;

    }
    public function addAppointment(Request $request)
    {
        $appointment = new Appointment();
        $appointment->user_id = $request->user_id;
        $appointment->post_id = $request->post_id;
        $appointment->start_day = $request->start_day;
        $appointment->end_day = $request->end_day;
        $appointment->note = $request->note;
        $appointment->status = $request->status;
        $appointment->save();
        return response()->json($appointment,200);
    }

  
}
