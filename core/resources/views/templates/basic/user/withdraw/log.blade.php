
@extends($activeTemplate .'layouts.user')
@section('content')
@include($activeTemplate.'breadcrumb')


        <div style="background-image: linear-gradient(to bottom right, rgb(103, 103, 105), rgb(75, 74, 75));" class="container pt-5 pb-3 mt-5">
        <div class="row">

            
            <div align="center" class="col pt-2"><h4 class="text-light">Withdraw History</h4></div>
            
        </div>

    </div>
    
    


<section class="cmn-section">
   <div class="container">
     
            
                       
                    
                               @forelse($withdraws as $k=>$data)
            <div class="card table-card mt-2 pt-1">
                <div class="card-body p-o">
                    <div class="table-responsive--sm">
                                   
                                       
                                <div class="row">

                                    <div align="left" class="col-6"><h4>Withdrawal</h4></div>
                                    <div align="right" class="col-6"> <h3 class="text-danger">{{showAmount($data->final_amount)}} {{$data->currency}}</h3></div>
                                    
                                </div>
                                       
                                       
                                <div class="row">
                                          
                                        <div align="left" class="col-6"><h5>{{date('d M, Y ', strtotime($data->created_at))}}</h5></div>
                                       
                                       
                                       <div align="right" class="col-6"><h5>
                                           @if($data->status == 2)
                                               <span class="badge badge-warning">@lang('Pending')</span>
                                           @elseif($data->status == 1)
                                               <span class="badge badge-success">@lang('Completed')</span>
                                           @elseif($data->status == 3)
                                               <span class="badge badge-danger">@lang('Rejected')</span>
                                               
                                           @endif
                                       </h5></div>
                                </div>
                                       
                                       
                    </div>
                
                </div>
            </div>        
                                       
                                       
                                   
                            @empty
                            <tr>
                                <td class="text-muted text-center" colspan="100%">@lang('Data not found')</td>
                            </tr>
                            @endforelse
                         
                   

               {{$withdraws->links($activeTemplate.'paginate')}}
         
   </div>
</section>


 <section style="height: 90px;">

    </section>


<!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title method-name" id="exampleModalLabel">@lang('Information Modal')</strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                  <p></p>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection
@push('script')
<script type="text/javascript">
  (function ($) {
     "use strict";
      $('.infoBtn').click(function(){
        var modal = $('#infoModal');
        modal.find('p').html($(this).data('info'));
        modal.modal('show');
      });
  })(jQuery);
</script>
@endpush
