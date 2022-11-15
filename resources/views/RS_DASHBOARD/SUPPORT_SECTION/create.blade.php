@extends('layouts.master')
@section('title')

اضافة تذكرة   جديدة

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
              
            اضافة تذكرة   جديدة
        
        </strong>
         </div>
      <div class="card-body">
        <form action="{{ route('Support.store') }}" method="POST">
            @csrf
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1">نوع التذكرة</label>
                <select class="form-control" id="example-select" name="type">
                    <option value="استفسار">استفسار</option>
                    <option value="مشكلة تقنية">مشكلة تقنية</option>
                  </select>
                      
               </div>

   
              <div class="col-md-6 mb-3">
                  
                <label for="validationCustom01">العنوان</label>
                       <input type="text" class="form-control" required name="subject">

                </div>
              <div class="col-md-12 mb-3">
                  
                <label for="validationCustom01">الوصف</label>
                <textarea class="form-control bg-light" id="exampleFormControlTextarea1" rows="2" name="content"></textarea>

                </div>
          
            </div>
     
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div> <!-- /.card-body -->
    
        
      </div> <!-- / .card -->
    </div> <!-- / .col-md-6 -->
    <!-- Striped rows -->

  </div> <!-- .row-->
    
  


  @endsection
