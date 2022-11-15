@extends('layouts.master')
@section('title')

اضافة عقار جديد

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
<form action="{{ route('OwnersProparties.store') }}" method="POST">
    @csrf
<div class="row ArFont">
    <!-- Recent Activity -->
    <div class="col-md-12 col-lg-12 mb-4">
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">اضافة عقار جديد</strong>
         </div>
      <div class="card-body">
           
<div class="col-12 no-marg-row row">
<div class="col-xl-4 col-md-6">
    <div class="form-group">
        <label>إسم العقار</label>
        <input type="text" name="name" class="form-control"
            placeholder="مثال: بناء العليّا" value="" required>

            <input type="hidden" name="owners_id" value="{{$id}}" />
    </div>
</div>

<div class="col-xl-4 col-md-6">
    <div class="form-group">
        <label> نوع العقار </label>
        <select class="form-control select-input" name="type" required>
            <option disabled selected>إختر</option>
            <option value="سكنى" >سكنى</option>
            <option value="تجارى" >تجارى</option>
        </select>
    </div>
</div>

<div class="col-xl-4 col-md-6">
    
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


<div class="col-xl-4 col-md-6">
    <div class="form-group">
        <label>رقم الصك</label>
        <input type="number" name="deed_number" class="form-control"
            min="1" step="1" value="" placeholder="مثال: 823764823764">
    </div>
</div>

<div class="col-xl-8">
    <div class="form-group">
        <label> موقع العقار في google maps</label>
        <input type="text" name="google_maps" class="form-control"
        value=""
        placeholder="https://goo.gl/maps/uEdjNKpyyyGqrq8z8 ">
    </div>
    @error('google_maps')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>




<button class="btn btn-primary" type="submit">حفظ</button>
</form>

</div>

          
      </div> <!-- /.card-body -->
    
        
      </div> <!-- / .card -->
    </div> <!-- / .col-md-6 -->
    <!-- Striped rows -->

  </div> <!-- .row-->
    
 



  @endsection
