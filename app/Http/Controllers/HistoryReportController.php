<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryReport;

class HistoryReportController extends Controller
{
    public function getList(){
        $history = HistoryReport::all();
        return $history;
    }

    public function getLocationHandled(){
        $location = HistoryReport::select(HistoryReport::raw('MONTH(created_at) as month'),HistoryReport::raw('COUNT(id) as sum'))
        ->groupBy('month')->get(); 
        $data=[0,0,0,0,0,0,0,0,0,0,0,0];
        foreach($location as $location){
        for($i=1;$i<=12;$i++){
          if($i==$location["month"]){
            $data[$i-1]=$location["sum"];
          }
        } 
        }   
        return $data;
    }
}
