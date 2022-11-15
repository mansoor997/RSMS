@extends('layouts.master')
@section('title')

اضافة جهة اتصال جديدة

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
          <strong class="card-title">
              
            اضافة جهة اتصال جديدة
        
        </strong>
         </div>
      <div class="card-body">
        <form action="{{ route('Contact.store') }}" method="POST">
            @csrf              
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="name">الاسم</label>
                <input type="text" class="form-control" required name="name" id="name">
                
               </div>

        <div class="col-md-6 mb-3">
           
            <label for="phone_number">رقم الجوال</label>
                <div class="input-group">
                
                <input type="number" class="form-control" required name="phone_number" id="phone_number">

                 </div>
              </div>
        
              <div class="col-md-12 mb-3">
                  
                <label for="description">الوصف</label>
              <textarea name="description" id="description" class="form-control bg-light" id="exampleFormControlTextarea1" rows="2"></textarea>

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
