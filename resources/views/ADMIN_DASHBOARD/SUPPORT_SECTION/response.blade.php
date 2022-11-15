@extends('layouts.admin_dashboard')
@section('title')
تفاصيل طلب الدعم الفني

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
      <div class="card timeline shadow" style="overflow-x: scroll;"  data-simplebar >
        <div class="card-header">
          <strong class="card-title">تفاصيل طلب الدعم الفني</strong>
         </div>
      <div class="card-body">
               
   
        <div class="row my-4">
            
            <div class="col-md-12">
                      <label for="example-readonly">العنوان</label>
                      <input type="text" id="example-readonly" class="form-control" readonly="" value="{{$thisSuppotTicket['subject']}}"> 
              </div> 
                
           
                
         <div class="col-md-12">
                        
                 <div class="form-group">
                     <br/>
                    <label for="example-textarea">الوصف</label>
                    <textarea class="form-control" id="example-textarea" readonly="" rows="4">
                        {{$thisSuppotTicket['content']}}
                    </textarea>
                  </div>         
           </div>          
             <div class="col-md-12">
                        
                 <div class="form-group mb-3">
                    <label for="example-textarea">المرفقات</label><br/>
                   <span class="fe fe-24 fe-file-minus"></span>
                  </div>         
           </div>      
           </div>
                 
        
          
          </div> <!-- /.card-body -->
    
        
      </div> <!-- / .card -->


      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">الرد على الشكوى</strong>
        
        </div>
        <div class="card-body">
    

         
            <form action="{{ route('AddResponseSupport') }}" method="POST">
                @csrf

    
              <div class="row my-4">
              <div class="col-md-12">
                  
       <div class="form-group">
              <label for="example-readonly">الرد</label>
              <textarea class="form-control bg-light" id="exampleFormControlTextarea1" rows="2" name="admin_respnse" required></textarea>
         </div>  
               <input type="hidden" name="SupportID" value="  {{$thisSuppotTicket['id']}}"  /> 
              </div>
         
                  
                  
              </div>
              
              
            <div class="d-flex justify-content-between align-items-center">
           
              <button type="submit" class="btn btn-primary">حفط</button>
            </div>
          </form>
        </div> <!-- .card-body -->
      </div> <!-- .card -->
        


    </div> <!-- / .col-md-6 -->
    <!-- Striped rows -->

  </div> <!-- .row-->
    


 
  
    @endsection   
@section('footer_scripts')

    <script>
 
    </script>

@stop