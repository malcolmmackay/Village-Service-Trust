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
		<script src="presentation.js" type="text/javascript"></script>

	
	</head>
<body>
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
					<h3>Programmes for Working Children</h3>
					<div class="infoLayer" id="dindigul_town" style="display:none">
					<a href="javascript:showInfoLayer('dindigul_town');" class="close_layer">Close</a>
					<h5>Dindigul Town</h5>
					<p>This is one of the historic towns of Tamil Nadu. It is an industrial town noted for traditional lock and iron vault making, cigar making and the processing of skin and hide.</p>
					<p>Dindigul Town is also  a vital trading center for the many surrounding villages, with a large market for agricultural products such as onions and oil.</p>
					</div>
					<div class="infoLayer" id="slums" style="display:none">
					<a href="javascript:showInfoLayer('slums');" class="close_layer">Close</a>
					<h5>The Slums</h5>
					<p>There are 30 slums in Dindigul Town, whose inhabitants account for a quarter of
					the population.</p>
					<p>Our programmes are currently active in 10 slums; we will gradually extend coverage over 
					time.</p>
					</div>
					<p>Working children are the epitomy of abuse and exploitation. 
					They are often the victims their employers and sometimes, even their parents. A childhood earmarked by nature for fun and frolic, education and enlightenment, is ruined by 
					the compulsion to earn money.</p>
					<p>The VST is currently helping 325 working children in and around <a href="javascript:showInfoLayer('dindigul_town');" class="popup">Dindigul Town</a>. Many 
					live in the <a href="javascript:showInfoLayer('slums')" class="popup">slums</a>, while others <a href="childwelfare.php">live on the street</a>.</p>
					<img src="../images/Jobs_for_Street_Children_Diagram.png" alt="Spider Diagram" style="float:right"></img>
					
					<?php include("tanneries.php"); ?>
					<?php include("metal_tinkering.php"); ?>
					
					<p>Many jobs involve working in hazardous conditions. It is not uncommon to read in newspapers of tragedies relating to fireworks; 
					many accidents are fatal to the children involved. In Dindigul, the risk to children from <a href="javascript:showInfoLayer('tanneries');" class="popup">tanneries</a> 
					and <a href="javascript:showInfoLayer('metal_tinkering');" class="popup">metal tinkering</a> is particularly high.</p> 
					
					<p>Working children become accustomed to factories where chemicals, foul smoke, dazzling light and deafening noise 
						threaten their <b>health</b> and impede their <b>overall development</b>.</p>

					<p>For this reason, the main thrust of our programmes concern:</p>
					<ul>
						<li>Education.</li>
						<li>Raising awareness of health, safety and hygiene issues.</li>
						<ul>
							<li>Warning of the dangers of drugs and alcohol.</li>
							<li>Enlightenment on the causes of diseases, and how to prevent them.</li>
						</ul>
					</ul>
			</div></div>
	
		</div>
			
			</div>
<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
try {
var pageTracker = _gat._getTracker("UA-9165696-1");
pageTracker._trackPageview();
} 
catch(err) {}
//]]>
</script>

	</body>
</html>
