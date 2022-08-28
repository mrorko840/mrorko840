
@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')
@php
$noticeCaption = getContent('notice.content',true);
$sliderImg = getContent('slider.content',true);
$yourLinks = getContent('links.content',true);
$banners = getContent('banner.element');
@endphp

<div id="appCapsule">
        <div class="section mt-5 text-center">
            <h1>Profile</h1>
            <h4>Update account info..</h4>
        </div>


<section class="cmn-section">
	<div class="container">
            <div class="card">
                <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                <div class="card-body">
                    <div class="row">
                        
                        
                        <div class="col-12">
                            <div class="avatar-upload">
                                
                                <div class="avatar-preview">
                                    <div class="imagePreview" style="background-image: url({{ __($sliderImg->data_values->profilePhoto) }});">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                    		<div class="row">
                    		    
                    			<div class="col-6">
                    				<div class="form-group basic">
                                        <label class="label">@lang('First Name')</label>
                                        <input type="text" name="firstname" class="form-control form-control-lg" placeholder="@lang('First Name')" value="{{ __($user->firstname) }}">        
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <label class="label">@lang('Last Name')</label>
                                        <input type="text" name="lastname" class="form-control form-control-lg" placeholder="@lang('Last Name')" value="{{ __($user->lastname) }}">        
                                    </div>
                    			</div>
                    			
                                <div class="col-12">
                                    <div class="form-group basic">
                                        <label class="label">@lang('Username')</label>
                                        <input type="text" name="username" class="form-control form-control-lg" placeholder="@lang('Username')" value="{{ __($user->username) }}" readonly>        
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group basic">
                                        <label class="label">@lang('Email')</label>
                                        <input type="text" name="email" class="form-control form-control-lg" placeholder="@lang('Email')" value="{{ __($user->email) }}" readonly>        
                                    </div>
                                </div>
                                
                    		</div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="row">
                                
                                <div class="col-12">
                                    <div class="form-group basic">
                                        <label class="label">@lang('Mobile')</label>
                                        <input type="text" name="mobile" class="form-control form-control-lg" placeholder="@lang('Mobile')" value="{{ __($user->mobile) }}">        
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group basic">
                                        <label class="label">@lang('Country')</label>
                                        <select name="country" id="country" class="form-control">
                                            @foreach($countries as $key => $country)
                                                <option data-mobile_code="{{ $country->dial_code }}" value="{{ $country->country }}" data-code="{{ $key }}">{{ __($country->country) }}</option>
                                            @endforeach
                                        </select>      
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
                <div class="card-footer transparent mt-2">
                    <button type="submit" class="btn btn-primary btn-block btn-lg cmn-btn">@lang('Update')</button>
                </div>
                
                </form>
            </div>
    	</div>
</section>


</div>

<section style="height: 70px;">

        </section>

@endsection
@push('style')
<style type="text/css">
.avatar-upload {
    position: relative;
    max-width: 205px;
    margin: 20px auto;
}
.avatar-upload .avatar-edit {
    position: absolute;
    z-index: 1;
    bottom: 0px;
    right: 31px;
}
.avatar-upload .avatar-edit input {
    display: none;
}
.avatar-upload .avatar-edit label {
    display: inline-block;
    width: 34px;
    height: 34px;
    margin-bottom: 0;
    border-radius: 100%;
    background: #FFFFFF;
    border: 1px solid transparent;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    font-weight: normal;
    transition: all .2s ease-in-out;
}
.avatar-upload .avatar-edit label:hover {
    background: #F1F1F1;
    border-color: #D6D6D6;
}
.avatar-upload .avatar-edit label:after {
    content: "\f044";
    font-family: 'Font Awesome 5 Free';
    color: #757575;
    position: absolute;
    top: 5px;
    left: 1px;
    right: 0;
    text-align: center;
    margin: auto;
}
.avatar-preview {
    width: 192px;
    height: 192px;
    position: relative;
    border-radius: 50%;
    border: 6px solid #e4e4e4;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-preview div {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
.copytextDiv{
    cursor: pointer;
}
</style>
@endpush
@push('script')
<script>
    (function ($) {
        "use strict";
        $('.imgUp').click(function(){
            upload();
        });
        function upload(){
            $(".upload").change(function() {
                readURL(this);
            });
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var preview = $(input).parents('.avatar-upload').find('.imagePreview');
                    $(preview).css('background-image', 'url('+e.target.result +')');
                    $(preview).hide();
                    $(preview).fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    $("select[name=country]").val("{{ __($user->address->country) }}");
    })(jQuery);
</script>
@endpush
