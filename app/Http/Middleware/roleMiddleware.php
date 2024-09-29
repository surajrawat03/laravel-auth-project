<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class roleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        $user = Auth::user();
        $userRoleName = $user->roles->first()->roleName;
        if ($user && ($userRoleName == $roles || $userRoleName == 'super admin' || ($roles == 'user' && $userRoleName == 'admin'))) {
            return $next($request);
        }
        // Redirect or return a 403 unauthorized response
        return redirect()->back()->with('error', 'You do not have access to this route.');
    }
}
