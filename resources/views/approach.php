<!-- header -->
<head>
	<title>Approach | BrainX Technologies</title>
</head>
<?php
include("header.blade.php");
?>
<div class="approach-main-body">
	
	<div class="approach-top-section">
		<?php
		include("approach-home.php");
		?>
	</div>
	<div class="row approach-top-row">
		<h1>Why Choose BrainX Technology</h1>
		<div class="col-md-4">
			<div class="row approach-img-div"><img src="logo/approach1.png"></div>
			<h5>We Help Create Better Software</h5>
			<p>
				For over the years we have managed to perfect Agile, improve with Lean, and transfer our thorough expertise with startups to mid-sized businesses, as well as large enterprises.
			</p>
		</div>
		<div class="col-md-4">
			<div class="row approach-img-div"><img src="logo/approach2.png"></div>
			<h5>We’re Aligned with Your Business Goals</h5>
			<p>
				As a part of the team you will have a business analyst assigned on the project to assure all the software development efforts are well aligned with your business goals.
			</p>
		</div>
		<div class="col-md-4">
			<div class="row approach-img-div"><img src="logo/approach3.png"></div>
			<h5>We Keep the Best Cost to Quality Ratio</h5>
			<p>
				Quality does come at a price, but manage to keep the best cost to quality ratio. All of our engineers are well-trained certified professionals with dedicated diplomas in computer science.
			</p>
		</div>
	</div>
	<div>
		<div class="row approach-row2">
			<h3>So You Have Decided to:</h3>
			<ul>
				<li>Conquer new markets, outperform competition</li>
				<li>Create unique software product</li>
				<li>Need a helping hand with existing business</li>
			</ul>
		</div>
	</div>
	<div class="row approach-row3" id="approach-1">
		<div class="col-md-6 heading-sect1">
			<h3>1. Engage with BainX</h3>
			<ul>
				<li>We talk about your business, and the problems it has to solve</li>
				<li>We check the requirements and discuss your expectations</li>
				<li>Gauge the scope of the project</li>
				<li>We sign the contract and assemble a team for you</li>
			</ul>
		</div>
		<div class="col-md-6">
			<img src="logo/approach-row3.png">
		</div>
	</div>
	<div class="row approach-row4" id="approach-2">
		<div class="col-md-6">
			<h3>2. Start the Project</h3>
			<p>
				We make the entire development process crystal clear to you, report on our progress frequently and explain each of our decisions.
			</p>
			<ul>
				<li>Set the success criteria</li>
				<li>Identify major risks</li>
				<li>Define project timeline</li>
				<li>Compose a resource plan</li>
			</ul>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<img src="logo/approach4.png">
					<h5>Project Manager</h5>
					<h6>software delivery, people, risk, time & budget management</h6>
				</div>
				<div class="col-md-4">
					<img src="logo/approach5.png">
					<h5>Software Engineer</h5>
					<h6>development and maintenance of a software systems</h6>
				</div>
				<div class="col-md-4">
					<img src="logo/approach6.png">
					<h5>QA Engineer</h5>
					<h6>execution of tests to ensure product quality</h6>
				</div>
			</div>
			<div class="row row4-2">
				<div class="col-md-4 col-md-offset-4 col-xs-12">
					<img src="logo/approach7.png">
					<h5>UX Designer</h5>
					<h6>the overall look & feel of the software product</h6>
				</div>
				<div class="col-md-4">
					<img src="logo/approach8.png">
					<h5>UI Engineer</h5>
					<h6>implementation of your software product design</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="row approach-row5" id="approach-3">
		<h3>3. Work in Progress</h3>
		<p>
			Each and every software product built at BrainX is supervised by company's functional offices: SDO (software development office) and PMO (project management office), QMO (quality management office). We will track your budget spent & burnout, incorporate your feedback, making the whole process of delivery of your application crystal clear to you.
		</p>
		<h6>
			Benefits of Working with BrainX on Your Business Software:
		</h6>
		<ul>
			<li>You will get to see every iteration of the product</li>
			<li>Receive a potentially shippable software with every sprint</li>
			<li>You will be presented with product demonstration with every major feature implemented</li>
			<li>You will be able to request changes to the software with every adjustment of your business objectives</li>
		</ul>
		<div class="iterative-img">
			<img src="logo/approach-iterative.png">
		</div>
	</div>
	<div class="row approach-row5" id="approach-4">
		<h3>4. Launch the Product</h3>
		<p>
			When you will be happy with the product while approaching the release date, we will plan on the right time of your software to go live. Planning is crucial and will let us provide you with the proper support.
		</p>
		<ul>
			<li>Go live & react to changes</li>

		</ul>
		<div class="iterative-img">
			<img src="logo/approach-lanuch.png">
		</div>
	</div>
	<div class="row approach-row5" id="approach-5">
		<h3>5. Maintenance & Support</h3>
		<p>
			The launch of your software product isn't the end, it's a beginning of a long maintenance and upgrade cycle. To make your digital business even better, we:
		</p>
		<ul>
			<li>Incorporate the feedback you receive from your clients</li>
			<li>Improve usability, user-friendliness, features and overall value of your business</li>
			<li>Build and add new features, so you can dominate the market</li>
		</ul>
		<div class="iterative-img">
			<img src="logo/approach-maintain.png">
		</div>
	</div>
</div>

<!-- contact us portion -->
<?php 
include("contact-us-form.blade.php");
?>

<!-- Footer -->
<?php
include("footer.blade.php");
?>

<script>
	
	$(document).ready(function(){

		

		$("a").on('click', function(event) {


			if (this.hash !== "") {

				event.preventDefault();

      	// Store hash
      	var hash = this.hash;

      	$('html, body').animate({
      		scrollTop: $(hash).offset().top-60
      	}, 800, function(){});
    } // End if
});

	});		

</script>