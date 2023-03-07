<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // User is not logged in, redirect to login page
    $URL="https://barkhawedsmridul.azurewebsites.net/";
    echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
    echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Barkha Webs Mridul</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<!-- <video autoplay muted loop id="myVideo">
  <source src="Untitled design.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video> -->
	<div class="container">
        <h1 class="head">Which side you are?</h1>
	<a href="MNM_WEBSITE\Boys_Page\index.php">
		<div class="circle"></div>
	</a>

	<a href="MNM_WEBSITE\Girls_Page\index.php">
		<div class="circle2"></div>
	</a>
	</div>
</body>
</html>
