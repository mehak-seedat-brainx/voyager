
<div class="for-space">
</div>
<div class="client-main top-heading-common">
	<h4 class="client-text">FEATURED CLIENTS</h4>
	@foreach($logos as $logo)
	<div class="client-img-section">

		<img src="{{asset('img/home-icon/'. $logo['logo'])}}" class="client-img" />
	</div>
	@endforeach
</div>
<!-- <div class="for-space">
	</div>
	<div class="client-main top-heading-common">
		<h4 class="client-text">FEATURED CLIENTS</h4>
		<div class="client-img-section">
			
			<img src="home-icon/umergency.png" class="client-img" />
		</div>
		<div class="client-img-section">
			<img src="home-icon/Drive-Mouse-asdcsacxLogo1-(2).png" class="client-img" />
			
		</div>
		<div class="client-img-section">
			<img src="home-icon/Choosee-transp.png" class="client-img" />
		</div>
		<div class="client-img-section">
			
				<img src="home-icon/lnewogo.png" class="client-img" />
		</div>
		<div class="client-img-section">
		<img src="home-icon/newamerican.png" class="client-img" />
		</div>
		<div class="client-img-section">
			<img src="home-icon/TRAVEL.png" class="client-img" />
		</div>
		<div class="client-img-section">
			
			<img src="home-icon/bestMobile.png" class="client-img" />
		</div>
		<div class="client-img-section">
			<img src="home-icon/hugz_beta.png" class="client-img" />
		</div>
	</div> -->