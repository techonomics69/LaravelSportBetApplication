<?php

namespace App\Http\Middleware;

use Closure;

class WithdrawAdminAuth
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
        if ($request->user()->role_id > 4) {
            return redirect('/');
        }

        return $next($request);
    }
}
