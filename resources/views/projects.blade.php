
<head>
	<title>Projects | BrainX Technologies</title>
</head>


<!-- header -->

@include("header");

<!-- pootfolio page -->
<div class="portfolio-main-div">
	<!-- portfolio top portion -->
	<div class="for-space">
	</div>
	<div class="work-main top-heading-common main-heading-common">
		<h4>PROJECTS</h4>
		<h1 class="headind"><span class="feature"> Featured</span> Case Studies</h1>
	</div>
	<div class="row input-row">
		<div class="col-md-3">
			<div class="port-btn-all">
				ALL
			</div>
		</div>
		<div class="col-md-3 col-md-three">
			<span class="lable-span">Industry</span>
			<dl class="dropdown"> 

				<dt id="select-option1">
					<a>
						<span class="hida">Select Industry</span>    
						<p class="multiSel"></p>  
					</a>
					<div class="icon-top" id="icon-top1">

					</div>
					<div class="icon-down" id="icon-down1">

					</div>
				</dt>

				<dd>
					<div class="mutliSelect">
						<ul id="mul-ul">
							<li>
								<input type="checkbox" value="" id="ckbCheckAll" /><span>Select all</span>
							</li>
                            @foreach($industries as $industry)
							    <li>
                                    <input type="checkbox" class="industrycheckbox" value="{{$industry->name}}" id="{{$industry->name}}"/><span>{{$industry->name}}</span>
                                </li>
                            @endforeach
						</ul>
					</div>
				</dd>
			</dl>
		</div>
		<div class="col-md-3 col-md-three">
			<span class="lable-span">Service</span>
			<dl class="dropdown-2"> 

				<dt id="select-option2">
					<a >
						<span class="hida-2">Select Service</span>
						<p class="multiSel-2"></p>  
					</a>
					<div class="icon-top" id="icon-top2">

					</div>
					<div class="icon-down" id="icon-down2">

					</div>
				</dt>

				<dd>
					<div class="mutliSelect-2">
						<ul id="mul-ul-2">
							<li>
								<input type="checkbox" id="ckbCheckAll-2" /><span>Select all</span>
							</li>
                            @foreach($services as $service)
							<li>
								<input type="checkbox" class="servicescheckbox" value="{{$service->name}}" id="backend" /><span>{{$service->name}}</span>
							</li>
							@endforeach

						</ul>
					</div>
				</dd>
			</dl>
		</div>
		<div class="col-md-3 col-md-three">
			<span class="lable-span">Technology</span>
			<dl class="dropdown-3"> 

				<dt id="select-option3">
					<a >
						<span class="hida-3">Select Technology</span>    
						<p class="multiSel-3"></p>  
					</a>
					<div class="icon-top" id="icon-top3">

					</div>
					<div class="icon-down" id="icon-down3">

					</div>
				</dt>

				<dd>
					<div class="mutliSelect-3">
						<ul id="mul-ul-3">
							<li>
								<input type="checkbox" id="ckbCheckAll-3" /><span>Select all</span>
							</li>
                            @foreach($technologies as $technology)
							<li>
								<input type="checkbox" class="technologycheckbox" value="{{$technology->name}}" id="{{$technology->name}}" /><span>{{$technology->name}}</span>
							</li>
						@endforeach
						</ul>
					</div>
				</dd>
			</dl>
		</div>
	</div>
	
	<!-- portfolio middle portion -->

	<div id="projj" class="main-project-div">
		<div id="pro" class="row main-project-row">
			<?php
			foreach ($projects as $object)
			{
				if ($object["ProSelection"] == "True") {
						//for Industry sub foreach
					$proindustry = $object["ProIndustry"];
					$proindustryarr = explode(",", $proindustry);
				//for Services sub foreach
					$proservices = $object["ProServices"];
					$proservicesarr = explode(" ", $proservices);
					?>
					<div class="col-md-6 portfolio-project <?php  echo strtolower($object["ProTechnology"])." "; foreach ($proindustryarr as $values){$value2=trim($values);if(strtolower($value2) == "auto & vehicles"){echo "vehicles"." ";}else if(strtolower($value2) == "news & magazine"){echo "news"." ";}else{echo strtolower($value2)." ";}} foreach ($proservicesarr as $value){$value1=trim($value);if(strtolower($value1) == "ux/ui"){echo "ux"." ";}else{echo strtolower($value1)." ";}} ?>" style="background-color: <?php echo $object['ProBgcolor'] ?>">

						<div class="project-heading top-heading-common main-heading-common">
							<h4><?php echo $object["ProIndustry"]; ?></h4>
							<h1> <?php echo $object["ProTittle"]; ?></h1>
						</div>
						<a href="{{'projects/'.$object["slug"]}}">
							<div class="project-btn get-estimate">
								LEARN MORE
							</div>
						</a>
						<div class="project-img">
							<img src="{{asset('img/icon/port project/'.$object['ProImage'])}}" >
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>

		
	</div>
	@if($end == "false")
		<div class="row">
			<div class="container text-center load-more">
				<button id="load-more-btn" class="load-more-btn">Load More</button>
                <button id="load-filtered" class="load-more-btn btn-filtered" style="display: none;">Load More</button>
                <img class="loader" src="{{asset('img/icon/project-detail/giphy.gif')}}" style="height:150px; display:none;">
			</div>
		</div>
@endif
	<!-- start work with us And Contact us form -->
	<div class="port-contact-div">

		@include("contact-us-form");

	</div>

</div>


<!-- footer -->
<div class="port-footer-div">

	@include("footer");

</div>



<script>
	var count=0;
	var end;
    $(".btn-filtered").on('click', function (e) {
        e.preventDefault();
        $(".filtered:hidden").slice(0,12).show();
        if ($(".filtered:hidden").length == 0) {
            $(".btn-filtered").fadeOut('slow');
        }

    });
    $("#load-more-btn").on('click', function (e) {
        count = count+12;
        e.preventDefault();
        $('.load-more-btn').hide();
        $('.loader').show();
        $.ajax ({
            url:"/loadmore",
			data: {count:count},
            success: function(data, status) {
                 end =data['end'];
                $('.loader').hide();
                var projects = data['projects_shown'];
				for(i=0; i<projects.length; i++) {
				    var project = projects[i];
                    var proindustry = project["ProIndustry"];
                    var proindustryarr = proindustry.split(",");
                    //for Services sub foreach
                    var proservices = project["ProServices"];
                    var proservicesarr = proservices.split(" ");
					var industry ="";
					var services ="";
					var color="red";
				   for(j=0; j<proindustryarr.length; j++){
				       if(proindustryarr[j].toLowerCase() == "auto & vehicles" ) {
                           industry = industry + " " + "vehicles";
                       }
                       else if(proindustryarr[j].toLowerCase() == "news & magazine" ) {
                           industry = industry + " " + "news";
                       }
                       else {
                           industry = industry + " " + proindustryarr[j].toLowerCase();
                       }
				   }
                    for(j=0; j<proservicesarr.length; j++){
                        if(proservicesarr[j].toLowerCase() == "ux/ui" ) {
                            services = services + " " + "ux";
                        }
                       else {
                            services = services + " " + proservicesarr[j];
                        }
                    }
				   var newElement = ''+'<div class="col-md-6 portfolio-project ' + project['ProTechnology'].toLowerCase() +' '+industry+' '+ services +' " style="background-color: '+project['ProBgcolor']+'">'+
						'<div class="project-heading top-heading-common main-heading-common">'+ '<h4>'+project['ProIndustry']+'</h4>'+
						'<h1>'+project['ProTittle']+'</h1>'
							+'<a href="/projects/'+project['slug']+'">'
							+'<div class="project-btn get-estimate"> LEARN MORE </div>'
							+'</a>'
							+'<div class="project-img">'+ '<img src="/img/icon/port project/'+project['ProImage']+'">'+'</div>'
							+'</div>';
					$('#pro').append(newElement);
				}
                if(end == "false") {
                    $('#load-more-btn').show();
                }
                else {
                    $('.load-more-btn').hide();
                    $('.load-more').hide();
                }

            }


            });

        // $(".portfolio-project:hidden").slice(0, 8).show();
        // if ($(".portfolio-project:hidden").length == 0) {
        //     $(".load-more-btn").fadeOut('slow');
        // }
    });


    $(document).ready(function(){

        $("#select-option1").click(function(){
            $("#icon-top1").toggle();
            $("#icon-down1").toggle();
        });
        $("#select-option2").click(function(){
            $("#icon-top2").toggle();
            $("#icon-down2").toggle();
        });
        $("#select-option3").click(function(){
            $("#icon-top3").toggle();
            $("#icon-down3").toggle();
        });
        //for load more project
        $("#load-more-project").click(function(){
            $(".by-defult-hide").show();
        });

// for Select all project button
        $('.port-btn-all').on('click', function() {
            $('.mutliSelect input[type="checkbox"], .mutliSelect-2 input[type="checkbox"], .mutliSelect-3 input[type="checkbox"]').prop("checked", false);
            $('.multiSel, .multiSel-2, .multiSel-3').html("");
            $('#select-option1 span, #select-option2 span, #select-option3 span').show();
            $('.portfolio-project').show();
        });

// for dropdowns filter
        $('.mutliSelect input[type="checkbox"], .mutliSelect-2 input[type="checkbox"], .mutliSelect-3 input[type="checkbox"]').on('click', function() {

            $('.load-more').show();
            $('.loader').show();
            $('.load-more-btn').hide();
            ShowRespectiveProject();
        });

        function ShowRespectiveProject()
        {

            $('.portfolio-project').hide();
            $('.filtered').remove();


            if($(".mutliSelect-3 input:checkbox:checked, .mutliSelect-2 input:checkbox:checked, .mutliSelect input:checkbox:checked").length>0)
            {
                $('.load-more').show();
                $('.loader').show();
                $('.load-more-btn').hide();
                var industry = "", services ="", technology="";
                $('.mutliSelect input:checkbox:checked').each(function() {
                    industry = industry  + $(this).attr('value') +",";
                });
                $('.mutliSelect-3 input:checkbox:checked').each(function() {
                    technology = technology  + $(this).attr('value') +",";
                });
                $('.mutliSelect-2 input:checkbox:checked').each(function() {
                    services = services + $(this).attr('value') +",";
                });


                $.ajax({

                    url: "/filteredprojects",
					data: {industry: industry, technology: technology, services: services},
                    success: function(data, status) {

                        $('.loader').hide();
                        var projects = data['selected_projects'];
                        for(i=0; i<projects.length; i++) {
                            var project = projects[i];
                            var proindustry = project["ProIndustry"];
                            var proindustryarr = proindustry.split(",");
                            //for Services sub foreach
                            var proservices = project["ProServices"];
                            var proservicesarr = proservices.split(" ");
                            var industry ="";
                            var services ="";
                            var color="red";
                            for(j=0; j<proindustryarr.length; j++){
                                if(proindustryarr[j].toLowerCase() == "auto & vehicles" ) {
                                    industry = industry + " " + "vehicles";
                                }
                                else if(proindustryarr[j].toLowerCase() == "news & magazine" ) {
                                    industry = industry + " " + "news";
                                }
                                else {
                                    industry = industry + " " + proindustryarr[j].toLowerCase();
                                }
                            }
                            for(j=0; j<proservicesarr.length; j++){
                                if(proservicesarr[j].toLowerCase() == "ux/ui" ) {
                                    services = services + " " + "ux";
                                }
                                else {
                                    services = services + " " + proservicesarr[j];
                                }
                            }
                            var newElement = ''+'<div class="col-md-6 portfolio-project filtered ' + project['ProTechnology'].toLowerCase() +' '+industry+' '+ services +' " style="background-color: '+project['ProBgcolor']+'">'+
                                '<div class="project-heading top-heading-common main-heading-common">'+ '<h4>'+project['ProIndustry']+'</h4>'+
                                '<h1>'+project['ProTittle']+'</h1>'
                                +'<a href="/projects/'+project['slug']+'">'
                                +'<div class="project-btn get-estimate"> LEARN MORE </div>'
                                +'</a>'
                                +'<div class="project-img">'+ '<img src="/img/icon/port project/'+project['ProImage']+'">'+'</div>'
                                +'</div>';
                            $('#pro').append(newElement);
                        }
                        if(projects.length > 12) {
                            $(".filtered").hide();
                            $(".filtered").slice(0,12).show();
                            if ($(".filtered:hidden").length > 0) {
                                $(".btn-filtered").show();
                                $(".load-more").show();
                            }
                            else {
                                $(".load-more-btn").hide();
                            }
                        }

                    }

                });

            }
            else
            {
                $('.portfolio-project').show();
                $('.filtered').hide();
                $('.loader').hide();
                if(end!="true") {
                    $('#load-more-btn').show();
                }
            }
        }

    });
</script>

<!-- dropdown 1 -->
<script type="text/javascript">

    $(".dropdown dt a").on('click', function() {

        if($(".dropdown dd ul").css('display') == 'none')
        {
            $(".dropdown").css("border-color", "#455963");
            $(".dropdown").css("box-shadow", "0px 1px 1px 0");
        }
        else
        {
            $(".dropdown").css("border-color", "#d9dee0");
            $(".dropdown").css("box-shadow", "none");
        }
        $(".dropdown dd ul").slideToggle('fast');
    });

    $(".dropdown dd ul li a").on('click', function() {
        $(".dropdown dd ul").hide();
    });

    function getSelectedValue(id) {
        return $("#" + id).find("dt a span.value").html();
    }

    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("dropdown"))
        {
            $(".dropdown dd ul").hide();
            $(".dropdown").css("border-color", "#d9dee0");
            $(".dropdown").css("box-shadow", "none");
            $("#icon-top1").show();
            $("#icon-down1").hide();
        }
    });

    var childCount=0;

    $('.mutliSelect input[type="checkbox"]').on('click', function() {
        if ($(this).attr('id') == "ckbCheckAll") {
            $('.mutliSelect input[type="checkbox"]').prop('checked', $(this).is(':checked'));
        }
        else
        {
            $('#ckbCheckAll').prop('checked', false)
        }


        $('.multiSel').html("");
        var total=$('.industrycheckbox').length;
        childCount=$('.industrycheckbox:checked').length;

        if(childCount>3)
        {
            var html2 = '<span>' + childCount + ' of ' +total+ ' selected</span>';
            $('.multiSel').html(html2);
        }
        else
        {
            $('.industrycheckbox:checked').each(function(index,item){
                if(index==(childCount-1))
                {
                    var title = item.defaultValue;
                }
                else
                {
                    var title = item.defaultValue + ",";
                }
                var html = '<span title="' + title + '">' + title + '</span>';
                $('.multiSel').append(html);
            });
        }

        if (childCount == 0)
        {
            $(".hida").show();
            $('.multiSel').html('');
        }
        else
        {
            $(".hida").hide();
        }

    });
