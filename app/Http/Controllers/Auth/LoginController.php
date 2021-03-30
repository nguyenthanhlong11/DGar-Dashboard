<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;
use Validator;

class LoginController extends Controller
{
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
    
        if ($validator->fails())
        {
            return response()->json($validator->errors());
        }
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
           // $a=JWT::decode($token, $key);
            $responData=array("user_id"=>$token);
            return response()->json($responData,200);
        }
        else{
         return 400;
      }  
    }

    public function logout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required',
        ]);

        try {
            $validator->fails();
            return response()->json([
                'status' => true,
                'message' => 'User logged out successfully'
            ]);
        } catch (ValidationException $exception) {
            return response()->json([
                'status' => false,
                'message' => 'Sorry, the user cannot be logged out'
            ], 500);
        }
    }
}
