<?php
// header.INC.php

session_start();
include_once "dbconnect.INC.php";

if(isset($_SESSION['user'])){
	$user = $_SESSION['user'];
	$loggedIn = TRUE;
	$docTitle = " ($user)";
} else $loggedIn = false;

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="author" content="Brandon Walker, iT_Professional">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="robots" content="index,follow,archive"/>
<meta name="Keywords" content="Poker Hand Tracker, Holdem Hands, Texas Holdem Hands, Poker Forum, Holdem Forum, Holdem Community, Poker Community" />
<meta name="Description" content="Poker Hand Discussion and Tracking. Important for new and Advanced Players. $docTitle" />

<link rel="stylesheet" href="../css/generalStyles.css" type="text/css" />

<title>$docTitle</title>

</head>
<body>
<header>

<?php
if($loggedIn){
echo <<<_END
	<nav id="mainNav">
		<ul>
			<li><a href="../newHand.php">New Hand</a></li>
			<li><a href="../history.php">Hand History</a></li>
			<li><a href="../home.php">Home</a></li>
			<li><a href="../notifications.php">Notificaitons</a></li>
			<li><a href="../userSettings.php">Settings</a></li>
			<li><a href="../logout.php">Log Out</a></li>
		</ul>
	</nav>
_END;
} else {
echo <<<_END
	<nav id="mainNav">
		<ul>
			<li><a href="../about.php">About</a></li>
			<li><a href="../login.php">Login</a></li>
			<li><a href="../create.php">Create Account</a></li>
		</ul>
	</nav>
_END;
}
?>