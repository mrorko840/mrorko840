@php
    $blogCaption = getContent('blog.content',true);
    $blogs = getContent('blog.element',false,3);
@endphp
@if($blogCaption)

<div id="appCapsule"> 
    <!-- blog section start -->
    
</div>
    <!-- blog section end -->
@endif
