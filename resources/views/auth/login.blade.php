
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>تسجيل الدخول</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v3.2.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
 
    <link href="{{ asset('HOME_PAGE/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('HOME_PAGE/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Slider -->               
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
    
    <div class="back-to-home rounded d-none d-sm-block">
        <a href="{{ route('landing_page') }}" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="me-lg-5">   
                        <img src="{{ asset('HOME_PAGE/images/login.png') }}"  class="img-fluid d-block mx-auto" alt="">
                   
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="card login-page bg-white shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center ArFont">تسجيل الدخول</h4>  

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label ArFont">البريد الالكتوني <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                 <input id="email" type="email" class="form-control  ps-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label ArFont">كلمة المرور <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                 <input id="password" type="password" class="form-control ps-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            </div>
                                        </div>
                                    </div><!--end col-->

     
                                    <div class="col-lg-12 mb-0">
                                        <div class="d-grid">
                                            <button type="submit"  class="btn btn-primary ArFont">تسجيل الدخول</button>
                                        </div>
                                    </div><!--end col-->
 

                                </div><!--end row-->
                            </form>
                      
                      
                        </div>
                    </div><!---->
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    

    <!-- javascript -->
 
    <script src="{{ asset('HOME_PAGE/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SLIDER -->
     <!-- Icons -->
    <script src="{{ asset('HOME_PAGE/js/feather.min.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('HOME_PAGE/js/plugins.init.js') }}"></script>
    
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('HOME_PAGE/js/app.js') }}"></script>
    
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->


</body>
</html>