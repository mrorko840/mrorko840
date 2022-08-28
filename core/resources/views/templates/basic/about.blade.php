@php
$testimonialCaption = getContent('testimonial.content',true);

$testimonials = getContent('testimonial.element');

$noticeCaption = getContent('notice.content',true);
$sliderImg = getContent('slider.content',true);
$yourLinks = getContent('links.content',true);
$aboutUs = getContent('about.content',true);

$banners = getContent('banner.element');
@endphp

@extends($activeTemplate .'layouts.master')
@section('content')
@include($activeTemplate.'breadcrumb')



    <div id="appCapsule"> 
    
    
        <div class="bg-primary container pt-3 pb-1 mt-0 mb-2">
                       
                     <h2 class="text-white" align="center">{{ __($aboutUs->data_values->heading) }}</h2>
            <h3 class="text-white" style="text-align: center;">{{ __($aboutUs->data_values->subheading) }}</h3>
            
        </div>
        
        <div class="container">
            <div style="background-color: #fff;" class="container pt-3 pb-1 mt-0 mb-2">

              <p class="my-3">
                @php echo $aboutUs->data_values->description; @endphp
            </p>

                    <p style="font-weight: bold; text-align: center;">{{ __($aboutUs->data_values->foter1) }}<br><br>

                    <span style="color: blue; font-size: 16px; font-weight: bold; text-align: center;">{{ __($aboutUs->data_values->foter2) }}</span></p>
            </div>
        </div>
</div>
       
          
    @auth
    @include('templates.basic.layouts.usersbar')
    @endauth
    @guest
    @include('templates.basic.layouts.homesbar')
    @endguest
       
        <section style="height: 30px;">
    
        </section>


         <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="logo" class="logo">
        </div>
        <div class="right">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#exampleModalCenter">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger"1</span>
            </a>
            <a href="{{ route('user.home') }}" class="headerButton">
                <img src="{{ asset($activeTemplateTrue.'/assets/img/profile-1.png') }}" alt="image" class="imaged w32">
                <span class="badge badge-danger">1</span>
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
            
            
            
@endsection