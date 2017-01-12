<?php $url = "";?>
<!-- About -->
<script src="js/plugins.js"></script>
<script src="js/about.js"></script>

<script>
$(document).ready(function() {
	var yOffset = $("#timeline #navAbout").offset().top;
	$(window).scroll(function() {
		if ($(window).scrollTop() > yOffset) {
			$("#navAbout").css({
				'top': 0,
				'margin' : 0,
				'position': 'fixed',
				'background' : 'rgba(0,0,0,.8)'

			});$("#navAbout ul").css({
				'border-bottom': 0
			});
		} else {
			$("#navAbout").css({
				'top': yOffset + 'px',
				'position': 'static',
				'margin' : '20px 0',
				'background' : 'transparent'
			});
			$("#navAbout ul").css({
				'border-bottom': '1px solid #fff'
			});
		}
	});
});
</script>
