<!-- header -->
<head>
	<title>Company | BrainX Technologies</title>
</head>
@include("header")
<?php

$baseUrl = "https://www.brainxtech.com/";
?>
<div class="main-careers-body">
	<div class="career-main">
		<div class="careers-top">
			<div class="top-text top-heading-common">
				<h4 class="career-content">Careers</h4>
				<h4 class="about-content">About</h4>
			</div>
			<div class="bold-text main-heading-common">
				<h1 class="career-content">Join Our Team</h1>
				<h1 class="about-content">Know Our Team</h1>
			</div>
			<div class="careers-img about-top">
				<img src="{{asset('img/icon/company/Company_About.svg')}}" id="career-image">
			</div>
			<div class="link-div">
				<div class="career-links" id="about-div"><a href="">About</a></div>
				<div class="career-links" id="career-div"><a href="">Careers</a></div>
			</div>
		</div>
		<div class="section-p-common career-section-p">
			<p class="career-content">
				BrainX isn’t just a company. It’s a way of living and working where creativity and problem solving come together. We are an international team of technologists, strategists, designers, architects, developers, quality assurance analysts, project managers and marketers. Building something new and different isn’t the challenge here, it’s the reward.
			</p>
			<p class="about-content">
				We are a Pakistan based software development firm that works with startups, SMBs & enterprises to craft disruptive digital products
				& strategies that solve business problems & drive measurable results.<br> <br> We nurture entrepreneurial spirit with corporate expertise & experience, best in class tools & frameworks, Agile methods & talent to create an ecosystem that enables both startups & established companies to innovate efficiently with us. We continue
				to provide strategic value in the days, weeks & years after the products launch. By offering insight & candid counsel at every
				stage of the engagement, we consider ourselves to be a partner and not just a vendor.
			</p>
		</div>
	</div>
	<div class="career-content">
		<!-- section 1 -->
		<!-- <div class="info-section section-p-common career-section-p">
			<div class="top-text top-heading-common">
				<h4>LAHORE | FULL-TIME</h4>
			</div>
			<div class="bold-text main-heading-common">
				<h1>Senior/Lead Full Stack Engineer</h1>
			</div>
			<p>
				Brainx is seeking a senior or lead full-stack software engineer to work on a variety of exciting projects in and near the Twin Cities. The position is responsible for and involved in all stages of our agile software development lifecycle.
			</p>

			<div class="get-estimate">
				<a href="https://brainxtechnologies.typeform.com/to/Urx8pz">
					Apply
				</a>
			</div>
		</div> -->
		<!-- section 2 -->
		<div class="info-section section-p-common career-section-p">
			<div class="top-text  top-heading-common">
				<h4>LAHORE | FULL-TIME</h4>
			</div>
			<div class="bold-text main-heading-common">
				<h1>Software Engineer</h1>
			</div>
			<p>
				BrainX Technologies is seeking a software engineer to work on a variety of exciting projects in Lahore. The position is responsible for and involved in all stages of our agile software development lifecycle. <br/><br/>
				<b>Available Positions: 2</b>
			</p>
			<div class="row">
				<div class="div-btn">
					<div class="explore-btn-a">
						<a href="http://bit.ly/brainxhiringQ12018" target="_blank">
							<div class="btn-style">Apply</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- background image section -->
		<div class="benefit-main-div">
			<div class="top-text top-heading-common">
				<h4>PERKS</h4>
			</div>
			<div class="bold-text main-heading-common">
				<h1>Company Benefits</h1>
			</div>
			<div class="benefit-section row">
				<div class="benefit-sect col-md-4 col-xs-6">
					<img src="{{asset('img/icon/benefits/Benefits_Collaborative Environment.svg')}}">
					<p>Collaborative <br> Environment</p>
				</div>
				<div class="benefit-sect col-md-4 col-xs-6">
					<img src="{{asset('img/icon/benefits/Benefits_Loft Office.svg')}}">
					<p>LOFT <br> OFFICE</p>
				</div>
				<div class="benefit-sect col-md-4 col-xs-6">
					<img src="{{asset('img/icon/benefits/Benefits_Indoor sports.svg')}}">
					<p> Indoor<br> sports</p>
				</div>
				<div class="benefit-sect col-md-4 col-xs-6">
					<img src="{{asset('img/icon/benefits/Benefits_Learning & Growth.svg')}}">
					<p>Learning <br> & Growth</p>
				</div>
				<div class="benefit-sect col-md-4 col-xs-6">
					<img src="{{asset('img/icon/benefits/Benefits_Team Lunch.svg')}}">
					<p>TEAM <br> LUNCH</p>
				</div>
				<div class="benefit-sect col-md-4 col-xs-6">
					<img src="{{asset('img/icon/benefits/Benefits_Parking.svg')}}">
					<p>SECURE <br> PARKING</p>
				</div>
			</div>
			<!-- <div class="benefit-section benefit-section2">
				<div class="benefit-sect col-md-4 col-xs-6">
					<img src="icon/benefits/Benefits_Learning & Growth.svg">
					<p>Learning <br> & Growth</p>
				</div>
				<div class="benefit-sect col-md-4 col-xs-6">
					<img src="icon/benefits/Benefits_Team Lunch.svg">
					<p>TEAM <br> LUNCH</p>
				</div>
				<div class="benefit-sect col-md-4 col-xs-6">
					<img src="icon/benefits/Benefits_Parking.svg">
					<p>SECURE <br> PARKING</p>
				</div>
			</div> -->
		</div>
	</div>
	<!-- that is for About content -->
	<div class="about-content">
		<div class="about-mission info-section section-p-common">
			<div class="about-mission-div">
				<div class="top-text top-mission-head top-heading-common">
					<h4>Goal</h4>
				</div>
				<div class="bold-text about-h1 main-heading-common">
					<h1>Mission & Vision</h1>
				</div>
				<p>
					To build the best offshore development hub for the disruptive ideas and innovations in the world.
				</p>
			</div>
		</div>
		<!-- reviews videos portion -->
		@include('review-video')
	</div>
