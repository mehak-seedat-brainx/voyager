<!-- Welcome this index page of brainx -->
<?php
$baseUrl = "https://www.brainxtech.com/";
?>
<head>
    <title>Software Solutions | BrainX Technologies</title>
    <meta name="author" content="BrainX Technologies" />
    <meta name="description" content="We are a Pakistan based software development firm that works with startups, SMBs & enterprises to craft disruptive digital products & strategies that solve business problems & drive measurable results.">

    <!-- Meta tag for seo -->
    <meta content="website" property="og:type" />
    <meta content="Software Solutions - BrainX Technologies" property="og:title" />
    <meta content="We are a Pakistan based software development firm that works with startups, SMBs & enterprises to craft disruptive digital products & strategies that solve business problems & drive measurable results." property="og:description" />
    <meta content="BrainX Technologies" property="og:site_name" />
    <meta content="https://brainxtech.com/" property="og:url" />
    <meta content="<?php echo $baseUrl; ?>home-icon/Brainx-logo.svg" property="og:image" />

    <meta content="software house" name="twitter:card" />
    <meta content="Software Solutions - BrainX Technologies" name="twitter:title" />
    <meta content="We are a Pakistan based software development firm that works with startups, SMBs & enterprises to craft disruptive digital products & strategies that solve business problems & drive measurable results." name="twitter:description" />
    <meta content="@brainxtechs" name="twitter:site" />
    <meta content="@brainxtechs" name="twitter:creator" />

    <meta content="<?php echo $baseUrl; ?>home-icon/Brainx-logo.svg" name="image_src" />
</head>
<!-- header -->

@include("header")


<!-- banner -->

    @include("banner")


 <!-- serveices -->

  @include("services-home")


 <!-- solution -->

@include("solution-home")


 <!-- approach -->


 <!-- portfolio -->

@include("portfolio-home")

 <!-- clients -->

@include("client-home")
 <!-- reviews home  -->

@include('reviews-home')

 
<!-- work with us -->

@include("work-with-us-home")


 <!-- footer -->

 @include("footer")

