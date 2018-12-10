function portDivResize() {
	if ($('.project-div').length>0) {
		var cw = $('.project-div').width();
		$('.project-div').css({
			'height': cw + 'px'
		});
	}
}
$(document).ready(function() {
	portDivResize();
});