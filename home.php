<?php session_start();

foreach(glob('includes/*.php') as $class_filename) {
     require_once($class_filename);
}

$user = $_SESSION['user'];

if(empty($user))
{
	header('Location: index.php');
}

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


		Hello <?= $user['username']; ?>, your email is: <?= $user['email']; ?>
		<a href="logout.php">Logout<a>
	</body>
</html>