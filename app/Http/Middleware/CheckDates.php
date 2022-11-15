<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\renter_contract;
use App\payments_pirod;
use App\subscription;

class CheckDates
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
        $today=Carbon::today()->toDateString();
        //dd($today);
        $all_conts=renter_contract::whereDate('rent_end_date','<',$today)
                                  ->update(['status' => ('inactive')]);
               
         $all_payments=payments_pirod::where('status',"PENDING")
                                     ->whereDate('payment_dueDate',"<=",$today)
                                     ->update([ 'status' => ('NOT_COLLECTED')]);
                 

         $all_subscriptions=subscription::where('status',"Active")
                                        ->whereDate('date_end','<=',$today)
                                         ->update([ 'status' => ('InActive')]);


          return $next($request);
    }
}
