<?php
include("includes/config.php");
//LOGOUT
// session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedin = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Welcome to Music Player</title>
</head>
<body>

	<div id="nowPlayingBarContainer">
		<div id="nowPlayingBar">
			
			<div id="nowPlayingLeft">
			</div>

			<div id="nowPlayingCenter">
			</div>

			<div id="nowPlayingRight">
			</div>


		</div>
	</div>


</body>
</html>