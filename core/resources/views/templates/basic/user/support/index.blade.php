
@extends($activeTemplate .'layouts.user')
@section('content')
    @include($activeTemplate.'breadcrumb')
    
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>Support</h1>
            <h4>Tell us your problem</h4>
        </div>
    
    
    
    <section class="cmn-section">

    <div class="container">
        <div class="row mb-60-80">
            <div align="right" class="col-12 mb-2 mt-2">
                
                        <a href="{{route('ticket.open') }}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="@lang('Open New Support Ticket')">
                            @lang('Create New Ticket')
                        </a>
                    
            </div>


            <div class="col-12 mb-30">
                <div class="card table-card">
                    <div class="card-body p-0">
                        
                        <div class="table-responsive--sm">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">@lang('Subject')</th>
                                    <th scope="col">@lang('Status')</th>
                                    <th scope="col">@lang('Last Reply')</th>
                                    <th scope="col">@lang('Action')</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if($supports->count() > 0)
                                @foreach($supports as $key => $support)
                                    <tr>
                                        <td data-label="@lang('Subject')"> <a href="{{ route('ticket.view', $support->ticket) }}" class="font-weight-bold"> @lang('[Ticket# '. $support->ticket .' ] '.$support->subject ) </a></td>
                                        <td data-label="@lang('Status')">
                                        @if($support->status == 0)
                                            <span class="badge badge-success">@lang('Open')</span>
                                        @elseif($support->status == 1)
                                            <span class="badge badge-primary">@lang('Answered')</span>
                                        @elseif($support->status == 2)
                                            <span class="badge badge-warning">@lang('Customer Reply')</span>
                                        @elseif($support->status == 3)
                                            <span class="badge badge-dark">@lang('Closed')</span>
                                        @endif
                                        </td>
                                        <td data-label="@lang('Last Reply')">{{ \Carbon\Carbon::parse($support->last_reply)->diffForHumans() }}</td>

                                        <td data-label="@lang('Action')">
                                            <a href="{{ route('ticket.view', $support->ticket) }}" class="btn btn-primary btn-sm">
                                                <p class="pt-1">View</p>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="100%">@lang('Data not found')</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{$supports->links($activeTemplate.'paginate')}}
            </div>
        </div>
    </div>
</section>

</div>
@endsection
