

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    
                    <!-- profile box -->
                    <div class="profileBox pt-2 pb-2">
                        <div class="image-wrapper">
                            <img src="{{ asset($activeTemplateTrue.'/assets/img/profile-1.png') }}" alt="image" class="imaged  w36">
                        </div>
                        <div class="in">
                            <strong>{{ Auth::user()->firstname.' '.Auth::user()->lastname }}</strong>
                            <div class="text-muted">{{ Auth::user()->username }}</div>
                        </div>
                        <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                            <ion-icon name="close-outline"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->
                    <!-- balance -->
                    <div class="sidebar-balance">
                        <div class="listview-title">Balance</div>
                        <div class="in">
                            <h1 class="amount">{{ Auth::user()->balance }} {{ $general->cur_text }}</h1>
                        </div>
                    </div>
                    <!-- * balance -->
                   

                    <!-- action group -->
                    <div class="action-group">
                        <a href="{{ route('user.deposit') }}" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <ion-icon name="arrow-up-outline"></ion-icon>
                                </div>
                                Deposit
                            </div>
                        </a>
                        
                        <a href="{{ route('user.withdraw') }}" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <ion-icon name="arrow-down-outline"></ion-icon>
                                </div>
                                Withdraw
                            </div>
                        </a>
                        
                        <a href="{{ route('user.referred') }}" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <ion-icon name="person-add-outline"></ion-icon>
                                </div>
                                Reffer
                            </div>
                        </a>
                        
                        <a href="{{ route('user.home') }}" class="action-button">
                            <div class="in">
                                <div class="iconbox">
                                    <ion-icon name="person-circle-outline"></ion-icon>
                                </div>
                                Profile
                            </div>
                        </a>
                        
                       
                    </div>
                    <!-- * action group -->

                    <!-- menu -->
                    <div class="listview-title mt-1">Menu</div>
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="{{ route('home') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Home
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.deposit.history') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="document-text-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Deposit History
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.withdraw.history') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="finger-print-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Withdraw History
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.referred') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="person-add-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Referral
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- * menu -->

                    <!-- others -->
                    <div class="listview-title mt-1">Others</div>
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="{{ route('user.profile') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="settings-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Account Settings
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
                        <li>
                            <a href="{{ route('ticket') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="chatbubble-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Support
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.logout') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Log out
                                </div>
                            </a>
                        </li>


                    </ul>
                    <!-- * others -->

                   

                </div>
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->
    
    
     <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="{{ route('home') }}" class="item {{ request()->path() == '/' ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="{{ route('user.ptc.index') }}" class="item {{ request()->path() == 'user/ptc' ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="extension-puzzle-outline"></ion-icon>
                <strong>Task</strong>
            </div>
        </a>
        <a href="{{ route('user.plans') }}" class="item {{ request()->path() == 'user/plan' ? 'active' : '' }}">
            <div style="margin-top: -15px;" class="action-button bg-primary">
                <ion-icon style="font-size: 32px;" name="basket"></ion-icon>
                
            </div>
        </a>
        <a href="{{ __($yourLinks->data_values->telegram) }}" class="item {{ request()->path() == 'telegram' ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="paper-plane-outline"></ion-icon>
                <strong>Contact Us</strong>
            </div>
        </a>
        <a href="{{ route('user.home') }}" class="item {{ request()->path() == 'user/dashboard' ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="person-outline"></ion-icon>
                <strong>Profile</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

