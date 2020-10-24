<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();
            return response()->json([
                'message' => "Already logged in",
                'user_id' => $user->id,
                'name' => $user->name,
                'token' => $user->get_api_token(),
            ], 200);
        }

        return $next($request);
    }
}
