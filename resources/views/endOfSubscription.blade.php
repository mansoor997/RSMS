
<!DOCTYPE html>
<html dir="rtl" lang="ar">

    <head>
        <meta charset="utf-8" />
        <title>Landrick - Saas & Software Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v3.2.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
   
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@200&display=swap" rel="stylesheet">

<style>
    .ArFont{
    
    font-family: 'Noto Kufi Arabic', sans-serif;
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
 
    </style>
    </head>

    <body style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400;">
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

        <!-- Hero Start -->
        <div style="margin-top: 50px;">
            <table cellpadding="0" cellspacing="0" style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400; max-width: 600px; border: none; margin: 0 auto; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);">
                <thead>
                    <tr style="background-color: #e6ecff; padding: 3px 0; line-height: 68px; text-align: center; color: #fff; font-size: 24px; font-weight: 700; letter-spacing: 1px;">
                        <th scope="col" >
                            <div  class="center" style="padding-bottom: 10px">
                                <img src="{{ asset('HOME_PAGE/images/amen2.png') }}" height="50" class="logo-light-mode" alt="">

                            </div>


                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td style="padding: 24px 24px;">
                            <div class="ArFont" style="padding: 8px; color: #e43f52; background-color: rgba(228, 63, 82, 0.2); border: 1px solid rgba(228, 63, 82, 0.2); border-radius: 6px; text-align: center; font-size: 16px; font-weight: 600;">
                                تم انتهاء اشتراك المكتب 
                            </div>
                        </td>
                    </tr>
                 
                    <tr>
                        <td style="padding: 0 24px 15px; color: #8492a6;" class="ArFont">
                           لتجديد الاشتراك الخاص بمكتبك آمل اختيار احد الباقات التالية
                        </td>
                    </tr>
            <form action="{{ route('SubscriptionRequests.store') }}" method="POST">
                                @csrf     
                    <tr>
                        <td style="padding: 15px 24px;" class="ArFont">

                         
                                <div class="form-row">
                                  <div  class="col-md-12 mb-3">
                                    <label for="name" style="text-align: right">نوع الاشتراك المطلوب</label>
                                    <select class="form-control" id="example-select" name="subscription_type">
                                        <option value="6">6 شهور</option>
                                        <option value="12">سنة</option>
                                      </select>                
                                   </div>
                    
                      

                              
                                </div>
                                

                        </td>
                    </tr>
                    <tr>

                        <td style="padding: 24px 24px;" class="ArFont">

                            <button class="btn btn-primary btn-lg btn-block" type="submit">حفظ</button>

                        </td>


                    </tr>
                </form>

                    <tr>
                        <td style="padding: 16px 8px; color: #8492a6; background-color: #f8f9fc; text-align: center;">
                            © <script>document.write(new Date().getFullYear())</script> Amein App.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Hero End -->
    </body>
</html>