</script>
<!-- dropdown 2 -->
<script type="text/javascript">

    $(".dropdown-2 dt a").on('click', function() {

        if($(".dropdown-2 dd ul").css('display') == 'none')
        {
            $(".dropdown-2").css("border-color", "#455963");
            $(".dropdown-2").css("box-shadow", "0px 1px 1px 0");
        }
        else
        {
            $(".dropdown-2").css("border-color", "#d9dee0");
            $(".dropdown-2").css("box-shadow", "none");
        }
        $(".dropdown-2 dd ul").slideToggle('fast');
    });

    $(".dropdown-2 dd ul li a").on('click', function() {
        $(".dropdown-2 dd ul").hide();
    });

    function getSelectedValue(id) {
        return $("#" + id).find("dt a span.value").html();
    }

    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("dropdown-2"))
        {
            $(".dropdown-2 dd ul").hide();
            $(".dropdown-2").css("border-color", "#d9dee0");
            $(".dropdown-2").css("box-shadow", "none");
            $("#icon-top2").show();
            $("#icon-down2").hide();
        }
    });

    var childCount=0;

    $('.mutliSelect-2 input[type="checkbox"]').on('click', function() {
        if ($(this).attr('id') == "ckbCheckAll-2") {
            $('.mutliSelect-2 input[type="checkbox"]').prop('checked', $(this).is(':checked'));
        }
        else
        {
            $('#ckbCheckAll-2').prop('checked', false)
        }


        $('.multiSel-2').html("");
        var total=$('.servicescheckbox').length;
        childCount=$('.servicescheckbox:checked').length;

        if(childCount>3)
        {
            var html2 = '<span>' + childCount + ' of ' +total+ ' selected</span>';
            $('.multiSel-2').html(html2);
        }
        else
        {
            $('.servicescheckbox:checked').each(function(index,item){
                if(index==(childCount-1))
                {
                    var title = item.defaultValue;
                }
                else
                {
                    var title = item.defaultValue + ",";
                }
                var html = '<span title="' + title + '">' + title + '</span>';
                $('.multiSel-2').append(html);
            });
        }

        if (childCount == 0)
        {
            $(".hida-2").show();
            $('.multiSel-2').html('');
        }
        else
        {
            $(".hida-2").hide();
        }

    });
