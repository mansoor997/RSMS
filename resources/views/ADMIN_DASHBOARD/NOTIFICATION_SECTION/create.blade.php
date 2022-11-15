@extends('layouts.admin_dashboard')
@section('title')
ارسال تنبية للمشتركين

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


      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">ارسال تنبية للمشتركين</strong>
        
        </div>
        <div class="card-body">
    

         
            <form action="{{ route('Notifications.store') }}" method="POST">
                @csrf

    
              <div class="row my-4">
                      <div class="col-md-6">            
                          <div class="form-group">
                                  <label for="example-readonly">نوع الاشتراك </label>
                                  <select class="form-control" id="example-select" name="SubsType" required>
                                    <option value="free">مجاني</option>
                                    <option value="6">٦ شهور</option>
                                    <option value="12">سنوي</option>
                                    <option value="all">الجميع</option>
                                  </select>
                                </div>  
                        </div>
         
                        <div class="col-md-6">            
                          <div class="form-group">
                                  <label for="example-readonly">العنوان </label>
                                  <input type="text" id="example-readonly" class="form-control" name="subject" required> 

                                </div>  
                        </div>
                  
              </div>
              <div class="row my-4">

                <div class="col-md-12">            
                  <div class="form-group">
                          <label for="example-readonly">الرسالة </label>
                          <textarea class="form-control bg-light" id="exampleFormControlTextarea1" rows="2" name="content" required></textarea>

                        </div>  
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