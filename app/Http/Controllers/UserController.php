<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function getList(){
        $user = Users::all();
        return $user;
    }
}
