@extends('layouts.master')
@section('title')

ققائمة المستخدمين

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
          <strong class="card-title">قائمة المستخدمين</strong>
         </div>
      <div class="card-body">
        
      <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
                <th>   نوع الحساب</th>
                <th> البريد الالكتروني </th>
                <th> ادارة ملاك العقارات</th>
                <th> ادارة المستاجرين</th>
                <th> دليل الهاتف</th>
                <th> علاقات المستاجرين</th>
                <th> ادارة المستخدمين</th>
                <th> الاشتركات</th>
                <th> الدعم الفني</th>
                <th>الخيارات</th>    
                </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
                  @foreach($MysubUser as $subUser)
              <?php $i++; ?>  
              <tr>
                <td>{{$i}}</td>
                <td>{{$subUser['userType']}}</td>
                <td>{{$subUser['email']}}</td>
                
                <td>
                    @if ($subUser['owners']=="on")
                            <span class="badge badge-pill badge-success">فعال</span>
                    @else
                            <span class="badge badge-pill badge-danger">غير فعال</span>
                    @endif  
                </td>

                <td>
                    @if ($subUser['renters']=="on")
                            <span class="badge badge-pill badge-success">فعال</span>
                    @else
                            <span class="badge badge-pill badge-danger">غير فعال</span>
                    @endif  
                </td>

                <td>
                    @if ($subUser['tells']=="on")
                            <span class="badge badge-pill badge-success">فعال</span>
                    @else
                            <span class="badge badge-pill badge-danger">غير فعال</span>
                    @endif  
                </td>

                <td>
                    @if ($subUser['CRM']=="on")
                            <span class="badge badge-pill badge-success">فعال</span>
                    @else
                            <span class="badge badge-pill badge-danger">غير فعال</span>
                    @endif  
                </td>


                <td>
                    @if ($subUser['subusers']=="on")
                            <span class="badge badge-pill badge-success">فعال</span>
                    @else
                            <span class="badge badge-pill badge-danger">غير فعال</span>
                    @endif  
                </td>



                <td>
                    @if ($subUser['subscriptions']=="on")
                            <span class="badge badge-pill badge-success">فعال</span>
                    @else
                            <span class="badge badge-pill badge-danger">غير فعال</span>
                    @endif  
                </td>


                <td>
                    @if ($subUser['support']=="on")
                            <span class="badge badge-pill badge-success">فعال</span>
                    @else
                            <span class="badge badge-pill badge-danger">غير فعال</span>
                    @endif  
                </td>
                   <td>
                    <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                    </button>
                    
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">١</a>
                    <a class="dropdown-item" href="#">٢</a>
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