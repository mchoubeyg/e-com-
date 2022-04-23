<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class UserAuth
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

/*
        if(Session()->has('user') && (url('login')==$request->url() || url('registration')==$request->url()))  {
        
            return back();
        }
      /*  
      if($request->path()=="login" && $request->session()->isMethod('post'))
        {

             $request->validate([
          'email'=> 'required',
        'password'=> 'required',
        ]);
           
        }
        */
        
       
        if(($request->path()=="login" || $request->path()=="registration" ) && $request->session()->has('user'))
        {
            
            $request->validate([
                'email'=> 'required',
              'password'=> 'required',
              ]);

            return redirect('/');
        }
        return $next($request);
        
    }
    
}
