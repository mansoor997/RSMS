@extends('layouts.master')
@section('title')

طلب اشتراك جديد

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
              
            طلب اشتراك جديد
        
        </strong>
         </div>
      <div class="card-body">
        <form action="{{ route('SubscriptionRequests.store') }}" method="POST">
            @csrf              
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="name">نوع الاشتراك المطلوب</label>
                <select class="form-control" id="example-select" name="subscription_type">
                    <option value="6">6 شهور</option>
                    <option value="12">سنة</option>
                  </select>                
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
