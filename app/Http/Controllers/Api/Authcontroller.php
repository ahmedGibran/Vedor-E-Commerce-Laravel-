<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserApiResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    public function register(Request $request){
$request->validate([
    'first_name' => 'required',
    'last_name' => 'required',
    'email' => 'required',
    'password' => 'required',

]);
 $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->api_token =bin2hex(openssl_random_pseudo_bytes(30));
        $user->save();
        return new UserApiResource($user);
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $email=$request->email;
        $password=$request->password;
        if (Auth::attempt(['email'=>$email,'password'=>$password])){
            $user = User::query()->where('email',$email)->get();
            return response()->json(['success'=>$user]);
            //  return response()->json(['success' => true]);

        } else{
            return response()->json([
                'message' => 'Page Not Found. If error persists, contact ahmedgpraan@gmail.com'], 404);
          // return response()->isClientError();
         //   return response()->json(['success'=>true]);
        }
    }
}
