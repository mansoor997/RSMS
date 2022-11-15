@extends('layouts.renter_dashboard')
@section('title')

لوحة التحكم

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
    <div class="col-md-12 col-lg-12 mb-4">
      <div class="card timeline shadow ArFont">
        <div class="card-header">
          <strong class="card-title">
              
            اضافة وثيقة جديدة
        
        </strong>
         </div>
      <div class="card-body">
        <form action="{{ route('RenterDoc.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-row">

              <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1">نوع الوثيقة</label>
                <input type="text" class="form-control" required name="type">
              
                
               </div>
            <div class="col-md-6 mb-3">
             <label for="validationCustom02">الوثيقة</label>

            <div class="custom-file mb-3">

                  <input type="file" class="custom-file-input" id="validatedCustomFile" required name="name">
                  <label class="custom-file-label" for="validatedCustomFile">ID.pdf</label>
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
     
     