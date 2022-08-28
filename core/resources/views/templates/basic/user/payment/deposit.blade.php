
@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')

        <div style="background-image: linear-gradient(to bottom right, #ff5a5a, #b90000);" class="container pt-4 pb-3 mt-5 mb-2">
            <div class="row">
    
                
                <div class="col-7 pt-1 ps-2">
                    
                    <h2 class="text-light">Deposit</h2>
                    <h6 class="text-light">You can <b> Diposit</b> here</h6>
                    <h6 class="text-light">for<b> Purchase</b> a Plan.</h6>
                </div>
    
                <div align="center" class="col-5"><img width="90px" src="https://i.ibb.co/L1HScH9/5-F867-FDB-41-C9-488-D-913-C-16-FDDD5-BDFF0-1.png" /></div>
    
            </div>
    
        </div>
        
      

<section class="cmn-section">
    <div class="container">
        
            <div class="col-md-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                @endif
            </div>


            @foreach($gatewayCurrency as $data)
                <div class="container bg-img-deposit mb-2 pb-2">
                            
                            
                            <div class="row align-items-start pb-2 pt-1"> 
                   
                                    <div align="left" class="col-4"><img src="{{$data->methodImage()}}" alt="{{$data->name}}"width="80px"></div>
                                
                                    <div align="right" class="col-8"><h3 class="text-light"><b>
                                            {{__($data->name)}}</b></h3></div>
                                            
                            </div>
                                            
                         
                        
                    
                        <div class="row align-items-end  pt-2 pb-1">
                            
                            
                                        <div align="left" class="col-8"><h6 class="text-light">@lang('Limit')
                                            : {{showAmount($data->min_amount)}}
                                            - {{showAmount($data->max_amount)}} {{$general->cur_text}}</h6></div>

                                        

                                        <div align="right" class="col-4 align-bottom">
                                            <button type="button"  data-id="{{$data->id}}" data-resource="{{$data}}"
                                            data-base_symbol="{{$data->baseSymbol()}}"
                                            class=" btn deposit cmn-btn w-100 btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        @lang('Deposit')</button>
                                        </div>
                                    
                        </div> 
                </div>
                
            @endforeach


        
    </div>
</section>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title method-name" id="exampleModalLabel"></strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="{{route('user.deposit.insert')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="currency" class="edit-currency" value="">
                            <input type="hidden" name="method_code" class="edit-method-code" value="">
                        </div>
                        <div class="form-group basic">
                            <label>@lang('Enter Amount'):</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control form-control-lg" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" name="amount" placeholder="0.00" required=""  value="{{old('amount')}}">
                                <div class="input-group-prepend">
                                    <span class="btn btn-secondary disabled">{{$general->cur_text}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn btn-primary">@lang('Confirm')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop



@push('script')
    <script>
        (function ($,document) {
            "use strict";
            $(document).ready(function(){

                $('.deposit').on('click', function () {
                    var id = $(this).data('id');
                    var result = $(this).data('resource');
                    var baseSymbol = "{{$general->cur_text}}";
                    // var baseSymbol = $(this).data('base_symbol');

                    $('.method-name').text(`@lang('Payment By ') ${result.name}`);
                    // $('.currency-addon').text(`${result.currency}`);
                    $('.currency-addon').text(baseSymbol);


                    $('.edit-currency').val(result.currency);
                    $('.edit-method-code').val(result.method_code);

                });
            });
        })(jQuery,document);
    </script>
@endpush
