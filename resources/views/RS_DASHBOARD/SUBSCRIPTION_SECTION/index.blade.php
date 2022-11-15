@extends('layouts.master')
@section('title')

قائمة طلبات الاشتراك

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
              
            قائمة طلبات الاشتراك
        
        </strong>
         </div>
      <div class="card-body">
 <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
        
                 <th>تاريخ الارسال </th>
                 <th>نوع الاشتراك </th>
                 <th>حالةالاشتراك </th>
 
               </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach($subscription_requests as $subscription)
                <?php $i++; ?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$subscription['created_at']}}</td>
                    <td>{{$subscription['subscription_type']}}</td>
                    <td>
                        @if ($subscription['status']=="PENDING")
                        <span class="badge badge-pill badge-warning">تحت الاجراء</span>
                        @endif 
                        @if ($subscription['status']=="Accepted")
                        <span class="badge badge-pill badge-success">تم الموافقة على الطلب</span>
                        @endif 
                        @if ($subscription['status']=="REJECT")
                        <span class="badge badge-pill badge-danger">تم رفض الطلب</span>
                        @endif 
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
