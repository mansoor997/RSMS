@extends('layouts.master')
@section('title')
تفاصيل المستاجر
 
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
          <strong class="card-title">دفعات اجار لم يتم تحصيلها</strong> 
         </div>
      <div class="card-body"   style="overflow-x: scroll;"  data-simplebar>
        
                 <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
        
                 <th>إسم المستاجر </th>
                 <th>درقم الجوال </th>
                 <th>إسم العقار المؤجر </th>
                <th>رقم العقد </th>
                <th>القيمة الشهرية للإيجار</th>
                <th>تاريخ بداية الإيجار</th>
                <th>تاريخ نهاية الإيجار</th>
                 <th>يدفع كل</th>
                <th>عدد الدفعات</th>
                <th> عدد الدفعات المحصلة  </th>
                <th>  عدد الدفعات الغير محصلة</th>
                <th> عدد الدفعات التي لم يحل موعد سدداها</th>
                <th>العقد</th>
                <th>حالة العقد</th>
                <th>الاجراء</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
                   @foreach($PaymentThisMonthCollect as $renter)
               <?php $i++; ?>  
              <tr>
                <td>{{$i}}</td>
                <td>{{$renter['renter_name']}}</td>
                <td>{{$renter['renter_phone']}}</td>
                <td>{{$renter['propartie']}}</td>
                <td>{{$renter['contract_number']}}</td>
                <td>{{$renter['monthly_amount']}}</td>
                <td>{{$renter['rent_start_date']}}</td>
                <td>{{$renter['rent_end_date']}}</td>
                 <td>{{$renter['paid_pirod']}}</td>
                <td>{{$renter['HowManyPayments']}}</td>
                <td>{{$renter['PaymentCollects']}}</td>
                <td>{{$renter['PaymentNotCollects']}}</td>
                <td>{{$renter['PaymentNotDueDate']}}</td>
                <td>{{$renter['contract']}}</td>
                <td>
                  <span class="badge badge-pill {{$renter['Badge']}}">{{$renter['status']}}</span>
                </td>
 
                  
                  
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('RenterProfile',$renter['renter_id']) }}">ملف المستاجر</a>
                    <a class="dropdown-item" href="{{ route('ShowRenterPayments',$renter['id']) }}">تحصيل الايجارات</a>
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
