<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class Emaileverified
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
        $user = Auth::user();
        if (! $user->email_verified){
            return redirect(\route('login'));
        }
        return $next($request);
    }
}
