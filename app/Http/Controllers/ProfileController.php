<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function getList(){
        $profile = Profile::all();
        return $profile;
    }
}
