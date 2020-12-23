<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::with(['users'])->paginate(env('paginate_code'));
        return view('admin.roles.role',['role'=>$roles]);
    }
   /*public static function deleted(Request $request,$id){
       // $id=$request->input($id);
        $role= Role::query()->find($id);
        $role->delete();
       // Role::destroy($id);
return redirect()->to(url('/home/role'));
    }
    */

    public function deleted($id)
    {
        $role = Role::query()->find($id);
        $role->delete();
        return redirect()->back();
    }

        public function viewtablestore( )
    { $roles = Role::all();

        return view('Admin.roles.table',['role'=>$roles]);
    }
}
