<?php

namespace App\Http\Middleware;

use Closure;
 use App\subscription;
 use Carbon\Carbon;
use App\UsersRoles;
use Illuminate\Support\Facades\Auth;
use App\subUser;
class CheckEndOfSubscription
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

        $getUSerType=UsersRoles::where('email',$email)->first();

        if($getUSerType['role']=="RENTER" or $getUSerType['role']=="APP_ADMIN" )
        {

            return $next($request);


        }else{

            $getOfficeID=subUser::where('email',$email)->first();
            
            //$today=Carbon::today()->toDateString();
    
            /*
                   $LastSubscription=subscription::where('rs_offices_id',$getOfficeID['rs_offices_id'])
                                             ->orderBy('date_end','DESC')
                                            ->whereDate('date_end',$today)
                                            ->OrwhereDate('date_end','<',$today)        
                                            ->first();     
            
            */

     //return DB::table('files')->latest('upload_time')->first();

     /*
     
          $test=subscription::where('rs_offices_id',$getOfficeID['rs_offices_id'])
     ->where( function ( $query )
     {
        $today=Carbon::today()->toDateString();

         $query->whereDate('date_end','<=',$today);
              
     })
     //->where( 'status', '==', 'Active' )
     ->first();
     */

    $Active=subscription::where('rs_offices_id',$getOfficeID['rs_offices_id'])
                      ->where( 'status', 'Active' )
                      ->count();

     $InActive=subscription::where('rs_offices_id',$getOfficeID['rs_offices_id'])
     ->where( 'status', 'InActive' )
     ->count();

 
     
           if($Active >= 1)
                {
                   
                 return $next($request);
 
                }

            if($InActive >= 1)
                {
                 
                return \Redirect::route('endOfSubscription');
 
            }
           
        }



        return $next($request);
    }
}
