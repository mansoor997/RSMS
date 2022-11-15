    
<div  class="row">
    <div class="col-md-12 col-lg-4 mb-4 ArFont">
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">اعدادات العرض</strong>
         </div>
        <div class="card-body" data-simplebar style="height:600px; overflow-y: auto; overflow-x: hidden;">
                <div class="col-md-12 mb-3">
                <label for="PropartieId">العقار</label>
                             <select class="form-control" id="example-select" wire:model.defer="PropartieId">
                                <option  selected value="0">إختر</option>

                                @foreach($OwnerProparties as $Proparti)
                                <option   value="{{$Proparti['id']}}">{{$Proparti['name']}}</option>
                            @endforeach

                            
                            </select>  
               </div>
               <div  class="row">
            <div class="col-md-6 mb-3">
                <label for="monthly_amount">القيمة  للإيجار</label>
                <input type="number" class="form-control"     wire:model="monthly_amount">
               
             </div>
             <div class="col-md-6 mb-3">
              <label for="monthly_amount">نوع الايجار</label>
              <select class="form-control" id="example-select" wire:model.defer="Type">
                    <option  selected value="لم تحدد" >إختر</option>
                    <option   value="شهري">شهري</option>
                    <option   value="سنوي">سنوي</option>
 
 
               </select>  
            </div> 
             
           </div>
                   <div class="col-md-12 mb-3">
                <label for="electricity">كهرباء</label>
                <input type="number" class="form-control" id="electricity"   wire:model="electricity">
               </div>
              <div class="col-md-12 mb-3">
                <label for="water">مياه</label>
                <input type="number" class="form-control" id="water"  wire:model="water">
               </div>
       
                 <div class="col-md-12 mb-3">
                <label for="commion_RS">عمولة المكتب</label>
                <input type="number" class="form-control" id="commion_RS"   wire:model="commion_RS">
               </div>
                 <div class="col-md-12 mb-3">
                <button class="btn btn-primary" type="submit" wire:click="PreparePromotion">استعراض عرض التاجير</button>
               
               </div>
        </div> <!-- / .card-body -->
      </div> <!-- / .card -->
    </div> <!-- / .col-md-6 -->
    <!-- Striped rows -->



    <div class="col-md-12 col-lg-8 ArFont">
        <div class="card shadow">
          <div class="card-header">
            <strong class="card-title">عرض التاجير</strong>
            <a class="float-right small text-muted"  href="#" onclick="getPDF()">طباعة</a>
          </div>


       <div class="canvas_div_pdf card-body p-5">
        <div class="row mb-5">
          <div class="col-12 text-center mb-4">
            <img src="{{ asset(Session::get('profile_image')) }}"  height="150" alt="..." class="avatar-img rounded-circle"> <br /> 
            <br />  <h2 class="mb-0 text-uppercase">عرض تاجير</h2>
            <p class="text-muted"> {{$RsName}}<br />  {{$CRN}}</p>
          </div>
          <div class="col-md-12">
            <p class="small text-muted text-uppercase mb-2"> </p>
            <p class="mb-4">
              <strong>اسم العقار :  {{$PropartieName}}</strong><br />
              <strong>نوع العقار :  {{$PropartieType}}</strong><br />
              <strong>نوع التاجير :  {{$Type}}</strong><br />
              <strong> المدينة:     {{$PropartieCity}} </strong><br />
              <strong> موقع العقار: </strong><br /> <br />
              {!! QrCode::size(100)->generate($PropartieLocation) !!}

              <br />
            </p>
         
          </div>
   
        </div> <!-- /.row -->
        <table class="table table-borderless table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">الوصف</th>
               <th scope="col" class="text-right">المبلغ</th>
            </tr>
          </thead>
          <tbody>

      
            <tr>
              <th scope="row">1</th>
              <td> 
              القيمة  للإيجار
               </td>
               <td class="text-right"> ريال {{$monthly_amount}}</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td> كهرباء<br />
                 
              </td>
               <td class="text-right">ريال  {{$electricity}}</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td> مياه<br />
               </td>
               <td class="text-right"> ريال    {{$water}}</td>
            </tr>
         
            <tr>
              <th scope="row">4</th>
              <td> عمولة المكتب<br /></td>
               <td class="text-right"> ريال  {{$commion_RS}}</td>
           </tr>
        
        
        </tbody>
        </table>
         
          <div class="col-md-12">
            <div class="text-right mr-2">
              <p class="mb-2 h6">
                <span class="text-muted">الاجمالي : </span>
                <strong>ريال  {{$total}}</strong>
              </p>
            
            </div>
          </div>
       
          <div class="row mb-5">
            <div class="col-12 text-center mb-4">
              <img src="{{ asset('HOME_PAGE/images/amen2.png') }}" height="50" class="logo-light-mode" alt="">
               
            </div>
    
     
          </div>  
       
        </div> <!-- /.row -->



      </div> <!-- /.card-body -->
  
        </div>



</div>
 