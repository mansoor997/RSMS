<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>أمين لادارة الاملاك</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v3.2.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{{ asset('HOME_PAGE/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('HOME_PAGE/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Slider -->               
        <link rel="stylesheet" href="{{ asset('HOME_PAGE/css/tiny-slider.css') }}"/> 
        <!-- Main Css --> 

        <link href="{{ asset('HOME_PAGE/css/style-rtl.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('HOME_PAGE/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
		<link rel="stylesheet" href="{{ asset('HOME_PAGE/font-awesome/css/font-awesome.min.css') }}">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@200&display=swap" rel="stylesheet">
<style>
.ArFont{

font-family: 'Noto Kufi Arabic', sans-serif;
}
</style>
    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="{{ route('login') }}">
                    <img src="{{ asset('HOME_PAGE/images/amen2.png') }}" height="50" class="logo-light-mode" alt="">
                 </a>
                <div class="buy-button">
                    <a href="{{ route('login') }}"  >
                        <div class="btn btn-primary ArFont"> تسجيل الدخول</div>
                    </a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="  ArFont">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu ArFont">
                        <li><a href="{{ route('login') }}"  >الرئسية</a></li>
                   
        
                        <li class="ArFont">
                            <a href="javascript:void(0)">مميزات النظام</a> 
                           
                        </li>

                        <li class="ArFont">
                            <a href="javascript:void(0)">الاسعار</a> 
                            
                             
                        </li>
                        <li class="  ">
                            <a href="javascript:void(0)">التسجيل</a> 
                            
                        
                          
                        </li>
                    </ul><!--end navigation menu-->
           
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Start Hero -->
        <section class="bg-half-170 pb-0 bg-light d-table w-100 overflow-hidden" style="background: url('{{ asset('HOME_PAGE/images/shapes/shape2.png') }}') top; z-index: 0;">
            <div class="container">
                <div class="row align-items-center mt-5 mt-sm-0">
                    <div class="col-md-6">
                        <div class="title-heading text-center text-md-start">
                            <span class="badge rounded-pill bg-soft-primary ArFont">#امين_معك</span>
                            <h4 class="heading mb-3 mt-2 ArFont">نظام أمين لادارة الاملاك  </h4>
                            <p class="text-muted mb-0 para-dark para-desc mx-auto ms-md-auto ArFont">منصة متكاملة تخدم مديري العقارات، والملاك، والمستأجرين.</p>
                            
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-primary ArFont">   سجل الان في نظام امين</a>
                                <p class="text-muted mt-1 mb-0 ArFont">* لا يتطلب بطاقة ائتمانية</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="freelance-hero position-relative">
                            <div class="bg-shape position-relative">
                                <img src="{{ asset('HOME_PAGE/images/freelancer/House.svg') }}" class="mx-auto d-block img-fluid" alt="">
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

      
        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 order-1 order-lg-2">
                        <div class="section-title text-center text-lg-start mb-4 mb-lg-0 pb-2 pb-lg-0">
                            <span class=" ArFont badge rounded-pill bg-soft-primary">ادارة محكمة</span>
                            <h4 class="title mt-3 mb-4 ArFont">مع أمين، لاداعي لملفات الاكسل،واتساب</h4>
                            <p class="text-muted para-desc mx-auto ms-lg-auto mb-0 ArFont">ابداء الان مع أمين و ادار عملائك و ملاك العقارات من خلال منصة موحدة ،من خلال مركزية محكمة لا داعي لمشاركة العقود و ملفات الاكسل مع زملاء العمل او العملاء او ملاك العقارات</p>
                            
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-12 order-2 order-lg-1">
                        <div class="row me-lg-5">
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                        <div class="card border-0 text-center features feature-clean course-feature p-4 overflow-hidden shadow">
                                            <div class="icons text-primary text-center mx-auto">
                                             <i class="fa fa-eercast fa-4x  d-block rounded-pill h3 mb-0"></i>
                                            </div>
                                            <div class="card-body p-0 mt-4  ArFont">                                            
                                                <a href="javascript:void(0)" class="title h5 text-dark ArFont"> علاقات العملاء</a>
                                                <p class="text-muted mt-2 mb-0"> من خلال منصة مخصصة لعملائك تست؛يع استقبال طلبات الصيانة و الشكاوى</p>
                                                <i class="fa fa-eercast text-primary full-img"></i>
											 

                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12 mt-4 pt-2">
                                        <div class="card border-0 text-center features feature-clean course-feature p-4 overflow-hidden shadow">
                                            <div class="icons text-primary text-center mx-auto">
                                                <i class="uil uil-airplay d-block rounded-pill h3 mb-0"></i>
                                            </div>
                                            <div class="card-body p-0 mt-4 ArFont">                                            
                                                <a href="javascript:void(0)" class="title h5 text-dark ArFont"> ملفات مشتركة</a>
                                                <p class="text-muted mt-2 mb-0 ArFont">من خلال النظام لكل عميل مساحة لمشاركة الملفات الخاصة به ،وحفظها بامان</p>
                                                <i class="uil uil-airplay text-primary full-img"></i>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end Row-->
                            </div><!--end col-->

                            <div class="col-md-6 col-12">
                                <div class="row pt-lg-4 mt-lg-4">
                                    <div class="col-12 mt-4 pt-2">
                                        <div class="card border-0 text-center features feature-clean course-feature p-4 overflow-hidden shadow">
                                            <div class="icons text-primary text-center mx-auto">
                                                <i class="uil uil-envelope d-block rounded-pill h3 mb-0"></i>
                                            </div>
                                            <div class="card-body p-0 mt-4 ArFont">                                            
                                                <a href="javascript:void(0)" class="title h5 text-dark ArFont"> التنبيهات للعقود</a>
                                                <p class="text-muted mt-2 mb-0 ArFont"> من خلال لوحة التحكم الخاصة بك يمكنك متابعة جميع عقود عملائك ومعرفة عدد الايام المتبقية لانتهاء العقد</p>
                                                <i class="uil uil-envelope text-primary full-img"></i>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    
                                    <div class="col-12 mt-4 pt-2">
                                        <div class="card border-0 text-center features feature-clean course-feature p-4 overflow-hidden shadow">
                                            <div class="icons text-primary text-center mx-auto">
                                                <i class="uil uil-bell d-block rounded-pill h3 mb-0"></i>
                                            </div>
                                            <div class="card-body p-0 mt-4 ArFont">                                            
                                                <a href="javascript:void(0)" class="title h5 text-dark ArFont"> تذاكر صيانة ٢٤  / ٧</a>
                                                <p class="text-muted mt-2 mb-0 ArFont">يمكنك فتح تذكرة صاينة مع ادارة منصة أمين في اي وقت </p>
                                                <i class="uil uil-bell text-primary full-img"></i>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end Row-->
                            </div><!--end col-->
                        </div><!--end Row-->

                        <div class="mt-4 d-lg-none d-block text-center">
                            <a href="javascript:void(0)" class="btn btn-primary">See more</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-md-4 mt-4 pt-2">
                        <ul class="nav nav-pills nav-justified flex-column bg-white rounded shadow p-3 mb-0 sticky-bar" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded active" id="proposal" data-bs-toggle="pill" href="#developing" role="tab" aria-controls="developing" aria-selected="false">
                                    <div class="text-start d-flex align-items-center justify-content-between py-1 px-2">
                                        <h6 class="mb-0 ArFont"><i class="uil uil-postcard me-2 h5 ArFont"></i> عروض التاجير</h6>
                                        <i class="uil uil-angle-right-b"></i>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="contract" data-bs-toggle="pill" href="#data-analise" role="tab" aria-controls="data-analise" aria-selected="false">
                                    <div class="text-start d-flex align-items-center justify-content-between py-1 px-2">
                                        <h6 class="mb-0 ArFont"><i class="uil uil-notes me-2 h5 ArFont"></i> العقود</h6>
                                        <i class="uil uil-angle-right-b"></i>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="crm" data-bs-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
                                    <div class="text-start d-flex align-items-center justify-content-between py-1 px-2 ArFont">
                                        <h6 class="mb-0 ArFont"><i class="uil uil-folder-check me-2 h5 ArFont"></i> علاقات العملاء</h6>
                                        <i class="uil uil-angle-right-b"></i>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="timetracking" data-bs-toggle="pill" href="#time-track" role="tab" aria-controls="time-track" aria-selected="false">
                                    <div class="text-start d-flex align-items-center justify-content-between py-1 px-2 ArFont">
                                        <h6 class="mb-0 ArFont"><i class="uil uil-clock me-2 h5 ArFont"></i> تبيهتات متعددة</h6>
                                        <i class="uil uil-angle-right-b"></i>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="invoice" data-bs-toggle="pill" href="#invoices" role="tab" aria-controls="invoices" aria-selected="false">
                                    <div class="text-start d-flex align-items-center justify-content-between py-1 px-2 ArFont">
                                        <h6 class="mb-0 ArFont"><i class="uil uil-invoice me-2 h5 ArFont"></i> ادارة المستخدمين</h6>
                                        <i class="uil uil-angle-right-b"></i>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="tasktracking" data-bs-toggle="pill" href="#task-track" role="tab" aria-controls="task-track" aria-selected="false">
                                    <div class="text-start d-flex align-items-center justify-content-between py-1 px-2 ArFont">
                                        <h6 class="mb-0 ArFont"><i class="uil uil-exchange-alt me-2 h5 ArFont"></i> دليل الهاتف</h6>
                                        <i class="uil uil-angle-right-b"></i>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul><!--end nav pills-->
                    </div><!--end col-->

                    <div class="col-md-8 col-12 mt-4 pt-2">
                        <div class="tab-content ArFont" id="pills-tabContent">
                            <div class="tab-pane fade bg-white show active p-4 rounded shadow ArFont" id="developing" role="tabpanel" aria-labelledby="proposal">
                                <h4 class="mb-4 ArFont">اطبع عرض تاجير يطريقة احترافية</h4>
                                <p class="text-muted mb-0" ArFont> من خلال منصة أمين تستطيع طباعة عرض التاجير ومشاركتها مع عملائك المحتملين بطريقة احترافية</p>

                                
                                <div class="mt-4">
                                    <img src="{{ asset('HOME_PAGE/images/freelancer/9.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div><!--end teb pane-->
                            
                            <div class="tab-pane fade bg-white p-4 rounded shadow ArFont" id="data-analise" role="tabpanel" aria-labelledby="contract">
                                <h4 class="mb-4 ArFont" >ادر عقودك باسرع طريقك</h4>
                                <p class="text-muted mb-0 ArFont"> تستطيع اضافة عقد لكل عميل  بطريقة سريعة جداً مع امكانية تعديل عمولة المكتب لكل عقد حسب الاحتياج</p>

                                 

                                <div class="mt-4">
                                    <img src="{{ asset('HOME_PAGE/images/freelancer/12.png') }}" class="img-fluid" alt="">
                                </div>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade bg-white p-4 rounded shadow ArFont" id="security" role="tabpanel" aria-labelledby="crm">
                                <h4 class="mb-4 ArFont">تواصل مع عملائك بافضل الطرق</h4>
                                <p class="text-muted mb-0 ArFont"> يقدم لك نظام أمين افضل الطرق الاخترافية لادارة علاقات العملاء من خلال استقابل طلبات الصيانة و الشكاوى من المنصة ومعرفة حالة الطلب لدى العميل من غير التواصل معة بشكل مباشر</p>

                                

                                <div class="mt-4">
                                    <img src="{{ asset('HOME_PAGE/images/freelancer/15.png') }}" class="img-fluid" alt="">
                                </div>
                            </div><!--end teb pane-->
                            
                            <div class="tab-pane fade bg-white p-4 rounded shadow ArFont" id="time-track" role="tabpanel" aria-labelledby="timetracking">
                                <h4 class="mb-4 ArFont">تقارير و مؤشرات تنبيهيه</h4>
                                <p class="text-muted mb-0 ArFont"> يقدم لك نظام امين مجموع من المؤشرات و التقارير التي تساعدك في اتخاذ قراراتك بطريقة احترافية</p>

                              

                                <div class="mt-4">
                                    <img src="{{ asset('HOME_PAGE/images/freelancer/16.png') }}" class="img-fluid" alt="">
                                </div>
                            </div><!--end teb pane-->
                            
                            <div class="tab-pane fade bg-white p-4 rounded shadow ArFont" id="invoices" role="tabpanel" aria-labelledby="invoice">
                                <h4 class="mb-4 ArFont">ادارة مشتخدمين النظام </h4>
                                <p class="text-muted mb-0 ArFont"> يقدم لك نظام امين ادارة للمستخدمين حسب القسم الذي تراه مناسب له</p>

                                

                                <div class="mt-4">
                                    <img src="{{ asset('HOME_PAGE/images/freelancer/20.png') }}" class="img-fluid" alt="">
                                </div>
                            </div><!--end teb pane-->
                            
                            <div class="tab-pane fade bg-white p-4 rounded shadow ArFont" id="task-track" role="tabpanel" aria-labelledby="tasktracking">
                                <h4 class="mb-4 ArFont">دليل الهاتف</h4>
                                <p class="text-muted mb-0 ArFont"> ادارة لديل هاتف خاص بمكتك ، لا تحتاج الى مشاركة ارقام الهاوتف مع زملائك في المكتب مع نظام امين</p>

                             

                                <div class="mt-4">
                                    <img src="{{ asset('HOME_PAGE/images/freelancer/21.png') }}" class="img-fluid" alt="">
                                </div>
                            </div><!--end teb pane-->
                        </div><!--end tab content-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="section bg-light" style="background: url('images/shapes/shape2.png') center center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2 text-center">
                            <h4 class="title mb-4 ArFont">اختر احد الباقات المتاحة الاًن</h4>
                         </div>
                    </div><!--end col-->
                </div><!--end row-->

             	  <div class="row align-items-center">
                    <div class="col-md-4 col-12 mt-4 pt-2">
                        <div class="card pricing-rates   py-5 border-0 rounded text-center">
                            <div class="card-body">
                                <h6 class="title fw-bold text-uppercase text-primary mb-4 ArFont">مجاني</h6>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">0</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-unstyled mb-0 ps-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>1 Domain Free</li>
                                </ul>
                             </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-4 pt-2">
                        <div class="card pricing-rates starter-plan   py-5 border-0 rounded text-center">
                            <div class="card-body">
                                <h6 class="title fw-bold text-uppercase text-primary mb-4 ArFont"> ٦ شهور  </h6>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">39</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>
                                
                                <ul class="list-unstyled mb-0 ps-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Free Appointments</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                                </ul>
                             </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-4 pt-2">
                        <div class="card pricing-rates   py-5 border-0 rounded text-center">
                            <div class="card-body">
                                <h6 class="title fw-bold text-uppercase text-primary mb-4 ArFont">سنة</h6>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">59</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-unstyled mb-0 ps-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>1 Domain Free</li>
                                </ul>
                             </div>
                        </div>
                    </div><!--end col-->
					
					
					
                </div><!--end row-->
			

		  </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="section overflow-hidden">
            <div class="container mt-100 mt-60">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                   <div class="col-lg-12 ArFont">
                          <div class="card shadow mb-12">
                        <div class="card-header">
                              <h6 class="m-0 font-weight-bold text-primary ArFont">سجل معنا &nbsp;&nbsp;  </h6>
                        </div> 
                 
                        <div class="card-body">
                            @if($errors->any())
    
                            <div class="alert alert-danger" role="alert">
                            {{$errors->first()}}
                           </div>
                           @endif
                            <br/>
                   <div class="row">
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
                                        <input type="text" class="form-control" value="رقم السجل التجاري" readonly id="CR_number" name="CRN"  />
                                    </div> 
                                     <div class="col-lg-3">
                                        <input type="text" class="form-control" value="اسم الشركة" readonly id="company_name" name="Company_name"  />
                                    </div>
                                     <div class="col-lg-3">
                                        <input type="text" class="form-control" value="المدينة" readonly  id="city" name="city" />
                                    </div> 
                                     <div class="col-lg-3">
                                        <input type="text" class="form-control" value="حالة الشركة" readonly  id="status_company" name="status" />
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
                                     <div class="col-lg-4">
                                      <label for="contract">شعار الشركة</label>
                                      <input type="file" class="form-control" id="contract"  name="company_logo"   />
                                      <input type="hidden" name="fromWhere" value="home_page"  />
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
                             <div class="d-flex justify-content-center"><button type="submit" class="btn btn-success">تسجيل</button></div>
    
                                    </div> 
    
                   </div>
                        </div>
                    </div>
    
                    </div>
                </form>
            </div><!--end container-->
    
			
        </section><!--end section-->
        <!-- End -->
        
        <!-- Footer Start -->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a href="#" class="logo-footer">
                            <img src="{{ asset('HOME_PAGE/images/amen3.png') }}" height="50" alt="">
                        </a>
                        <p class="mt-4 text-muted">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-dark footer-head">Company</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-aboutus.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                            <li><a href="page-services.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Services</a></li>
                            <li><a href="page-team.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Team</a></li>
                            <li><a href="page-pricing.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                            <li><a href="portfolio-modern-three.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Project</a></li>
                            <li><a href="page-jobs.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Careers</a></li>
                            <li><a href="page-blog-grid.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                            <li><a href="auth-cover-login.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                        </ul>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-dark footer-head">Usefull Links</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-terms.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                            <li><a href="page-privacy.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                            <li><a href="documentation.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                            <li><a href="changelog.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                            <li><a href="components.html" class="text-muted"><i class="uil uil-angle-right-b me-1"></i> Components</a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-dark footer-head">Newsletter</h5>
                        <p class="mt-4 text-muted">Sign up and receive the latest tips via email.</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="foot-subscribe mb-3">
                                        <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="mail" class="fea icon-sm text-dark icons"></i>
                                            <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded bg-light border text-muted" placeholder="Your email : " required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="Subscribe">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script>   Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">BlueCode.sa</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('HOME_PAGE/images/payments/american-ex.png') }}" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('HOME_PAGE/images/payments/discover.png') }}" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('HOME_PAGE/images/payments/master-card.png') }}" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('HOME_PAGE/images/payments/paypal.png') }}" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('HOME_PAGE/images/payments/visa.png') }}" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        
 
        <!-- javascript -->
        <script src="{{ asset('HOME_PAGE/js/bootstrap.bundle.min.js') }}"></script>
        <!-- SLIDER -->
        <script src="{{ asset('HOME_PAGE/js/tiny-slider.js') }} "></script>
        <!-- Icons -->
        <script src="{{ asset('HOME_PAGE/js/feather.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('HOME_PAGE/js/plugins.init.js') }}"></script>
        
        <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{ asset('HOME_PAGE/js/app.js') }}"></script>
        
        <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
   <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

    <script type="application/javascript">
    
            $(document).ready(function() {
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
            });


    </script>
  
  
    </body>
</html>