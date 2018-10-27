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
        //validar rol:
        // if($request->user()->role !== $role) {
        //     return redirect('/');
        // }

        //mejor manera de validar es con funcion
        if (!$request->user()->hasRole($role)) {
            return abort(404);
        }

        return $next($request);
    }
}
