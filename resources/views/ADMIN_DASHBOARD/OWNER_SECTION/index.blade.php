@extends('layouts.admin_dashboard')
@section('title')
اضافة مكتب عقار

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
      <div class="card timeline shadow" style="overflow-x: scroll;"  data-simplebar >
        <div class="card-header">
          <strong class="card-title">قائمة المشتركين</strong>
         </div>
      <div class="card-body">
               
          <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th>البريد الالكتروني</th>
                <th>نوع الاشتراك</th>
                <th>حالة الاشتراك</th>
                <th>اسم الشركة</th>
                <th>حالة الشركة</th>
                <th>المدينة</th>
                 <th>تاريخ بداية الاشتارك الحالي</th>
                <th>تاريخ نهاية الاشتارك الحالي</th>
                <th>الاجراء</th>
              </tr>
            </thead>
            <tbody>

              <?php $i=0; ?>
              @foreach($RSOfficesList as $item)
              
          <?php $i++; ?>
          <tr>
            <td>
              <div class="avatar avatar-md">
                <img src="{{ asset($item['logo'])  }}"  alt="..." class="avatar-img rounded-circle">
              </div>
            </td>
            <td>{{ $i }}</td>
            <td>{{$item['presenter_email'] }}</td>
           <td> {!!  $item['subscriptionType'] !!}</td>
           <td> {!!  $item['status'] !!}</td>
           <td> {{  $item['company_name'] }}</td>
           <td> {{  $item['company_status'] }}</td>
           <td> {{  $item['city'] }}</td>
           <td> {{  $item['date_start'] }}</td>
           <td> {{  $item['date_end'] }}</td>
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
@section('footer_scripts')

    <script>
 
    </script>

@stop