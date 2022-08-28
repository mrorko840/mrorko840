<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $general->sitename($pageTitle ?? '404 | page not found') }}</title>
  <link rel="shortcut icon" type="image/png" href="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="{{ asset('assets/errors/css/bootstrap.min.css') }}">
  <!-- dashdoard main css -->
  <link rel="stylesheet" href="{{ asset('assets/errors/css/main.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset($activeTemplateTrue.'/assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/assets/css/style.css') }}">
    <link rel="manifest" href="{{ asset($activeTemplateTrue.'/__manifest.json') }}">

</head>
  <body>


    <!-- App Header -->
    <div class="appHeader bg-primary no-border">
      <div class="left">
          <a href="#" class="headerButton goBack">
              <ion-icon name="chevron-back-outline"></ion-icon>
          </a>
      </div>
      <div class="pageTitle">
        <img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="logo" class="logo">
    </div>
      <div class="right">
      </div>
  </div>
  <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

      <div class="section">
          <div class="splash-page mt-5 mb-5">
              <h1>404</h1>
              <h2 class="mb-2">Page not found!</h2>
              <img src="https://i.ibb.co/b3S9br2/error-404.png" width="200px" alt="@lang('image')">
          </div>
      </div>

      <div class="fixed-bar">
          <div class="row">
              <div class="col-6">
                  <a href="{{ route('home') }}" class="btn btn-lg btn-outline-secondary btn-block goBack">Go Back</a>
              </div>
              <div class="col-6">
                  <a href="" class="btn btn-lg btn-primary btn-block">Try Again</a>
              </div>
          </div>
      </div>

  </div>
  <!-- * App Capsule -->

  <!-- error-404 start 
  <div class="error">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <img src="{{ asset('assets/errors/images/error-404.png') }}" alt="@lang('image')">
          <h2 class="title"><b>@lang('404')</b> @lang('Page not found')</h2>
          <p>@lang('page you are looking for doesn\'t exit or an other error occured') <br> @lang('or temporarily unavailable.')</p>
          <a href="{{ route('home') }}" class="cmn-btn mt-4">@lang('Go to Home')</a>
        </div>
      </div>
    </div>
  </div>
   error-404 end -->

  
  </body>
</html>