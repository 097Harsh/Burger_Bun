<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        /*
        if (!Session::has('user_id')) {
            return redirect('admin_login')->with('fail', 'Please login first...');
        }
        */

        if (!Session::has('user_id')) {
            return redirect('login')->with('fail','Please login first...');
        }


        // Redirect to the admin login page if not authenticated
        return $next($request);
        
       
   
        /*
        if (!Session::has('user_id')) {
            return redirect('admin_login')->with('fail','Please login first...');
        }


        // Redirect to the admin login page if not authenticated
        return $next($request);*/
    }

}
