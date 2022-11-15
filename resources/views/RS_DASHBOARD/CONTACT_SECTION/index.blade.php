@extends('layouts.master')
@section('title')

قائمة جهات الاتصال

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
              
            قائمة جهات الاتصال
        
        </strong>
         </div>
      <div class="card-body">
 <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
        
                 <th>الاسم </th>
                 <th>رقم الجوال </th>
                 <th>الوصف </th>
                 <th>الاجراء</th>

               </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach($MyContracts as $Contract)
                <?php $i++; ?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$Contract['name']}}</td>
                    <td>{{$Contract['phone_number']}}</td>
                    <td>{{$Contract['description']}}</td>
                    <td>
                        <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                        </button>
                        
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">تعديل</a>
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
