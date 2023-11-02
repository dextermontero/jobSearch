<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

use Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if(auth('web')->check()){
            return route('login');
        }else if(auth('recruiter')->check()){
            return route('recruiter_login');
        }else {
            return route('login');
        }
        return $request->expectsJson() ? null : route('login');
    }
}
