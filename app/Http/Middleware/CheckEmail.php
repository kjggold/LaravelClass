<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            $user = $request->user();

            // Not logged in → redirect to login
            if (!$user) {
                return redirect('/login')->with('error', 'Please login first');
            }

            // Only allow admin email
            if ($user->email !== 'admin@gmail.com') {
                abort(403, 'Permission denied');
            }//Authorization permission checking

            // if ($user->role !== 'Admin') {
            //     abort(403, 'Permission denied');
            // }

            return $next($request);
    }
}
