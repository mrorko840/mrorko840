
@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')

        <div style="background-image: linear-gradient(to bottom right, rgb(103, 103, 105), rgb(75, 74, 75));" class="container pt-5 pb-3 mt-5">
            <div class="row">
    
                
                <div align="center" class="col pt-2"><h4 class="text-light">COMMISSIONS</h4></div>
                
            </div>
    
        </div>


<section class="cmn-section pt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-30">
                <div class="card table-card">
                    <div class="card-body p-0">
                        <div class="table-responsive--sm">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>@lang('From')</th>
                                    <th>@lang('Amount')</th>
                                    <th>@lang('Title')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($commissions) >0)
                                    @forelse($commissions as $log)
                                    <tr>
                                        <td data-label="@lang('From')">{{ __($log->userFrom->username) }}</td>
                                        <td data-label="@lang('Amount')">{{ showAmount($log->amount) }} {{ __($general->cur_text) }}</td>
                                        <td data-label="@lang('Title')">{{ __($log->title) }}</td>
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
                {{$commissions->links($activeTemplate.'paginate')}}
            </div>
        </div>
    </div>
</section>
@endsection