
@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')
@php
$noticeCaption = getContent('notice.content',true);
$sliderImg = getContent('slider.content',true);
$yourLinks = getContent('links.content',true);
$banners = getContent('banner.element');
@endphp


        <div class="container bg-img-profile pt-5 pb-3 mt-5">
            <div class="row">
    
                <div class="shadow col-4 ps-2"><img width="75px" src="{{ __($sliderImg->data_values->profilePhoto) }}" /></div>
                <div class="shadow col-8 pt-2"><h3 class="text-light">{{ Auth::user()->firstname.' '.Auth::user()->lastname }}</h3><h5 class="text-warning"><b>Uid: </b>{{ Auth::user()->username }}</h5></div>
                
            </div>
    
        </div>


        <!-- Wallet Card -->
        <div class="container pt-2">
          <div class="wallet-card">
              <!-- Balance -->
              <div class="balance">
                  <div class="left">
                      <span class="title">My Balance</span>
                      <h1 class="total">{{ showAmount($user->balance) }} {{ $general->cur_text }}</h1>
                  </div>
                  <div align="center" class="right">
                      <a href="{{ route('user.plans') }}" class="text-primary">

                        <div class="chip chip-media">
                          <i class="chip-icon bg-primary">
                              <ion-icon style="font-size:20px;" name="basket" role="img" class="md hydrated" aria-label="person"></ion-icon>
                          </i>
                          <span class="chip-label">{{ __($user->plan ? $user->plan->name : 'No Plan') }}</span>
                      </div>

                        
                          
                      </a>
                  </div>
              </div>
              <!-- * Balance -->
              <!-- Wallet Footer -->
              <div class="wallet-footer">
                  <div class="item">
                      <a href="{{ route('user.deposit') }}">
                          <div class="shadow icon-wrapper bg-warning">
                              <ion-icon name="arrow-up-outline"></ion-icon>
                          </div>
                          <strong>Deposit</strong>
                      </a>
                  </div>
                  <div class="item">
                    <a href="{{ route('user.referred') }}">
                        <div class="shadow icon-wrapper bg-secondary">
                            <ion-icon name="person-add-outline"></ion-icon>
                        </div>
                        <strong>Invite</strong>
                    </a>
                </div>
                  <div class="item">
                    <a href="{{ route('user.withdraw') }}">
                        <div class="shadow icon-wrapper bg-success">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <strong>Withdraw</strong>
                    </a>
                  </div>
              </div>
              <!-- * Wallet Footer -->
          </div>
      </div>
      <!-- Wallet Card -->



        <!-- Stats -->
        <div class="container">
          <div class="row mt-2">
              <div class="col-6">
                  <div class="stat-box">
                      <div class="title">Total Deposit</div>
                      <h2 class="text-warning">{{ $user->deposits->sum('amount') + 0 }}.00</h2>
                  </div>
              </div>
              <div class="col-6">
                  <div class="stat-box">
                      <div class="title">Total Withdraw</div>
                      <h2 class="text-success">{{ showAmount($user->withdrawals->where('status',1)->sum('amount')) }}</h2>
                  </div>
              </div>
          </div>
          <div class="row mt-2">
              <div class="col-6">
                  <div class="stat-box">
                      <div class="title">Complete</div>
                      <h2 class="">{{ $user->clicks->where('vdt',Date('Y-m-d'))->count() }} Task</h2>
                  </div>
              </div>
              <div class="col-6">
                  <div class="stat-box">
                      <div class="title">Remain</div>
                      <h2 class="">{{ $user->dpl - $user->clicks->where('vdt',Date('Y-m-d'))->count() }} Task</h2>
                  </div>
              </div>
          </div>
      </div>
      <!-- * Stats -->



        


        <!-- Account menu -->
    <Div class="container">
      <div style="background-color: rgb(255, 255, 255);" class="rounded mt-2"> 
        
        <!--<div class="listview-title mt-1">Menu</div>-->


        <ul class="listview flush transparent no-line image-listview">
            <li>
                <a href="{{ route('user.profile') }}" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
                    <div class="in">
                      Account Info
                    </div>
                </a>
            </li>

            <li>
              <a href="{{ route('user.password.change') }}" class="item">
                  <div class="icon-box bg-primary">
                      <ion-icon name="key-outline"></ion-icon>
                  </div>
                  <div class="in">
                    Change Password
                  </div>
              </a>
          </li>
            

        </ul>
      </div>
    </Div>
        <!-- * Account menu -->


        <!-- History menu -->
    <Div class="container">
      <div style="background-color: rgb(255, 255, 255);" class="rounded mt-2"> 
        
        <!--<div class="listview-title mt-1">Menu</div>-->


        <ul class="listview flush transparent no-line image-listview">
            
          <li>
            <a href="{{ route('user.commissions') }}" class="item">
                <div class="icon-box bg-primary">
                    <ion-icon name="podium-outline"></ion-icon>
                </div>
                <div class="in">
                    Commissions
                </div>
            </a>
          </li>
            <li>
                <a href="{{ route('user.deposit.history') }}" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="card-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Deposit History
                    </div>
                </a>
            </li>
            <li>
              <a href="{{ route('user.withdraw.history') }}" class="item">
                  <div class="icon-box bg-primary">
                      <ion-icon name="cash-outline"></ion-icon>
                  </div>
                  <div class="in">
                      Withdraw History
                  </div>
              </a>
          </li>

        </ul>
      </div>
    </Div>
        <!-- * History menu -->


        <!-- others menu -->
    <Div class="container">
      <div style="background-color: rgb(255, 255, 255);" class="rounded mt-2"> 
        
        <!--<div class="listview-title mt-1">Menu</div>-->


        <ul class="listview flush transparent no-line image-listview">
            <li>
              <a href="{{ route('user.referred') }}" class="item">
                  <div class="icon-box bg-primary">
                      <ion-icon name="people-outline"></ion-icon>
                  </div>
                  <div class="in">
                      My Team
                  </div>
              </a>
            </li>

            <li>
              <a href="{{ __($yourLinks->data_values->apps) }}" class="item">
                  <div class="icon-box bg-primary">
                      <ion-icon name="cloud-download-outline"></ion-icon>
                  </div>
                  <div class="in">
                    Install Software
                  </div>
              </a>
            </li>

        </ul>
      </div>
    </Div>
        <!-- * others menu -->


        <!-- logout menu -->
    <Div class="container">
      <div style="background-color: rgb(255, 255, 255);" class="rounded mt-2"> 
        
        <!--<div class="listview-title mt-1">Menu</div>-->


        <ul class="listview flush transparent no-line image-listview">

            <li>
              <a href="{{ route('user.logout') }}" class="item">
                  <div class="icon-box bg-primary">
                      <ion-icon name="log-out-outline"></ion-icon>
                  </div>
                  <div class="in">
                    Logout
                  </div>
              </a>
            </li>

        </ul>
      </div>
    </Div>
        <!-- * logout menu -->









