@extends('layouts.master')
@section('title')


تحصيل الاجار     
        

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
              
تحصيل الاجار     
        </strong>
         </div>
      <div class="card-body">

        <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
                        <th>رقم الدفعة</th>
                        <th>تاريخ استحقاق الاجار</th>
                        <th>قيمة الجار </th>
                        <th>قيمة عملة المكتب</th>
                        <th>الكهرباء</th>
                        <th>الماء</th>
                        <th>المجموع الكلي</th>
                        <th>حالة التحصيل</th>
                        <th>الخيارات</th>    
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                   @foreach($RenterPayments as $renter)
                <?php $i++; ?>  
              <tr>
                <td>{{$i}}</td>
                <td>{{$renter['payment_number']}}</td>
                <td>{{$renter['payment_dueDate']}}</td>
                <td>{{$renter['monthly_amount']}}</td>
                <td>{{$renter['commion_RS']}}</td>
                <td>{{$renter['electricity']}}</td>
                <td>{{$renter['water']}}</td>
                <td>{{$renter['total']}}</td>
                 <td>
                    @if($renter['status']=="PENDING")
                     
                        <span class="badge badge-pill badge-warning">لم يحل موعد السداد</span> 

                        @endif
                    @if($renter['status']=="NOT_COLLECTED")
                    
                        <span class="badge badge-pill badge-danger">لم يتم تحصيل المبلغ</span> 

                        @endif
                    @if($renter['status']=="COLLECTED")
                   
                        <span class="badge badge-pill badge-success">تم تحصيل المبلغ</span> 

                    
                    @endif
 

                 </td>
                 <td>
                    <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                    </button>
                    
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('CollectRenterPayment',$renter['id']) }}" >تحصيل الاجار</a>
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
