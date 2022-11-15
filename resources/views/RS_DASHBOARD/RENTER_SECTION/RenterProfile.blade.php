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
    <div class="col-md-8 col-lg-8 mb-4">
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">تفاصيل المستاجر</strong>
         </div>
      <div class="card-body">
        
              <div class="row align-items-center">
          
            <div class="col-md-12">
              <div class="row align-items-center">
                <div class="col-md-7">
                  <h4 class="mb-1">{{$Renter->name}}</h4>
                 </div>
                 
              </div>
              <div class="row mb-4">
        <div class="col-md-12">
             <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">رقم الجوال	</label>
                <input type="text" class="form-control" id="validationCustom03" disabled value="{{$Renter->phone_number}}" >
               </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom04">المدينة	</label>
                <input type="text" class="form-control" id="validationCustom03" disabled value="{{$Renter->city}}" >
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
          <strong class="card-title">العقود والوثائق</strong>
          </div>
      <div class="card-body">
        
        <div class="row align-items-center">
            <div class="col-3 text-center">
              <span class="circle circle-sm bg-primary">
                <i class="fe fe-16 fe-home text-white mb-0"></i>
              </span>
            </div>
            <div class="col">
              <p class="small text-muted mb-0">العقود السارية</p>
              <span class="h3 mb-0">{{$RetnerActiveContrcts}}</span>
            </div>
          </div>
          
         <div class="row align-items-center">
            <div class="col-3 text-center">
              <span class="circle circle-sm bg-primary">
                <i class="fe fe-16 fe-home text-white mb-0"></i>
              </span>
            </div>
            <div class="col">
              <p class="small text-muted mb-0">العقود المنتهية</p>
              <span class="h3 mb-0">{{$RenterInActiveContracts}}</span>
            </div>
          </div>
      <div class="row align-items-center">
            <div class="col-3 text-center">
              <span class="circle circle-sm bg-primary">
                <i class="fe fe-16 fe-file text-white mb-0"></i>
              </span>
            </div>
            <div class="col">
              <p class="small text-muted mb-0">الوثائق</p>
              <span class="h3 mb-0">{{$RenterDocs}}</span>
            </div>
          </div>
          
      <div class="row align-items-center">
            <div class="col-3 text-center">
              <span class="circle circle-sm bg-primary">
                <i class="fe fe-16 fe-file text-white mb-0"></i>
              </span>
            </div>
            <div class="col">
              <p class="small text-muted mb-0">الفواتير</p>
              <span class="h3 mb-0">{{$RenterBills}}</span>
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
          <strong class="card-title">العقود التابعد للمستاجر</strong> <a href="{{ route('AddRenterContract',$Renter->id) }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
         </div>
      <div class="card-body"   style="overflow-x: scroll;"  data-simplebar>
        
                 <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
        
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
                   @foreach($RenterContracts as $renter)
               <?php $i++; ?>  
              <tr>
                <td>{{$i}}</td>
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
                    <a class="dropdown-item" href="{{ route('ShowRenterPayments',$renter['id']) }}">تحصيل الايجارات</a>
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
    
     <div class="row ArFont">
    <!-- Recent Activity -->
    <div class="col-md-12 col-lg-12 mb-4 ArFont">
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">الوثائق</strong><a href="{{ route('RenterDoc.show',$Renter->id) }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
         </div>
      <div class="card-body">
        
                 <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
        
                 <th>نوع الوثيقة </th>
                 <th>رفعة بواسطة </th>
                 <th> الوثيقة </th>

                <th>الاجراء</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
                  @foreach($RenterDocsList as $doc)
            <?php $i++; ?>  
              <tr>
                <td>{{$i}}</td>
                <td>{{$doc['type']}}</td>
                <td>{{$doc['upload_by']}}</td>
                <td>{{$doc['name']}}</td>
        

                  
                  
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


  
         <div class="row ArFont">
    <!-- Recent Activity -->
    <div class="col-md-12 col-lg-12 mb-4">
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">الفواتير</strong><a href="{{ route('Bill.show',$Renter->id) }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
         </div>
      <div class="card-body">
        
                 <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
        
                 <th>قيمة الفاتورة </th>
                <th>تنزيل الفاتورة </th>

               </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
                 @foreach($RenterBillsList as $bill)
            <?php $i++; ?> 
              <tr>
                <td>{{$i}}</td>
                <td>{{$bill['amount']}}</td>
                <td>{{$bill['file']}}</td>
        
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
