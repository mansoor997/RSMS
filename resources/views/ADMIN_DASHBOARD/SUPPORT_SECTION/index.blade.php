@extends('layouts.admin_dashboard')
@section('title')
طلبات الدعم الفني

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
          <strong class="card-title">طلبات الدعم الفني</strong>
         </div>
      <div class="card-body">
               
          <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th>مكتب العقار</th>
                <th>نوع التذكرة</th>
                <th>العنوان</th>
                <th>المحتوى</th>
                <th>الحالة</th>
                <th>الاجراء</th>
              </tr>
            </thead>
            <tbody>

              <?php $i=0; ?>
              @foreach($SupportReqs as $item)
              
          <?php $i++; ?>
          <tr>
            <td>
              <div class="avatar avatar-md">
                <img src="{{ asset($item['RS_LOGO'])  }}"  alt="..." class="avatar-img rounded-circle">
              </div>
            </td>
            <td>{{ $i }}</td>
            <td>{{$item['RS_NAME'] }}</td>
            <td>{{$item['SUPPOT_TYPE'] }}</td>
            <td>{{$item['SUBJECT'] }}</td>
            <td>{{$item['CONTENT'] }}</td>
            <td>{!! $item['STATUS'] !!}</td>
             <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="text-muted sr-only">Action</span>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('SupportTicketAdmin',$item['id']) }}">الرد على التذكرة</a>
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