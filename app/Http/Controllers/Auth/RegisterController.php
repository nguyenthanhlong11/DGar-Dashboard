<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;
class RegisterController extends Controller
{
    function store(Request $request){

        $email = $request->email;
        $password = $request->password;
        $name = $request->name;
        $address = $request->address;

        $hashPassword=Hash::make($password);
        $user = User::where('email', $email)->first();
        if($user==null){
            $user = new User();
            $user->email=$email;
            $user->password=$hashPassword;
            $user->save();

            $inforUser = new UserInformation();
            $inforUser->user_id=$user->id;
            $inforUser->name=$name;
            $inforUser->address=$address;
            $inforUser->save();

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user_id=$user->id;
            $key="minionroo";

            $data = array(
                "user_id"=>$user_id
            ) ;
            $token= JWT::encode($data, $key);
            $responData=array("user_id"=>$token);
            return response()->json($responData,200);
        }
        else{
         return 400;
      }
        }
        else 
        {return response()->json("Email is exits!",400);}
      
    }
}