</script>
<!-- dropdown 3 -->
<script type="text/javascript">


    $(".dropdown-3 dt a").on('click', function() {

        if($(".dropdown-3 dd ul").css('display') == 'none')
        {
            $(".dropdown-3").css("border-color", "#455963");
            $(".dropdown-3").css("box-shadow", "0px 1px 1px 0");
        }
        else
        {
            $(".dropdown-3").css("border-color", "#d9dee0");
            $(".dropdown-3").css("box-shadow", "none");
        }
        $(".dropdown-3 dd ul").slideToggle('fast');
    });

    $(".dropdown-3 dd ul li a").on('click', function() {
        $(".dropdown-3 dd ul").hide();
    });

    function getSelectedValue(id) {
        return $("#" + id).find("dt a span.value").html();
    }

    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("dropdown-3"))
        {
            $(".dropdown-3 dd ul").hide();
            $(".dropdown-3").css("border-color", "#d9dee0");
            $(".dropdown-3").css("box-shadow", "none");
            $("#icon-top3").show();
            $("#icon-down3").hide();
        }
    });

    var childCount=0;

    $('.mutliSelect-3 input[type="checkbox"]').on('click', function() {
        if ($(this).attr('id') == "ckbCheckAll-3") {
            $('.mutliSelect-3 input[type="checkbox"]').prop('checked', $(this).is(':checked'));
        }
        else
        {
            $('#ckbCheckAll-3').prop('checked', false)
        }


        $('.multiSel-3').html("");
        var total=$('.technologycheckbox').length;
        childCount=$('.technologycheckbox:checked').length;

        if(childCount>3)
        {
            var html2 = '<span>' + childCount + ' of ' +total+ ' selected</span>';
            $('.multiSel-3').html(html2);
        }
        else
        {
            $('.technologycheckbox:checked').each(function(index,item){
                if(index==(childCount-1))
                {
                    var title = item.defaultValue;
                }
                else
                {
                    var title = item.defaultValue + ",";
                }
                var html = '<span title="' + title + '">' + title + '</span>';
                $('.multiSel-3').append(html);
            });
        }

        if (childCount == 0)
        {
            $(".hida-3").show();
            $('.multiSel-3').html('');
        }
        else
        {
            $(".hida-3").hide();
        }

    });
</script>

