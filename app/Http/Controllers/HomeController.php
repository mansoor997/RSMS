<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\RsOffice;
use App\UsersRoles;
use App\subUser;
use App\renter_contract;
use App\payments_pirod;
use App\subscription;
use App\owner;
use App\owners_proparties;
use App\renter;
use App\bill;
use App\renter_doc;
use App\complains;
use App\maintenance;
use App\Notifications;
 use Session;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try{
           
           //tomorrow tasks 1- add maintanance to RSOffice 2-add compaince to RSOffice 3-edit dropdown list 4-add edit for and delete


 
                   $email = Auth::user()->email;
                   $UserRole=UsersRoles::where('email',$email)->first();       
            
            if($UserRole['role']=="RS_ADMIN" or $UserRole['role']=="RS_EMPLOYEE")
            {
         
                $subUser=subUser::where('email',$email)->first();
                $CurrentRS=RsOffice::find($subUser['rs_offices_id']);
                $profile_image="RS_logos/".$CurrentRS->company_logo;
                Session::put('profile_image', $profile_image);

            
                $MySubscription=subscription::where('rs_offices_id',$subUser['rs_offices_id'])->where('status','Active')->first();  
                $howManyDays = today()->diffInDays(Carbon::parse($MySubscription['date_end']));
                $MySubscriptionEndDate=$MySubscription['date_end'];

               $MySubscriptionType='';
                if($MySubscription['subscriptions_type']=="free")
                {
                    $MySubscriptionType='<span class="badge badge-pill badge-success">مجاني</span>';

                }else if($MySubscription['subscriptions_type']=="6")
                {
                    $MySubscriptionType='<span class="badge badge-pill badge-success">٦ شهور</span>';

                }else if($MySubscription['subscriptions_type']=="12")
                {
                    $MySubscriptionType='<span class="badge badge-pill badge-success">سنة</span>';

                }
               // $howManyOwners=owner::where('rs_offices_id',$subUser['rs_offices_id'])->count();
                $howManyRenter=renter::where('rs_offices_id',$subUser['rs_offices_id'])->count();

                $MyRenterIDs=renter::where('rs_offices_id',$subUser['rs_offices_id'])->pluck('id');
                $ContractsEndThisMonth=renter_contract::WhereIn('renters_id',$MyRenterIDs)->where('status','active')->whereYear('rent_end_date', Carbon::now()->year)->whereMonth('rent_end_date', Carbon::now()->month)->count();

                $MyRentersContractIDs=renter_contract::WhereIn('renters_id',$MyRenterIDs)->pluck('id');

                $PaymentThisMonth=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->where('status','PENDING')->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', Carbon::now()->month)->count();
                $PaymentNotCollect=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->where('status','NOT_COLLECTED')->whereYear('payment_dueDate','<=', Carbon::now()->year)->whereMonth('payment_dueDate','<=', Carbon::now()->month)->count();

               //dd($subUser['rs_offices_id']);
                
              $ListOfMyOwners=owner::where('rs_offices_id',$subUser['rs_offices_id'])->pluck('id');

              $HowManyCommercial=owners_proparties::WhereIn('owners_id',$ListOfMyOwners)->where('type','تجارى')->count();
              $HowManyResidence=owners_proparties::WhereIn('owners_id',$ListOfMyOwners)->where('type','سكنى')->count();
             
              $MyIncomeByMonth = collect();

              $MyIncomeByMonth->push([
                 '1'=>  $m1=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '1')->sum("total"),
                 '2'=>  $m2=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '2')->sum("total"),
                 '3'=>  $m3=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '3')->sum("total"),
                 '4'=>  $m4=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '4')->sum("total"),
                 '5'=>  $m5=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '5')->sum("total"),
                 '6'=>  $m6=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '6')->sum("total"),
                 '7'=>  $m7=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '7')->sum("total"),
                 '8'=>  $m8=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '8')->sum("total"),
                 '9'=>  $m9=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '9')->sum("total"),
                 '10'=>  $m10=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '10')->sum("total"),
                 '11'=>  $m11=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '11')->sum("total"),
                 '12'=>  $m12=payments_pirod::WhereIn('renter_contracts_id',$MyRentersContractIDs)->whereYear('payment_dueDate', Carbon::now()->year)->whereMonth('payment_dueDate', '12')->sum("total"),
                      ]);
 
                    $MyIncomeByMonth->all();
      
                  
                $MyNotifications=Notifications::where('rs_offices_id',$subUser['rs_offices_id'])->where('seen','NO')->get();

                   
                    
                 return view('home',compact('MyIncomeByMonth',
                                            'HowManyCommercial',
                                            'HowManyResidence',
                                            'PaymentNotCollect',
                                            'howManyRenter',
                                            'ContractsEndThisMonth',
                                            'PaymentThisMonth',
                                            'howManyDays',
                                            'MySubscriptionEndDate',
                                            'MySubscriptionType',
                                            'MyNotifications'));


             }else if($UserRole['role']=="RENTER")
             {
                $email = Auth::user()->email;
                $Renter=renter::where("email",$email)->first();

                $RenterContracts = collect();
                $thisRenterContracts=renter_contract::where('renters_id', $Renter['id'])->get();
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

                $RenterBillsList=bill::where('renters_id',$Renter['id'])->get();
                $RenterDocsList=renter_doc::where('renters_id',$Renter['id'])->get();
                $RenterComplainsList=complains::where('renters_id',$Renter['id'])->get();
                $RenterMaintenancesList=maintenance::where('renters_id',$Renter['id'])->get();
    
                
                $HowManyRenterContracts=renter_contract::where('renters_id', $Renter['id'])->count();
                $HowManyRenterContractsActive=renter_contract::where('renters_id', $Renter['id'])->where('status', "active")->count();
                $HowManyRenterContractsInActive=renter_contract::where('renters_id', $Renter['id'])->where('status', "inactive")->count();
                $HowManyRenterComplains=complains::where('renters_id',$Renter['id'])->count();
                $HowManyRenterMaintenances=maintenance::where('renters_id',$Renter['id'])->count();
                $HowManyRenterSharedFiles=renter_doc::where('renters_id',$Renter['id'])->count();


                return view('renter',compact('HowManyRenterSharedFiles',
                                            'HowManyRenterContracts',
                                            'HowManyRenterContractsActive',
                                            'HowManyRenterContractsInActive',
                                            'HowManyRenterComplains',
                                            'HowManyRenterMaintenances',
                                            'RenterComplainsList',
                                            'RenterMaintenancesList',
                                            'RenterContracts',
                                            'RenterBillsList',
                                            'RenterDocsList'));

             }else if($UserRole['role']=="APP_ADMIN")
             {



                

               
                return view('admin');
             }




          }catch (\Exception $e) {

        dd($e);
         }

      
    }


    public function endOfSubscription()
    {

        return view("endOfSubscription");
    }






}