</div>
<!-- contact us -->
<div class="about-content  contact-divof-about">
	@include('contact-us-form')
</div>
<!-- footer -->
<div class="company-footer">
	@include('footer')
</div>

<script type="text/javascript">
    $(document).ready(function()
    {
        // That is Defaut For First Time
        //career
        $('#about-div').css("background-color", "white");
        $('#about-div a').css("color", "#455963");

        // career
        $('.career-content').hide();

        // that are in click events
        //career
        $("#career-div").click(function(){
            //career
            $('#career-div').css("background-color", "white");
            $('#career-div a').css("color", "#455963");
            $('#career-image').attr('src', "{{URL::asset('img/icon/company/Company_Career.svg')}}");
            $('.career-content').show();
            //about
            $('#about-div').css("background-color", "inherit");
            $('#about-div a').css("color", "inherit");
            $('.about-content').hide();
        });

        //about
        $("#about-div").click(function(){
            //about
            $('#about-div').css("background-color", "white");
            $('#about-div a').css("color", "#455963");
            $('#career-image').attr('src', "{{URL::asset('img/icon/company/Company_About.svg')}}");
            $('.about-content').show();
            //career
            $('#career-div').css("background-color", "inherit");
            $('#career-div a').css("color", "inherit");
            $('.career-content').hide();
        });


        var images = [];
        function preload() {
            for (var i = 0; i < arguments.length; i++) {
                images[i] = new Image();
                images[i].src = preload.arguments[i];
            }
        }

        preload("{{asset('img/icon/company/Company_About.svg')}}","{{asset('img/logo/about-bg.png')}}","{{asset('img/icon/company/Company_Career.svg')}}","{{asset('img/icon/company/Company Benefits.png')}}","<?php echo $baseUrl; ?>icon/benefits/Benefits_Collaborative Environment.svg","<?php echo $baseUrl; ?>icon/benefits/Benefits_Loft Office.svg","<?php echo $baseUrl; ?>icon/benefits/Benefits_Indoor sports.svg","<?php echo $baseUrl; ?>icon/benefits/Benefits_Learning & Growth.svg","<?php echo $baseUrl; ?>icon/benefits/Benefits_Team Lunch.svg","<?php echo $baseUrl; ?>icon/benefits/Benefits_Parking.svg");





    });

</script>