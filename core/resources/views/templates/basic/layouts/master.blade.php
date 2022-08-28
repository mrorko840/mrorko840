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
            
       
        
     <style>
            
            a {
                text-decoration: none;
            }
            
            .bg-img-plan {
            background-image: url('https://i.ibb.co/NtRhdh4/F2068-FAD-708-E-4-A9-E-83-C2-2-B876-BF722-F1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 10px 20px 0;
            border-radius: 15px;
            }
            
            .bg-img-ads {
            background-image: url('https://i.ibb.co/JFhHjh1/Free-Ad-Backgrounds.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 10px 20px 0;
            border-radius: 15px;
            }
            
            .bg-img-deposit {
            background-image: url('https://i.ibb.co/jkFv6Z7/vip-bgsfsdaner.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 10px 20px 0;
            border-radius: 15px;
            }
            
            .bg-img-withdraw {
            background-image: url('https://i.ibb.co/jkFv6Z7/vip-bgsfsdaner.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 10px 20px 0;
            border-radius: 15px;
            }
            
        </style> 

    @include('partials.seo')
    @stack('style-lib')
    @stack('style')


</head>
<body style="background-color: rgb(243, 243, 243);">
@php echo fbcomment() @endphp



  <!-- loader -->
    <div id="loader">
        <div class="loader-n">
            <div class="l-one"></div>
            <div class="l-two"></div>
          </div>
    </div>
    <!-- * loader -->

   
   
   
   
   
   
    
     <!-- iOS Add to Home Action Sheet -->
    <div class="modal inset fade action-sheet ios-add-to-home" id="ios-add-to-home-screen" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add to Home Screen</h5>
                    <a href="#" class="close-button" data-bs-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content text-center">
                        <div class="mb-1"><img src="{{ asset($activeTemplateTrue.'/assets/img/icon/192x192.png') }}" alt="image" class="imaged w64 mb-2">
                        </div>
                        <div>
                            Install <strong>App</strong> on your iPhone's home screen.
                        </div>
                        <div>
                            Tap <ion-icon name="share-outline"></ion-icon> and Add to homescreen.
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- * iOS Add to Home Action Sheet -->


    <!-- Android Add to Home Action Sheet -->
    <div class="modal inset fade action-sheet android-add-to-home" id="android-add-to-home-screen" tabindex="-1"
        role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add to Home Screen</h5>
                    <a href="#" class="close-button" data-bs-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content text-center">
                        <div class="mb-1">
                            <img src="{{ asset($activeTemplateTrue.'/assets/img/icon/192x192.png') }}" alt="image" class="imaged w64 mb-2">
                        </div>
                        <div>
                            Install <strong>App</strong> on your Android's home screen.
                        </div>
                        <div>
                            Tap <ion-icon name="ellipsis-vertical"></ion-icon> and Add to homescreen.
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Android Add to Home Action Sheet -->









 
  

  
  
  <div class="page-wrapper">
      
@yield('content')


@php
    $cookie = App\Models\Frontend::where('data_keys','cookie.data')->first();
@endphp
@if(@$cookie->data_values->status && !session('cookie_accepted'))

@endif




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

        $('.policy').on('click',function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.get('{{route('cookie.accept')}}', function(response){
                iziToast.success({message: response, position: "topRight"});
                $('.cookie-policy').addClass('d-none');
            });
        });
            
    })(jQuery,document);
</script>
</body>
</html>
