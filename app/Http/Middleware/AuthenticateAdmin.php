<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {

            return redirect('admin/login')->withErrors([

                "message" => "Please Sign in to continue",
            ]);
        } else {
            if($request->user()->is_admin!='1'){
                Auth::logout();
                return redirect()->guest('admin/login')->withErrors([

                    "message" => "User not authorized",
                ]);
            }
        }

        return $next($request);
    }
}
