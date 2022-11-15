<!doctype html>
<html lang="en">
  <head>
    @include('layouts.head')
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@200&display=swap" rel="stylesheet">
    <style>
    .ArFont{
    
    font-family: 'Noto Kufi Arabic', sans-serif;
    }
    .canvas {
    padding-left: 0;
    padding-right: 0;
    margin-left: auto;
    margin-right: auto;
    display: block;
    width: 800px;
}
    </style>
  </head>
  <body class="vertical  light rtl ">
    <div class="wrapper">
    
    
        @include('RENTER_DASHBORD.navbar')

        @include('RENTER_DASHBORD.aside')
    
   
        
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                

                @yield('content')



            </div>
          </div>
        </div>
       
      


 
          
     
     
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    @include('layouts.footer-scripts')
    @yield('footer_scripts')

  </body>
</html>