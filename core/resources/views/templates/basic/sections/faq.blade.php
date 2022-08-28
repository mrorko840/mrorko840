@php
    $privacyCaption = getContent('privacy.content',true);
    $faqs = getContent('faq.element');
@endphp

<div id="appCapsule">
        <div style="background-image: linear-gradient(to bottom right, rgb(255, 142, 13), rgb(255, 215, 36));" class="container pt-3 pb-1 mt-0 mb-2"> 
              <h2 align="center" class="section-title">{{ __($privacyCaption->data_values->heading) }}</h2>
        </div>
              
        <div class="container">
            <div style="background-color: #fff;" class="container pt-3 pb-1 mt-0 mb-2">  
                <p align="center">{{ __($privacyCaption->data_values->subheading) }}</p>
                
            </div>
        </div>
            <!-- row end -->
        
        
        
        
      
    
    
</div>