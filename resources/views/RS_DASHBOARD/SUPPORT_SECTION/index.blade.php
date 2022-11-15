@extends('layouts.master')
@section('title')

ققائمة التذاكر

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
    <div class="col-md-12 col-lg-12 mb-4 ArFont">
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">قائمة التذاكر</strong>
         </div>
      <div class="card-body">
        
      <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                 <th>#</th>
                <th>   نوع التذكرة</th>
                <th> العنوان </th>
                <th> حالة التذكرة</th>
                 <th>الخيارات</th>    
                </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
                  @foreach($MyTickets as $Ticket)
              <?php $i++; ?>  
              <tr>
                <td>{{$i}}</td>
                <td>{{$Ticket['type']}}</td>
                <td>{{$Ticket['subject']}}</td>
                
                <td>
                    @if ($Ticket['status']=="PEDDING")
                            <span class="badge badge-pill badge-warning">قيد المراجعة</span>
                     @endif 
                     @if ($Ticket['status']=="CLOSED")
                       <span class="badge badge-pill badge-success">تمة المراجعة</span>
                      @endif  
                </td>

       
                   <td>
                    <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                    </button>
                    
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="{{ route('SupportTicket',$Ticket['id']) }}">استعراض التذكرة</a>
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