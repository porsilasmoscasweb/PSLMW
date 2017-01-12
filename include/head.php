<?php $url = "";?>

<!-- META -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<!--
http://www.porsilasmoscasweb.com/
http://localhost/PSLMW/
-->
<!-- CSS -->
<link rel="shortcut icon" href="http://www.porsilasmoscasweb.com/img/favicon.ico">
<link href="http://www.porsilasmoscasweb.com/css/style.css" media="screen" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

<!-- JQUERY-->
<script src="http://www.porsilasmoscasweb.com/js/jquery-1.8.3.min.js"></script>
<script src="http://www.porsilasmoscasweb.com/js/jquery-ui-1.10.4.custom.js"></script>
<script type="text/javascript" src="http://www.porsilasmoscasweb.com/js/jquery.mixitup.min.js"></script>

<script>$(document).ready(function(){$("#youtubePlay").click(function(){$("#youtube-Fullscreen").slideToggle(0);});});</script>
<script>$(document).ready(function(){$("#youtubePlay").click(function(){$(".youtubeImg").slideToggle(300);});});</script>
<script>$(document).ready(function(){$("#read_more").click(function(){$(".infoHidden").slideToggle(300);});});</script>

<script type="text/javascript">
$(function () {
var filterList = {
	init: function () {
		$('#list').mixitup({
		animation:{	
			enable: true,
			effects: 'translateZ(-360px) stagger(34ms) scale(0)',
			<!--fade, scale, translateX, translateY, translateZ, rotateX, rotateY, rotateZ, stagger-->
			duration: 300,
			easing: 'ease', <!--ease. snap-->
			perspectiveDistance: '3000px',
			perspectiveOrigin: '50% 50%',
			queue: true,
			queueLimit: 1,
			animateChangeLayout: false,
			animateResizeContainer: true,
			animateResizeTargets: false,
			staggerSequence: null,
			reverseOut: false,
		},
			targetSelector: '.box',
			filterSelector: '.btn',
		});				
	}
};
filterList.init();
});	
</script>

<script>
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });
});
</script>