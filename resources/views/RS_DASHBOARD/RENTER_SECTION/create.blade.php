@extends('layouts.master')
@section('title')

اضافة مستاجر جديد
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
    <div class="col-md-12 col-lg-12 mb-4">
      <div class="card timeline shadow ArFont">
        <div class="card-header">
          <strong class="card-title">اضافة مستاجر جديد</strong>
         </div>
      <div class="card-body">
        <form action="{{ route('Renter.store') }}" method="POST">
            @csrf
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1">إسم المستأجر</label>
                <input type="text" class="form-control" required name="name">
                
               </div>

        <div class="col-md-6 mb-3">
           
                <label for="validationCustomUsername">رقم الجوال</label>
                <div class="input-group">
                <input type="text" class="form-control" required name="phone_number">

                 </div>
        </div>
        
              <div class="col-md-6 mb-3">
                  
                <label for="validationCustom01">البريد الإلكترونى</label>
                <input type="email" class="form-control" id="validationCustom01"   required name="email">

                </div>
                <div class="col-md-6 mb-3">
                  
                    <label for="validationCustom01">كلمة المرور</label>
                    <input type="password" class="form-control" id="validationCustom01"   required name="password">
    
                    </div>
                 
              <div class="col-md-12 mb-3">
                <label for="validationCustom02">المدينة</label>
                             <select class="form-control" id="example-select" required name="city">
                        <option disabled selected>إختر</option>
                                                                <option value="مدينة الرياض" >مدينة الرياض</option>
                                                                <option value="جدة" >جدة</option>
                                                                <option value="مكة المكرمة" >مكة المكرمة</option>
                                                                <option value="المدينة المنورة" >المدينة المنورة</option>
                                                                <option value="سلطانه" >سلطانه</option>
                                                                <option value="الدمام" >الدمام</option>
                                                                <option value="الطائف" >الطائف</option>
                                                                <option value="تبوك" >تبوك</option>
                                                                <option value="الخرج" >الخرج</option>
                                                                <option value="بريدة" >بريدة</option>
                                                                <option value="خميس مشيط" >خميس مشيط</option>
                                                                <option value="الهفوف" >الهفوف</option>
                                                                <option value="المبرز" >المبرز</option>
                                                                <option value="حفر الباطن" >حفر الباطن</option>
                                                                <option value="حائل" >حائل</option>
                                                                <option value="نجران" >نجران</option>
                                                                <option value="الجبيل" >الجبيل</option>
                                                                <option value="أبها" >أبها</option>
                                                                <option value="ينبع" >ينبع</option>
                                                                <option value="مدينه الخبر" >مدينه الخبر</option>
                                                                <option value="عرعر" >عرعر</option>
                                                                <option value="سكاكا" >سكاكا</option>
                                                                <option value="جازان" >جازان</option>
                                                                <option value="القريات" >القريات</option>
                                                                <option value="الظهران" >الظهران</option>
                                                                <option value="القطيف" >القطيف</option>
                                                                <option value="الباحة" >الباحة</option>
                                                                <option value="تاروت" >تاروت</option>
                                                                <option value="بيشة" >بيشة</option>
                                                                <option value="الرس" >الرس</option>
                                                                <option value="الشفا" >الشفا</option>
                                                                <option value="المذنب" >المذنب</option>
                                                                <option value="الخفجي" >الخفجي</option>
                                                                <option value="الدوادمي" >الدوادمي</option>
                                                                <option value="صبيا" >صبيا</option>
                                                                <option value="الزلفي" >الزلفي</option>
                                                                <option value="ابو عريش" >ابو عريش</option>
                                                                <option value="الصفوة" >الصفوة</option>
                                                                <option value="عفيف" >عفيف</option>
                                                                <option value="رابغ" >رابغ</option>
                                                                <option value="طريف" >طريف</option>
                                                                <option value="الدلم" >الدلم</option>
                                                                <option value="املج" >املج</option>
                                                                <option value="العلا" >العلا</option>
                                                                <option value="ابقيق" >ابقيق</option>
                                                                <option value="بدر حنين" >بدر حنين</option>
                                                                <option value="الوجه" >الوجه</option>
                                                                <option value="البكيرية" >البكيرية</option>
                                                                <option value="النماص" >النماص</option>
                                                                <option value="السليل" >السليل</option>
                                                                <option value="تربه" >تربه</option>
                                                                <option value="الجموم" >الجموم</option>
                                                                <option value="ضباء" >ضباء</option>
                                                                <option value="في الطراف" >في الطراف</option>
                                                                <option value="القيصومة" >القيصومة</option>
                                                                <option value="البطالية" >البطالية</option>
                                                                <option value="المنيزلة" >المنيزلة</option>
                                                                <option value="المجاردة" >المجاردة</option>
                                                                <option value="تنومة" >تنومة</option>
                                                                <option value="القرين" >القرين</option>
                                                                <option value="الأوجام" >الأوجام</option>
                                                                <option value="فرسان" >فرسان</option>
                                                                <option value="مينداك" >مينداك</option>
                                                                <option value="الأرطاوية" >الأرطاوية</option>
                                                                 
                                                            
                                                            </select>  
               </div>
            </div>
     
            <button class="btn btn-primary" type="submit">حفظ</button>
          </form>
        </div> <!-- /.card-body -->
    
        
      </div> <!-- / .card -->
    </div> <!-- / .col-md-6 -->
    <!-- Striped rows -->

  </div> <!-- .row-->
    
  
@endsection
