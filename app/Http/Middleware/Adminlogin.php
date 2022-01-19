<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Adminlogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->admin()->role=='admin')
        {
            return $next($request);
        }
        else{
            return redirect()->route('admin')->with('success','Permission denied!!');
        }
    }
}
