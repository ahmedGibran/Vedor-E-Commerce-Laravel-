<?php

namespace App\Http\Controllers;

use App\pharmacy;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

    public function pharmacy_index()
    {
        $pharmacies = pharmacy::query()->where('status','مفعل')->get();
        return view('admin.pharmacy',['pharmacies' => $pharmacies]);
    }

    public function pharmacy_create()
    {
        $users = User::query()->where('role',2)->get();
        return view('admin.pharmacy_form',['phar_owners' => $users]);
    }

    public function pharmacy_add(Request $request)
    {
        pharmacy::query()->create($request->toArray());
        return redirect()->to(url('admin/view/pharmacy'));
    }

    public function pharmacy_edit(Request $request,$id)
    {
        $pharmacy = pharmacy::query()->find($id);
        $users = User::query()->where('role',2)->get();
        return view('admin.pharmacy_update_form',['phar_owners' => $users,'phar' => $pharmacy]);
    }

    public function pharmacy_update(Request $request,$id)
    {
        $pharmacy = pharmacy::query()->find($id);
        $pharmacy->update($request->toArray());
        return redirect()->to(url('admin/view/pharmacy'));
    }
    public function pharmacy_delete(Request $request,$id)
    {
        $pharmacy = pharmacy::query()->find($id);
        $pharmacy->update(['status' => 'محذوف']);
        return redirect()->to(url('admin/view/pharmacy'));
    }
}
