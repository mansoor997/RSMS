@extends('layouts.master')
@section('title')

لوحة التحكم

@stop
@section('content')


<div class="mb-2 align-items-center ArFont">

    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="row mt-1 align-items-center">
          <div class="col-12 col-lg-4 text-left pl-4">
            <p class="mb-1 text-muted">{!! $MySubscriptionType !!}</p>
            <span class="h3">{{$howManyDays}}</span>
            <span class="text-muted">يوم على انتهاء الاشتراك الحالي</span>
             <p class="text-muted mt-2"> 
              تاريخ انتهاء الاشتراك الحالي <br /> {{$MySubscriptionEndDate}}
            </p>
          </div>

          <div class="col-6 col-lg-2 text-center py-4 mb-2">
            <p class="mb-1 small text-muted">عدد المستاجرين</p>
            <span class="h3">{{$howManyRenter}}</span><br />
            </div>
          <div class="col-6 col-lg-2 text-center py-4">
            <p class="mb-1 small text-muted">عقود تنتهي هذا الشهر</p>
            <a href="{{ route('ContractsEndThisMonth') }}">  <span class="h3">{{$ContractsEndThisMonth}}</span></a> 
            </div>
              <div class="col-6 col-lg-2 text-center py-4">
                     <p class="mb-1 small text-muted">دفعات الإيجار هذا الشهر </p>
                     <a href="{{ route('PaymentThisMonth') }}">  
                      <span class="h3">{{$PaymentThisMonth}}</span>
                    </a>
              </div> 
          
            

          <div class="col-6 col-lg-2 text-center py-4">
            <p class="mb-1 small text-muted">دفعات  ايجار لم يتم تحصيلها</p>
            <a href="{{ route('PaymentNotCollect') }}"> 
              <span class="h3">{{$PaymentNotCollect}}</span>
             </a> 
   
         </div>  
         

            </div>
        </div>
       
      </div> <!-- .card-body -->
    </div> <!-- .card -->
  </div>

<div class="row ArFont">
    <!-- Recent Activity -->
    <div class="col-md-12 col-lg-4 mb-4 ArFont">
      <div class="card timeline shadow">
        <div class="card-header">
          <strong class="card-title">العقارات حسب النوع</strong>
         
        </div>
        <div class="card-body"  style="overflow-x: scroll;"  data-simplebar >
          <canvas id="myChart2" width="300" height="300"></canvas>

        </div> <!-- / .card-body -->
      </div> <!-- / .card -->
    </div> <!-- / .col-md-6 -->
    <!-- Striped rows --> 
    <div class="col-md-12 col-lg-8 ArFont" >
      <div class="card shadow">
        <div class="card-header">
          <strong class="card-title">الاجارات حسب الشهر</strong>
         </div>
        <div class="card-body my-n2" style="overflow-x: scroll;"   >
          <canvas class="canvas" id="myChart"    ></canvas>

        </div>
      </div>
    </div> <!-- Striped rows -->
  </div> <!-- .row-->
  


@endsection
@section('footer_scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script>
  const ctx = document.getElementById('myChart').getContext('2d');
  const ctx2= document.getElementById('myChart2').getContext('2d');
  const myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
              label: '# اجمالي ارادات الاجارات للشهر',
              data: [
         "{{$MyIncomeByMonth[0]['1']}}",
         "{{$MyIncomeByMonth[0]['2']}}",
         "{{$MyIncomeByMonth[0]['3']}}", 
         "{{$MyIncomeByMonth[0]['4']}}",
         "{{$MyIncomeByMonth[0]['5']}}", 
         "{{$MyIncomeByMonth[0]['6']}}", 
         "{{$MyIncomeByMonth[0]['7']}}",
         "{{$MyIncomeByMonth[0]['8']}}",
         "{{$MyIncomeByMonth[0]['9']}}",
         "{{$MyIncomeByMonth[0]['10']}}",
         "{{$MyIncomeByMonth[0]['11']}}",
         "{{$MyIncomeByMonth[0]['12']}}",

              ],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
        responsive: false,
        

      }
  });


  const myChart2 = new Chart(ctx2, {
      type: 'doughnut',
      data: {
          labels: ['سكني', 'تجارى'],
          datasets: [{
              label: '# of Votes',
              data: [{{$HowManyResidence}}, {{$HowManyCommercial}}],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)' 
               ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)' 
               ],
              borderWidth: 1
          }]
      },
            options: {
                responsive: false
            } 
  });


</script>

@stop