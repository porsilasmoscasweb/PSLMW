<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include ('include/head.php'); ?>
<title>PSLMW - Desgin | Motion | Web | UI | UX</title>
<meta name="description" content=""/>
</head>
<body>
<?php include ('include/header.php'); ?>

<div class="navFilter hundred">
    <span class="listButton"></span>
    <div class="degradientBox"></div>
    <button class="btn active" data-filter="design web motion">All</button>
    <button class="btn" data-filter="design">Design</button>
    <button class="btn" data-filter="web">Web</button>
    <button class="btn" data-filter="motion">Motion</button>
</div>
<div id="list" class="wrapper">
    <ul class="image-grid">             
	    <?php include ('include/list.php'); ?>    
    </ul>
</div>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34064814-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>