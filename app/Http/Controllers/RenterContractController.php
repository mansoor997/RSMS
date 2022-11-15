<?php

namespace App\Http\Controllers;

use App\renter_contract;
  
use App\renter;
 use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
  use App\User;
use App\UsersRoles;
 use App\owners_proparties;
use App\payments_pirod;
use App\subUser;

use Carbon\Carbon;
 
 

class RenterContractController extends Controller
{
    public function __construct()
    {
        set_time_limit(8000000);
    }
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
    public function PaymentNotCollect()
    {
        try{

            $email = Auth::user()->email;
            $UserRole=UsersRoles::where('email',$email)->first();       
            $subUser=subUser::where('email',$email)->first();
            $MyRenterIDs=renter::where('rs_offices_id',$subUser['rs_offices_id'])->pluck('id');
            $MyRentersContractIDs=renter_contract::WhereIn('renters_id',$MyRenterIDs)->pluck('id');

             $PaymentNotCollect=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->where('status','NOT_COLLECTED')->whereYear('payment_dueDate','<=', Carbon::now()->year)->whereMonth('payment_dueDate','<=', Carbon::now()->month)->pluck('renter_contracts_id');



            $Contracts=renter_contract::WhereIn('id',$PaymentNotCollect)->get();

           
            $PaymentNotCollectCollect = collect();

             foreach($Contracts as $item)
             {
                $thisRenter=renter::find($item['renters_id']);

                $propartie=owners_proparties::find($item['propartie_id']);

                $HowManyPayments=payments_pirod::where('renter_contracts_id', $item['id'])->count();
                $PaymentCollects=payments_pirod::where([['renter_contracts_id', '=', $item['id']],['status', '=', 'COLLECTED']])->count();
                $PaymentNotDueDate=payments_pirod::where([['renter_contracts_id', '=', $item['id']],['status', '=', 'PENDING']])->count();
                $PaymentNotCollects=payments_pirod::where([['renter_contracts_id', '=', $item['id']],['status', '=', 'NOT_COLLECTED']])->count();
                
                     
                $status="";
                $Badge="";
                if($item['status']=="active")
                {
                    $status="نشط";
                    $Badge="badge-success";

                }
            if($item['status']=="inactive")
                {
                    $status="منتهي";
                    $Badge="badge-danger";

                }


                $PaymentNotCollectCollect->push([
                    'renter_id'=> $thisRenter['id'],
                    'renter_name'=> $thisRenter['name'],
                    'renter_phone'=> $thisRenter['phone_number'],
                    'id'=> $item['id'],
                    'propartie'=> $propartie['name'],
                    'contract_number'=> $item['contract_number'],
                    'monthly_amount'=> $item['monthly_amount'],
                    'rent_start_date'=> $item['rent_start_date'],
                    'rent_end_date'=> $item['rent_end_date'],
                    'paid_pirod'=> $item['paid_pirod'],
                    'HowManyPayments'=> $HowManyPayments,
                    'PaymentCollects'=> $PaymentCollects,
                    'PaymentNotCollects'=> $PaymentNotCollects,
                    'PaymentNotDueDate'=> $PaymentNotDueDate,
                    'contract'=> $item['contract'],
                    'status'=> $status,
                    'Badge'=> $Badge,
 
                        ]);

            }
            $PaymentNotCollectCollect->all();
            return view('RS_DASHBOARD.HOME_SECTION.PaymentPeriodNotCollect',
            compact('PaymentNotCollectCollect'));

        }catch (\Exception $e) 
        {
            dd(" FIRST ERROR:  ".$e);
         }
    }


