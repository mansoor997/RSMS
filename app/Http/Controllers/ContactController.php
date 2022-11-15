<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;
use App\RsOffice;
use App\subUser;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
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
            $CurrentRS=RsOffice::find($subUser['rs_offices_id']);
            
            $MyContracts=contact::where('rs_offices_id',$CurrentRS->id)->get();
           


            return view("RS_DASHBOARD.CONTACT_SECTION.index",compact('MyContracts'));
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



            return view("RS_DASHBOARD.CONTACT_SECTION.create");
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
            

            $contact =new contact();
            $contact->rs_offices_id = $CurrentRS->id;
            $contact->name =  $request['name'];
            $contact->phone_number = $request['phone_number'];
            $contact->description = $request['description'];
             $contact->save();
            toastr()->success("تم اضافة جهة اتصال بنجاح");
            
            return redirect()->route('home');

            return view("RS_DASHBOARD.CONTACT_SECTION.create");
        }catch (\Exception $e) {

            dd($e);
             }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
