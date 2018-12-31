
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
