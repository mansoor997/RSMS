@extends('layouts.master')
@section('title')

اضافة عقد جديد للمستاجر

@stop
@section('content')

@if ($errors->any())
<div class="alert alert-danger ArFont">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row ArFont">
    <!-- Recent Activity -->
    <div class="col-md-12 col-lg-12 mb-4">
      <div class="card timeline shadow ArFont">
        <div class="card-header">
          <strong class="card-title">
              اضافة عقد جديد للمستاجر

            </strong>
         </div>
      <div class="card-body">
        <form method="POST" action="{{ route('RenterContract.store') }}" enctype="multipart/form-data">
            @csrf 
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1"> إسم العقار المؤجر </label>
                        <select class="form-control select-input" name="propartie_id" required>
                            <option disabled selected>إختر</option>
                            @foreach($MyOwnersProparies as $OWP)
                                     <option value="{{$OWP['id']}}" >{{$OWP['name']}}</option>
                            @endforeach
                            
                        </select>
                        <input type="hidden" name="renters_id" value="{{$id}}">

               </div>

        <div class="col-md-6 mb-3">
           
                <label for="validationCustomUsername">رقم العقد</label>
                <div class="input-group">
                <input type="text" class="form-control" required name="contract_number">

                 </div>
              </div>
        
              <div class="col-md-6 mb-3">
                  
                <label for="validationCustom01">القيمة الشهرية للإيجار</label>
                <input type="number" class="form-control" id="validationCustom01"   required name="monthly_amount">

                </div>
          
                
               <div class="col-md-6 mb-3">
                <label for="validationCustom02">تاريخ بداية الإيجار</label>
             
                  <input class="form-control" id="example-date" type="date"  required name="rent_start_date">

                </div>

               <div class="col-md-6 mb-3">
                  
                <label for="validationCustom01">تاريخ نهاية الإيجار</label>
                 
                <input class="form-control" id="example-date" type="date"  required name="rent_end_date">

                </div>
                
         
              <div class="col-md-6 mb-3">
             <label for="validationCustom02">العقد</label>

            <div class="custom-file mb-3">

                  <input type="file" class="custom-file-input" id="validatedCustomFile" required name="contract">
                  <label class="custom-file-label" for="validatedCustomFile">contract.pdf</label>
             </div> 
                </div>
             <div class="col-md-12 mb-3">
                <label for="validationCustom02">يدفع كل</label>
                        <select class="form-control select-input" name="paid_pirod" required>
                            <option disabled selected>إختر</option>
                            <option value="3" >٣ شهور</option>
                            <option value="6" >٦ شهور</option>
                            <option value="12" >١٢ شهر</option>
                        </select>

                </div>
                <hr/>
                <div class="col-md-12 mb-3">

                    <div class="repeater">
                        <div data-repeater-list="Payments">
                            <div data-repeater-item>
                                <div class="row">

                                    <div class="col">
                                        <label for="Name"
                                            class="mr-sm-2">رقم الدفعة
                                            :</label>
                                        <input class="form-control" type="number" name="payment_number" required />
                                    </div>

                                    <div class="col">
                                      <label for="Name"
                                          class="mr-sm-2">قيمة الدفعة
                                          :</label>
                                      <input class="form-control" type="number" name="rent_amount" required />
                                  </div>
                                  <div class="col">
                                    <label for="Name"
                                        class="mr-sm-2">عمولة المكتب
                                        :</label>
                                    <input class="form-control" type="number" name="commion_RS" required />
                                </div>
                                <div class="col">
                                  <label for="Name"
                                      class="mr-sm-2">الكهرباء
                                      :</label>
                                  <input class="form-control" type="number" name="electricity" required />
                                </div>
                                <div class="col">
                                  <label for="Name"
                                      class="mr-sm-2">الماء
                                      :</label>
                                  <input class="form-control" type="number" name="water" required />
                                </div>
                                    <div class="col">
                                        <label for="Name"
                                            class="mr-sm-2">تاريخ استحقاق الاجار
                                            :</label>
                                            <input class="form-control" id="example-date" type="date"  required name="payment_dueDate">
                                        </div>
                                        <div class="col">
                                            <label for="Name_en"
                                                class="mr-sm-2">حذف 
                                                :</label>
                                            <input class="btn btn-danger btn-block" data-repeater-delete
                                                type="button" value="حذف" />
                                        </div>
 
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20">
                            <div class="col-12">
                              <br />
                                <input class="button btn btn-primary" data-repeater-create type="button" value="اضافة تاريخ اسستحقاق جديد"/>
                            </div>

                        </div>

              

                    </div>

                
                    

                    </div>

            </div>
     
            <button class="btn btn-primary" type="submit">افاضة العقد للعميل</button>
          </form>
        </div> <!-- /.card-body -->
    
        
      </div> <!-- / .card -->
    </div> <!-- / .col-md-6 -->
    <!-- Striped rows -->

  </div> <!-- .row-->

  
@endsection