    public function PaymentThisMonth()
    {
        try{

            $email = Auth::user()->email;
            $UserRole=UsersRoles::where('email',$email)->first();       
            $subUser=subUser::where('email',$email)->first();
            $MyRenterIDs=renter::where('rs_offices_id',$subUser['rs_offices_id'])->pluck('id');
           
            $MyRentersContractIDs=renter_contract::WhereIn('renters_id',$MyRenterIDs)->pluck('id');

            $PaymentThisMonth=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->where('status','PENDING')->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', Carbon::now()->month)->pluck('renter_contracts_id');
             
       
            $Contracts=renter_contract::WhereIn('id',$PaymentThisMonth)->get();
       

        /*

            start here with Paytment this month error 

*/
           
            $PaymentThisMonthCollect = collect();

             foreach($Contracts as $item)
             {
                $thisRenter=renter::find($item['renters_id']);

                $propartie=owners_proparties::find($item['propartie_id']);

                $HowManyPayments=payments_pirod::where('renter_contracts_id', $item['id'])->count();
                $PaymentCollects=payments_pirod::where([['renter_contracts_id', '=', $item['id']],['status', '=', 'COLLECTED']])->count();
                $PaymentNotDueDate=payments_pirod::where([['renter_contracts_id', '=', $item['id']],['status', '=', 'PENDING']])->count();
                $PaymentNotCollects=payments_pirod::where([['renter_contracts_id', '=', $item['id']],['status', '=', 'NOT_COLLECTED']])->count();
                
                     
                $status="";
                $Badge="";
                if($item['status']=="active")
                {
                    $status="نشط";
                    $Badge="badge-success";

                }
            if($item['status']=="inactive")
                {
                    $status="منتهي";
                    $Badge="badge-danger";

                }


                $PaymentThisMonthCollect->push([
                    'renter_id'=> $thisRenter['id'],
                    'renter_name'=> $thisRenter['name'],
                    'renter_phone'=> $thisRenter['phone_number'],
                    'id'=> $item['id'],
                    'propartie'=> $propartie['name'],
                    'contract_number'=> $item['contract_number'],
                    'monthly_amount'=> $item['monthly_amount'],
                    'rent_start_date'=> $item['rent_start_date'],
                    'rent_end_date'=> $item['rent_end_date'],
                    'paid_pirod'=> $item['paid_pirod'],
                    'HowManyPayments'=> $HowManyPayments,
                    'PaymentCollects'=> $PaymentCollects,
                    'PaymentNotCollects'=> $PaymentNotCollects,
                    'PaymentNotDueDate'=> $PaymentNotDueDate,
                    'contract'=> $item['contract'],
                    'status'=> $status,
                    'Badge'=> $Badge,
 
                        ]);

            }
            $PaymentThisMonthCollect->all();
            
            return view('RS_DASHBOARD.HOME_SECTION.PaymentPeriodThisMonth',
            compact('PaymentThisMonthCollect'));

        }catch (\Exception $e) 
        {
            dd(" FIRST ERROR:  ".$e);
         }
    }

