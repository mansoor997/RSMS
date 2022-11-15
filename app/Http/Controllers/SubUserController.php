<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\RsOffice;
use App\User;
use Illuminate\Support\Facades\Hash;

use App\subUser;
use App\UsersRoles;
use Illuminate\Http\Request;

class SubUserController extends Controller
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
            
            $MysubUser=subUser::where('rs_offices_id',$CurrentRS->id)->get();

           
            

            return view('RS_DASHBOARD.SUBUSER_SECTION.index',compact('MysubUser'));

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
               
            

            return view('RS_DASHBOARD.SUBUSER_SECTION.create');

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
        $this->validate($request,
        [
            "email" => "unique:users",
         ],
        [
            "email.unique"=>"البريد الاكتروني مستخدم مسبقاً في النظام،فضلاً استخدم بريد الكتروني اخر",
          ] 
       ); 

        try{
          
            $email = Auth::user()->email;
            $subUser=subUser::where('email',$email)->first();
            $CurrentRS=RsOffice::find($subUser['rs_offices_id']);
            
    
         
            $User = new User;
            $User->name=$request['name'];
            $User->email=$request['email'];
            $User->password=Hash::make($request['password']);
            $User->save();

            $UsersRoles = new UsersRoles;
            $UsersRoles->email=$request['email'];
            $UsersRoles->role="RS_EMPLOYEE";
            $UsersRoles->save();

            $subUser = new subUser;
            $subUser->rs_offices_id=$CurrentRS['id'];
            $subUser->email=$request['email'];
            $subUser->password=$request['password'];
            
            if($request->has('owners')) {
                $subUser->owners=$request['owners'];
                }else{
                    $subUser->owners="off";
                }

           if($request->has('renters')) {
            $subUser->renters=$request['renters'];
            }else{
                $subUser->renters="off";
            }

            
            if($request->has('CRM')) {
                $subUser->CRM=$request['CRM'];
                }else{
                    $subUser->CRM="off";
                }
                
            if($request->has('tells')) {
                $subUser->tells=$request['tells'];
            }else{
            $subUser->tells="off";
            }

            if($request->has('subusers')) {
                $subUser->subusers=$request['subusers'];
            }else{
            $subUser->subusers="off";
            }
                
                
            if($request->has('support')) {
                $subUser->support=$request['support'];
            }else{
            $subUser->support="off";
            }
                
            if($request->has('subscriptions')) {
                $subUser->subscriptions=$request['subscriptions'];
            }else{
            $subUser->subscriptions="off";
            } 


 
            $subUser->accountant="off";
            
            $subUser->bills="off";
          
            
           
     
            $subUser->userType="RS_EMPLOYEE";
            $subUser->save();


         

            toastr()->success("تم اضافة المستخدم بنجاح");
            
            return redirect()->route('home');


          

        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subUser  $subUser
     * @return \Illuminate\Http\Response
     */
    public function show(subUser $subUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subUser  $subUser
     * @return \Illuminate\Http\Response
     */
    public function edit(subUser $subUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subUser  $subUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subUser $subUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subUser  $subUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(subUser $subUser)
    {
        //
    }
}
