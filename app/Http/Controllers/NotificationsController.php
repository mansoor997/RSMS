<?php

namespace App\Http\Controllers;

use App\Notifications;
use Illuminate\Http\Request;
use App\subscription;
use App\subUser;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
 
            
        }catch (\Exception $e) {

      dd($e);
       }
    }



    public function NotifSeen()
    {
        try{
            $email = Auth::user()->email;
            $subUser=subUser::where('email',$email)->first();
            
            $MyNotifications=Notifications::where('rs_offices_id',$subUser['rs_offices_id'])
            ->update(['seen' => ('YES')]);

            toastr()->success("تم قراءة جميع التنبيهات ");


            return redirect()->route('home');



            
        }catch (\Exception $e) {

      dd($e);
       }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{

            return view('ADMIN_DASHBOARD.NOTIFICATION_SECTION.create');


            
        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            if($request["SubsType"]=="free")
            {
                $freeSubs = subscription::select('rs_offices_id')->where("subscriptions_type","free")->distinct()->get();
              
                foreach($freeSubs as $item){


                $Notif = new Notifications;
                $Notif->rs_offices_id=$item['rs_offices_id']; 
                $Notif->subject= $request['subject'];
                $Notif->content= $request['content'];
                $Notif->seen="NO";
                 $Notif->save();

                }

                toastr()->success("تم ارسال التنبية للمشتركين");


                return redirect()->route('home');


            }
            if($request["SubsType"]=="6")
            {
                $M6 = subscription::select('rs_offices_id')->where("subscriptions_type","6")->distinct()->get();
               
                foreach($M6 as $item){


                    $Notif = new Notifications;
                    $Notif->rs_offices_id=$item['rs_offices_id']; 
                    $Notif->subject= $request['subject'];
                    $Notif->content= $request['content'];
                    $Notif->seen="NO";
                     $Notif->save();
    
                    }
                    toastr()->success("تم ارسال التنبية للمشتركين");


                    return redirect()->route('home');
    

            }
            if($request["SubsType"]=="12")
            {
                $M12 = subscription::select('rs_offices_id')->where("subscriptions_type","12")->distinct()->get();
               
                foreach($M12 as $item){


                    $Notif = new Notifications;
                    $Notif->rs_offices_id=$item['rs_offices_id']; 
                    $Notif->subject= $request['subject'];
                    $Notif->content= $request['content'];
                    $Notif->seen="NO";
                     $Notif->save();
    
                    }
                    toastr()->success("تم ارسال التنبية للمشتركين");


                    return redirect()->route('home');
    

            }

            if($request["SubsType"]=="all")
            {
                $M12 = subscription::select('rs_offices_id')->distinct()->get();
               
                foreach($M12 as $item){


                    $Notif = new Notifications;
                    $Notif->rs_offices_id=$item['rs_offices_id']; 
                    $Notif->subject= $request['subject'];
                    $Notif->content= $request['content'];
                    $Notif->seen="NO";
                     $Notif->save();
    
                    }
                    toastr()->success("تم ارسال التنبية للمشتركين");


                    return redirect()->route('home');
    

            }


            
        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function show(Notifications $notifications)
    {
        try{


        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function edit(Notifications $notifications)
    {
        try{

            
        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notifications $notifications)
    {
        try{

            
        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notifications $notifications)
    {
        try{

            
        }catch (\Exception $e) {

      dd($e);
       }
    }
}
