@extends('layouts.master')
@section('title')


اضافة فاتورة جديدة        
        

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
              
اضافة فاتورة جديدة        
        </strong>
         </div>
      <div class="card-body">
        <form action="{{ route('Bill.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-row">

              <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1">قيمة الفاتورة</label>
                <input type="number" class="form-control" required name="amount">
                <input type="hidden" name="renter_id" value="{{$id}}">
                
               </div>
            <div class="col-md-6 mb-3">
             <label for="validationCustom02">الفاتورة</label>

            <div class="custom-file mb-3">

                  <input type="file" class="custom-file-input" id="validatedCustomFile" required name="file">
                  <label class="custom-file-label" for="validatedCustomFile">INV20119.pdf</label>
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
