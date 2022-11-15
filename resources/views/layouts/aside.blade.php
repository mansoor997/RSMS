
<!-- RS_OFFICE-->

<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light ArFont">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('home') }}">
          <img src="{{ asset('HOME_PAGE/images/amen2.png') }}" height="50" class="logo-light-mode" alt="">

        </a>
      </div>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="{{ route('home') }}"  class=" nav-link ArFont">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text ArFont">لوحة التحكم</span> 
          </a>

        </li>
      </ul>

    
      @if(Session::has('owners'))
     
        <p class="text-muted nav-heading mt-4 mb-1">
          <span>ادارة ملاك العقارات </span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
            <a href="{{ route('Owner.create') }}"class="nav-link">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">اضافة مالك عقار جديد</span>
            </a>
   
          </li>
            <li class="nav-item dropdown">
            <a href="{{ route('Owner.index') }}"class="nav-link">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">قائمة ملاك القارات</span>
            </a>
   
          </li>
        </li>
        <li class="nav-item dropdown">
        <a href="{{ route('ListOfBuildings') }}"class="nav-link">
          <i class="fe fe-box fe-16"></i>
          <span class="ml-3 item-text">قائمة القارات</span>
        </a>
  
      </li>
  
        </ul>
        @endif



       
        @if(Session::has('renters'))
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>ادارة المستاجرين</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="{{ route('Renter.create') }}">
            <i class="fe fe-calendar fe-16"></i>
            <span class="ml-3 item-text">اضافة مستاجر جديد</span>
          </a>
        </li>
        <li class="nav-item w-100">
          <a class="nav-link" href="{{ route('Renter.index') }}">
            <i class="fe fe-calendar fe-16"></i>
            <span class="ml-3 item-text">قائمة المستاجرين</span>
          </a>
        </li>
            <li class="nav-item w-100">
          <a class="nav-link" href="{{ route('ShowPromotion') }}">
            <i class="fe fe-calendar fe-16"></i>
            <span class="ml-3 item-text">عروض التاجير</span>
          </a>
        </li>
      </ul>
      @endif

      
      @if(Session::has('CRM'))

     <p class="text-muted nav-heading mt-4 mb-1">
        <span>علاقات المستاجرين</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="{{ route('Complains.index') }}"class="nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">الشكاوى</span>
          </a>

        </li>
         <li class="nav-item dropdown">
          <a href="{{ route('Maintenance.index') }}"class="nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">طلبات الصيانة</span>
          </a>

        </li>

      </ul>

      @endif

    
      @if(Session::has('tells'))
         <p class="text-muted nav-heading mt-4 mb-1">
        <span>دليل الهاتف</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="{{ route('Contact.create') }}"class="nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">اضافة جهة اتصال جديدة</span>
          </a>

        </li>
         <li class="nav-item dropdown">
          <a href="{{ route('Contact.index') }}"class="nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">قائمة جهات الاتصال</span>
          </a>

        </li>

      </ul>
      @endif

      
      @if(Session::has('subusers'))
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>ادارة المستخدمين</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="{{ route('SubUser.create') }}"class="nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">اضافة مستخدم جديد</span>
          </a>

        </li>
         <li class="nav-item dropdown">
          <a href="{{ route('SubUser.index') }}"class="nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">قائمة المستخدمين</span>
          </a>

        </li>

      </ul>
      @endif

       
       @if(Session::has('support'))
    <p class="text-muted nav-heading mt-4 mb-1">
        <span>الدعم الفني</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="{{ route('Support.create') }}"class="nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">تذكرة دعم فني جديدة</span>
          </a>

        </li>
         <li class="nav-item dropdown">
          <a href="{{ route('Support.index') }}"class="nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">قائمة التذاكر</span>
          </a>

        </li>

      </ul>
      @endif
      
     
      @if(Session::has('subscriptions'))
    <p class="text-muted nav-heading mt-4 mb-1">
        <span>الاشتركات</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="{{ route('SubscriptionRequests.create') }}"class="nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">طلب اشتراك جديد</span>
          </a>

        </li>
         <li class="nav-item dropdown">
          <a href="{{ route('SubscriptionRequests.index') }}"class="nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">قائمة الاشتراكات</span>
          </a>

        </li>

      </ul>
        
    @endif
      
        
    </nav>


    
  </aside>
    
  <!--  END  -->