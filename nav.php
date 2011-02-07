<?php
	function displayNav($activePath){
		$activePage = basename($activePath,".php");
		$$activePage = "class=\"active\"";
		
//Do not indent.
$navHTML = <<<HTML
		<div id="nav">
		<ul>
		<li onclick="window.location='index.php'" $index ><a>Home</a></li>		
		<li onclick="window.location='campaigns/index.php'"><a>Campaigns</a></li>							
		<li onclick="window.location='coverage.php'" $coverage><a>Coverage</a></li>		
		<li onclick="window.location='profile/index.php'"><a>Profile</a></li>		
		<li onclick="window.location='donate/index.php'"><a>Donate</a></li>
		<li onclick="window.location='contact.php'" $contact><a>Contact</a></li>
		
		</ul>
		
		
		
		</div>
HTML;
		
		echo $navHTML;
		
	}
		
?>


						

