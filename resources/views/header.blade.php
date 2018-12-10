
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet proload" type="text/css" href="{{asset('css/style1.css')}}">
	<link rel="stylesheet proload"  type="text/css" href="{{asset('css/pages-style.css')}}">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
	<link href="{{asset('img/home-icon/favicon.ico')}}" rel="shortcut icon" type="image/ico">


</head>
<body onresize="portDivResize()">

<nav class="navbar navbar-default navbar-fixed-top" id="parent-node">
	<div class="container-fluid" >
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div>

				<a class="navbar-brand" href="/"><img src="{{asset('img/home-icon/Brainx-logo.svg')}}" class="brainx-logo"></a>
			</div>
		</div>
		<a href="/contact" class="free-esti-a">
			<div class="estimate-bottun">
				<p class="estimate-p">FREE Estimation</p>
				<span class="estimate-span">Response in 24 hours</span>
			</div>
		</a>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div align="center" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="navbar-li"><a href="/projects" class="navbar-li-a">Projects</a></li>

				<li class="navbar-li list-inline"><a href="/services" class="navbar-li-a">Services</a></li>
				<li class="navbar-li"><a href="/solutions" class="navbar-li-a">Solutions</a></li>
				<li class="navbar-li"><a href="/company" class="navbar-li-a">Company</a></li>
				<li class="navbar-li" style="display: none;"><a href="blog.php" class="navbar-li-a">Blog</a></li>
				<li class="navbar-li" style="display: none;"><a href="approach.php" class="navbar-li-a">Approach</a></li>
			</ul>

		</div><!-- /.navbar-collapse -->

	</div><!-- /.container-fluid -->
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://use.fontawesome.com/f88ff92415.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $(document).bind("touchstart",function (event) {

            var element = document.getElementById('parent-node');
            var clickover = $(event.target);
            var _opened = $("#bs-example-navbar-collapse-1").hasClass("navbar-collapse in");
            if (_opened === true && !element.contains(event.target) ) {
                $("button.navbar-toggle").click();
            }
        });
    });

</script>