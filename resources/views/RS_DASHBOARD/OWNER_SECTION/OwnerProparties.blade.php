@extends('layouts.master')
@section('title')

تفاصيل مالك - العقارات

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

 
       
<div class="row ArFont">
    <!-- Recent Activity -->
    <div class="col-md-8 col-lg-8 mb-4">
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">تفاصيل مالك - العقارات</strong>
         </div>
      <div class="card-body">
        
              <div class="row align-items-center">
          
            <div class="col-md-12">
              <div class="row align-items-center">
                <div class="col-md-7">
                  <h4 class="mb-1">{{$theOwner->name}}</h4>
                 </div>
                 
              </div>
              <div class="row mb-4">
        <div class="col-md-12">
             <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">رقم الجوال	</label>
                <input type="text" class="form-control" id="validationCustom03" disabled value="{{$theOwner->phone_number}}">
               </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom04">المدينة	</label>
                <input type="text" class="form-control" id="validationCustom03" disabled value="{{$theOwner->city}}" >
               </div>
            
            </div>
                  
       </div>

                  
               </div>
   
            </div>
          </div> <!-- / .row- -->
            
          
      </div> <!-- /.card-body -->
    
        
      </div> <!-- / .card -->
    </div> <!-- / .col-md-6 -->
        
        
    <div class="col-md-4 col-lg-4 mb-4">
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">عدد العقارات</strong>
         </div>
      <div class="card-body">
        
        <div class="row align-items-center">
            <div class="col-3 text-center">
              <span class="circle circle-sm bg-primary">
                <i class="fe fe-16 fe-home text-white mb-0"></i>
              </span>
            </div>
            <div class="col">
              <p class="small text-muted mb-0">العقارات التابعة للمالك</p>
              <span class="h3 mb-0">{{$theOwner->proparties_count}}</span>
            </div>
          </div>
      </div> <!-- /.card-body -->
    
        
      </div> <!-- / .card -->
    </div> <!-- / .col-md-6 -->



        
    <!-- Striped rows -->

  </div> <!-- .row-->
    
    
 <div class="row ArFont">
    <!-- Recent Activity -->
    <div class="col-md-12 col-lg-12 mb-4">
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">تفاصيل العقارات التابعة للمالك</strong>&nbsp; <a href="{{ route('AddProparties',$theOwner->id) }}"><i class="fa fa-plus" aria-hidden="true"></i></a>

         </div>
      <div class="card-body">
        
                 <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
        
                 <th>إسم العقار </th>
                <th>نوع العقار </th>
                <th>المدينة</th>
                <th>رقم الصك</th>
                <th>موقع العقار في google maps</th>
                 <th>الاجراء</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                  @foreach($OwnerProparties as $propatie)
                 <?php $i++; ?>
              <tr>
                <td>{{$i}}</td>
                 <td>{{$propatie['name']}}</td>
                 <td>{{$propatie['type']}}</td>
                 <td>{{$propatie['city']}}</td>
                 <td>{{$propatie['deed_number']}}</td>
                 <td>{{$propatie['google_maps']}}</td>
                  
                  
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
      
          
          
      </div> <!-- /.card-body -->
    
        
      </div> <!-- / .card -->
    </div> <!-- / .col-md-6 -->
    <!-- Striped rows -->

  </div> <!-- .row-->
    



  @endsection
