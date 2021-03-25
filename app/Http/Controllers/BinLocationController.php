<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BinLocation;

class BinLocationController extends Controller
{
    public function getList(){
        $bin = BinLocation::all();
        return $bin;
    }
}
