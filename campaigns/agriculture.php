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
		var myGallery = new gallery($('campaign_images'), {
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
				
				<h3>Agriculture</h3>
				
				<div id="campaign_images">
				<div class="imageElement">
				<h3>Item 1 Title</h3>
				<p>Item 1 Description</p>
				<img src="../photos/campaigns/agricultural/25.jpg" alt="Image 25" class="full" />
				<img src="#" class="thumbnail" />
				</div>
				<div class="imageElement">
				<h3>Item 2 Title</h3>
				<p>Item 2 Description</p>
				<img src="../photos/campaigns/agricultural/18.jpg" alt="Image 18" class="full" />
				<img src="#" class="thumbnail" />
				</div>
				<div class="imageElement">
				<h3>Item 2 Title</h3>
				<p>Item 2 Description</p>
				<img src="../photos/campaigns/agricultural/19.jpg" alt="Image 19" class="full" />
				<img src="#" class="thumbnail" />
				</div>
				<div class="imageElement">
				<h3>Item 2 Title</h3>
				<p>Item 2 Description</p>
				<img src="../photos/campaigns/agricultural/37.jpg" alt="Image 37" class="full" />
				<img src="#" class="thumbnail" />
				</div>
				<div class="imageElement">
				<h3>Item 2 Title</h3>
				<p>Item 2 Description</p>
				<img src="../photos/campaigns/agricultural/42.jpg" alt="Image 42" class="full" />
				<img src="#" class="thumbnail" />
				</div>
				<div class="imageElement">
				<h3>Item 2 Title</h3>
				<p>Item 2 Description</p>
				<img src="../photos/campaigns/agricultural/38.jpg" alt="Image 38" class="full" />
				<img src="#" class="thumbnail" />
				</div>
				</div> 
				<p>Farmer's Forums have been established in many villages around Michaelpalayam. </p><p> Two meetings are conducted each month, where farmers inform one another about the profit or loss in their farms, and the reasons for it.</p><p>These have several objectives:</p>
				<ul>
					<li>Bring together farmers of small and marginal plots of land.</li>
					<li>Encourage the discussion of their experiences and problems in farming</li>
					<li>Successful farmers come forward and tell others the secret of their success.</li>
					<li>Raise awareness of help available from governmental and other organisations.</li>
					<li>Establish a small savings scheme.</li>
				
				</ul>
				<p>Working together has provided farmers with the information they need to maximize their potential. A more scientific approach has been developed, which is more financially stable and less subject to disruption from unusual weather events.</p>
				<p>Other schemes include a social forestry programme, which highlights the benefits of reforestation and Environmental Awareness Education, which is offered to women, children and farmers.</p>
				


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
