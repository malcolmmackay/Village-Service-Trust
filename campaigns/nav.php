<?php
	function displayNav($activePath){
		$activePage = basename($activePath,".php");
		$$activePage = "id=\"active\"";
		
//Do not indent.
$navHTML = <<<HTML
		<div id="nav">
		<ul>
		<li onclick="window.location='../index.php'"><a>Home</a></li>
		<li onclick="window.location='index.php'" class="active"><a>Campaigns</a></li>
		
		<li onclick="window.location='childwelfare.php'" class="subnav" $childwelfare><a>Street Children Rehabilitation</a></li>
		<li onclick="window.location='working_children.php'" class="subnav" $working_children><a>Working Children</a></li>
		<li onclick="window.location='community.php'" class="subnav" $community><a>Women's Empowerment</a></li>
		<li onclick="window.location='education.php'" class="subnav" $education><a>Education</a></li>
		<li onclick="window.location='daycare.php'" class="subnav" $daycare><a>Day Care Centres</a></li>
		<li onclick="window.location='health.php'" class="subnav" $health><a>Community Health Programme</a></li>
		<li onclick="window.location='rehabilitation.php'" class="subnav" $rehabilitation><a>Rehabilitation for Disabled Children</a></li>
			<li onclick="window.location='humanitarian.php'" class="subnav" $humanitarian><a>Humanitarian Relief</a></li>
			<li onclick="window.location='prevention.php'" class="subnav" $prevention><a>HIV/AIDS Prevention</a></li>
			<li onclick="window.location='justice.php'" class="subnav" $justice><a>Inculsive Education &amp; Social Justice</a></li>
		<li onclick="window.location='elderly.php'" class="subnav" $elderly><a>Aged Care</a></li>
		<li onclick="window.location='agriculture.php'" class="subnav" $agriculture><a>Agriculture</a></li>
		</ul>
		</div>
HTML;
		
		echo $navHTML;
		
	}
		
?>


						

