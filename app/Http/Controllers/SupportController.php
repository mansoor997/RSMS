<?php

namespace App\Http\Controllers;

use App\Support;

use Illuminate\Support\Facades\Auth;
use App\RsOffice;
use App\subUser;
 
 use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function AddResponseSupport(Request $request)
    {
        try{ 

            $thisSuppotTicket=Support::find($request['SupportID']);
            $thisSuppotTicket->admin_response=$request['admin_respnse'];
            $thisSuppotTicket->status="UPDATED";
            $thisSuppotTicket->save();
            toastr()->success("تم تحديث حالة التذكره بنجاح");
            
            return redirect()->route('home');
            
 
        }catch (\Exception $e)
            {

                     dd($e);

             }

    }
    public function SupportTicketAdmin($id)
    {
        try{ 

            $thisSuppotTicket=Support::find($id);

            return view('ADMIN_DASHBOARD.SUPPORT_SECTION.response',compact('thisSuppotTicket'));

        }catch (\Exception $e) {

            dd($e);
             }
    }
    
    public function SupportRequests()
    {
        try{
             
            //add view list of support teckits to app_admin then update the status

            $listOfSupportReq=Support::all();
            
            $SupportReqs = collect();

            foreach($listOfSupportReq as $item)
            {
                $thisRS=RsOffice::find($item['rs_offices_id']);
                $statsReq="";
                if($item['status']=="PEDDING")
                {

                    $statsReq='<span class="badge badge-pill badge-warning">قيد المراجعة</span>';

                }else{
                    $statsReq=' <span class="badge badge-pill badge-success">تمة المراجعة</span>';

                }
                $SupportReqs->push([
                    'RS_LOGO'=>  '/RS_logos/'.$thisRS['company_logo'],
                    'RS_NAME'=>  $thisRS['Company_name'],
                    'SUPPOT_TYPE'=>  $item['type'],
                    'SUBJECT'=>  $item['subject'],
                    'CONTENT'=>  $item['content'],
                    'STATUS'=>  $statsReq,
                    'id'=>  $item['id'],
                          ]);

            }
            $SupportReqs->all();

         
        return view('ADMIN_DASHBOARD.SUPPORT_SECTION.index',compact('SupportReqs'));

        }catch (\Exception $e) {

      dd($e);
       }
    }


    public function index()
    {
        try{
            $email = Auth::user()->email;
            $subUser=subUser::where('email',$email)->first();
            $CurrentRS=RsOffice::find($subUser['rs_offices_id']);
            
               $MyTickets=Support::where("rs_offices_id",$CurrentRS->id)->get();
            

            return view('RS_DASHBOARD.SUPPORT_SECTION.index',compact('MyTickets'));

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
               
            

            return view('RS_DASHBOARD.SUPPORT_SECTION.create');

        }catch (\Exception $e) {

      dd($e);
       }
    }


    public function SupportTicket($id)
    {
        try{
               
            $ThisTicket=Support::find($id);

            return view('RS_DASHBOARD.SUPPORT_SECTION.SupportTicket',compact('ThisTicket'));

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
            $CurrentRS=RsOffice::find($subUser['rs_offices_id']);
            
            $Support =new Support();
            $Support->rs_offices_id = $CurrentRS->id;
            $Support->type =  $request['type'];
            $Support->level =  "0";
            $Support->subject =  $request['subject'];
            $Support->content =  $request['content'];
            $Support->status = "PEDDING";
            $Support->admin_response = "PEDDING";
            $Support->save();

            toastr()->success("تم اضافة التذكرة بنجاح");
            
            return redirect()->route('home');
            
        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function show(Support $support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function edit(Support $support)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Support $support)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function destroy(Support $support)
    {
        //
    }
}
