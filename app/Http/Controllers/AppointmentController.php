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
            ->select('users.name', 'users.image', 'warning_posts.address','warning_posts.image', 'sharing_posts.*')
            ->get();
        return $appointment;

    }
    public function addAppointment(Request $request, $id_user, $id_report)
    {
        $appointment = new Appointment();
        $appointment->user_id = $id_user;
        $appointment->report_id = $id_report;
        $appointment->start_day = $request->start_day;
        $appointment->end_day = $request->end_day;
        $appointment->note = $request->note;
        $appointment->save();
        return $appointment;
    }

  
}
