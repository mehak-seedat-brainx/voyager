@include("header")
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131076473-1"></script>
	<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-131076473-1');
	</script>

	<title>Contact Us | BrainX Technologies</title>
</head>
<div class="contact-us-main">

	<div class="work-main top-heading-common main-heading-common success-div">
		<h4>YOUR REQUEST HAS BEEN RECEIVED</h4>
		<h1 class="headind">Thank You</h1>
	</div>

	<div class="for-space">
	</div>
	<div class="work-main top-heading-common main-heading-common">
		<h4>Say Hello</h4>
		<h1 class="headind">Contact Us</h1>

	</div>
	<div class="row contact-us-main-row">
		<div class="col-md-4 contact-info">
			<div class="contact-img">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13606.17821288979!2d74.3143557!3d31.5092004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x377d5d34c7d43ca2!2sBrainX+Technologies!5e0!3m2!1sen!2s!4v1511163937209" width="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			</div>
			<div class="contact-address-div">
				<a href="/company">Pakistan HeadQuarters</a>
				<h2>Lahore</h2>
				<p>
					<span>
						286-A, New Muslim Town
						<br>
						Lahore, Pakistan
					</span>
					<br>
				<!-- 	<span>
						+923334686651
					</span>
				 -->
					
					<a href="tel:+924238913038" class="contact-address-div-a">
						+924238913038
					</a>
				 	<a href="tel:+923334686651" class="contact-address-div-a">
						+923334686651
					</a>

					<!-- <span>
						careers@brainxtech.com
					</span> -->
					<a href="mailto:services@brainxtech.com" class="contact-address-div-a contact-address-div-a2">
						services@brainxtech.com
					</a>

				</p>
			</div>
		</div>
		<div class="col-md-8 contact-form contact">
			<form id="submit-form" method="post">

				<div class="row">
					<div class="col-md-6">
						<div class="group contact-input">
							<input type="text" class="active-common required" name="firstname" id="fname" required><span class="highlight"></span><span class="bar"></span>
							<label>First Name*</label>
							<span id="error-msgf" class="error-span">Please Complete This Mandatory Field</span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="group contact-input">
							<input type="text" class="active-common required" name="lastname" id="lname" required><span class="highlight"></span><span class="bar"></span>
							<label>Last Name*</label>
							<span id="error-msgl" class="error-span">Please Complete This Mandatory Field</span>
						</div>  
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="group contact-input">
							<input type="email" class="active-common required" name="email" id="email" required><span class="highlight"></span><span class="bar"></span>
							<label>Email*</label>
							<span id="error-msge" class="error-span">Please Complete This Mandatory Field</span><br>
							<span id="email-error-msge" class="error-span">Email Formate Incorrect</span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="group contact-input">
							<input type="text" class="active-common required" name="phone" id="phone" required><span class="highlight"></span><span class="bar"></span>
							<label>Phone*</label>
							<span id="error-msgp" class="error-span">Please Complete This Mandatory Field</span>
						</div>  
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="group contact-input">
							<input type="text" class="active-common required" name="companyname" id="company" required><span class="highlight"></span><span class="bar"></span>
							<label>Company Name*</label>
							<span id="error-msgc" class="error-span">Please Complete This Mandatory Field</span>
						</div>
					</div>
					<div class="col-md-6 class-drop">
						<div class="group contact-input">
							<div class="drop-icon"></div>
							<select class="dropdownindus active-common required" name="industry" id="dropdown" required>
								<option value="" disabled="" selected="" hidden=""></option>
								<option value="" disabled>Company type</option>
								<option value="Startup-Early Stage">Startup-Early Stage</option>
								<option value="Startup-Late Stage">Startup-Late Stage</option>
								<option value="Enterprise">Enterprise</option>
								<option value="Non-profit">Non-profit</option>
								<option value="Other">Others</option>
							</select><span class="highlight"></span><span class="bar"></span>
							<label>Company Type*</label>
							<span id="error-msgs" class="error-span">Please Complete This Mandatory Field</span>
						</div>  
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="group contact-input">
							<textarea class="active-common required" name="msg" id="message" required></textarea><span class="highlight"></span><span class="bar"></span>
							<label>Message*</label>
							<span id="error-msgm" class="error-span">Please Complete This Mandatory Field</span>
						</div>
					</div>
				</div>

				<div class="row contact-btn-row">
					<div class="col-md-12">
						<div class="get-estimate" id="submit">GET STARTED</div>
					</div>
				</div>

			</form>

		</div>
	</div>

