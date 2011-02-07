<?php
	function displayNav($activePath){
		$activePage = basename($activePath,".php");
		$$activePage = "id=\"active\"";
		
//Do not indent.
$navHTML = <<<HTML
		<div id="nav">
		<ul>
		<li onclick="window.location='../index.php'"><a>Home</a></li>	
		<li onclick="window.location='../campaigns/index.php'"><a>Campaigns</a></li>					
		<li onclick="window.location='../coverage.php'"><a>Coverage</a></li>	
		<li onclick="window.location='../profile/index.php'"><a>Profile</a></li>
		
		<li onclick="window.location='index.php'" class="active"><a>Donate</a></li>
		<li onclick="window.location='../campaigns/shelter_home.php'" class="subnav"><a>Rice Appeal</a></li>
		<li onclick="window.location='child_sponsorship.php'" class="subnav" $child_sponsorship><a>Sponsor a Child</a></li>
		
		<li onclick="window.location='../contact.php'"><a>Contact</a></li>
		
		</ul>
		
		
		
		</div>
HTML;
		
		echo $navHTML;
		
	}
		
?>


						

