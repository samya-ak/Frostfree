<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $role = explode('|', $role);
        if(checkRole($role)){
            return $next($request);
        }
        return response()->view('errors.check-role');
    }
}
