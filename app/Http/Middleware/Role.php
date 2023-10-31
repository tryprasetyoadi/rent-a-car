<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user = \App\Models\User::where('email', $request->email)->first();
        if ($user) {
            if ($user->levelling == 0) {
                return redirect('add-car');
            } elseif ($user->levelling == 1) {
                return redirect('/search/car');
            }
        } else {
            return redirect('login');
        }

        return $next($request);
    }
}
