<?php

namespace App\Http\Controllers;

use App\bill;
use App\renter;
use App\RsOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
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
            "file" => 'required|mimes:pdf|max:2048',

         ],
        [
            "file.mimes"=>"يسمح فقط في ملف PDF ",
            "file.required"=>"يجب رفع الملف",
          ] 
       ); 


        try{
            $RenterBillFile = time().'.'.$request['file']->extension();
               
            $upload= $request['file']->move(public_path('Bills'), $RenterBillFile);


 
            
            $thisREnter=renter::find($request['renter_id']);
            $renter_bill = new bill;
            $renter_bill->renters_id=$thisREnter->id;
            $renter_bill->amount=$request['amount'];
            $renter_bill->file=$RenterBillFile;
            $renter_bill->save();

            toastr()->success("تم اضافة الفاتورة بنجاح");
            
            
            return \Redirect::route('RenterProfile', $request['renter_id']);


 
        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            if(empty($id))
            {
                dd("GO TO page ERROR");
            }else{
                
                return view('RS_DASHBOARD.RENTER_SECTION.AddBill',compact('id'));

            }


 
        }catch (\Exception $e) {

      dd($e);
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(bill $bill)
    {
        //
    }
}
