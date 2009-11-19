<!--
#
#	Test for display user profile (without session)
#	Wednesday Nov 18, 2009
#	Sarah Frisk
#
-->


<?php
include("functions_user.php");
$user_id = "1";
$username = get_username($user_id);
$user = get_profile($user_id);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>User Profile</title>
</head>
<body>

<h1>
	<?= $username; ?>
</h1>


Hello <?= $user['username']; ?> @ <?echo $user['email']; ?>
</body>
</html>