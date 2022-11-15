<?php

namespace App\Http\Middleware;

use Closure;
use App\subUser;
use Illuminate\Support\Facades\Auth;
use Session;

class RoleAccessUser
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
        $email = Auth::user()->email;
        $subUser=subUser::where('email',$email)->first();
              
        if( $subUser['owners']=="on")
        {
           
            Session::put('owners', $subUser['owners']);

        }else{
            Session::put('owners', null);

        }


        if( $subUser['renters']=="on")
        {
            Session::put('renters', $subUser['renters']);

        }else{
            Session::put('renters', null);

        }
        if( $subUser['CRM']=="on")
        {
            Session::put('CRM', $subUser['CRM']);

        }else{
            Session::put('CRM', null);

        }

        if( $subUser['tells']=="on")
        {
            Session::put('tells', $subUser['tells']);

        } else{
            Session::put('tells', null);

        }


        if( $subUser['subusers']=="on")
        {
            Session::put('subusers', $subUser['subusers']);

        }else{
            Session::put('subusers', null);

        }


        if( $subUser['support']=="on")
        {
            Session::put('support', $subUser['support']);

        } else{
            Session::put('support', null);

        }

        if( $subUser['subscriptions']=="on")
        {
            Session::put('subscriptions', $subUser['subscriptions']);

        } else{
            Session::put('subscriptions', null);

        }

        return $next($request);
    }
}
