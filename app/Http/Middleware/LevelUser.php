<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LevelUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$level)
    {
        if (in_array($request->user('admin')->role, $level)) {
            # code...
            return $next($request);
        }
        return abort(401, 'You didnt have an access to this page!');
    }
}
