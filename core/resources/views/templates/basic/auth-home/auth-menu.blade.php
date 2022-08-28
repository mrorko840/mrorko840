

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
                <span class="badge badge-warning"1</span>
            </a>
            <a href="{{ route('user.logout') }}" class="headerButton">
                <ion-icon class="icon" name="log-out-outline"></ion-icon>
                
            </a>
        </div>
    </div>
    <!-- * App Header -->



        <!-- * menu dashboard -->
        <div class="container pt-2">

            <div class="row">

                <div align="center" class="col-6">

                    <a href="{{ __($yourLinks->data_values->telegram) }}">
                        <div style="border-radius: 6px;" class="stat-box bg-white row-6 p-2">
                            <h6>Help Center</h6> 
                            <img src="https://i.ibb.co/zJ8z07j/045-BC27-F-5728-4-ADE-892-F-79385-B0-EFC1-C.png" width="35%" alt="help-center" border="0"> 
                        </div>
                    </a>

                    <a href="{{ __($yourLinks->data_values->apps) }}">
                        <div style="border-radius: 6px;" class="stat-box bg-white row-6 p-2 mt-2">
                            <h6>App Download</h6> 
                            <img src="https://i.ibb.co/WG9XvH5/3d-download-document-icon-concept-3d-white-clipboard-task-management-todo-check-list-reading-mark-sy.webp" width="36%" alt="help-center" border="0"> 
                        </div>
                    </a>

                </div>


                <div align="left" style="align-items: center;" class="col-6">

                    <a href="{{ route('user.referred') }}">
                        <div style="height: 100%; border-radius: 6px;" class="stat-box bg-white row-6 p-2">
                            <h6>Invite Firends</h6> </br> 
                            <img align="right" src="https://i.ibb.co/YWbFnCs/BE4-D5-DF2-FD7-F-4594-8281-DBED0-DD39042.png" style="bottom:5px;" width="65%" alt="help-center" border="0"> 
                        </div>
                    </a>

                </div>

            </div>

            <div class="row mt-2">

                <div align="center" class="col-6">

                    <a href="{{ __($yourLinks->data_values->video) }}">
                        <div style="border-radius: 6px;" class="stat-box bg-white row-6 p-2">
                            <h6>Video Tutorial</h6> 
                            <img src="https://i.ibb.co/ftGbWt8/CCB19-C76-69-A1-4-B7-A-B81-D-D8-B848-D77171.png" width="35%" alt="help-center" border="0"> 
                        </div> 
                    </a>
                    
                </div>


                <div align="center" style="align-items: center;" class="col-6">

                    <a href="{{ route('about') }}">
                        <div style="height: 100%; border-radius: 6px;" class="stat-box bg-white row-6 p-2">
                            <h6>About Us!</h6> 
                            <img src="https://i.ibb.co/PGs646R/7-DAD857-A-9493-4829-843-A-6863-CD769-AE2.png" width="35%" alt="help-center" border="0"> 
                        </div>
                    </a>

                </div>

            </div>

        </div>
        <!-- * menu dashboard -->


<!--
<div class="container">
       <div style="background-color: rgb(255, 255, 255);" class="container pt-2 pb-2 mt-2">
            <div class="row">
                <div align="center" class="col"><a href="{{ route('user.ptc.index') }}"><ion-icon name="extension-puzzle" style="font-size: 30px;color:rgb(247, 184, 47)"> </ion-icon><br/> <h6>Task</h6></a></div>
                <div align="center" class="col"><a href="{{ route('user.plans') }}"><ion-icon name="diamond" style="font-size: 30px;color:rgb(228, 0, 106)"> </ion-icon><br/> <h6>Membership</h6></a></div>
                <div align="center" class="col"><a href="{{ route('user.referred') }}"><ion-icon name="person-add" style="font-size: 30px;color:rgb(38, 189, 0)"> </ion-icon> <br/> <h6>Invite</h6></a></div>
                <div align="center" class="col"><a href="#"><ion-icon name="videocam" style="font-size: 30px;color: red"> </ion-icon><br/> <h6>Tutorial</h6></a></div>
            </div>
            
            <div class="row pt-2">
                <div align="center" class="col"><a href="{{ route('user.deposit') }}"><ion-icon name="cart" style="font-size: 30px;color:#03a9f4"> </ion-icon><br/> <h6>Deposit</h6></a></div>
                <div align="center" class="col"><a href="{{ route('user.deposit.history') }}"><ion-icon name="book" style="font-size: 30px;color:rgb(191 176 0)"> </ion-icon> <br/> <h6>Deposit History</h6></a></div>
                <div align="center" class="col"><a href="{{ route('user.withdraw') }}"><ion-icon name="wallet" style="font-size: 30px;color:#009688"> </ion-icon><br/> <h6>Withdraw</h6></a></div>
                <div align="center" class="col"><a href="{{ route('user.withdraw.history') }}"><ion-icon name="newspaper" style="font-size: 30px;color: #c76e4e"> </ion-icon><br/> <h6>Withdraw History</h6></a></div>
            </div>

        </div>
    </div>
-->