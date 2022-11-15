@extends('layouts.admin_dashboard')
@section('title')
اضافة مكتب عقار

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

 
 

        <form method="POST" action="{{ route('AddRSOfficeFromAdmin') }}" enctype="multipart/form-data">
            @csrf
           <div class="col-lg-12 ArFont">
                  <div class="card shadow mb-12">
                <div class="card-header">
                      <h6 class="m-0 font-weight-bold   ArFont">اضافة مكتب عقار &nbsp;&nbsp;  </h6>
                </div> 
         
                <div class="card-body">
                    @if($errors->any())

                    <div class="alert alert-danger" role="alert">
                    {{$errors->first()}}
                   </div>
                   @endif
                    <br/>
           <div class="row" >
    
                    <div class="col-lg-4">

                        <div class="custom-control custom-checkbox mb-3">
                            <br />
                            <input type="checkbox" class="custom-control-input" id="customControlValidation1"  name="WithOutAPI" checked>
                            <label class="custom-control-label" for="customControlValidation1"  >لا يوجد سجل تجاري</label>
                           </div>

                    </div>

                    <div class="col-lg-8">

                      
                             <label for="example-date">تاريخ انتهاء الفترة المجانية</label>

                            <input class="form-control" id="example-date" type="date"  required name="EndOfFreeSubscriptions">
                    

                    </div>
                
           </div>
           <br /><br />
           <div class="row" id="CheckWithAPI">
            <div class="col-lg-6">
                <input type="text" class="form-control" placeholder="رقم السجل التجاري" id="CR" />
            </div> 
             <div class="col-lg-6">
                    <button type="button" class="btn btn-success" id="Check_CR">التحقق من البيانات</button>
            </div>
       
            <br /><br />

            <div id="API_ERROR">
                <div class="alert alert-warning ArFont" role="alert">الرجاء التاكد من رقم السجل التجاري</div>
            </div>
            <br /><br />

            <div id="API_SUCCESS">
                <div class="alert alert-success ArFont" role="alert">تم التحقق من بينات السجل التجاري بنجاح</div>
            </div>
   </div>
           <br /><br />
         <div class="row">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" value="" placeholder="رقم السجل التجاري"  readonly id="CR_number" name="CRN"  />
                            </div> 
                             <div class="col-lg-3">
                                <input type="text" class="form-control" value="" placeholder="اسم الشركة" readonly id="company_name" name="Company_name"  />
                            </div>
                             <div class="col-lg-3">
                                <input type="text" class="form-control" value="" placeholder="المدينة" readonly  id="city" name="city" />
                            </div> 
                             <div class="col-lg-3">
                                <input type="text" class="form-control"   value=""  placeholder="حالة الشركة" readonly  id="status_company" name="status" />
                            </div>
           </div>
          <br /><br />
         <div class="row">
                            <div class="col-lg-4">
                                <label for="representCompany">اسم ممثل الشركة</label>

                                <input type="text" class="form-control"  id="representCompany" name="name"    />
                            </div> 
                             <div class="col-lg-4">
                                <label for="numberOfRepresnter">رقم ممثل الشركة</label>

                                <input type="text" class="form-control" id="numberOfRepresnter"  name="presenter_number"   />
                            </div>
                          
                               <div class="col-lg-4 mb-3">
                                <label for="validationCustom02">شعار الشركة</label>
                   
                               <div class="custom-file mb-3">
                   
                                <input type="file" class="form-control" id="validatedCustomFile"  name="company_logo"   />
                                <label class="custom-file-label" for="validatedCustomFile">LOGO.PNG</label>
                                </div> 
                                   </div>
                 
           </div>
                      <br /><br />
                <div class="row">
                            <div class="col-lg-4">
                                <label for="representCompany">البريد الالكتروني</label>

                                <input type="text" class="form-control"  id="representCompany"  name="email"   />
                            </div> 
                             <div class="col-lg-4">
                                <label for="numberOfRepresnter">كلمة المرور</label>

                                <input type="password" class="form-control" id="numberOfRepresnter" name="password"    />
                            </div>
                             <div class="col-lg-4">
                              <label for="contract">تاكيد كلمة المرور </label>
                                <input type="password" class="form-control" id="contract" name="password_confirmation"    />
                            </div> 
                 
           </div>
           <br /><br />

         <div class="row">
                            <div class="col-lg-12">
                     <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary">اضافة مكتب عقار جديد</button></div>

                            </div> 

           </div>
                </div>
            </div>

            </div>
        </form>



 
  
    @endsection   
@section('footer_scripts')

    <script>
        
        var WithOurRCN = $('#customControlValidation1').is(':checked'); 

                if(WithOurRCN)
                {

                    $("#CheckWithAPI").hide();
                    $("#CR_number").attr("readonly", false); 
                    $("#company_name").attr("readonly", false); 
                    $("#city").attr("readonly", false); 
                    $("#status_company").attr("readonly", false); 

                }


            if ($("#CR").val().length > 0) {
                    // input is NOT empty
                    }else{

                        $("#API_ERROR").hide();
                    $("#API_SUCCESS").hide();

                    }

                 
                     
$('#customControlValidation1').change(function() {
  

var WithOurRCN = $('#customControlValidation1').is(':checked'); 



        if(!WithOurRCN)
        {

         debugger;   
            $("#CheckWithAPI").show();
            $("#CR_number").attr("readonly", true); 
            $("#company_name").attr("readonly", true); 
            $("#city").attr("readonly", true); 
            $("#status_company").attr("readonly", true); 


                     
                $("#API_ERROR").hide();
                $("#API_SUCCESS").hide();

                $("#Check_CR").click(function(){
                     
                     

//1010224378
  $.ajax({
  type: 'GET',
  url: 'https://api.wathq.sa/v5/commercialregistration/info/'+$("#CR").val(),
  headers:
  {
	"accept": "application/json",
	"apiKey": "B65erGI3QAdwhdVpiGez3JskGAQatAkc"
    // more as you need
  },
	  success: function (data)
		  {
            $("#API_SUCCESS").show();

            $("#API_ERROR").hide();
		  // alert("success2");
		  console.log(data.crName)
          $('#company_name').val(data.crName);
		  console.log(data.crNumber)
          $('#CR_number').val(data.crNumber);

		  console.log(data.location.name)
          $('#city').val(data.location.name);

		  console.log(data.status.name)
          $('#status_company').val(data.status.name);


		  // alert("success2");
		  },
	error: function (err)
		{
		console.log(err)
        $("#API_ERROR").show();
        $("#API_SUCCESS").hide();
		}
});



                });
       

        }else{

            $("#CheckWithAPI").hide();
            $("#CR_number").attr("readonly", false); 
            $("#company_name").attr("readonly", false); 
            $("#city").attr("readonly", false); 
            $("#status_company").attr("readonly", false); 



        }
    });

    </script>

@stop