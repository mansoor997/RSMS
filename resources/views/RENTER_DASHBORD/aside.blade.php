     
       
       

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
                  <a href="{{ route('home') }}"  class=" nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">لوحة التحكم</span> 
                  </a>
        
                </li>
              </ul>
              <p class="text-muted nav-heading mt-4 mb-1">
                <span>علاقات العملاء</span>
              </p>
              <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                  <a href="{{ route('AddMaintenanceReq') }}"class="nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">الصيانة</span>
                  </a>
         
                </li>
                 <li class="nav-item dropdown">
                  <a href="{{ route('AddComplains') }}"class="nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text"> الشكاوى</span>
                  </a>
         
                </li>
     
              </ul>
     
            
     
            </nav>
          </aside>
            