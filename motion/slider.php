<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Collection of images.</title>
<meta name="description" content="Collection of images." />
<?php include ('../include/head.php'); ?>
<style>
.bigImgYou { background: url(../img/motion/slider-big.jpg) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;o-background-size: cover;background-size: cover;}
</style> 
</head>
<body>
<?php include ('../include/header.php'); ?>

<div class="navFilter">
    <span class="listButton"></span>
    <div class="degradientBox"></div>
	
    <div class="listProjects">    
    <ul>
		<?php include ('../include/list.php'); ?>
    	</ul>    
    </div>
</div>

<div class="projectSocial socialMotion">
    <ul>
        <li><a class="facebook" href="http://www.facebook.com/sharer.php?s=100&p[title]=SLIDER&p[summary]=Collection of images.&p[url]=http://www.porsilasmoscasweb.com/motion/slider.php&&p[images][0]=http://www.porsilasmoscasweb.com/img/motion/slider.jpg" target="_facebook" rel="image_src">F</a></li>
        <li><a class="twitter" href="https://twitter.com/intent/tweet?original_referer=http://www.porsilasmoscasweb.com&amp;text=Collection of images.&amp;tw_p=tweetbutton&amp;url=http://www.porsilasmoscasweb.com/motion/slider.php" target="_twitter">T</a></li>
    </ul>
</div>

<div class="youtubeImg bigImgYou">
<div class="pointBG"></div>
<h3>Collection of images</h3> 
<p></p>
<div id="youtubePlay">play</div> 
</div> 

<div id="youtube-Fullscreen">
<object>
    <param name="movie" value="http://www.youtube.com/v/aL2_ffFU70o?enablejsapi=1&version=3"></param>
    <param name="wmode" value="transparent"></param>
    <param name="allowScriptAccess" value="always">
    <param name="allowFullScreen" value="true">
    <embed src="http://www.youtube.com/v/aL2_ffFU70o?autoplay=1&enablejsapi=1&loop=1&showinfo=0&autohide=1&color=white&theme=light&version=3" type="application/x-shockwave-flash" allowFullScreen="true" wmode="transparent" style="width:100%; height:100%;">
    </embed>
</object>
</div> 

</body>
</html>