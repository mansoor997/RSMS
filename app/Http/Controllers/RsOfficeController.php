<?php

namespace App\Http\Controllers;

use App\RsOffice;
use Illuminate\Http\Request;
 use App\subUser;
use App\User;
use App\subscription;
use App\UsersRoles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class RsOfficeController extends Controller
{
  
    public function index()
    {
        // work in RS offices list based on view table need,
    }

 
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }

 
    public function show(RsOffice $rsOffice)
    {
        //
    }

 
    public function edit(RsOffice $rsOffice)
    {
        //
    }

 
    public function update(Request $request, RsOffice $rsOffice)
    {
        //
    }

 
    public function destroy(RsOffice $rsOffice)
    {
        //
    }

    public function RSOfficesList()
    {
        try{

            $ListOfRealeStateOffices=RsOffice::all();

            $RSOfficesList = collect();

            foreach($ListOfRealeStateOffices as $RSF)
            {
                $subscriptionType="";
                $status="";
                $date_start="";
                $date_end="";
                $ShowSubscriptionType="";

                $Active=subscription::where('rs_offices_id',$RSF['id'])
                ->where( 'status', 'Active' )
                ->latest('date_end')
                ->first();
  
                $InActive=subscription::where('rs_offices_id',$RSF['id'])
                ->where( 'status', 'InActive' )
                ->latest('date_end')
                ->first();

                if($Active != null)
                {
                 $subscriptionType=$Active['subscriptions_type'];
                $status=$Active['status'];
                $date_start=$Active['date_start'];
                $date_end=$Active['date_end'];
                 
 
                }else if($InActive != null)
                   {
                 
                    $subscriptionType=$InActive['subscriptions_type'];
                    $status=$InActive['status'];
                    $date_start=$InActive['date_start'];
                    $date_end=$InActive['date_end'];

                    }

                    if($subscriptionType=="free")
                    {
                        $ShowSubscriptionType=' <span class="badge badge-pill badge-danger">مجاني</span>';


                    }else if($subscriptionType=="6")
                    {
                        $ShowSubscriptionType=' <span class="badge badge-pill badge-success">6 شهور</span>';


                    }else if($subscriptionType=="12")
                    {
                        $ShowSubscriptionType=' <span class="badge badge-pill badge-success">سنة</span>';


                    }



                    if($status=="InActive")
                    {
                        $status=' <span class="badge badge-pill badge-danger">غير فعال</span>';


                    } 
                    if($status=="Active")
                    {
                        $status=' <span class="badge badge-pill badge-success">فعال</span>';


                    } 


                $RSOfficesList->push([
                    'id'=> $RSF['id'],
                    'logo'=> '/RS_logos/'.$RSF['company_logo'],
                    'presenter_email'=> $RSF['presenter_email'],
                    'subscriptionType'=> $ShowSubscriptionType,
                    'status'=> $status,
                    'company_name'=> $RSF['Company_name'],
                    'company_status'=> $RSF['status'],
                    'city'=> $RSF['city'],
                    'date_start'=> $date_start,
                    'date_end'=> $date_end,
  
                        ]);
            }

            $RSOfficesList->all();
        
            
            return view("ADMIN_DASHBOARD.OWNER_SECTION.index",compact('RSOfficesList'));

         }catch (\Exception $e) {
    
            dd($e);
     }

    }



    public function AddRSOffice()
    {
        try{


           return view("ADMIN_DASHBOARD.OWNER_SECTION.create");
        }catch (\Exception $e) {
    
            dd("User ERROR".$e);
     }
    }


    public function AddRSOfficeFromAdmin(Request $request)
    {
       
        $this->validate($request,
        [
            "company_logo" => 'required|mimes:png,jpg,jpeg|max:2048',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

         ],
        [
            "company_logo.mimes"=>"يسمح فقط في ملف png,jpg,jpeg ",
            "company_logo.required"=>"يجب رفع شعار الشركة",
            "email.required"=>"البريد مطلوب",
            "email.max"=>"البريد لا يتعدى 255 حرف",
            "email.users"=>"تم التسجيل مسبقاً في النظام",
          ] 
       );

        try{

            try{
                //User - RsOffice - subUser - subscription- UsersRoles  
 
                $User = new User;
                $User->name=$request['name'];
                $User->email=$request['email'];
                $User->password=Hash::make($request['password']);
                $User->save();
                
    
            }catch (\Exception $e) {
    
                dd("User ERROR".$e);
         }
 



             try{

                $imageName = time().'.'.$request['company_logo']->extension();
               
                $upload= $request['company_logo']->move(public_path('RS_logos'), $imageName);
             
                 
                $comp = new RsOffice();
                $comp->CRN=$request['CRN'];
                $comp->Company_name=$request['Company_name'];
                $comp->city=$request['city'];
                $comp->status=$request['status'];
                $comp->presenter_name=$request['name'];
                $comp->presenter_number=$request['presenter_number'];
                $comp->company_logo=$imageName;
                $comp->presenter_email=$request['email'];
                $comp->save();

              }catch (\Exception $e) {

                dd("RsOffice ERROR".$e);

           }
           try{
            $comp =RsOffice::latest()->first();

            $sub = new subUser();
            $sub->rs_offices_id=$comp['id'];
            $sub->email=$request['email'];
            $sub->password=$request['password'];
            $sub->owners="on";
            $sub->renters="on";
            $sub->accountant="on";
            $sub->CRM="on";
            $sub->bills="on";
            $sub->tells="on";
            $sub->subusers="on";
            $sub->support="on";
            $sub->subscriptions="on";
            $sub->userType="RS_ADMIN";
            $sub->save();

         

          }catch (\Exception $e) {

            dd("subUser ERROR".$e);

       }


       try{
       
       // $dt->toDateString(); // Equivalent: echo $dt->format('Y-m-d');
       $comp =RsOffice::latest()->first();

        $subscription = new subscription();
        $subscription->rs_offices_id=$comp['id'];
        $subscription->subscriptions_type="free";
        $subscription->date_start=Carbon::now();
        $subscription->date_end=$request['EndOfFreeSubscriptions'];
        $subscription->status="Active";
        $subscription->save();
    }catch (\Exception $e) {

        dd("subscription ERROR".$e);

    }

    try{
        $UsersRoles = new UsersRoles();
        $UsersRoles->email=$request['email'];
        $UsersRoles->role="RS_ADMIN";
        $UsersRoles->save();
    }catch (\Exception $e) {

        dd("UsersRoles ERROR".$e);

    }


  


 


           toastr()->success("تم اضافة مكتب عقار جديد بنجاح");
            
           return redirect()->route('home');


            

           // return view('');

        }catch (\Exception $e) {

      dd("FIRST RTY".$e);
       }
    }



}
