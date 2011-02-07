<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Village Service Trust</title>
		<link rel="stylesheet" href="../style.css" title="Contemporary" type="text/css"/>
		<link rel="icon" href="../favicon.png" type="image/png"/>
		<script src="presentation.js" type="text/javascript"></script>

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
				<div id="container">
				<div id="cover"></div>
<div id="case_studies_link" style="float:right;padding-top:39px;">
<a href="case_studies.php"><img src="../images/case_studies_arrow.png" width="110px"></img></a>
</div>
				<h3>Rehabilitation Programme for Disabled Children</h3>

				<h5>Identification and Diagnosis</h5>
				<p>Throughout the Indian Subcontinent, disability is viewed as a curse from God. It is common practice to prevent the severely disabled from ever seeing the light of day.</p>

<div class="infoLayer" id="polio" style="display:none;">
<a href="javascript:showInfoLayer('polio');" class="close_layer">Close</a>
<h5>Poliomyelitis</h5>
<p>Polio is an acute infectious disease caused by a virus. In a small minority of cases, the poliovirus spreads to the Central Nervous System, where it can cause paralysis.</p>
<p>While a worldwide vaccination programme has eradicated the disease in many countries, it remains endemic in India, Pakistan, Nigeria and Afghanistan.</p>
</div>
				<p>It can be very difficult to know that there is a disabled child in a family. Through much contact with villagers and parents, we found 18 cases of handicapped children in our target villages. After obtaining parental permission, our health workers took them to a hospital in Madurai. The following diagnoses were made:</p>
				<ul>
					<li>9 Children had <a href="javascript:showInfoLayer('polio')" class="popup">Polio</a>.</li>
					<li>5 Children had cogential deformities.</li>
					<li>3 Children had severe learning difficulties.</li>
					<li>1 Child was deaf and unable to speak.</li>
				</ul>
				<p>Case files were created to document their condition. Names were added to the list of handicapped children who we help.</p>

				<h5>Medical Assistance</h5>
				<p>The VST ensures that medical treatment is available when it is needed.</p>
				<p>In 4 of the Polio cases, doctors recommended surgical intervention to correct one or both affected legs. However, these children were malnourished. 
					Our organisation provided the advice and nutrient-rich foods to make them fit, both before and after surgery.</p>			

				<p>Within a month, the children were taken back to hospital for the operation. Parents had to stay in hospital with their children for several days while they recovered under observation.
					The VST paid expenses for parents who were financially unable to do this.</p>

				<p>All 4 operations had positive outcomes. The children were able to stand upright and walk in a straight line, unsupported.</p>

<div class="infoLayer" id="world_handicapped_day" style="display:none;width:350px;">
<a href="javascript:showInfoLayer('world_handicapped_day');" class="close_layer">Close</a>
<h5>World Handicapped Day Celebrations</h5>
<p>On this occasion, all the disabled children in our care are given the chance to interact with one another and share their experiences.</p>
<p>Each disabled child is accompanied by a parent or aide. A sports competition is organised and the children participate according to their ability.</p>
<p>In the afternoon, a sumptuous lunch is served to the participants. Prizes are given to the competition winners. Transport is arranged by our organisation for every handicapped child.</p>
</div>	

				<h6>Raising Awareness</h6>
				<p>A lack of awareness prevents people from accepting and managing disabilities. For this reason, many handicapped children are neglected by their parents and ignored by their communities. </p>
				<p>To address this, we arrange meetings in the villages. These are intended to inform the public and change attitudes, through dramas, story telling, songs and roleplaying.</p>
				<p>To encourage new friendships among the disabled children in our care, we organise events to celebrate <a href="javascript:showInfoLayer('world_handicapped_day')" class="popup">World Handicapped Day</a> on December 3rd.</p>
				
				<h6>Education & Vocational Training</h6>
				<p>We believe in the principle of an <a href="justice.php">inclusive education</a>; all children of a school going age should attend a school. 
			We help handicapped children to meet their school expenses. In addition, uniforms, notebooks, shoes and other essentials are made available.</p>
				<p>We also provide vocational training to the handicapped:</p>
				<ul>
					<li>Tailoring classes are attended by 8 students.</li>
					<li>Handcrafts such as envelope making are taught to 5 students.</li>
				</ul>
				
				</div>
			</div>
	</div>
		

			</div>

				<div id="undercentral"><div id="valid"><a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="20" width="59"/></a>
	<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:58px;height:20px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>
</div></div>
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
