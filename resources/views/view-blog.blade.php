<head> <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131076473-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-131076473-1');
    </script>
    @if(isset($blog))
    <title> {{$blog->title}}| BrainX Technologies</title>
        @endif
</head>
<!-- header -->
@include("header")
<div class="blog-main-div text-center">
    <div class="row input-row">
        <div class=" col-md-12">
            <h1> {{$blog->title}}</h1>
        </div>
    </div>
    <div class="row input-row">
        <div class=" col-md-12">
            <h4> {{$blog->created_at->format('l, F j, Y')}}</h4>
        </div>
    </div>
    <div class="row input-row">
        <div class=" col-md-12">
            <img src="@if( !filter_var($blog->image, FILTER_VALIDATE_URL)){{ Voyager::image( $blog->image ) }}@else{{ $blog->image }}@endif">
        </div>
    </div>

    <div class="row input-row">
        <div class=" col-md-12" style="font-size:20px;">
            {!! $blog->body !!}
        </div>
    </div>
</div>