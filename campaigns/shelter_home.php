<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Village Service Trust</title>
		<link rel="stylesheet" href="../style.css" title="Contemporary" type="text/css"/>
		<link rel="stylesheet" href="../style_special2.css" title="Contemporary" type="text/css"/>
		<link rel="stylesheet" href="../lightbox2/css/lightbox.css" type="text/css" media="screen" />


		<link rel="icon" href="../favicon.png" type="image/png"/>
		<link rel="stylesheet" href="../lightbox2/css/lightbox.css" type="text/css" media="screen" />


		<script src="../lightbox2/js/prototype.js" type="text/javascript"></script>
		<script src="../lightbox2/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
		<script src="../lightbox2/js/lightbox.js" type="text/javascript"></script>

		<script src="rice_appeal.js"></script>

	</head>
	<body onLoad="kgToRs()">
		<?php
include("../header.php");
displayHeader("'../index.php'")
?>

<div id="central">
<?php 
	include("nav.php"); 
	
	displayNav("childwelfare.php");
	
	?>

		
			<div id="main">
			
			<div id="street_children_header">
			<h1>Shelter Home</h1>
			</div>
		
			<p>The VST runs a shelter home for the <a href="childwelfare.php">street children in Dindigul Town</a>. It is situated within easy access of the railway station and bus stand. There are currently 83 children in the home, aged between 7 and 15. </p>
			<div id="shelter_pictures">
			<a href="../photos/campaigns/streetchildren/large/1.jpg" rel="lightbox[shelter]"  title="A safe and secure place to live."><img src="../photos/campaigns/streetchildren/1.jpg" alt=""/></a>
			<a href="../photos/campaigns/streetchildren/large/2.jpg" rel="lightbox[shelter]"  title="Children are given food 3 times a day. Morning , noon and night. Tiffen is supplied every evening."><img src="../photos/campaigns/streetchildren/2.jpg" alt=""></a>


			<a href="../photos/campaigns/streetchildren/large/43.jpg" rel="lightbox[shelter]" title="Skills training and income generation, such as tailoring, typewriting and carpentry."><img src="../photos/campaigns/streetchildren/43.jpg" alt=""/></a>
			<a href="../photos/campaigns/streetchildren/large/5.jpg" rel="lightbox[shelter]"  title="Formal or non-formal education"></a>

			<a href="../photos/campaigns/streetchildren/large/6.jpg" rel="lightbox[shelter]"  title="Job placements and apprenticeships"></a>
						</div>

		<p>The shelter home provides:</p>
	<ul>
		<li>A safe and secure place to live.</li>
		<li>Children are given <b>food</b> 3 times a day. Morning , noon and night. </li>
		<li>2 or more sets of <b>clothes</b> to every child.</li>
		<li>Regular individual <b>counselling</b> and group counselling once a month.</li>
		<li>Formal or informal <a href="education.php">education</a>.</li>
		<li><b>Skills training</b> in tailoring, typewriting and carpentry.</li>
		<li>Reunion with parents.</li>
		<li>Job placements and apprenticeships.</li>
	</ul>
	<h5>Rice Appeal</h5>
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
							<option  value="USD">United States Dollar (USD)</option>


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
														</select>
							<p></p>
							<input onkeyup="reverseConversion();" id="myCurrency" name="amount" style="font-size:16px;" size="6" maxlength="6" value="" autocomplete=off></input><label id="curLabel" style="padding-left:5px;">USD</label>
						
						</fieldset>				
																	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" id="donateButton" alt="PayPal - The safer, easier way to pay online!" style="margin-Top:7px;margin-Left:11px;"/>
								</form></div>

	<p>There is an urgent need for the VST to procure 1800 kg of rice for the shelter home, to feed the malnourished kids adequately.</p>

						<p>Between 850 to 900 Kgs of rice is  required on a monthly basis to help secure a livelihood for the 83 children in our care. The global recession has made it more difficult to obtain funding. </p>
						<p>Any donations are greatly appreciated. You can use the form on the right to donate rice by the kilogram. Alternatively, you can <a href="../donate/child_sponsorship.php">sponsor a child</a>.</p>


					
			

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
