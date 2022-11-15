@extends('layouts.master')
@section('title')

قائمة العقارات

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
          <strong class="card-title">قائمة العقارات</strong>
         </div>
      <div class="card-body">
        
                  <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
                         <th>اسم مالك العقار</th>
                        <th>اسم العقار</th>
                        <th>المدينة</th>
                        <th>نوع العقار</th>
                        <th>رقم الصك</th>
                        <th>موقع العقار على الخريطة</th>
                         <th>الخيارات</th>    
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                                @foreach($BuildinsInfo as $WB)
                  <?php $i++; ?>
              <tr>
                <td>{{$i}}</td>
                <td>{{$WB['OwnerName']}}</td>
                <td>{{$WB['name']}}</td>
                <td>{{$WB['city']}}</td>
                <td>{{$WB['type']}}</td>
                <td>{{$WB['deed_number']}}</td>
                <td>{{$WB['google_maps']}}</td>
                 <td>
                    <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                    </button>
                    
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">ملف مالك العقار</a>
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
