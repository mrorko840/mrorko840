
@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')

<style>
    

.fileinput-preview img {
    width: 200px;
}


</style>



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
        
        
        
<div id="appCapsule">
            
<section class="cmn-section">
   <div class="container">
       <div class="row mb-60-80 justify-content-center">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-body  ">
                        <form action="{{ route('user.deposit.manual.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @php
                                    $extra = $data->gateway->extra;
                                @endphp

                                <div class="col-md-12 text-center">
                                    <p class="text-center mt-2">@lang('You have requested ') <b
                                            class="text-success">{{ showAmount($data['amount'])  }} {{$general->cur_text}}</b> @lang(', Please pay ')
                                        <b class="text-success">{{showAmount($data['final_amo']) .' '.$data['method_currency'] }}</b> @lang(' for successful payment')
                                    </p>
                                    <h4 class="text-center mb-4">@lang('Please follow the instruction bellow')</h4>

                                    <p class="my-4 text-center">@php echo  $data->gateway->description @endphp</p>

                                </div>

                                @if($method->gateway_parameter)

                                    @foreach(json_decode($method->gateway_parameter) as $k => $v)

                                        @if($v->type == "text")
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><strong>{{__(inputTitle($v->field_level))}} @if($v->validation == 'required') <span class="text-danger">*</span>  @endif</strong></label>
                                                    <input type="text" class="form-control form-control-lg"
                                                           name="{{$k}}"  value="{{old($k)}}" placeholder="{{__($v->field_level)}}">
                                                </div>
                                            </div>
                                        @elseif($v->type == "textarea")
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><strong>{{__(inputTitle($v->field_level))}} @if($v->validation == 'required') <span class="text-danger">*</span>  @endif</strong></label>
                                                        <textarea name="{{$k}}"  class="form-control"  placeholder="{{__($v->field_level)}}" rows="3">{{old($k)}}</textarea>

                                                    </div>
                                                </div>
                                        @elseif($v->type == "file")
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><strong>{{__($v->field_level)}} @if($v->validation == 'required') <span class="text-danger">*</span>  @endif</strong></label>
                                                    <br>

                                                    <div style class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail withdraw-thumbnail"
                                                             data-trigger="fileinput">
                                                            <img src="{{ asset(imagePath()['image']['default']) }}" alt="..." >
                                                        </div>
                                                        
                                                            
                                                        
                                                        <div class="fileinput-preview fileinput-exists size_mention"></div>
                                                        

                                                        <div class="img-input-div">
                                                                <span class="btn btn-info btn-file">
                                                                    <span class="fileinput-new "> @lang('Select') {{$v->field_level}}</span>
                                                                    <span class="fileinput-exists"> @lang('Change')</span>
                                                                    <input type="file" name="{{$k}}" accept="image/*" >
                                                                </span>
                                                            <a href="#" class="btn btn-danger fileinput-exists"
                                                               data-dismiss="fileinput"> @lang('Remove')</a>
                                                        </div>

                                                    </div>



                                                </div>
                                            </div>
                                        @endif

                                    @endforeach

                                @endif


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit"
                                                class="btn cmn-btn btn-primary btn-block btn-lg mt-2">@lang('Pay Now')</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
               </div>
           </div>
       </div>
   </div>
 </section>
 
 </div>
 <section style="height: 50px;">
    
        </section>
@endsection
@push('style-lib')
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/css/bootstrap-fileinput.css')}}">
@endpush
@push('style')
<style type="text/css">
    .withdraw-thumbnail{
        max-width: 220px;
        max-height: 220px
    }
</style>
@endpush
@push('script-lib')
<script src="{{asset($activeTemplateTrue.'/js/bootstrap-fileinput.js')}}"></script>
@endpush
