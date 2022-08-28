
@extends($activeTemplate .'layouts.user')

    
    
    
    
    
    <div style="background-image: linear-gradient(to bottom right, #ff5a5a, #b90000);" class="container pt-5 pb-3 mt-5 mb-2">
        <div class="row">

            
            <div class="col-7 pt-1 ps-2">
                <h2 class="text-light"> Membership Plan</h2>
                <h6 class="text-light">Join with us.</h6>
                <h6 class="text-light"><b> Validity :</b> 365 Days</h6>
            </div>

            <div align="center" class="col-5"><img width="100px" src="https://i.ibb.co/cgpDbXm/vip-2.png" /></div>

        </div>

    </div>






    <div class="section full mt-4">

        <!-- carousel single -->
        <div class="carousel-single splide splide--loop splide--ltr splide--draggable is-active" id="splide01" style="visibility: visible;">
            <div class="splide__track" id="splide01-track" style="padding-left: 16px; padding-right: 16px;">
                <ul class="splide__list" id="splide01-list" style="transform: translateX(-1448px);">

                    <li class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1" style="margin-right: 16px; width: 366px;">
                        <!-- card block -->
                        <div class="card-block bg-dark">
                            <div class="card-main">

                                <div class="balance">
                                    <span class="label">Plan Name</span>
                                    <h1 class="title">VIP2</h1>
                                </div>

                                <div class="in">
                                    <div class="card-number">
                                        <span class="label">Price</span>
                                        100 USDT
                                    </div>

                                    <div class="bottom">

                                        <div class="card-expiry">
                                            <span class="label">Expiry</span>
                                            365 Days
                                        </div>

                                        <div class="card-ccv">
                                            <span class="label">Daily Limit</span>
                                            5 Ads
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- * carousel single -->

    </div>


    
    
    
    <div class="section full mt-4">

        <!-- carousel single -->
        <div class="carousel-single splide splide--loop splide--ltr splide--draggable is-active" id="splide01" style="visibility: visible;">
            <div class="splide__track" id="splide01-track" style="padding-left: 16px; padding-right: 16px;">
                <ul class="splide__list" id="splide01-list" style="transform: translateX(-1448px);">

                    <li class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1" style="margin-right: 16px; width: 366px;">

    		    
                        @foreach($plans as $plan)

                        <!-- card block -->
                        <div class="card-block bg-dark mt-2">
                            <div class="card-main">

                                        <div class="balance">
                                            <span class="label">Plan Name</span>
                                            <h1 class="title">{{ __($plan->name) }}</h1>
                                        </div>
                                
                                <div class="in">

                                        <div class="card-number">
                                            <span class="label">Price</span>
                                            {{ __(showAmount($plan->price)) }} {{$general->cur_text}}
                                        </div>


                                    <div class="bottom">

                                        <div class="card-expiry">
                                            <span class="label">Expiry</span>
                                            365 Days
                                        </div>

                                        <div class="card-ccv">
                                            <span class="label">Daily Limit</span>
                                            {{ $plan->daily_limit }} Ads
                                        </div>

                                        
                                                
                                            <div align="right" class="col-4 align-bottom">
                                            @if(auth()->check())
                                            @if(auth()->user()->plan_id == $plan->id)
                                            <button class="btn btn-outline-light" disabled>@lang('Current')</button>
                                            @else
                                            <button data-toggle="modal" data-target="#BuyModal" class="buyBtn btn btn-outline-warning" data-id="{{ $plan->id }}">@lang('Buy')</button>
                                            @endif
                                            @else
                                            <button data-toggle="modal" data-target="#BuyModal" class="buyBtn btn btn-outline-warning" data-id="{{ $plan->id }}">@lang('Buy')</button>
                                            @endif
                                            </div>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
        <!-- * carousel single -->


    </div>
    
   
    
    
    <section style="height: 70px;">

    </section>
    
    
                
                <div class="modal fade" id="BuyModal" tabindex="-1" role="dialog" aria-labelledby="BuyModal" aria-hidden="true">
                    <div class="modal-dialog">
            
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">@lang('Confirmation')</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <form action="{{route('user.buyPlan')}}" method="POST">
                                <div class="modal-body text-center">
            
                                    {{csrf_field()}}
                                    <div class="form-group m-0">
                                        <input type="hidden" name="id">
                                    </div>
                                    <strong>@lang('Are you sure to subscribe this plan ?')</strong>
            
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                                    <button type="submit" class="btn btn-success">@lang('Confirm')</button>
                                </div>
            
                            </form>
                        </div>
            
                    </div>
                </div>
    
   
    
    
    
    
    

@push('script')
<script type="text/javascript">
    (function ($) {
        "use strict";
    	$('.buyBtn').click(function(){
    		var modal = $('#BuyModal');
    		modal.find('input[name=id]').val($(this).data('id'));
    		
    	});
    })(jQuery);
</script>
@endpush