<!-- Dark Mode
    <div id="appCapsule">
      <ul class="listview image-listview text inset no-line">
          <li>
              <div class="item">
                  <div class="in">
                      <div>
                          Dark Mode
                      </div>
                      <div class="form-check form-switch  ms-2">
                          <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                          <label class="form-check-label" for="darkmodeSwitch"></label>
                      </div>
                  </div>
              </div>
          </li>
      </ul>
  </div>
  Dark Mode -->



    <!--
        <div class="container">
            <div style="background-color: rgb(255, 255, 255);" class="container pt-2 pb-2 mt-3">
    
                <div class="row">
                    <div align="center" class="col"><a href="{{ route('user.profile') }}"><ion-icon name="construct-outline"></ion-icon> <br><h6>Account Info</h6></a></div>
                    <div align="center" class="col"><a href="{{ route('user.referred') }}"><ion-icon name="diamond"></ion-icon><br><h6>My Team</h6></a></div>
                    <div align="center" class="col"><a href="{{ route('user.deposit.history') }}"><ion-icon name="card-outline"></ion-icon> <br><h6>Deposit History</h6></a></div>
                    <div align="center" class="col"><a href="{{ route('user.withdraw.history') }}"><ion-icon name="cash-outline"></ion-icon><br><h6>Withdraw History</h6></a></div>
                </div>
    
                <div class="row pt-3">
                    <div align="center" class="col"><a href="{{ route('user.commissions') }}"><ion-icon name="podium-outline"></ion-icon> <br><h6>Commissions</h6></a></div>
                    <div align="center" class="col"><a href="#"><ion-icon name="cloud-download-outline"></ion-icon> <br><h6>Install Software</h6></a></div>
                    <div align="center" class="col"><a href="{{ route('user.logout') }}"><ion-icon name="log-out-outline"></ion-icon><br><h6>Logout</h6></a></div>
                    <div align="center" class="col"></div>
                    
                </div>
    
            </div>
        </div>

      -->
    
    
    
        <section style="height: 80px;">
    
        </section>
            


@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
(function ($) {
    "use strict";
    // apex-bar-chart js
    var options = {
      series: [{
      name: 'Clicks',
      data: [
        @foreach($chart['click'] as $key => $click)
            {{ $click }},
        @endforeach
      ]
    }, {
      name: 'Earn Amount',
      data: [
            @foreach($chart['amount'] as $key => $amount)
                {{ $amount }},
            @endforeach
      ]
    }],
      chart: {
      type: 'bar',
      height: 580,
      toolbar: {
        show: false
      }
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded'
      },
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    xaxis: {
      categories: [
      @foreach($chart['amount'] as $key => $amount)
                '{{ $key }}',
            @endforeach
    ],
    },
    fill: {
      opacity: 1
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return val
        }
      }
    }
    };
    var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
    chart.render();
        function createCountDown(elementId, sec) {
            var tms = sec;
            var x = setInterval(function() {
                var distance = tms*1000;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById(elementId).innerHTML =days+"d: "+ hours + "h "+ minutes + "m " + seconds + "s ";
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById(elementId).innerHTML = "{{__('COMPLETE')}}";
                }
                tms--;
            }, 1000);
        }
      createCountDown('counter', {{\Carbon\Carbon::tomorrow()->diffInSeconds()}});
})(jQuery);
</script>
@endpush