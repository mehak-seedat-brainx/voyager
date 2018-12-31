
	<div class="for-space">
	</div>
	<div class="footer-main">
		
		<div class="row footer-main-row">
			<div class="col-sm-7 col-xs-12 footer-9col">
				<div class="footer-nav">
					<ul class="footer-ul">
						@foreach($menu as $item)
							@if(!(stripos( $item->menu, "footer_main") === false))
								<li class="footer-li"><a href="{{$item->url}}">{{$item->name}}</a></li>
							@endif
						@endforeach
					</ul>
				</div>
				<hr class="horizental-bar">
			</div>
			<div class="col-sm-5 col-xs-12 footer-3col">
				<div class="row">
					<a href="/contact">
						<div class="contact-div">
							CONTACT US
						</div>
					</a>
				</div>
				<div class="row"> 
					<div class="subscriber-div">
						Subscribe
					</div>
				</div>
				<div class="row">
					<div class="social-icon">
						<ul class="icon-ul">
							<li class="icon-li">
								<div class="icon-img-div"><a href="https://www.facebook.com/brainxtech/" target="_blank"><img src="{{asset('img/logo/facebook-white.png')}}" class="icon-setting"></a></div>
							</li>
							<li class="icon-li">
								<div class="icon-img-div"><a href="https://www.linkedin.com/company/13258108/" target="_blank"><img src="{{asset('img/logo/linkedin-white.png')}}" class="icon-setting"></a></div>
							</li>
							<li class="icon-li">
								<div class="icon-img-div"><a href="https://www.instagram.com/brainxtechs/" target="_blank"><img src="{{asset('img/logo/instagram-white.png')}}" class="icon-setting"></a></div>
							</li>
							<li class="icon-li">
								<div class="icon-img-div"><a href="https://twitter.com/BrainXTechs" target="_blank"><img src="{{asset('img/logo/twitter-white.png')}}" class="icon-setting"></a></div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row mynewRow">
			<div class="col-sm-4 footer-detail">
				<h4 class="address-main">PAKISTAN</h4>
				<h5 class="address">286-A, New Muslim Town</h5>
				<h5 class="address">Lahore, Pakistan</h5>
				<a href="tel:+924238913038" class="address">+924238913038</a><br/>
				<a href="tel:+923334686651" class="address">+923334686651</a>
			</div>
			<div class="col-sm-8 footer-details"></div>
		</div>
		<div class="footer-bottom-main">
			<div class="footer-bottom-body">
				<div class="footer-bottom-div">

					<ul class="bottom-ul">
						@foreach($menu as $item)
							@if(!(stripos( $item->menu, "footer_sub") === false))
								<li class="bottom-li"><a href="{{$item->url}}">{{$item->name}}</a></li>
							@endif
						@endforeach
					</ul>
					<div class="copy-right-div">
						<span>Copyright © 2017 BrainX Technologies. All rights reserved. </span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
</body>
</html>