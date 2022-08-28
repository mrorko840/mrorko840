@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')


<div style="background-image: linear-gradient(to bottom right, rgb(103, 103, 105), rgb(75, 74, 75));" class="container pt-5 pb-3 mt-5">
        <div class="row">

            
            <div align="center" class="col pt-2"><h4 class="text-light">Deposit History</h4></div>
            
        </div>

    </div>
    
    
    

<section class="cmn-section">
    <div class="container">
          
                                @if(count($logs) >0)
                                    @foreach($logs as $k=>$data)
                                    
                <div class="card table-card mt-2 pt-1">
                    <div class="card-body p-o">
                        <div class="table-responsive--sm">
                            
                                        <div class="row">   
                                            <div align="left" class="col-6"><h4>Deposit</h4></div>
                                            
                                            <div align="right" class="col-6"> <h3 class="text-danger">{{showAmount($data->amount)}} {{$general->cur_text}}</h3></div>
                                        </div>   
                                            
                                            
                                        <div class="row">
                                                
                                            <div align="left" class="col-6"><h5>{{date(' d M, Y ', strtotime($data->created_at))}}</h5></div>
                                            
                                            
                                            <div align="right" class="col-6"><h5>
                                                @if($data->status == 1)
                                                    <span class="badge badge-success">@lang('Complete')</span>
                                                @elseif($data->status == 2)
                                                    <span class="badge badge-warning">@lang('Pending')</span>
                                                @elseif($data->status == 3)
                                                    <span class="badge badge-danger">@lang('Cancel')

                                                @endif
                                                </h5>
                                            </div>
                                        </div>
        
                                            
                        </div>
                    </div>
                </div>
                                        
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="100%" class="text-center"> @lang('No results found')!</td>
                                    </tr>
                                @endif
                                
                           
                        </div>
                    </div>
                </div>
                {{$logs->links($activeTemplate.'paginate')}}

    </div>
</section>



<section style="height: 90px;">

    </section>


@endsection
