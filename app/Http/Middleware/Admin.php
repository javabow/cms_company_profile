<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class Admin
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 1) {
            return $next($request);
        }

        $destinations = [
            2 => 'dashboard_index',
        ];

        Session::flash('message', 'Anda tidak diperkenankan menambah user !');
        Session::flash('alert-class', 'alert-danger');

        return redirect(route($destinations[Auth::user()->role]));
    }

}
