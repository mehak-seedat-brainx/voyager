

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131076473-1"></script>
	<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-131076473-1');
	</script>
	<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-131076473-1', 'auto');
        ga('send', 'pageview');
	</script>
	<title><?php echo $data['ProTittle']; ?> | BrainX Technologies</title>
</head>

@include('header')
<?php
$proTag = $data['ProTags'];
$ProTagarr = explode(",", $proTag);

//for background section div color
$bgcolorArray = array("#fffff", "#F5F9FA", "#fffff", "#F5F9FA","#fffff", "#F5F9FA","#fffff");
$i=0;
?>

<div class="main-project">
	<div class="top-header-project" style="background-color:<?php echo $data['ProBgcolor']; ?> ">
		<div class="top-text heading-top-project top-heading-common">
			<h4><?php echo $data['ProIndustry']; ?></h4>
		</div>
		<div class="bold-text main-heading-common">
			<h1><?php echo $data['ProTittle']; ?></h1>
		</div>
		<div class="section-p-common top-p">
			<p><?php echo $data['ProDes']; ?></p>
		</div>
		<div class="link-button-div">
			<?php
			foreach ($ProTagarr as $value) 
			{
				?>
				<div class="link-button">
					<a>
						<?php $value1=trim($value);
						echo $value1;
						?>

					</a>
				</div>
				<?php
			}
			?>
			
		</div>
		<div class="top-img">
			<img src="{{asset('img/icon/port project/'. $data['ProImage'])}}">
		</div>
	</div>
	<div class="row first-sect" style="background-color: <?php echo $bgcolorArray[$i]; ?>">
		<div class="col-md-6 img-area-div">
			<img src="{{asset('img/icon/port project/'. $data['OppSectImage'])}}">
		</div>
		<div class="col-md-6 text-area-div">
			<div>OPPORTUNITY</div>
			<h3><?php echo $data['OppSectTittle']; ?></h3>
			<p><?php echo $data['OppSectDes']; ?></p>
		</div>
	</div>
	<?php
	if ($data['RevSect'] == 1) 
	{
		$i=$i+1;
		?>
		<div class="row second-sect" style="background-color: <?php echo $bgcolorArray[$i]; ?> ">
		<div style="display: none;">
			<img src="icon/project-detail/<?php echo $data['RevLogo']; ?>">
		</div>
		<div class="reviewmessage">
			<?php echo $data['RevMessage']; ?>
		</div>
		<div>
			<p>
				<?php echo $data['ReVReviewer']; ?>
			</p>
		</div>
	</div>
	<?php
}
?>
<?php
if ($data['AppSect'] == 1) 
{
	$i=$i+1;
	?>
	<div class="row third-sect" style="background-color: <?php echo $bgcolorArray[$i]; ?> ">
	<div class="col-md-offset-2 col-md-8 third-sect-8">
		<div>APPROACH</div>
		<h3><?php echo $data['AppSectTittle']; ?></h3>
		<p><?php echo $data['AppSectDes']; ?></p>
	</div>
</div>
<?php
}
?>


<div class="row fourth-sect" style="background-color: <?php $i=$i+1; echo $bgcolorArray[$i]; ?> ">
<div class="col-md-6 text-area-div">
	<div>SOLUTION</div>
	<h3><?php echo $data['SolSectTittle']; ?></h3>
	<p>
		<?php echo $data['SolSectDes']; ?>
	</p>
</div>
<div class="col-md-6 img-area-div">
	<img src=" {{asset('img/icon/port project/'. $data['SolSectImage'])}}">
</div>
</div>
<?php
if ($data['ImpSect'] == 1) 
{
	$i=$i+1;
	?>
	<div class="row fifth-sect" style="background-color: <?php echo $bgcolorArray[$i]; ?> ">
	<div class="col-md-6 img-area-div">
		<img src="{{asset('img/icon/port project/'. $data['ImpSectImage'])}}">
	</div>
	<div class="col-md-6 text-area-div">
		<div>IMPACT</div>
		<h3><?php echo $data['ImpSectTittle']; ?></h3>
		<p>
			<?php echo $data['ImpSectDes']; ?>
		</p>
	</div>
</div>
<?php
}
?>
			<!-- 	<div class="row sixth-sect">
					<div class="col-md-10 col-md-offset-1 text-area-div what-next">
						<div>WHAT'S NEXT?</div>
						<h3><?php //echo $data['NextSectTittle']; ?></h3>
						<p>
							<?php //echo $data['NextSectDes']; ?>
						</p>
					</div>
				</div> -->
				<?php
				$countindustry ="";
				foreach ($dataarray as $objects)
				{

					if ($objects['ProIndustry'] == $data["ProIndustry"] && $objects['Id'] != $data["Id"] && $objects['ProSelection'] == 'True') {
						$countindustry = count(array($objects['ProIndustry']));
					}
				}
				?>
				<?php
				if($countindustry >0)
				{
					$i=$i+1;
					?>
					<div class="row seventh-sect" style="background-color: <?php echo $bgcolorArray[$i]; ?> ">
						<div class="heading-h3">
							You might also like:
						</div>
						<div class="row">
							<?php
							foreach ($dataarray as $object)
							{
								if ($object['ProIndustry'] == $data["ProIndustry"] && $object['Id'] != $data["Id"]) {
									?>

									<div class="col-md-4 col4 blog-col4">
										<a href="{{'/projects/'.$object["slug"]}}">
											<div class="video-body">
												<div class="blog-sect">
													<span>PROJECT</span>
													<div class="blog-img-section" style='background: url("{{asset('img/icon/port project/'.$object['ProImage'])}}")'></div>
												</div>
												<div class="video-content video-content2">
													<a href="{{'/projects/'.$object["slug"]}}" class="video-tittle video-tittle2"><?php echo $object['ProIndustry']; ?></a><br>
													<a href="{{'/projects/'.$object["slug"]}}" class="video-des"><?php echo $object['ProTittle']; ?></a>
												</div>
												<div class="line-div line2-div">
													<a href="{{'/projects/'.$object["slug"]}}">
														<hr>
														<span>VIEW CASE STUDY</span>
														<img src="{{asset('img/logo/learn-more.png')}}">
													</a>
												</div>
											</div>
										</a>	
									</div>

									<?php
								}
							}
							?>
						</div>
					</div>
					<?php
				}
				?>
			</div>

			<div class="project-detail-footer">

				@include('footer')

			</div>