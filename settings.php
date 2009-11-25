<?php
	// © 2009 rpgalot
	// Programed by Sarah, who is totally awesome

	foreach(glob('includes/*.php') as $class_filename) 
	{
	     require_once($class_filename);
	}

?>

<ul id="settinglinks">
<li><a href="account.php">Account</a></li>
<li><a href="stats.php">Stats</a></li>
<li>About You</li>
</ul>