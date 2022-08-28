
@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')


 <div style="background-image: linear-gradient(to bottom right, rgb(103, 103, 105), rgb(75, 74, 75));" class="container pt-5 pb-3 mt-5">
        <div class="row">

            
            <div align="center" class="col pt-2"><h4 class="text-light">Invite Friends</h4></div>
            
        </div>

    </div>
    
    
      <div class="container">

        <div style="background-color: rgb(255, 255, 255);" class="container pt-2 pb-2 mt-2">

            <div class="row">

                
                    <div align="center" class="col"><ion-icon name="mail-outline" style="font-size: 28px;color:rgb(255, 145, 0)"></ion-icon> <br><h6>Send Invitation</h6></div>
                
                    <div align="center" class="col"><ion-icon name="person-add-outline" style="font-size: 28px;color:rgb(255, 145, 0)"></ion-icon><br><h6>Upgrage VIP</h6></div>
               
                    <div align="center" class="col"><ion-icon name="gift-outline" style="font-size: 28px;color:rgb(255, 145, 0)"></ion-icon> <br><h6>Earn Rewards</h6></div>
                
            </div>

        </div>
    </div>
    
    
    
    <div class="container">

        <div style="background-color: rgb(255, 255, 255);" class="container pt-2 pb-1 mt-2">

            <div class="row">

                <div align="center" class="col-12"><h2 class="text-primary">My Invitation Link</h2></div>
                
            
            </div>

            <div class="row pt-2 pb-2">

                <div align="center" class="col-12"><input class="form-control" type="text" value="{{ route('user.refer.register',$user->username) }}" id="referralURL" readonly></div>
                <div align="center" class="col-12 pt-2"> <h4 class="border border-warning text-danger rounded p-1" id="copyBoard">Copy</h4></div>
            
            </div>

        </div>


    </div>
   
    



<section class="cmn-section">
    <div class="container">
        <div class="row">
            
        <div class="container">    
             
                
                @if($user->refBy)
                
                <div style="background-color: rgb(255, 255, 255);" class="container p-1 mt-2">
                    <h4 class="text-center mb-2 font-weight-bold">@lang('My Leader ') <span class="text-primary">{{ __($user->refBy->username) }}</span></h4>
                </div>    
                    
                @endif
               
            
        </div>
            
            
            <div class="col-12 mb-30 pt-2">
                <div class="card table-card">
                    <div class="card-body p-0">
                        <div class="table-responsive--sm">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>@lang('Full Name')</th>
                                    <th>@lang('User Name')</th>
                                    
                                    <th>@lang('Plan')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($refUsers) >0)
                                    @forelse($refUsers as $log)
                                    <tr>
                                        <td data-label="@lang('Full Name')">{{ __($log->fullname) }}</td>
                                        <td data-label="@lang('User Name')">{{ __($log->username) }}</td>
                                        <td data-label="@lang('Plan')">{{ __($log->plan ? $log->plan->name : "No Plan") }}</td>
                                    </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="100%" class="text-center"> @lang('No results found')!</td>
                                            </tr>
                                        @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{$refUsers->links($activeTemplate.'paginate')}}
            </div>
        </div>
    </div>
</section>







<section style="height: 100px;">

    </section>
@endsection
@push('style')
<style type="text/css">
    .copytextDiv{
        border:1px solid #0000007a;
        cursor: pointer;
    }
    #referralURL{
        border-right: 1px solid #0000007a;
    }
    .bg-success-custom{
        background-color: #28a7456e!important;
    }
    .brd-success-custom{
        border: 1px dashed #28a745;   
    }
</style>
@endpush
@push('script')
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('#copyBoard').click(function(){
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
        });
    })(jQuery);
</script>
@endpush