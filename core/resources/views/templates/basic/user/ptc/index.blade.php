
@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')

    <div style="background-image: linear-gradient(to bottom right, #ff5a5a, #b90000);" class="container pt-4 pb-3 mt-5 mb-2">
        <div class="row">

            
            <div class="col-7 pt-1 ps-2">
                <h2 class="text-light">Task</h2>
                <h6 class="text-light">Complete your task Carefully.</h6>
                <h6 class="text-light"><b>Total Task : </b> {{ Auth::user()->dpl }}</h6>
                                                        
                
            </div>

            <div align="center" class="col-5"><img width="110px" src="https://i.ibb.co/f0KDhZx/5-A96297-F-A673-4-C26-A2-A2-D915-D1007-CB1.png" /></div>

        </div>

    </div>
    
    
    
    


<section class="cmn-section">
	<div class="container">

									@forelse($ads as $data)
									@if(!in_array($data->id, $viewed))
									<div class="container bg-img-ads mb-2">
									    
									<div class="row align-items-start pb-2 pt-1">
									    
									    <div align="left" class="col-4"><h2 class="text-light"><b></b></h2></div>
                                        <div align="right" class="col-8"><h2 class="text-light"><b>{{ __($data->amount) }} {{ $general->cur_text }}</b></h2></div>
									</div>
									
									
									<div class="row align-items-end pt-2">
										<div align="left" class="col-6"><h3 class="text-light pb-1"><b>{{ __($data->title) }}</b></h3></div>
										<div align="right" class="col-6 align-bottom pb-2">
											<a href="{{ route('user.ptc.show',Crypt::encryptString($data->id.'|'.auth()->user()->id)) }}" class="btn btn-outline-light">@lang('Click Here')</a>
										</div>
									</div>
									</div>
									@endif
									@empty
									<tr>
										<td class="text-center" colspan="100%">{{ __($empty_message) }}</td>
									</tr>
									@endforelse
								
							
					
		
	</div>
</section>

<section style="height: 90px;">

    </section>
@endsection

