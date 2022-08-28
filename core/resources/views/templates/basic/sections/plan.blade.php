@php
    $planCaption = getContent('plan.content',true);
    $plans = App\Models\Plan::where('status',1)->get();
@endphp

        <div class="container mt-4">
         <div style="background-image: linear-gradient(to bottom right, rgb(255, 142, 13), rgb(255, 215, 36));" class="container pt-3 pb-1 mt-0 mb-2">
                <div class="row">
        
                    
                    <div align="center" class="col-12 pt-1">
                       
                        <h2 class="text-light">{{ __($planCaption->data_values->heading) }}</h2>
                        <h6 class="text-light">{{ __($planCaption->data_values->subheading) }}</h6>
                        
                    </div>
                </div>
        
            </div>
        </div>

<div class="container">
<section class="cmn-section price">
    	
    		    
    		    
    		    <div class="container">
    		         
                
                
    			@foreach($plans as $plan)
    			<div class="container bg-img-plan mb-2">
    		             <div class="row align-items-start pb-2 pt-1">
    					
    						<div align="left" class="col-4"><h2 class="text-light"><b>{{ __($plan->name) }}</b></h2></div>
    						<div align="right" class="col-8"><h2 class="text-light"><b>{{ __(showAmount($plan->price)) }} {{$general->cur_text}}</b></h2></div>
    					
    					<div class="row align-items-end  pt-4 pb-1">
                            
                                
                                <div align="left" class="col-8"><h6 class="text-light">@lang('Daily Limit') : {{ $plan->daily_limit }} @lang('ads')</h6></div>
                                
                                
                                
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
    			@endforeach
    			
    			</div>
    			
    		
    </section>
    </div>
    
        
        
            <section style="height: 100px;">

    </section>
        

<div class="modal fade" id="BuyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <form method="post" action="{{ route('user.buyPlan') }}">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-header">
                        <strong class="modal-title"><i class='fa fa-exclamation-triangle'></i> @lang('Confirmation')!</strong>

                        <button type="button" class="close btn btn-sm" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body text-center">
                        <strong>@lang('Are you sure to subscribe this plan')?</strong>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times"></i>
                            @lang('Close')
                        </button>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> @lang("Confirm")
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
        @push('script')
<script type="text/javascript">
    (function($){
        "use strict";
        $('.buyBtn').click(function(){
            var modal = $('#BuyModal');
            modal.find('input[name=id]').val($(this).data('id'));
            
        });
    })(jQuery);
</script>
@endpush