<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;
use Validator;
class RegisterController extends Controller
{
    function store(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'sometimes|required|email|unique:users',
            'password' => 'required',
            'name' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
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
            $user->name=$name;
            $user->address=$address;
            $user->role="user";
            $user->save();

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user_id=$user->id;
            $key="minionroo";

            $data = array(
                "user_id"=>$user_id
            ) ;
            // $token= JWT::encode($data, $key);
            $token=md5($user_id);
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
