@extends('layouts.master')
@section('title')

اضافة مستخدم جديد

@stop
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="row">
    <!-- Recent Activity -->
    <div class="col-md-12 col-lg-12 mb-4 ArFont">
      <div class="card timeline shadow">
        <div class="card-header">
            <strong class="card-title">اضافة مستخدم جديد</strong>
         </div>
       
         <div class="card-body">
          <form action="{{ route('SubUser.store') }}" method="POST">
            @csrf
              <div class="form-row">
                <div class="col-md-3 mb-3">
                  <label for="name">الاسم </label>
                  <input type="text" class="form-control" required id="name" name="name">

                 </div>
                   <div class="col-md-3 mb-3">
                  <label for="email">البريد الالكتروني </label>
                  <input type="email" class="form-control" id="email"  required name="email">

                 </div>
             <div class="col-md-6 mb-3">
             
                  <label for="password">كلمة المرور</label>
                  <div class="input-group">
                  <input type="password" class="form-control" id="password" required name="password">

                   </div>
                </div>
          
                <div class="col-md-3 mb-3">
                    
                   <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="owners" name="owners" >
                     <label class="custom-control-label" for="owners" >ادارة ملاك العقارات</label>
               </div>
                <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="renters" name="renters" >
 
                <label class="custom-control-label" for="renters">ادارة المستاجرين</label>
               </div>
               

               
                  </div>
           
              <div class="col-md-3 mb-3">
                    
                                   <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="tells" name="tells" >
 
                <label class="custom-control-label" for="tells">دليل الهاتف</label>
               </div>
               
               <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="CRM" name="CRM" >
 
                <label class="custom-control-label" for="CRM">علاقات المستاجرين</label>
               </div>		


               
                  </div>
           
           
                       <div class="col-md-3 mb-3">
                    
       
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="subusers" name="subusers" >
 
                            <label class="custom-control-label" for="subusers">ادارة المستخدمين</label>
                           </div>		
            
               <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="subscriptions" name="subscriptions" >
 
                <label class="custom-control-label" for="subscriptions">الاشتركات</label>
               </div>		

               
                  </div>
           
              <div class="col-md-12 mb-3">
                   
               <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="support" name="support" >
 
                <label class="custom-control-label" for="support">الدعم الفني</label>
               </div>		
 
                  </div>
           
           
           
              </div>
       
              <button class="btn btn-primary" type="submit">حفظ</button>
            </form>
          </div> <!-- /.card-body -->
      
    
    </div> <!-- / .card -->

    </div> <!-- / .col-md-6 -->
    <!-- Striped rows -->

  </div> <!-- .row-->
    




  @endsection
