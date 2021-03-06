<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'sometimes|required|email|unique:users',
            'username' => 'unique:users',
            'password' => 'required',
            'name' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;
        $name = $request->name;
        $address = $request->address;

        $hashPassword = Hash::make($password);
        $user = User::where('email', $email)->first();
        if ($user == null) {
            $user = new User();
            $user->email = $email;
            $user->username = $username;
            $user->password = $hashPassword;
            $user->name = $name;
            $user->address = $address;
            $user->role = "user";
            $user->save();

            $credentials = $request->only('username', 'password');
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $user_id = $user->id;
                $responData = array("user_id" => $user_id);
                return response()->json($responData, 200);
            } else {
                return 400;
            }
        } else {return response()->json("Email is exits!", 400);}

    }
}
