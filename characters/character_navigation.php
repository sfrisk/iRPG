<?php
	// © 2009 rpgalot
	// Programed by Sarah, who is totally awesome


?>
<h2>New Character</h2>
<div id="settings">
<ul id="settinglinks">
<li><a href="basics.php"  class="<?= preg_match('/basic\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Basic Stats & Abilities</a></li>
<li><a href="skills.php" class="<?= preg_match('/skills\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Skills & Feats</a></li>
<li><a href="weapons.php" class="<?= preg_match('/weapons\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Weapons</a></li>
<li><a href="inventory.php" class="<?= preg_match('/inventory\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Inventory</a></li>
<li><a href="spells.php" class="<?= preg_match('/spells\.php/', $_SERVER["REQUEST_URI"]) ? '' : 'not' ?>selected">Spells</a></li>
</ul>
</div>