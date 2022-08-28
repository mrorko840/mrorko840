
@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')



  <div style="background-image: linear-gradient(to bottom right, #ff5a5a, #b90000);" class="container pt-4 pb-3 mt-5 mb-2">
        <div class="row">

            
            <div class="col-7 pt-1 ps-2">
                <h5 class="text-light"></h5>
                <h2 class="text-light">Withdraw</h2>
                <h6 class="text-light">You can <b> Withdraw</b> your</h6>
                <h6 class="text-light">earnings.</h6>
            </div>

            <div align="center" class="col-5"><img width="90px" src="https://i.ibb.co/9W8RJsF/2-C3-C64-AE-9627-4024-83-DB-3063-C3-A786-DE-1.png" /></div>

        </div>

    </div>




<section class="cmn-section">
        <div class="container ">
            
                <div class="col-md-12 mb-30">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    @endif
                </div>

                @foreach($withdrawMethod as $data)
                
                <div class="container bg-img-withdraw mb-2 pb-1"> 

                            <div class="row align-items-start pb-2 pt-1">

                    
                                <div align="left" class="col-4">
                                    <img src="{{getImage(imagePath()['withdraw']['method']['path'].'/'. $data->image)}}" alt="{{$data->name}}" width="80px" />
                                    </div>
                                
                                        <div align="right" class="col-8 pt-2"><h3 class="text-light"><b>
                                        {{__($data->name)}}</b></h3></div>
                                        
                            </div>
                                        
                                        
                                        
                                        
                                <div class="row align-items-end  pt-2 pb-1">
                                            
                                        <div align="left" class="col-7"><h6 class="text-light">@lang('Limit')
                                            : {{showAmount($data->min_limit)}}
                                            - {{showAmount($data->max_limit)}} {{$general->cur_text}}</h6></div>
                                            
                                        <div align="right" class="col-5 align-bottom">
                                            <a href="javascript:void(0)"  data-id="{{$data->id}}"
                                               data-resource="{{$data}}"
                                               class="btn btn-primary  cmn-btn deposit" data-toggle="modal" data-target="#exampleModal">
                                                @lang('Withdraw')</a>
                                        </div>
                                
                                </div>    
                </div>                
                          
                @endforeach

            
        </div>
    </section>
    <!-- ========User-Panel-Section Ends Here ========-->



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title method-name" id="exampleModalLabel">@lang('Withdraw Amount')</strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="{{route('user.withdraw.money')}}" method="post">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <input type="hidden" name="method_code" class="edit-method-code  form-control" value="">
                        </div>


                        <div class="form-group basic">
                            <label>@lang('Enter Amount'):</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control form-control-lg"
                                       onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" name="amount"
                                       placeholder="0.00" required="" value="{{old('amount')}}">

                                <div class="input-group-prepend">
                                    <span
                                        class="btn btn-secondary disabled">{{__($general->cur_text)}}</span>
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
@endsection


@push('script')
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $('.deposit').on('click', function () {
                    var result = $(this).data('resource');

                    $('.method-name').text(`@lang('Withdraw Via ') ${result.name}`);


                    $('.edit-method-code').val(result.id);
                });
            });
        })(jQuery);
    </script>
@endpush
