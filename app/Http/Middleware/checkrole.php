<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request,Closure $next,$role){   
               if(Auth::check()==false || Auth::user()->$role !=true)
               {
                    return redirect('/');
                }
               
            return $next($request); 

}
}
