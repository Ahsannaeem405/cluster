<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class InstallMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       $data=env('DB_DATABASE');
       
        if($data==null)
        {
          
            return redirect('/install');
            //dd('yes');
        }
        else{
            return $next($request);

        }
       

           // $install=$next($request);
           // return $install;
    
    
}
}