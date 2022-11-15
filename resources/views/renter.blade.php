@extends('layouts.renter_dashboard')
@section('title')

لوحة التحكم

@stop
@section('content')

     
     
       
          <!-- start-->
                <div class="mb-2 align-items-center ArFont">
                    <div class="card shadow mb-4">
                      <div class="card-body">
                        <div class="row mt-1 align-items-center">
                            <div class="col-6 col-lg-2 text-center py-4">
                                <p class="mb-1 small text-muted">عدد العقود</p>
                                <span class="h3">{{$HowManyRenterContracts}}</span><br />
                               </div>
                               <div class="col-6 col-lg-2 text-center py-4">
                                <p class="mb-1 small text-muted">عدد العقود المتهية</p>
                                <span class="h3">{{$HowManyRenterContractsInActive}}</span><br />
                               </div>
                          <div class="col-6 col-lg-2 text-center py-4">
                            <p class="mb-1 small text-muted">عدد العقود السارية</p>
                            <span class="h3">{{$HowManyRenterContractsActive}}</span><br />
                        </div>
                          <div class="col-6 col-lg-2 text-center py-4 mb-2">
                            <p class="mb-1 small text-muted">عدد طلبات الصيانة</p>
                            <span class="h3">{{$HowManyRenterMaintenances}}</span><br />
                        </div>
                          <div class="col-6 col-lg-2 text-center py-4">
                            <p class="mb-1 small text-muted">عدد الشكاوى</p>
                            <span class="h3">{{$HowManyRenterComplains}}</span><br />
                        </div>
                          <div class="col-6 col-lg-2 text-center py-4">
                            <p class="mb-1 small text-muted">عدد الملفات المشتركة</p>
                            <span class="h3">{{$HowManyRenterSharedFiles}}</span><br />
                        </div>
                        </div>
                       
                      </div> <!-- .card-body -->
                    </div> <!-- .card -->
                  </div>

          <!-- end-->




                  <div class="row ArFont">
                    <!-- Recent Activity -->
                    <div class="col-md-12 col-lg-12 mb-4">
                      <div class="card timeline shadow">
                        <div class="card-header">
                          <strong class="card-title">العقود التابعد للمستاجر</strong>  
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
                          <strong class="card-title">الوثائق</strong><a href="{{ route('AddDoc') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                         </div>
                      <div class="card-body">
                        
                                 <table class="table datatables" id="dataTable-1">
                            <thead>
                              <tr>
                                 <th>#</th>
                        
                                 <th>نوع الوثيقة </th>
                                 <th>رفعة بواسطة </th>
                                 <th> الوثيقة </th>
                
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
                  <strong class="card-title">الفواتير</strong> 
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
           
          <div class="row ArFont">
            <!-- Recent Activity -->
            <div class="col-md-12 col-lg-12 mb-4">
              <div class="card timeline shadow">
                <div class="card-header">
                  <strong class="card-title">طلبات الصيانه</strong> 
                 </div>
              <div class="card-body">
                
                         <table class="table datatables" id="dataTable-1">
                    <thead>
                      <tr>
                         <th>#</th>
                
                         <th>العنوان </th>
                         <th>رد مكتب العقار </th>
                         <th>المرفقات </th>
        
                       </tr>
                    </thead>
                    <tbody>
                 
                        <?php $i=0; ?>
                        @foreach($RenterMaintenancesList as $Maintenance)
                   <?php $i++; ?> 
                     <tr>
                       <td>{{$i}}</td>
                       <td>{{$Maintenance['subject']}}</td>
                       <td>{{$Maintenance['RS_Office_response']}}</td>
                       <td>{{$Maintenance['attachment']}}</td>
               
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
                  <strong class="card-title">الشكاوى</strong> 
                 </div>
              <div class="card-body">
                
                         <table class="table datatables" id="dataTable-1">
                    <thead>
                      <tr>
                         <th>#</th>
                
                         <th>العنوان </th>
                         <th>رد مكتب العقار </th>
                         <th>المرفقات </th>
        
                       </tr>
                    </thead>
                    <tbody>
                 
                        <?php $i=0; ?>
                        @foreach($RenterComplainsList as $Complains)
                   <?php $i++; ?> 
                     <tr>
                       <td>{{$i}}</td>
                       <td>{{$Complains['subject']}}</td>
                       <td>{{$Complains['RS_Office_response']}}</td>
                       <td>{{$Complains['attachment']}}</td>
               
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
     
     