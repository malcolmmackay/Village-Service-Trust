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
		
		<li onclick="window.location='index.php'" class="active"><a>Profile</a></li>
		
		<li onclick="window.location='resources.php'" class="subnav" $resources><a>Resources</a></li>
		<li onclick="window.location='structure.php'" class="subnav" $structure><a>Structure</a></li>
		<li onclick="window.location='evaluation.php'" class="subnav" $evaluation><a>Evaluation</a></li>
		<li onclick="window.location='testament.php'" class="subnav" $testament><a>Testament</a></li>
		<li onclick="window.location='director.php'" class="subnav" $director><a>Director</a></li>
		
		
		<li onclick="window.location='../donate/index.php'"><a>Donate</a></li>
		
		<li onclick="window.location='../contact.php'"><a>Contact</a></li>
		
		</ul>
		
		</div>
HTML;
		
		echo $navHTML;
		
	}
		
?>


						

