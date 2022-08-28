

<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                
                
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
                    
                    <a href="#" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="cloud-download-outline"></ion-icon>
                            </div>
                           Official App
                        </div>
                    </a>
                    
                    <a href="{{ route('user.login') }}" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="log-in-outline"></ion-icon>
                            </div>
                            Login
                        </div>
                    </a>
                    
                    <a href="{{ route('user.register') }}" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="person-add-outline"></ion-icon>
                            </div>
                            Register
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
                        <a href="/home-plan" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="gift-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Membership Plan
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/privacy" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="bug-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Privacy Policy
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * menu -->

                <!-- others -->
                <div class="listview-title mt-1">Others</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="{{ route('about') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="school-outline"></ion-icon>
                            </div>
                            <div class="in">
                                About Us
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/message/3YFTFAW3EWPXB1" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="call-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Contact Us
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://t.me/iam_mrHemel" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="paper-plane-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Join Telegram
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.login') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="log-in-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Login
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.register') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="person-add-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Sign Up
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
        <a href="{{ route('user.login') }}" class="item">
            <div class="col">
                <ion-icon name="log-in-outline"></ion-icon>
                <strong>Login</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->
    