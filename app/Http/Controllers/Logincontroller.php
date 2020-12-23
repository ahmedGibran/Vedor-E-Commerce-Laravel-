<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function loginuser(Request $request){
        $email=$request->email;
        $password=$request->password;
        if (Auth::attempt(['email'=>$email,'password'=>$password])){
            return response()->json(['success' => true]);
        } else{
            return response()->json(['success' => false]);

        }

    }

    public function viewlogin(Request $request){

return view('admin.admin.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        //return Hash::make($password);
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $role = Auth::user()->role_id;
            if($role == 1)
            {
                return view('admin.blank');
            }else{
                $categpry = Category::with(['product'])->paginate(env('paginate_code'));
                return view('admin.admin.index',['category'=>$categpry]);
            }
        }
        return redirect()->back();
    }
}
