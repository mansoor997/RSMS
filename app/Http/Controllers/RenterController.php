<?php

namespace App\Http\Controllers;

use App\renter;
use App\renter_contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\RsOffice;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UsersRoles;
use App\renter_doc;
use App\owner;
use App\bill;
use App\owners_proparties;
use App\payments_pirod;
use App\subUser;
 
class RenterController extends Controller
{
  
   
    public function index()
    {
        try{
       
           
            $email = Auth::user()->email;
            $subUser=subUser::where('email',$email)->first();
            $CurrentRS=RsOffice::find($subUser['rs_offices_id']);
            
            $MyRenters=renter::where('rs_offices_id',$CurrentRS->id)->get();
            $ListOfMyRenters = collect();
                foreach($MyRenters as $renter)
                {
                    $RenterActiveContracts=renter_contract::where([['renters_id', '=', $renter['id']],['status', '=', 'active'],])->count();
                    $RenterInActiveContracts=renter_contract::where([['renters_id', '=', $renter['id']],['status', '=', 'inactive'],])->count();

                
                    $ListOfMyRenters->push([
                        'id'=> $renter['id'],
                        'name'=> $renter['name'],
                        'phone_number'=> $renter['phone_number'],
                        'city'=> $renter['city'],
                        'ActiveContracts'=>$RenterActiveContracts,
                        'InActiveContracts'=> $RenterInActiveContracts,
 
                            ]);

                }
                $ListOfMyRenters->all();

             return view('RS_DASHBOARD.RENTER_SECTION.index',compact('ListOfMyRenters'));

        }catch (\Exception $e) {

      dd($e);
       }
    }


    public function RenterProfile($id)
    {
         if(!empty($id))
         {

      
        try{

             $RetnerActiveContrcts=renter_contract::where([['renters_id', '=', $id],['status', '=', 'active']])->count();
             
             $RenterInActiveContracts=renter_contract::where([['renters_id', '=', $id],['status', '=', 'inactive']])->count();
            
             
            $RenterDocs=renter_doc::where('renters_id', $id)->count();
           
            $RenterBills=bill::where('renters_id', $id)->count();
            $Renter=renter::find($id);
            $RenterContracts = collect();
            $thisRenterContracts=renter_contract::where('renters_id', $id)->get();
            foreach($thisRenterContracts as $renter)
            {
                $propartie=owners_proparties::find($renter['propartie_id']);

                $HowManyPayments=payments_pirod::where('renter_contracts_id', $renter['id'])->count();
                $PaymentCollects=payments_pirod::where([['renter_contracts_id', '=', $renter['id']],['status', '=', 'COLLECTED']])->count();
                $PaymentNotDueDate=payments_pirod::where([['renter_contracts_id', '=', $renter['id']],['status', '=', 'PENDING']])->count();
                $PaymentNotCollects=payments_pirod::where([['renter_contracts_id', '=', $renter['id']],['status', '=', 'NOT_COLLECTED']])->count();
                
                     
                $status="";
                $Badge="";
                if($renter['status']=="active")
                {
                    $status="نشط";
                    $Badge="badge-success";

                }
            if($renter['status']=="inactive")
                {
                    $status="منتهي";
                    $Badge="badge-danger";

                }


                $RenterContracts->push([
                    'id'=> $renter['id'],
                    'propartie'=> $propartie['name'],
                    'contract_number'=> $renter['id'],
                    'monthly_amount'=> $renter['monthly_amount'],
                    'rent_start_date'=> $renter['rent_start_date'],
                    'rent_end_date'=> $renter['rent_end_date'],
                    'paid_pirod'=> $renter['paid_pirod'],
                    'HowManyPayments'=> $HowManyPayments,
                    'PaymentCollects'=> $PaymentCollects,
                    'PaymentNotCollects'=> $PaymentNotCollects,
                    'PaymentNotDueDate'=> $PaymentNotDueDate,
                    'contract'=> $renter['contract'],
                    'status'=> $status,
                    'Badge'=> $Badge,
 
                        ]);

            }
            $RenterContracts->all();
 
            $RenterBillsList=bill::where('renters_id',$id)->get();
            $RenterDocsList=renter_doc::where('renters_id',$id)->get();


            

            return view('RS_DASHBOARD.RENTER_SECTION.RenterProfile',
            compact('RetnerActiveContrcts',
                    'RenterInActiveContracts',
                    'RenterDocs',
                    'RenterBills',
                    'Renter',
                    'RenterContracts',
                    'RenterBillsList',
                    'RenterDocsList'));

        }catch (\Exception $e) {

      dd($e);
       }

          }else{
              dd("ID null");
          }
    }

    

    public function AddRenterContract($id)
    {
        try{
            $email = Auth::user()->email;
            $subUser=subUser::where('email',$email)->first();
            $CurrentRS=RsOffice::find($subUser['rs_offices_id']);
            

            $MyOwnersIds=owner::where('rs_offices_id',$CurrentRS->id)->pluck('id')->all();
            $MyOwnersProparies=owners_proparties::whereIn('owners_id',$MyOwnersIds)->get();
              
            

            return view('RS_DASHBOARD.RENTER_SECTION.AddContract',compact('MyOwnersProparies','id'));

        }catch (\Exception $e) {

      dd($e);
       }
    }

    

    public function ShowRenterPayments($id)
    {
        try{
           
            $RenterPayments=payments_pirod::with('contracts')->where('renter_contracts_id',$id)->get();
            
          //  dd($RenterPayments[0]->contracts);
           


            return view('RS_DASHBOARD.RENTER_SECTION.CollectRents',compact('RenterPayments'));

        }catch (\Exception $e) {

      dd($e);
       }
    }

    public function CollectRenterPayment($id)
    {
        try{
           
            $RenterPayment=payments_pirod::find($id);
            $RenterPayment->status="COLLECTED";
            $RenterPayment->save();
          //  dd($RenterPayments[0]->contracts);
           
          toastr()->success("تم تحصيل الايجار بنجاح");
          return \Redirect::route('ShowRenterPayments', $RenterPayment['renter_contracts_id']);

          

        }catch (\Exception $e) {

      dd($e);
       }
    }



    public function create()
    {
        try{

            return view('RS_DASHBOARD.RENTER_SECTION.create');

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
            
            $renter = new renter;
            $renter->rs_offices_id=$CurrentRS->id;
            $renter->name=$request['name'];
            $renter->phone_number=$request['phone_number'];
            $renter->city=$request['city'];
            $renter->email=$request['email'];
            $renter->password=$request['password'];
            $renter->save();

         
            $User = new User;
            $User->name=$request['name'];
            $User->email=$request['email'];
            $User->password=Hash::make($request['password']);
            $User->save();

            $UsersRoles = new UsersRoles;
            $UsersRoles->email=$request['email'];
            $UsersRoles->role="RENTER";
            $UsersRoles->save();

            toastr()->success("تم اضافة مستاجر جديد بنجاح");
            
            return redirect()->route('home');


          

        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\renter  $renter
     * @return \Illuminate\Http\Response
     */
    public function show(renter $renter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\renter  $renter
     * @return \Illuminate\Http\Response
     */
    public function edit(renter $renter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\renter  $renter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, renter $renter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\renter  $renter
     * @return \Illuminate\Http\Response
     */
    public function destroy(renter $renter)
    {
        //
    }
}