    public function ContractsEndThisMonth()
    {
        try{

            $email = Auth::user()->email;
            $UserRole=UsersRoles::where('email',$email)->first();       
            $subUser=subUser::where('email',$email)->first();
            $MyRenterIDs=renter::where('rs_offices_id',$subUser['rs_offices_id'])->pluck('id');
             
            
            $ContractsEndThisMonth=renter_contract::WhereIn('renters_id',$MyRenterIDs)->where('status','active')->whereYear('rent_end_date', Carbon::now()->year)->whereMonth('rent_end_date', Carbon::now()->month)->get();
             $RenterContracts = collect();

             foreach($ContractsEndThisMonth as $item)
             {
                $thisRenter=renter::find($item['renters_id']);

                $propartie=owners_proparties::find($item['propartie_id']);

                $HowManyPayments=payments_pirod::where('renter_contracts_id', $item['id'])->count();
                $PaymentCollects=payments_pirod::where([['renter_contracts_id', '=', $item['id']],['status', '=', 'COLLECTED']])->count();
                $PaymentNotDueDate=payments_pirod::where([['renter_contracts_id', '=', $item['id']],['status', '=', 'PENDING']])->count();
                $PaymentNotCollects=payments_pirod::where([['renter_contracts_id', '=', $item['id']],['status', '=', 'NOT_COLLECTED']])->count();
                
                     
                $status="";
                $Badge="";
                if($item['status']=="active")
                {
                    $status="نشط";
                    $Badge="badge-success";

                }
            if($item['status']=="inactive")
                {
                    $status="منتهي";
                    $Badge="badge-danger";

                }


                $RenterContracts->push([
                    'renter_id'=> $thisRenter['id'],
                    'renter_name'=> $thisRenter['name'],
                    'renter_phone'=> $thisRenter['phone_number'],
                    'id'=> $item['id'],
                    'propartie'=> $propartie['name'],
                    'contract_number'=> $item['contract_number'],
                    'monthly_amount'=> $item['monthly_amount'],
                    'rent_start_date'=> $item['rent_start_date'],
                    'rent_end_date'=> $item['rent_end_date'],
                    'paid_pirod'=> $item['paid_pirod'],
                    'HowManyPayments'=> $HowManyPayments,
                    'PaymentCollects'=> $PaymentCollects,
                    'PaymentNotCollects'=> $PaymentNotCollects,
                    'PaymentNotDueDate'=> $PaymentNotDueDate,
                    'contract'=> $item['contract'],
                    'status'=> $status,
                    'Badge'=> $Badge,
 
                        ]);

            }
            $RenterContracts->all();
            return view('RS_DASHBOARD.HOME_SECTION.ContractsEndThisMonth',
            compact('RenterContracts'));

        }catch (\Exception $e) 
        {
            dd(" FIRST ERROR:  ".$e);
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
            "contract" => "mimes:pdf",
         ],
        [
            "contract.mimes"=>"الصيغة المسموح بها PDF فقط",
          ] 
       ); 
       
         
    try{
 
        $OwnerID=owners_proparties::find($request['propartie_id']);
        $RenterID=renter::find($request['renters_id']);

        $RenterContractFile = time().'.'.$request['contract']->extension();
               
        $upload= $request['contract']->move(public_path('contracts'), $RenterContractFile);
     
        
    }catch (\Exception $e) 
        {
            dd(" FIRST ERROR:  ".$e);
         }


        try{

        $RenterContract= new renter_contract;
        $RenterContract->renters_id=$RenterID->id;
        $RenterContract->owners_id=$OwnerID->owners_id;
        $RenterContract->propartie_id=$OwnerID->id;
        $RenterContract->contract_number=$request['contract_number'];
        $RenterContract->rent_start_date=$request['rent_start_date'];
        $RenterContract->rent_end_date=$request['rent_end_date'];
        $RenterContract->electricity=0;
        $RenterContract->water=0;
        $RenterContract->contract=$RenterContractFile;
        $RenterContract->paid_pirod=$request['paid_pirod'];
        $RenterContract->commion_RS=0;
        $RenterContract->monthly_amount=$request['monthly_amount'];
        $RenterContract->status="active";
        $RenterContract->save();

        $ContractID= $RenterContract->latest()->first()->id;
        
         
    
 
        foreach($request->Payments as $Payment)
        {


            $total=$Payment['rent_amount']+$Payment['commion_RS']+$Payment['electricity']+$Payment['water'];

            $PP= new payments_pirod();

            $PP->renter_contracts_id=$ContractID;
            $PP->payment_number=$Payment['payment_number'];
            $PP->payment_dueDate=$Payment['payment_dueDate'];
            $PP->monthly_amount=$Payment['rent_amount'];
            $PP->commion_RS=$Payment['commion_RS'];
            $PP->water=$Payment['water'];
            $PP->electricity=$Payment['electricity'];
            $PP->total=$total;
            $PP->status="PENDING";

            $PP->save();

            
        }

        toastr()->success("تم اضافة العقد بنجاح");
            
      
        return \Redirect::route('RenterProfile', $request['renters_id']);

 
 

    }catch (\Exception $e) {

  dd(" thired ERROR:  ".$e);
   }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\renter_contract  $renter_contract
     * @return \Illuminate\Http\Response
     */
    public function show(renter_contract $renter_contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\renter_contract  $renter_contract
     * @return \Illuminate\Http\Response
     */
    public function edit(renter_contract $renter_contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\renter_contract  $renter_contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, renter_contract $renter_contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\renter_contract  $renter_contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(renter_contract $renter_contract)
    {
        //
    }
}
