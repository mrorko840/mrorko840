@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')

    <div id="appCapsule">

        


<section class="cmn-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">


                <div class="card">
                    <div class="card-header card-header-bg d-flex flex-wrap justify-content-between align-items-center">
                        <h5 class="card-title mt-0">
                            @if($my_ticket->status == 0)
                                <span class="badge badge-success py-2 px-3">@lang('Open')</span>
                            @elseif($my_ticket->status == 1)
                                <span class="badge badge-primary py-2 px-3">@lang('Answered')</span>
                            @elseif($my_ticket->status == 2)
                                <span class="badge badge-warning py-2 px-3">@lang('Replied')</span>
                            @elseif($my_ticket->status == 3)
                                <span class="badge badge-dark py-2 px-3">@lang('Closed')</span>
                            @endif
                            [Ticket#{{ $my_ticket->ticket }}] {{ $my_ticket->subject }}
                        </h5>

                        

                    </div>

                    <div class="card-body">
                        @if($my_ticket->status != 4)
                        <form method="post"
                              action="{{ route('ticket.reply', $my_ticket->id) }}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('Post')
                            <div class="row justify-content-between">
                                <div class="col-12">
                                    <div class="form-group">
                                                        <textarea name="message"
                                                                  class="form-control form-control-lg"
                                                                  id="inputMessage"
                                                                  placeholder="@lang('Your Reply') ..."
                                                                  rows="4" cols="10"></textarea>
                                    </div>


                                </div>

                            </div>

                            <div class="row justify-content-between">

                                <div class="col-12">
                                    <div class="row justify-content-between">
                                        <div class="col-12">

                                            <div class="form-group">
                                                <label for="inputAttachments">@lang('Attachments')</label>
                                                <input type="file"
                                                       name="attachments[]"
                                                       id="inputAttachments"
                                                       class="form-control"/>
                                                <div id="fileUploadsContainer"></div>
                                                <p class="my-2 ticket-attachments-message text-muted">
                                                    @lang("Allowed File Extensions: .jpg, .jpeg, .png, .pdf")
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="form-group">
                                                <a href="javascript:void(0)"
                                                   class="btn cmn-btn mt-4 extraTicketAttachment">
                                                    <button type="button" class="btn btn-info">Add More</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-12">
                                    <button type="submit"
                                            class="btn btn-primary btn-block btn-lg cmn-btn mt-4"
                                            name="replayTicket" value="1">
                                        <i class="fa fa-reply"></i> @lang('Reply')
                                    </button>
                                </div>

                            </div>
                        </form>
                    @endif


                        <div class="row">
                            <div class="col-12">

                                <div class="card mt-4">
                                    <div class="card-body">

                                        @foreach($messages as $message)
                                            @if($message->admin_id == 0)



                                                <div class="row border border-primary border-radius-3 my-3 py-3 mx-2">
                                                    <div class="col-12 border-right text-right">
                                                        <h5 class="my-3">{{ $message->ticket->name }}</h5>
                                                    </div>

                                                    <div class="col-12">
                                                        <p class="text-muted font-weight-bold my-3">
                                                            @lang('Posted on') {{ $message->created_at->format('l, dS F Y @ H:i') }}</p>
                                                        <p>{{$message->message}}</p>
                                                        @if($message->attachments()->count() > 0)
                                                            <div class="mt-2">
                                                                @foreach($message->attachments as $k=> $image)
                                                                    <a href="{{route('ticket.download',encrypt($image->id))}}" class="mr-3"><i class="fa fa-file"></i>  @lang('Attachment') {{++$k}} </a>
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                    </div>

                                                </div>

                                            @else


                                                <div class="row border border-warning border-radius-3 my-3 py-3 mx-2 staff-reply">

                                                    <div class="col-12 border-right text-right">
                                                        <h5 class="my-3">{{ $message->admin->name }}</h5>
                                                        <p class="lead text-muted">Staff</p>

                                                    </div>

                                                    <div class="col-12">
                                                        <p class="text-muted font-weight-bold my-3">
                                                            @lang('Posted on') {{ $message->created_at->format('l, dS F Y @ H:i') }}</p>
                                                        <p>{{$message->message}}</p>

                                                        @if($message->attachments()->count() > 0)
                                                            <div class="mt-2">
                                                                @foreach($message->attachments as $k=> $image)
                                                                    <a href="{{route('ticket.download',encrypt($image->id))}}" class="mr-3"><i class="fa fa-file"></i>  @lang('Attachment') {{++$k}} </a>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>

                                                </div>
                                            @endif
                                        @endforeach



                                    </div>
                                </div>
                            </div>



                        </div>


                    </div>
                </div>
            </div>
        </div>

</div>
</section>

</div>



<div class="modal fade" id="DelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="post" action="{{ route('ticket.reply', $my_ticket->id) }}">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title"> @lang('Confirmation')!</h5>

                    <button type="button" class="close close-button" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <strong class="text-dark">@lang('Are you sure you want to Close This Support Ticket')?</strong>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-times"></i>
                        @lang('Close')
                    </button>

                    <button type="submit" class="btn btn-success btn-sm" name="replayTicket"
                    value="2"><i class="fa fa-check"></i> @lang("Confirm")
                </button>
            </div>

        </form>

    </div>
</div>
</div>
@endsection
@push('script')
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('.extraTicketAttachment').click(function(){
                $("#fileUploadsContainer").append('<input type="file" name="attachments[]" class="form-control form-control mt-2" required />')
            });
    })(jQuery);
</script>
@endpush
@push('style')
<style type="text/css">
    .staff-reply{
        background-color: #ffd96729;
    }
</style>
@endpush