</div>

@include("footer")
<script type="text/javascript">
	$(window, document, undefined).ready(function() {
// that is for map height
portDivResize();

// input
$('input').blur(function() {
	var $this = $(this);
	if ($this.val())
	{
		$this.addClass('used');
	}
	else
	{
		$this.removeClass('used');
	}
      // input validation
      var id = this.id;
      switch (id) { 
      	case 'fname': 
      	if ($this.val()=="")
      	{
      		$('#error-msgf').css("visibility", "visible");
      	}
      	else
      	{
      		$('#error-msgf').css("visibility", "hidden");
      	}
      	break;
      	case 'lname': 
      	if ($this.val()=="")
      	{
      		$('#error-msgl').css("visibility", "visible");
      	}
      	else
      	{
      		$('#error-msgl').css("visibility", "hidden");
      	}
      	break;
      	case 'email': 
      	if ($this.val()=="")
      	{
      		$('#error-msge').css("visibility", "visible");
      		$('#email-error-msge').css("visibility", "hidden");
      	}
      	else
      	{
      		$('#error-msge').css("visibility", "hidden");
      		
      		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($this.val()))  
      		{  
      			// return (true)  
      			$('#email-error-msge').css("visibility", "hidden");
      		}  
      		else
      		{
      			$('#email-error-msge').css("visibility", "visible");
      			return (false)  
      		}
      	}
      	break;
      	case 'phone': 
      	if ($this.val()=="")
      	{
      		$('#error-msgp').css("visibility", "visible");
      	}
      	else
      	{
      		$('#error-msgp').css("visibility", "hidden");
      	}
      	break;
      	case 'company': 
      	if ($this.val()=="")
      	{
      		$('#error-msgc').css("visibility", "visible");
      	}
      	else
      	{
      		$('#error-msgc').css("visibility", "hidden");
      	}
      	break;

      }
  });
// textarea
$('textarea').blur(function() {
	var $this = $(this);
	if ($this.val())
		$this.addClass('used');
	else
		$this.removeClass('used');
      // validation
      if ($this.val()=="")
      {
      	$('#error-msgm').css("visibility", "visible");
      }
      else
      {
      	$('#error-msgm').css("visibility", "hidden");
      }
  });
// dropdown
$('.dropdownindus').blur(function() {
	var $this = $(this);
	if ($this[0].selectedIndex > 0)
		$this.addClass('used');
	else
		$this.removeClass('used');
      // validation
      if ($this.val() == null)
      {
      	$('#error-msgs').css("visibility", "visible");
      }
      else
      {
      	$('#error-msgs').css("visibility", "hidden");
      }
  });

// that is for map height
function portDivResize() {

	var cw = $('.contact-img iframe').width();
	$('.contact-img iframe').css({
		'height': cw + 'px'
	});
	if ($(window).width()> 768) {
		var cw2 = $('.contact-info').height();
		$('.contact-form').css({
			'height': (cw2 + 2 )+ 'px'
		});
	}
}
// that is for form submition
$("#submit").click(function(){

	if(CheckRequired())
	{
		document.getElementById('submit-form').submit();
	}

});

function CheckRequired() {
	var $form = $("#submit-form");

	if ($form.find('.required').filter(function(){ return this.value === '' }).length > 0) {
		return false;
	}

	return true;
}


});

</script>


<?php

if ( !empty($_POST) ) {
	submitcontactform();
}
function submitcontactform() {

	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$company = $_POST["companyname"];
	$industry = $_POST["industry"];
	$msg = $_POST["msg"];
	$to = "services@brainxtech.com";
	$subject = "Project Info submitted by [".$company."]";
	$txt = "First Name: ".$firstname."\n Last Name: ".$lastname."\n Phone: ".$phone."\n Industry: ".$industry."\n Message: ".$msg;
	$headers = "From:".$email;

	$result = mail($to,$subject,$txt,$headers);
	if ($result == true) {
		echo "<script> $('.success-div').css('display', 'block'); </script>";
	}
}


?>