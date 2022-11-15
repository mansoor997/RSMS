<?php

namespace App\Http\Controllers;

use App\owners_proparties;
use Illuminate\Http\Request;
use App\subUser;

class OwnersPropartiesController extends Controller
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
            "google_maps" => ['required', 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'] 
         ],
        [
            "google_maps.regex"=>"الرجاء ادخال رابط موقع العقار في قوقل ماب" 
         ] 
       ); 
        try{

       
                
                $OwnerProp= new owners_proparties;
                $OwnerProp->owners_id=$request['owners_id'];
                $OwnerProp->name=$request['name'];
                $OwnerProp->type=$request['type'];
                $OwnerProp->city=$request['city'];
                $OwnerProp->deed_number=$request['deed_number'];
                $OwnerProp->google_maps=$request['google_maps'];
                $OwnerProp->save();
                toastr()->success("تم اضافة عقار جديد بنجاح");


                return redirect()->route('OwnerProfile',$request['owners_id']);
            

 
        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\owners_proparties  $owners_proparties
     * @return \Illuminate\Http\Response
     */
    public function show(owners_proparties $owners_proparties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\owners_proparties  $owners_proparties
     * @return \Illuminate\Http\Response
     */
    public function edit(owners_proparties $owners_proparties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\owners_proparties  $owners_proparties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, owners_proparties $owners_proparties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\owners_proparties  $owners_proparties
     * @return \Illuminate\Http\Response
     */
    public function destroy(owners_proparties $owners_proparties)
    {
        //
    }
}
