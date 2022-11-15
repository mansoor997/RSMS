@extends('layouts.renter_dashboard')
@section('title')

طلب صيانة

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
              
           طلب صيانة
        
        </strong>
         </div>
      <div class="card-body">
        <form action="{{ route('Maintenance.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-row">

              <div class="col-md-12 mb-3">
                <label for="exampleInputEmail1">العنوان</label>
                <input type="text" class="form-control" required name="subject">
              
                
               </div>
            <div class="col-md-12 mb-3">
             <label for="validationCustom02">وصف الطلب</label>
             <textarea class="form-control" id="example-textarea" rows="4" name="content">         
            
                
                </textarea>
            
             </div>
             <div class="col-md-12 mb-3">
                <label for="exampleInputEmail1">المرفقات</label>
                <div class="custom-file mb-3">

                    <input type="file" class="custom-file-input" id="validatedCustomFile" required name="attachment">
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
     
     