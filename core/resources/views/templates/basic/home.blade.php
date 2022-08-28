
@extends($activeTemplate .'layouts.master')
@php
$noticeCaption = getContent('notice.content',true);
$sliderImg = getContent('slider.content',true);
$yourLinks = getContent('links.content',true);
    $banners = getContent('banner.element');
@endphp

@section('content')



     <!-- App Header -->
    <div class="appHeader bg-primary text-light mb-4">
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
            </a>
            
        </div>
    </div>
    <!-- * App Header -->


    
    
   
    @auth
    @include('templates.basic.layouts.usersbar')
    @endauth
    @guest
    @include('templates.basic.layouts.homesbar')
    @endguest

    

    
    <div class="container pt-4 pb-1 mt-5">
        
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            
            <div style="height: 100%;" class="carousel-inner shadow rounded">
                <div class="carousel-item active">
                    <img src="{{ __($sliderImg->data_values->img1) }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ __($sliderImg->data_values->img2) }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ __($sliderImg->data_values->img3) }}" class="d-block w-100" alt="...">
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
      
    </div>
      
      
      
        <div class="container mt-2 ">
            <div class="container">
                
                <div class="row rounded bg-primary shadow-sm">
                    
                    <div align="center" class="col-1 pt-1"><ion-icon name="volume-high-outline" style="font-size: 20px;color: #ffffff"></ion-icon></div>
                    <div class="col-11">
                        <marquee behavior="scroll" direction="left">
                            <h5 class="align-bottom text-light mt-1">
                                    @php echo $noticeCaption->data_values->scrolingNotice; @endphp
                            </h5>
                        </marquee>
                    </div>
                    
                </div>
            </div>
        </div>
        
        

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
              
        
        
    @auth
    @include('templates.basic.auth-home.auth-menu')
    @endauth
    @guest
    @include('templates.basic.auth-home.home-menu')
    @endguest
    
    
    
        
        
         <div class="container mt-2">
            <img style="width: 100%; height: 100%;" src="https://i.ibb.co/84VSLzc/9.png" alt="">
        </div>
        


        <section style="height: 70px;">
    
        </section>
        
        
   
    


       

    
    


    @if($sections->secs != null)
    @foreach(json_decode($sections->secs) as $sec)
        @include($activeTemplate.'sections.'.$sec)
    @endforeach
    @endif


@endsection


