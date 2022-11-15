@extends('layouts.master')
@section('title')

تذكرة دعم فني

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
              
          تذكرة دعم فني
        
        </strong>
         </div>
      <div class="card-body">
     
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1">نوع التذكرة</label>
                <select class="form-control" id="example-select" name="type" disabled>
                    <option value="استفسار">{{$ThisTicket['type']}}</option>
                   </select>
                      
               </div>

   
              <div class="col-md-6 mb-3">
                  
                <label for="validationCustom01">العنوان</label>
                       <input type="text" class="form-control" required name="subject" value="{{$ThisTicket['subject']}}" disabled>

                </div>
              <div class="col-md-12 mb-3">
                  
                <label for="validationCustom01">الوصف</label>
                <textarea class="form-control bg-light" id="exampleFormControlTextarea1" rows="2" name="content" disabled>{{$ThisTicket['content']}}</textarea>

                </div>
          
            </div>
     
     
         
        </div> <!-- /.card-body -->
    
        
      </div> <!-- / .card -->
      <br />
      <br/>

      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">الرد من  الدعم الفني</strong>
        
        </div>
        <div class="card-body">
    

         
          
           

    
              <div class="row my-4">
              <div class="col-md-7">
                  
       <div class="form-group">
              <label for="example-readonly">الرد</label>
              <textarea class="form-control bg-light" id="exampleFormControlTextarea1" rows="2" disabled>
           
                {{$ThisTicket['admin_response']}}

                </textarea>
         </div>  
                  
              </div>
              <div class="col-md-4"> 
               
          <div class="form-group">
              <label for="example-readonly">حالة التذكرة</label>
              <select class="form-control" id="example-select" disabled>
                    <option>{{$ThisTicket['status']}}</option>
              </select>
            </div>
                  
               </div>
                  
                  
              </div>
              
              
            <div class="d-flex justify-content-between align-items-center">
           
               
            </div>
           
        </div> <!-- .card-body -->
      </div> <!-- .card -->
       
    </div> <!-- / .col-md-6 -->
    <!-- Striped rows -->

  </div> <!-- .row-->
    
  


  @endsection
