<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class users_is_role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $user =Auth::user();
        if ($user){
        $roles1 = $user->rolen;
        foreach($roles1 as $role){
if ($role->role=='Admin'){
   // return $next($request);
return redirect(route('admin'));
}}

    }
        return redirect(route('home'));

    }
}
