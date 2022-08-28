@php
$noticeCaption = getContent('notice.content',true);
$sliderImg = getContent('slider.content',true);
$yourLinks = getContent('links.content',true);
$banners = getContent('banner.element');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
        <title>{{ $general->sitename(@$page_title??$pageTitle) }}</title>
    <link rel="icon" type="image/png" href="{{ asset(imagePath()['logoIcon']['path'] .'/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset($activeTemplateTrue.'/assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/assets/css/style.css') }}">
    <link rel="manifest" href="{{ asset($activeTemplateTrue.'/__manifest.json') }}">


    <!-- font awesome 5.10.0
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">  -->
            
    <!-- plan https://i.ibb.co/NtRhdh4/F2068-FAD-708-E-4-A9-E-83-C2-2-B876-BF722-F1.jpg -->
        <style>
            
            a {
                text-decoration: none;
            }
            
            .bg-img-plan {
            background-image: linear-gradient(to bottom right, rgb(255, 30, 30), #a50303);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 10px 20px 0;
            border-radius: 15px;
            }
            
            .bg-img-ads {
            background-image: url('https://i.ibb.co/LJ9WfDR/Free-Ad-Backgrounds-copy.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 10px 20px 0;
            border-radius: 15px;
            }
            
            .bg-img-deposit {
            background-image: url('https://i.ibb.co/r2Zgg61/credit-card-PNG99-copy.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 10px 20px 0;
            border-radius: 15px;
            }
            
            .bg-img-withdraw {
            background-image: url('https://i.ibb.co/r2Zgg61/credit-card-PNG99-copy.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 10px 20px 0;
            border-radius: 15px;
            }

            .bg-img-profile {
            background-image: url('{{ __($sliderImg->data_values->coverPhoto) }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 10px 20px 0;
            border-radius: 1px;
            }

        </style>    
            
        
    @include('partials.seo')
    @stack('style-lib')
    @stack('style')


</head>
<body>
    
    
@php echo fbcomment() @endphp

    <!-- loader -->

    <div id="loader">
        <div class="loader-n">
            <div class="l-one"></div>
            <div class="l-two"></div>
        </div>
    </div>
    
    <!-- * loader -->

     <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        
    <!--   
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
    -->



        <div class="pageTitle">
            <img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="logo" class="logo">
        </div>
        <div class="right">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#exampleModalCenter">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-warning"1 </span>
            </a>
            <a href="{{ route('user.home') }}" class="headerButton">
                <img src="{{ __($sliderImg->data_values->profilePhoto) }}" alt="image" class="imaged w32">
            </a>
        </div>
    </div>
    <!-- * App Header -->

    
    <!-- Notice Modal Start -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ __($noticeCaption->data_values->headline) }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="my-3">
                        @php echo $noticeCaption->data_values->YourNotice; @endphp
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- Notice Modal end -->
    
    
    
     <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="{{ route('home') }}" class="item {{ request()->path() == 'home' ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="{{ route('user.ptc.index') }}" class="item {{ request()->path() == 'user/ptc' ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="gift-outline"></ion-icon>
                <strong>Task</strong>
            </div>
        </a>
        <a href="{{ route('user.plans') }}" class="item {{ request()->path() == 'user/plans' ? 'active' : '' }}">
            <div style="margin-top: -15px;" class="col">
                <ion-icon name="basket"></ion-icon>
                <strong>VIP</strong>
            </div>
        </a>
        <a href="https://t.me/iam_mrHemel" class="item {{ request()->path() == 'telegram' ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="headset-outline"></ion-icon>
                <strong>Contact Us</strong>
            </div>
        </a>
        <a href="{{ route('user.home') }}" class="item {{ request()->path() == 'user/dashboard' ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="person-circle-outline"></ion-icon>
                <strong>Profile</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->
    
   

@include('templates.basic.layouts.usersbar')
 
  

  <div class="page-wrapper">
     
@yield('content')



  </div> <!-- page-wrapper end -->
  
  
   <!-- bootstrap 5 js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  
  
    <!-- jQuery library -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/jquery-3.5.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/bootstrap.bundle.min.js') }}"></script>
  <!-- lightcase plugin -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/lightcase.js') }}"></script>
  <!-- custom select js -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/jquery.nice-select.min.js') }}"></script>
  <!-- slick slider js -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/slick.min.js') }}"></script>
  <!-- scroll animation -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/wow.min.js') }}"></script>
  <!-- dashboard custom js -->
  <script src="{{ asset($activeTemplateTrue.'/js/app.js')}}"></script>
  </body>

@stack('script-lib')


@include('admin.partials.notify')
@include('partials.plugins')
@stack('script')

     <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="{{ asset($activeTemplateTrue.'/assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="{{ asset($activeTemplateTrue.'/assets/js/plugins/splide/splide.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ asset($activeTemplateTrue.'/assets/js/base.js') }}"></script>

    <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");
    </script>




<script type="text/javascript">
  (function($,document){
        "use strict";
        $(document).on('change', '#langSel', function () {
            var code = $(this).val();
            window.location.href = "{{url('/')}}/change-lang/"+code ;
        });
            
    })(jQuery,document);
</script>
</body>
</html>
