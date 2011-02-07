<?php
	function displayHeader($homepage){
		
//Do not indent.
$headerHTML = <<<HTML
		<div id="header">
		<div id="donate">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_donations"/>
		<input type="hidden" name="business" value="thevst@gmx.com"/>
		<input type="hidden" name="lc" value="US"/>
		<input type="hidden" name="item_name" value="The Village Service Trust"/>
		<input type="hidden" name="currency_code" value="USD"/>
		<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest"/>
		<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"/>
		<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"></img>
		</form>
		
		</div>
		<div id="vision"></div>
		<div id="header_text"></div>
		<div id="logo" onclick="window.location=$homepage"></div>
HTML;
		
		echo $headerHTML;
		
	}
	
	?>