<head>
	<title>Blog | BrainX Technologies</title>
</head>
<!-- header -->
@include("header")
<!-- blog page -->
<div class="blog-main-div">
	<!-- blog top portion -->
	<div class="for-space">
	</div>
	<div class="work-main top-heading-common main-heading-common blog-head">
		<h4>RESOURCES</h4>
		<h1 class="headind"><span class="feature"> From</span> Our Experts</h1>
	</div>
	<div class="row input-row">
		<div class="col-md-3">
			<div class="port-btn-all blog-btn">
				EveryThing
			</div>
		</div>
		<div class="col-md-3">
			<div class="port-btn-all blog-btn blog-btn1">
				Blog
			</div>
		</div>
		<div class="col-md-3">
			<div class="port-btn-all blog-btn">
				Guides
			</div>
		</div>
		<div class="col-md-3">
			<div class="port-btn-all blog-btn">
				Video
			</div>
		</div>
	</div>
	<!-- video section -->
	<div class="row blog-video-row">
		@foreach($blogs as $blog)
		<div class="col-md-4 col4 blog-col4" >
			<div class="video-body" >
				<div class="blog-sect" >
					<span>Blog</span>
					<div class="blog-img-section" >
						<img src="@if( !filter_var($blog->image, FILTER_VALIDATE_URL)){{ Voyager::image( $blog->image ) }}@else{{ $blog->image }}@endif">
					</div>
				</div>
				<div class="video-content" style="height:30%;">
					<a href="" class="video-tittle">{{$blog->type}}</a><br>
					<a href="{{'/blog/'.$blog->id}}" class="video-des">{{$blog->title}}</a>

					<div class="blog-text" style="word-break: break-all;">
						<p>

						{!! mb_strlen( $blog->body ) > 100 ? mb_substr($blog->body, 0, 100) . ' ...' : $blog->body  !!}

						</p>
					</div>

					
				</div>
				<div class="line-div">
					<hr><span><a href="{{'/blog/'.$blog->id}}">Read More</a></span>
					<img src="logo/learn-more.png">
				</div>
			</div>
		</div>
		@endforeach


</div>
<!-- load button -->


<!-- footer -->
@include("footer")