<?php

namespace App\Http\Controllers;

use App\renter_doc;
use App\renter;
use App\RsOffice;
use App\UsersRoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\subUser;

class RenterDocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function AddDoc()
    {
        
        return view('RENTER_DASHBORD.AddDoc');
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
            "name" => 'required|mimes:pdf|max:2048',

         ],
        [
            "name.mimes"=>"يسمح فقط في ملف PDF ",
            "name.required"=>"يجب رفع الملف",
          ] 
       ); 


        try{
            $email = Auth::user()->email;

            $getUserRole=UsersRoles::where('email',$email)->first();

            
            if($getUserRole['role']=="RENTER")
            {
   
                $RenterDocFile = time().'.'.$request['name']->extension();
               
                $upload= $request['name']->move(public_path('Renter_docs'), $RenterDocFile);
               
               
                $thisREnter=renter::where('email',$email)->first();
                $renter_doc = new renter_doc;
                $renter_doc->renters_id=$thisREnter['id'];
                $renter_doc->name=$RenterDocFile;
                $renter_doc->type=$request['type'];
                $renter_doc->upload_by= $thisREnter['name'];
                $renter_doc->save();

                toastr()->success("تم اضافة الوثيقة بنجاح");
                return \Redirect::route('home');

            }else{

                $RenterDocFile = time().'.'.$request['name']->extension();
               
                $upload= $request['name']->move(public_path('Renter_docs'), $RenterDocFile);
    
    
                $subUser=subUser::where('email',$email)->first();
                $CurrentRS=RsOffice::find($subUser['rs_offices_id']);
                
    
                $thisREnter=renter::find($request['renter_id']);
                $renter_doc = new renter_doc;
                $renter_doc->renters_id=$thisREnter->id;
                $renter_doc->name=$RenterDocFile;
                $renter_doc->type=$request['type'];
                $renter_doc->upload_by= $CurrentRS['Company_name'];
                $renter_doc->save();
    
                toastr()->success("تم اضافة الوثيقة بنجاح");
                return \Redirect::route('RenterProfile', $request['renter_id']);

                

            }

           
    
            

        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\renter_doc  $renter_doc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            if(empty($id))
            {
                dd("GO TO page ERROR");
            }else{
                
                return view('RS_DASHBOARD.RENTER_SECTION.AddDoc',compact('id'));

            }


 
        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\renter_doc  $renter_doc
     * @return \Illuminate\Http\Response
     */
    public function edit(renter_doc $renter_doc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\renter_doc  $renter_doc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, renter_doc $renter_doc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\renter_doc  $renter_doc
     * @return \Illuminate\Http\Response
     */
    public function destroy(renter_doc $renter_doc)
    {
        //
    }
}
