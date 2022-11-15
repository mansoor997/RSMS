<?php

namespace App\Http\Controllers;

use App\complains;
use App\renter;
use App\UsersRoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\subUser;
 
class ComplainsController extends Controller
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
            /*
                next todo
                 
                2-start with app_owner role 
                    2.1-add RS office from owner side (DONE - list of RSOffices)
                    2.2-handle support request from RS offices
                    2.3-handle subscription requests
                    2.4-add notifcations 


            */
            $email = Auth::user()->email;

            //$getUserRole=UsersRoles::where('email',$email)->first();

            $getRSOfficeId=subUser::where('email',$email)->first();
           
            $getRenterIDs=renter::where('rs_offices_id',$getRSOfficeId['rs_offices_id'])->pluck('id');
          
           

            $getMyRenterComplains=complains::whereIn('renters_id',$getRenterIDs)->get();

            //srart to prepare complains list chech what return need based on view below :)
            $MyRentersComplains = collect();

            foreach($getMyRenterComplains as $item)
            {
                $thisRenter=renter::find($item['renters_id']);

                $MyRentersComplains->push([
                    'id'=> $item['id'],
                    'RenterName'=> $thisRenter['name'],
                    'subject'=> $item['subject'],
                    'attachment'=> $item['attachment'],
                    'content'=> $item['content'],
                    'RS_Office_response'=> $item['RS_Office_response'],
  
                        ]);
            }
            $MyRentersComplains->all();
              
           
            return view('RS_DASHBOARD.COMPLAINS_SECTION.index',compact('MyRentersComplains'));
 



        }catch (\Exception $e)
         { 
             
            dd($e); 
         }
    }



    public function response($id)
    {
        try
        {   
            $getMyRenterComplain=complains::find($id);
            if($getMyRenterComplain==null)
            {
                dd("null");
            }

            return view('RS_DASHBOARD.COMPLAINS_SECTION.response',compact('getMyRenterComplain'));

         }catch (\Exception $e)
            { 
                
            dd($e); 
            }
    }
    public function AddResponse(Request $request)
    {

        try
        {   
            $getMyRenterComplain=complains::find($request['CompainID']);
            $getMyRenterComplain->RS_Office_response=$request['RS_Office_response'];
            $getMyRenterComplain->save();

            toastr()->success("تم الرد على الشكوى بنجاح");
            return \Redirect::route('Complains.index');

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
    public function AddComplains()
    {
        return view('RENTER_DASHBORD.AddComplains');
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
            "attachment" => 'mimes:pdf|max:2048',

         ],
        [
            "attachment.mimes"=>"يسمح فقط في ملف PDF ",
           ] 
       );
       
       try{
        $email = Auth::user()->email;

        $getUserRole=UsersRoles::where('email',$email)->first();

        
        if($getUserRole['role']=="RENTER")
        {
            $ComplainsFile="لا يوجد مرفقات";
            if($request['attachment']!=null)
            {
                $ComplainsFile = time().'.'.$request['attachment']->extension();
           
                $upload= $request['attachment']->move(public_path('ComplainsFiles'), $ComplainsFile);
    

            }
           
           
            $thisREnter=renter::where('email',$email)->first();
            $complains = new complains;
            $complains->renters_id=$thisREnter['id'];
            $complains->subject=$request['subject'];
            $complains->content=$request['content'];
            $complains->attachment= $ComplainsFile;
            $complains->RS_Office_response= "تم استلامها من مكتب العقار";
            $complains->save();

            toastr()->success("تم رفع الشكوى بنجاح");
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
     * @param  \App\complains  $complains
     * @return \Illuminate\Http\Response
     */
    public function show(complains $complains)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\complains  $complains
     * @return \Illuminate\Http\Response
     */
    public function edit(complains $complains)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\complains  $complains
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, complains $complains)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\complains  $complains
     * @return \Illuminate\Http\Response
     */
    public function destroy(complains $complains)
    {
        //
    }
}
