<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\RsOffice;
use App\owners_proparties;
use App\owner;
use App\subUser;

class Promotion extends Component
{
    public $PropartieId;
    public $PropartieName = "اسم العقار";
    public $PropartieType = "نوع العقار";
    public $PropartieCity = "المدينة";
    public $PropartieLocation = "location";

    public $monthly_amount = 0;
    public $commion_RS = 0;
    public $water = 0;
    public $electricity = 0;
    public $total = 0;
    public $Type="نوع الاجار";

    public $RsName = "";
    public $CRN = "";

   
 
    public function updated($propertyName)
    {
        
        $this->validateOnly($propertyName,[
            'monthly_amount'=>'required',
            'commion_RS'=>'required',
            'water'=>'required',
            'electricity'=>'required',
             
        ]);
         
    }
    public function render()
    {
        try{


            $email = Auth::user()->email;
            $subUser=subUser::where('email',$email)->first();
            $CurrentRS=RsOffice::find($subUser['rs_offices_id']);
          

            $MyOWners=owner::where('rs_offices_id',$CurrentRS->id)->pluck("id");
            $OwnerProparties=owners_proparties::whereIn('owners_id',$MyOWners)->get();

            $this->RsName=$CurrentRS->Company_name;
            $this->CRN=$CurrentRS->CRN;

            
        return view('livewire.promotion',[
            'OwnerProparties' => $OwnerProparties 
         ]);

    }catch (\Exception $e) {

        dd($e);
         }
    }

    


    public function PreparePromotion()
    {
        try{

        if($this->PropartieId==0)
            {

                $this->PropartieName="اسم العقار";
                $this->PropartieType="نوع العقار";
                 $this->PropartieCity= "المدينة";
                 $this->PropartieLocation="www.bluecode.sa";

            }else
            {

                $OwnerProparties=owners_proparties::find($this->PropartieId);

  
                $this->PropartieName=$OwnerProparties->name;
               $this->PropartieType=$OwnerProparties->type;
                $this->PropartieCity=$OwnerProparties->city;
                $this->PropartieLocation=$OwnerProparties->google_maps;
                
        
             }

        $this->total=($this->monthly_amount+$this->commion_RS+$this->water+$this->electricity);
          
        
    }catch (\Exception $e) {

        dd($e);
         }



     }
  

}
