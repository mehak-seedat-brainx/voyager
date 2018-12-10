<?php
$baseUrl = "https://www.brainxtech.com/";
?>
<!-- Services -->
<div class="o-container">
  <div class="space-div"></div>
  <div class="col-xs-12">
   <div class="c-heading-special top-heading-common main-heading-common">
     <h4>SERVICES</h4>
     <h1 class="c-heading-main heading-data">Custom Software Development</h1>
   </div>
   
   <!-- <div class="space-div space-div2"></div> -->
   <div class="c-column-text section-p-common" align="center">
     <p>
       Map a strategy, build a solution or elevate your product experience with focused engagements available as standalone offerings or as a part of your project’s service stack
     </p>
   </div>
 </div>
 
</div>

<!-- glyphycon -->

<div class="row row1">
 <a href="/services#accordion2" class="services-icon-a">
   <div class="col-md-2 col-xs-6">
    <div class="c-badge c-badge1">
      <div class="div-img">
       <img src="{{asset('img/home-icon/webic_ui-ux.svg')}}" class="c-badge-img" />
     </div>
     <div class="div-text">
       <span>USER <br> EXPERIENCE</span>
     </div>
     <div class="div-icon">
      <img src="{{asset('img/home-icon/down_e-commerce copy.svg')}}">
    </div>
  </div>
</div>
</a>
<a href="/services#accordion1" class="services-icon-a">
  <div class="col-md-2 col-xs-6">
   <div class="c-badge c-badge2">
     <div class="div-img">
       <img src="{{asset('img/home-icon/webic_App-Development.svg')}}" class="c-badge-img" />
   </div>
   <div class="div-text">
    <span>Mobile <br> Development</span>
  </div>
  <div class="div-icon">
   <img src="{{asset('img/home-icon/down_e-commerce copy.svg')}}">
 </div>
</div>
</div>
</a>
<a href="/services#accordion3" class="services-icon-a">
  <div class="col-md-2 col-xs-6">
    <div class="c-badge c-badge3">
     <div class="div-img">
       <img src="{{asset('img/home-icon/webic_Web-Development.svg')}}" class="c-badge-img" />
   </div>
   <div class="div-text">
    <span>Web <br> Development</span>
  </div>
  <div class="div-icon">
   <img src="{{asset('img/home-icon/down_e-commerce copy.svg')}}">
 </div>
</div>
</div>
</a>
<a href="/services#accordion4" class="services-icon-a">
  <div class="col-md-2 col-xs-6">
   <div class="c-badge c-badge4">
     <div class="div-img">
       <img src="{{asset('img/home-icon/webic_e-commerce.svg')}}" class="c-badge-img" />
   </div>
   <div class="div-text">
    <span>Ecommerce <br> Development</span>
  </div>
  <div class="div-icon">
   <img src="{{asset('img/home-icon/down_e-commerce copy.svg')}}">
 </div>
</div>
</div>
</a>
<a href="/services#accordion5" class="services-icon-a">
  <div class="col-md-2 col-xs-6">
    <div class="c-badge  c-badge5">
      <div class="div-img">
         <img src="{{asset('img/home-icon/webic_Game-Development.svg')}}" class="c-badge-img" />
     </div>
     <div class="div-text">
      <span>Game <br> Development</span>
    </div>
    <div class="div-icon">
     <img src="{{asset('img/home-icon/down_e-commerce copy.svg')}}">
   </div> 
 </div>
</div>
</a>
<a href="/services#accordion6" class="services-icon-a">
  <div class="col-md-2 col-xs-6">
    <div class="c-badge  c-badge6">
      <div class="div-img">
         <img src="{{asset('img/home-icon/webic_Cloud-Services.svg')}}" class="c-badge-img" />
     </div>
     <div class="div-text">
      <span>Cloud <br> Services</span>
    </div>
    <div class="div-icon">
     <img src="{{asset('img/home-icon/down_e-commerce copy.svg')}}">
   </div> 
 </div>
</div>
</a>

</div>


<script>
  $(document).ready(function(){

    preload("{{asset('img/home-icon/ic_whiite ui-ux copy.svg')}}","{{asset('img/home-icon/ic_white App Development.svg')}}","{{asset('img/home-icon/ic_white Web Development copy.svg')}}","{{asset('img/home-icon/ic_white e-commerce copy 2.svg')}}","{{asset('img/home-icon/ic_white Game Development copy.svg')}}","{{asset('img/home-icon/ic_white Cloud Services copy.svg')}}","{{asset('img/home-icon/ic_white down.svg')}}");
  });
  
  var images = [];
  function preload() {
    for (var i = 0; i < arguments.length; i++) {
      images[i] = new Image();
      images[i].src = preload.arguments[i];
    }
  }
</script>