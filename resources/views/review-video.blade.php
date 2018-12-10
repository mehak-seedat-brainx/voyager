@include('header')
<div class="row video-row">
	<div class="col-md-6 video-sect">
		<div class="video-port" align="center">
			<!-- <video poster="logo/poster.jpg"> -->
				<video id="clientvideo" poster="{{asset('img/logo/poster.PNG')}}">
					<source src="{{asset('video/brainx.mp4')}}" type="video/mp4">
						<source src="{{asset('video/brainx.webm')}}" type="video/webm">
						</video>
						<div class="play-btn">
							<img src="{{asset('img/logo/play-btn.png')}}" id="play-btn">
						</div>
						<div class="pause-btn">
							<img src="{{asset('img/logo/pause-btn.png')}}" id="pause-btn">
						</div>
					</div>
				</div>
				<div class="col-md-6 text-sect">
					<h2>Words Of Our Clients</h2>
					<h5>"Very fairly & competitively priced, very quick. They produce quality code.
					They have very good communication skills & good to work with."</h5>
					<h4>Kevin Carmony</h4>
					<h3>CEO/Founder of CLIPish</h3>
				</div>
			</div>

			<script type="text/javascript">
				$(document).ready(function(){

//client video
var video= $('#clientvideo')[0]; 
var videoJ= $('#clientvideo');        
videoJ.on('ended',function(){
	video.load();     
});



$(".pause-btn").hide();
$('.play-btn,.pause-btn').click(function() {
	if ($("video").get(0).paused == true)
	{
    		// $('video').play();
    		$('video').trigger('play');
    		$(".play-btn").hide();
    		$(".pause-btn").show();
    	}
    	else
    	{
    		$('video').trigger('pause')
    		$(".play-btn").show();
    		$(".pause-btn").hide();	
    	}
    	$('video').on('ended',function(){

    		$(".play-btn").show();
    		$(".pause-btn").hide();	

    	});

    });


});
</script>