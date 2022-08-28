@php
    $loginCaption = getContent('login.content',true);
@endphp
@extends($activeTemplate .'layouts.master')
@section('content')
@include($activeTemplate.'breadcrumb')



    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="{{ route('user.register') }}" class="headerButton">
                Register
            </a>
        </div>
    </div>
    <!-- * App Header -->
    
    
    

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>Log in</h1>
            <h4>Fill the form to log in</h4>
        </div>
        <div class="section mb-5 p-2">

            <form class="action-form mt-50 loginForm" action="{{ route('user.login') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body pb-1">
                        
                        
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Username</label>
                                <input type="username" name="username" class="form-control" placeholder="@lang('Your Username')">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="@lang('Your Password')">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-links mt-2">
                    <div>
                        <a href="{{ route('user.register') }}"></a>
                    </div>
                    <div>
                        <a href="{{ route('user.register') }}"></a>
                    </div>
                    
                </div>
                
                <div class="form-group d-flex justify-content-center">
                  @php echo recaptcha() @endphp
                </div><!-- form-group end -->
                @include('partials.custom-captcha')
                
                <div class="form-button-group  transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg cmn-btn">Log in</button>
                </div>

                

            </form>
        </div>

    </div>
    <!-- * App Capsule -->
   

@endsection


@push('script')
    <script>
      (function ($,document) {
            "use strict";
            $('.loginForm').on('submit',function(){
              var response = grecaptcha.getResponse();
              if(response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Captcha field is required.</span>';
                return false;
              }
              return true;
            });

              function verifyCaptcha() {
                  document.getElementById('g-recaptcha-error').innerHTML = '';
              }
        })(jQuery,document);
    </script>
@endpush
