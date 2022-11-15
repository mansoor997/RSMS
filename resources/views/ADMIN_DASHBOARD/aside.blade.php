<aside class="sidebar-left border-right bg-white shadow ArFont" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
        <img src="{{ asset('HOME_PAGE/images/amen2.png') }}" height="50" class="logo-light-mode" alt="">

      </a>
    </div>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#"  class=" nav-link">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">لوحة التحكم</span> 
        </a>

      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
      <span>ادارة المشتركين</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="{{ route('AddRSOffice') }}"class="nav-link">
          <i class="fe fe-box fe-16"></i>
          <span class="ml-3 item-text">اضافة مشترك جديد</span>
        </a>

      </li>
       <li class="nav-item dropdown">
        <a href="{{ route('RSOfficesList') }}"class="nav-link">
          <i class="fe fe-box fe-16"></i>
          <span class="ml-3 item-text"> قائمة المشتركين</span>
        </a>

      </li>

    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
      <span>الدعم النفي</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item w-100">
        <a class="nav-link" href="{{ route('SupportRequests') }}">
          <i class="fe fe-calendar fe-16"></i>
          <span class="ml-3 item-text">طلبات الدعم الفني</span>
        </a>
      </li>

    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
      <span> طلبات تجديد الاشتراكات</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="{{ route('ListOdRenewSubsReq') }}" class="nav-link">
          <i class="fe fe-file fe-16"></i>
          <span class="ml-3 item-text">قائمة طلبات التجديد</span>
        </a>

      </li>


    </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
      <span> التنبيهات</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="{{ route('Notifications.create') }}" class="nav-link">
          <i class="fe fe-file fe-16"></i>
          <span class="ml-3 item-text">ارسال تنبية جديد</span>
        </a>

      </li>


    </ul>


  </nav>
</aside>
  