<?php
	function displayHeader($homepage){
		
//Do not indent.
$headerHTML = <<<HTML
		<div id="header">
		<div id="donate">
		<a href="http://www.ammado.com/donate?vst"><img src="http://static.ammado.com/[v_CA406555]/Images/DonateToUs/en-w-mb.jpg" alt="" border="0"/></a>		
		</div>
		<div id="vision"></div>
		<div id="header_text"></div>
		<div id="logo" onclick="window.location=$homepage"></div>
HTML;
		
		echo $headerHTML;
		
	}
	
	?>
