<?php
	// © 2009 rpgalot
	// Programed by Sarah, who is totally awesome

	foreach(glob('includes/*.php') as $class_filename) 
	{
	     require_once($class_filename);
	}

?>
<h2><img src="../<?=$user->avatar?>" alt="User Avatar" width="50px" />  <?=$user->username;?>'s Settings</h2>
<div id="settings">
<ul id="settinglinks">
<li><a href="account.php"  class="<?= preg_match('/account\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Account</a></li>
<li><a href="stats.php" class="<?= preg_match('/stats\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Stats</a></li>
<li><a href="avatar.php" class="<?= preg_match('/avatar\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Avatar</a></li>
</ul>
</div>
