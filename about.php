<?php session_start();

foreach(glob('includes/*.php') as $class_filename) 
{
     require_once($class_filename);
}

$user = new user($_SESSION['user']);

include('header.php');
?>

<h1>About</h1>

<p>The creator of rpgalot, a 22 year old CS/English major who is known 
for being quite forgetful, found herself often invited for a D&D session
only to discover that she left her character sheet back in her dorm room
over an hour away.</p>

<p>That's where rpgalot came in.  No longer do gamers have to worry about having
all their character sheets on hand, or wondering which character goes to
which game.  rpgalot is an online database to store all your charactersheets,
which you can later print off when it's time to game, then update your new stats
to the database. </p>


<? include('footer.php'); ?>