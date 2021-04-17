<?php

namespace App\Http\Controllers;

use App\Models\BinLocation;

class BinLocationController extends Controller
{
    public function getList()
    {
        $bin = BinLocation::all();
        return $bin;
    }

    public function viewTrash($id)
    {
        $bin = BinLocation::find($id);
        return $bin;
    }
}
