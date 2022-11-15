<?php

namespace App\Http\Controllers;

use App\subscription_requests;
use App\subUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\RsOffice;
use App\subscription;
use Carbon\Carbon;

class SubscriptionRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        try{
            $email = Auth::user()->email;
            $subUser=subUser::where('email',$email)->first();
           
            

            $subscription_requests =subscription_requests::where('rs_offices_id',$subUser['rs_offices_id'])->get();

          
            return view('RS_DASHBOARD.SUBSCRIPTION_SECTION.index',compact('subscription_requests'));
              
             

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
            
          
            return view('RS_DASHBOARD.SUBSCRIPTION_SECTION.create');
              
             

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
            $email = Auth::user()->email;
            $subUser=subUser::where('email',$email)->first();
            
            

            $subscription_requests = new subscription_requests();
            $subscription_requests->rs_offices_id = $subUser['rs_offices_id'];
            $subscription_requests->subscription_type =  $request['subscription_type'];
            $subscription_requests->status =  "PENDING";
            $subscription_requests->save();
            toastr()->success("تم ارسال طلب الاشتراك بنجاح");
            
            return redirect()->route('home');
              
             

        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subscription_requests  $subscription_requests
     * @return \Illuminate\Http\Response
     */
    public function show(subscription_requests $subscription_requests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subscription_requests  $subscription_requests
     * @return \Illuminate\Http\Response
     */
    public function edit(subscription_requests $subscription_requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subscription_requests  $subscription_requests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subscription_requests $subscription_requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subscription_requests  $subscription_requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(subscription_requests $subscription_requests)
    {
        //
    }


    public function ListOdRenewSubsReq()
    {

     try{

        $ListOfPendingRenewSbus=subscription_requests::where('status','PENDING')->get();

        $PendingRenewSbus = collect();

        foreach($ListOfPendingRenewSbus as $item)
        {

            $SubType="";
            if($item['subscription_type']=="6")
            {
                $SubType=' <span class="badge badge-pill badge-warning">٦ شهور</span>';


            } 
            if($item['subscription_type']=="12")
            {
                $SubType=' <span class="badge badge-pill badge-success">سنة</span>';


            } 


            $thisRS=RsOffice::find($item['rs_offices_id']);
            $PendingRenewSbus->push([
                'company_logo'=> '/RS_logos/'.$thisRS['company_logo'] ,
                'Company_name'=>  $thisRS['Company_name'],
                'presenter_name'=>  $thisRS['presenter_name'],
                'presenter_number'=>  $thisRS['presenter_number'],
                'presenter_email'=>  $thisRS['presenter_email'],
                'subscription_type'=>  $SubType,
                'created_at'=>  $item['created_at'],
                'id'=>  $item['id'],

                      ]);


        }
        $PendingRenewSbus->all();


        $ListOfAcceptedRenewSbus=subscription_requests::where('status','Accepted')->get();

        $AcceptedRenewSbus = collect();

        foreach($ListOfAcceptedRenewSbus as $item)
        {
            $SubType="";
            if($item['subscription_type']=="6")
            {
                $SubType=' <span class="badge badge-pill badge-warning">٦ شهور</span>';


            } 
            if($item['subscription_type']=="12")
            {
                $SubType=' <span class="badge badge-pill badge-success">سنة</span>';


            }
            $thisRS=RsOffice::find($item['rs_offices_id']);
            $AcceptedRenewSbus->push([
                'company_logo'=> '/RS_logos/'.$thisRS['company_logo'] ,
                'Company_name'=>  $thisRS['Company_name'],
                'presenter_name'=>  $thisRS['presenter_name'],
                'presenter_number'=>  $thisRS['presenter_number'],
                'presenter_email'=>  $thisRS['presenter_email'],
                'subscription_type'=>  $SubType,
                'created_at'=>  $item['created_at'],
                'id'=>  $item['id'],

                      ]);


        }
        $AcceptedRenewSbus->all();



        $ListOfRejectedRenewSbus=subscription_requests::where('status','Rejected')->get();
 
        $RejectedRenewSbus = collect();

        foreach($ListOfRejectedRenewSbus as $item)
        {
            $SubType="";
            if($item['subscription_type']=="6")
            {
                $SubType=' <span class="badge badge-pill badge-warning">٦ شهور</span>';


            } 
            if($item['subscription_type']=="12")
            {
                $SubType=' <span class="badge badge-pill badge-success">سنة</span>';


            }
            $thisRS=RsOffice::find($item['rs_offices_id']);
            $RejectedRenewSbus->push([
                'company_logo'=> '/RS_logos/'.$thisRS['company_logo'] ,
                'Company_name'=>  $thisRS['Company_name'],
                'presenter_name'=>  $thisRS['presenter_name'],
                'presenter_number'=>  $thisRS['presenter_number'],
                'presenter_email'=>  $thisRS['presenter_email'],
                'subscription_type'=>  $SubType,
                'created_at'=>  $item['created_at'],
                'id'=>  $item['id'],

                      ]);


        }
        $RejectedRenewSbus->all();

        
                    return view('ADMIN_DASHBOARD.SUBSCRIPTION_SECTION.index',
                        compact('RejectedRenewSbus','AcceptedRenewSbus','PendingRenewSbus'));


    }catch (\Exception $e)
     {

        dd($e);
         }

    }
 


    public function RenewSubsRespons($id,$status)
    {

     try{

         
        $thisReq=subscription_requests::find($id);
        $thisReq->status=$status;
        $thisReq->save();


        if($status=="Accepted")
        {
            $all_subscriptions=subscription::where('rs_offices_id',$thisReq['rs_offices_id'])
            ->update([ 'status' => ('InActive')]);
          
            $dt = Carbon::now();
  
            $subscription = new subscription();
            $subscription->rs_offices_id=$thisReq['rs_offices_id'];
            $subscription->subscriptions_type=$thisReq['subscription_type'];
            $subscription->date_start=Carbon::now();
            $subscription->date_end=Carbon::now()->addMonth($thisReq['subscription_type']);
            $subscription->status="Active";
            $subscription->save();
  
  

        }


        toastr()->success("تم تغير حالة الطلب");
            
        return redirect()->route('ListOdRenewSubsReq');





    }catch (\Exception $e)
    {

       dd($e);
        }

   }


}
