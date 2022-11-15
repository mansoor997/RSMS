@extends('layouts.master')
@section('title')

ققائمد المستاجرين

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
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">قائمد المستاجرين</strong>
         </div>
      <div class="card-body">
        
      <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
                <th>إسم المستأجر</th>
                <th> رقم الجوال</th>
                <th> المدينة</th>
                <th> عدد العقود السارية</th>
                <th> عدد العقود المنتهية</th>
                <th>الخيارات</th>    
                </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
                  @foreach($ListOfMyRenters as $renter)
              <?php $i++; ?>  
              <tr>
                <td>{{$i}}</td>
                <td>{{$renter['name']}}</td>
                <td>{{$renter['phone_number']}}</td>
                <td>{{$renter['city']}}</td>
                <td>{{$renter['ActiveContracts']}}</td>
                <td>{{$renter['InActiveContracts']}}</td>
                  <td>
                    <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                    </button>
                    
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('RenterProfile',$renter['id']) }}">ملف المستاجر</a>
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
      var javascriptNumber = 1; 
   </script>
  @stop