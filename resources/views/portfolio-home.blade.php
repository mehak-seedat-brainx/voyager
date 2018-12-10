


<!-- <div class="for-space">
</div> -->
<div class="main-div top-heading-common main-heading-common">
	<div class="row">
		<h4 class="tittle-text">PORTFOLIO</h4>
		<h1 class="heading-text">Multi-Vertical Mastery</h1>
		<div class="sub-text-div section-p-common">
			<p class="sub-text">
				Working confidently across diverse regulatory environments, we meet business needs with engaging experiences in digital health, finance, engineering, commerce, real estate, education and beyond.
			</p>
		</div>
	</div>

	<div class="port-btn">
		<a href="/projects">
			<div class="port-btn-style btn-style">
				EXPLORE ALL
			</div>
		</a>
	</div>
	<div class="project-main port-main-project">
		<?php
		foreach ($projects as $index=>$object)
		{
			if ($object['ProShowHomePage'] == "True") {
				?>

				<div class="col-md-3 col-xs-12 col-sm-6 project-div<?php if($index>4){ echo ' line-2';} ?>" style="background-color: <?php echo $object["ProBgcolor"]; ?>">
                    <div class="imgproj" style='background-image: url("{{asset('img/icon/port project/'.$object["ProImage"])}}")'>

					<a href="{{'/projects/'.$object['slug']}}">
						<div class="project1" >

							<div class="detail-on-hover">
								<div class="project-span">Project</div>
								<div class="tittle-span"><div class="tittle-span-div"><?php echo $object["ProTittle"]; ?></div></div>
								<div class="line-hr">
									<hr><span>VIEW CASE STUDY</span>
									<img src="{{asset('img/logo/learn-more-white.png')}}">
								</div>
							</div>
						</div>
					</a>
                    </div>
				</div>

				<?php
			}
		}
		?>
	</div>
</div>


