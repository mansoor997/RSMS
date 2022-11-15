<?php

namespace App\Http\Controllers;

use App\maintenance;
 use App\renter;
 use App\UsersRoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\subUser;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            
            $email = Auth::user()->email;

            //$getUserRole=UsersRoles::where('email',$email)->first();

            $getRSOfficeId=subUser::where('email',$email)->first();
           
            $getRenterIDs=renter::where('rs_offices_id',$getRSOfficeId['rs_offices_id'])->pluck('id');
          
            $getMyRenterMaintenances=maintenance::whereIn('renters_id',$getRenterIDs)->get();
            $MyRenterMaintenances = collect();

            foreach($getMyRenterMaintenances as $item)
            {
                $thisRenter=renter::find($item['renters_id']);

                $MyRenterMaintenances->push([
                    'id'=> $item['id'],
                    'RenterName'=> $thisRenter['name'],
                    'subject'=> $item['subject'],
                    'attachment'=> $item['attachment'],
                    'content'=> $item['content'],
                    'RS_Office_response'=> $item['RS_Office_response'],
  
                        ]);
            }
            $MyRenterMaintenances->all();
            
            return view('RS_DASHBOARD.MAINTANCE_SECTION.index',compact('MyRenterMaintenances'));

        }catch (\Exception $e)
         { 
             
            dd($e); 
         }
    }

    public function responseMaintenanceReq($id)
    {
        try
        {   
            $getMyRenterMaintenance=maintenance::find($id);
            if($getMyRenterMaintenance==null)
            {
                dd("null");
            }

            return view('RS_DASHBOARD.MAINTANCE_SECTION.response',compact('getMyRenterMaintenance'));

         }catch (\Exception $e)
            { 
                
            dd($e); 
            }
    }

    public function AddResponseMaintenanceReq(Request $request)
    {

        try
        {   
            $getMyRenterMaintenance=maintenance::find($request['CompainID']);
            $getMyRenterMaintenance->RS_Office_response=$request['RS_Office_response'];
            $getMyRenterMaintenance->save();

            toastr()->success("تم الرد على طلب الصيانة بنجاح");
            return \Redirect::route('Maintenance.index');

         }catch (\Exception $e)
            { 
                
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
        //
    }
    public function AddMaintenanceReq()
    {
       return view('RENTER_DASHBORD.AddMaintance');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            "attachment" => 'required|mimes:png,jpg,jpeg|max:2048',

         ],
        [
            "attachment.mimes"=>"يسمح فقط في ملف png,jpg,jpeg ",
            "attachment.required"=>"يجب رفع الملف",
          ] 
       );
       
       try{
        $email = Auth::user()->email;

        $getUserRole=UsersRoles::where('email',$email)->first();

        
        if($getUserRole['role']=="RENTER")
        {

            $MaintenanceFile = time().'.'.$request['attachment']->extension();
           
            $upload= $request['attachment']->move(public_path('MaintenanceFiles'), $MaintenanceFile);
           
           
            $thisREnter=renter::where('email',$email)->first();
            $maintenance = new maintenance;
            $maintenance->renters_id=$thisREnter['id'];
            $maintenance->subject=$request['subject'];
            $maintenance->content=$request['content'];
            $maintenance->attachment= $MaintenanceFile;
            $maintenance->RS_Office_response= "تم استلامها من مكتب العقار";
            $maintenance->save();

            toastr()->success("تم رفع طلب الصيانه بنجاح");
            return \Redirect::route('home');

        }else{

            toastr()->error("لا تمتلك صلاحية لرفع طلب صيانه");
            return \Redirect::route('home');

            

        }

       

        

    }catch (\Exception $e) {

  dd($e);
   }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, maintenance $maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(maintenance $maintenance)
    {
        //
    }
}
