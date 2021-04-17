<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function getList()
    {
        $profile = Profile::all();
        return $profile;
    }
}
