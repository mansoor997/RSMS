<?php

namespace App\Http\Controllers;

use App\owner;
use App\owners_proparties;
use Illuminate\Http\Request;
use App\RsOffice;
use App\subUser;
use App\User;
use App\subscription;
use App\UsersRoles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class OwnerController extends Controller
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

            $MyOWners=owner::where('rs_offices_id',$CurrentRS->id)->withCount('proparties')->get();
           

            return view('RS_DASHBOARD.OWNER_SECTION.index',compact('MyOWners'));

        }catch (\Exception $e) {

      dd($e);
       }
    }
    public function AddProparties($id)
    {
        try{
            if(empty($id))
            {
                dd("GO TO page ERROR");
            }else{
                
                return view('RS_DASHBOARD.OWNER_SECTION.AddOwnerPropartie',compact('id'));

            }


 
        }catch (\Exception $e) {

      dd($e);
       }
    }



    public function OwnerProfile($id)
    {
        try{
            if(empty($id))
            {
                dd("GO TO page ERROR");
            }else{
                $theOwner=owner::where('id',$id)->withCount('proparties')->first();
                
               


                $OwnerProparties=owners_proparties::where('owners_id',$id)->get();


                return view('RS_DASHBOARD.OWNER_SECTION.OwnerProparties',compact('theOwner','OwnerProparties'));

            }


 
        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListOfBuildings()
    {
        try{
            $email = Auth::user()->email;
            $subUser=subUser::where('email',$email)->first();
            $CurrentRS=RsOffice::find($subUser['rs_offices_id']);

            $MyOWnersId=owner::where('rs_offices_id',$CurrentRS->id)->pluck('id');

            $listOfOwnersBuilding=owners_proparties::whereIn('owners_id',$MyOWnersId)->get();
            $BuildinsInfo = collect();

            foreach($listOfOwnersBuilding as $LWB)
            {
                $ThisOwner=owner::find($LWB['owners_id']);
                $BuildinsInfo->push([
                    'id'=> $LWB['id'],
                    'name'=> $LWB['name'],
                    'type'=> $LWB['type'],
                    'city'=> $LWB['city'],
                    'deed_number'=>$LWB['deed_number'],
                    'google_maps'=> $LWB['google_maps'],
                    'OwnerName'=> $ThisOwner['name'],

                        ]);


            }
            $BuildinsInfo->all();


        
              return view('RS_DASHBOARD.OWNER_SECTION.BuildingList',compact('BuildinsInfo'));

          }catch (\Exception $e) {

        dd($e);
         }
    }


    public function create()
    {
        try{

              return view('RS_DASHBOARD.OWNER_SECTION.create');

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
            
            $owner =new owner();
            $owner->rs_offices_id = $CurrentRS->id;
            $owner->name =  $request['name'];
            $owner->phone_number = $request['phone_number'];
            $owner->email = $request['email'];
            $owner->city = $request['city'];
            $owner->save();
            toastr()->success("تم اضافة مالك عقار بنجاح");
            
            return redirect()->route('home');
            
        }catch (\Exception $e) {

      dd($e);
       }
    }






    /**
     * Display the specified resource.
     *
     * @param  \App\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, owner $owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(owner $owner)
    {
        //
    }



}
