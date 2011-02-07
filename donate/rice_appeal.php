<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<head>

		<meta name="Design" content="Malcolm Mackay"/>

		<meta name="Hosting" content="Malcolm Mackay"/>

		<title>Village Service Trust / Shelter Home Rice Appeal</title>

		<link rel="stylesheet" href="../style_special.css" title="Contemporary" type="text/css"/>

		<link rel="icon" href="favicon.png" type="image/png"/>

		<script src="rice_appeal.js"></script>

		
		
	</head>

	<body onLoad="kgToRs()">

<div id="header">
		<div id="donate">
				
		</div>
		<div id="header_text"><h1>VST Shelter Home Rice Appeal</h1></div>
		<div id="logo" onclick="window.location='../index.php'"></div>

<div id="central">
			<div id="main">
												<div id="donateContainer">										
						<form name="_xclick" action="https://www.paypal.com/uk/cgi-bin/webscr" method="post">
											<fieldset class="donateTool">
							<legend class="legend">
								Rice Quantity
							</legend>
							
							<input onkeyup="kgToRs()" id="kg" name="kg" style="font-size:16px" size="6" maxlength="6" value="10" autocomplete=off></input><label> kg</label>
														<input onmouseup="kgDown()" type="button" value="-"/><input onmouseup="kgUp()" type="button" value="+"/>

						</fieldset>

						<input type="hidden" name="cmd" value="_donations"/>
						<input type="hidden" name="business" value="thevst@gmx.com"/>
						<input type="hidden" name="lc" value="US"/>
						<input type="hidden" name="item_name" value="Rice for the Shelter Home"/>
						<input type="hidden" name="currency_code" />
						<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest"/>
						<fieldset class="donateTool">
							<legend class="legend">Value</legend>
							<input id="Rs" type="hidden" style="font-size:12px" size="6" maxlength="6" value="" autocomplete=off readonly></input>
							<label style="display:none;font-size:12px">Rs</label>
												
							<select onChange="ajaxFunction()" id="selConvertTo" name="currency_code" value="USD">
							<option  value="AUD">Australian Dollar (AUD)</option>
							<option  value="CAD">Canadian Dollar (CAD)</option>
							<option  value="CHF">Swiss Franc (CHF)</option>
							<option  value="CZK">Czech Koruna (CZK)</option>
							<option  value="DKK">Danish Krone (DKK)</option>
							<option  value="EUR">Euro (EUR)</option>
							<option  value="GBP">British Pound (GBP)</option>

							<option  value="HKD">Hong Kong Dollar (HKD)</option>
							<option  value="HUF">Hungarian Forint (HUF)</option>
							<option  value="ILS">New Israeli Sheqel (ILS)</option>
							<option  value="JPY">Japanese Yen (JPY)</option>

							<option  value="MXN">Mexican Peso (MXN)</option>
							<option  value="NOK">Norwegian Krone (NOK)</option>
							<option  value="NZD">New Zealand Dollar (NZD)</option>
							<option  value="PLN">Polish Złoty (PLN)</option>
							<option  value="SEK">Swedish Krona (SEK)</option>
							<option  value="SGD">Singapore Dollar (SGD)</option>
							<option  value="USD">United States Dollar (USD)</option>
							</select>
							<p></p>
							<input onkeyup="reverseConversion();" id="myCurrency" name="amount" style="font-size:16px;" size="6" maxlength="6" value="" autocomplete=off></input><label id="curLabel" style="padding-left:5px;">AUD</label>
						
						</fieldset>				
																	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" id="donateButton" alt="PayPal - The safer, easier way to pay online!" style="margin-Top:7px;margin-Left:11px;"/>
								</form>
</div>

						<p>There is an urgent need for the VST to procure 1800 kg of rice (Rs.38 per kg) for the <a href="../campaigns/shelter_home.php">shelter home</a> to be able to feed the malnourished kids adequately.</p>

						<p>Between 850 to 900 Kgs of rice is  required on a monthly basis to help secure a livelihood for the 83 children in our care. The global recession has made it more difficult to obtain funding. </p>
						<p>Any donations are greatly appreciated. You can use the form on the right to donate rice by the kilogram.</p>
						
						<p class="nospace2">Go to the VST <a href="../index.php">Homepage</a>.</p>
						<p class="nospace2">Find out more about the <a href="../campaigns/childwelfare.php">Dindigul Street Children Rehabilitation Project</a>.</p>
						
							
					</div></div></div>

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
