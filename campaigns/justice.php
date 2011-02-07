<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Village Service Trust</title>
		<link rel="stylesheet" href="../style.css" title="Contemporary" type="text/css"/>
		<link rel="icon" href="../favicon.png" type="image/png"/>
		<script src="../smoothgallery/scripts/mootools.v1.11.js" type="text/javascript"></script>
		<script src="../smoothgallery/scripts/jd.gallery.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../smoothgallery/css/jd.gallery.css" type="text/css" media="screen" /> 
		<script src="../smoothgallery/scripts/jd.gallery.set.js" type="text/javascript"></script>
	</head>
	<body>
		<script type="text/javascript">
		function startGallery() {
		var myGallery = new gallery($('campaign_images_centered'), {
		timed: false,
		showArrows: true,
		showCarousel: false,
		embedLinks: false,
		fadeDuration: 200,
		showInfopane: false
		});
		}
		window.addEvent('domready', startGallery);
		</script> 
<?php
include("../header.php");
displayHeader("'../index.php'")
?>

<div id="central">
<?php 
	include("nav.php"); 
	
	displayNav($_SERVER['PHP_SELF']);
	
	?>

			
				<div id="main" class="campaign">
				<h3>Inclusive Education and Social Justice</h3>
                <p>The trust advocates a fair society, which protects the vulnerable, especially women and children. Aid is given to victims of oppression and legal aid is provided to safeguard human rights.</p>
                </div>
                </div>
	
			</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9165696-1");
pageTracker._trackPageview();
} catch(err) {}</script>

	</body>
</html>
