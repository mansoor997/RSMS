<!--
    start with subscription section for admin 
    1- list of requested subscrptions
    2-accept the request
    3-reject request


-->
@extends('layouts.admin_dashboard')
@section('title')
 طلبات تجديد الاشتراك

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
    <div class="col-md-12 col-lg-12 mb-4">
      <div class="card timeline shadow"   >
        <div class="card-header">
          <strong class="card-title">قائمة طلبات الاشتراك الجديدة</strong>
         </div>
      <div class="card-body">
               
          <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th>اسم الشركة</th>
                <th>اسم ممثل الشركة</th>
                <th>رقم الجوال</th>
                <th>البريد الالكتروني</th>
                <th>نوع الاشتراك المطلوب</th>
                <th>تاريخ الطلب</th>
                 <th>الاجراء</th>
              </tr>
            </thead>
            <tbody>

              <?php $i=0; ?>
              @foreach($PendingRenewSbus as $item)
              
          <?php $i++; ?>
          <tr>
            <td>
              <div class="avatar avatar-md">
                <img src="{{ asset($item['company_logo'])  }}"  alt="..." class="avatar-img rounded-circle">
              </div>
            </td>
            <td>{{ $i }}</td>
            <td>{{$item['Company_name'] }}</td>
           <td> {!!  $item['presenter_name'] !!}</td>
           <td> {!!  $item['presenter_number'] !!}</td>
           <td> {{  $item['presenter_email'] }}</td>
           <td> {!!  $item['subscription_type'] !!}</td>
           <td> {{  $item['created_at'] }}</td>
         <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="text-muted sr-only">Action</span>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('RenewSubsRespons',['id'=>$item['id'],'status'=>'Accepted']) }}">قبول</a>
                <a class="dropdown-item" href="{{ route('RenewSubsRespons',['id'=>$item['id'],'status'=>'Rejected']) }}">رفض</a>
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
    

  <div class="row ArFont">
    <!-- Recent Activity -->
    <div class="col-md-12 col-lg-12 mb-4">
      <div class="card timeline shadow"  >
        <div class="card-header">
          <strong class="card-title">قائمة طلبات الاشتراك المقبولة</strong>
         </div>
      <div class="card-body">
               
        <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th>اسم الشركة</th>
                <th>اسم ممثل الشركة</th>
                <th>رقم الجوال</th>
                <th>البريد الالكتروني</th>
                <th>نوع الاشتراك المطلوب</th>
                <th>تاريخ الطلب</th>
               </tr>
            </thead>
            <tbody>

              <?php $i=0; ?>
              @foreach($AcceptedRenewSbus as $item)
              
          <?php $i++; ?>
          <tr>
            <td>
              <div class="avatar avatar-md">
                <img src="{{ asset($item['company_logo'])  }}"  alt="..." class="avatar-img rounded-circle">
              </div>
            </td>
            <td>{{ $i }}</td>
            <td>{{$item['Company_name'] }}</td>
           <td> {!!  $item['presenter_name'] !!}</td>
           <td> {!!  $item['presenter_number'] !!}</td>
           <td> {{  $item['presenter_email'] }}</td>
           <td> {!!  $item['subscription_type'] !!}</td>
           <td> {{  $item['created_at'] }}</td>
  
          </tr>
          @endforeach

               


            </tbody>
          </table>
          
        
          
          </div> <!-- /.card-body -->
    
        
      </div> <!-- / .card -->
    </div> <!-- / .col-md-6 -->
    <!-- Striped rows -->

  </div> <!-- .row-->
    


  <div class="row ArFont">
    <!-- Recent Activity -->
    <div class="col-md-12 col-lg-12 mb-4">
      <div class="card timeline shadow"   >
        <div class="card-header">
          <strong class="card-title">قائمة طلبات الاشتراك المرفوضة</strong>
         </div>
      <div class="card-body">
               
        <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th>اسم الشركة</th>
                <th>اسم ممثل الشركة</th>
                <th>رقم الجوال</th>
                <th>البريد الالكتروني</th>
                <th>نوع الاشتراك المطلوب</th>
                <th>تاريخ الطلب</th>
               </tr>
            </thead>
            <tbody>

              <?php $i=0; ?>
              @foreach($RejectedRenewSbus as $item)
              
          <?php $i++; ?>
          <tr>
            <td>
              <div class="avatar avatar-md">
                <img src="{{ asset($item['company_logo'])  }}"  alt="..." class="avatar-img rounded-circle">
              </div>
            </td>
            <td>{{ $i }}</td>
            <td>{{$item['Company_name'] }}</td>
           <td> {!!  $item['presenter_name'] !!}</td>
           <td> {!!  $item['presenter_number'] !!}</td>
           <td> {{  $item['presenter_email'] }}</td>
           <td> {!!  $item['subscription_type'] !!}</td>
           <td> {{  $item['created_at'] }}</td>
 
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
@section('footer_scripts')

    <script>
 
    </script>

@stop