<?php
	include("sessionHandling.php");
	include("queries.php");

	$isPasswordValid = false;
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["username"];
		$password = $_POST["psw"];
		echo "sup";
		$isPasswordValid = validatePassword($username, $password);
		if($isPasswordValid) {
		    echo "sup2";
			$_SESSION["username"] = $username;
			redirect("homePage.php", "Login Successful!");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Web Dev Team">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="homePageCSS.css">
	<link rel="stylesheet" href="headerCSS.css">
</head>

<body>
    <?php include 'headerFile.php' ?>
	<h1>About Us</h1>
	
	<p class="historyParagraph">Century Elm Supper club is proudly owned and operated by Betsy and her
	family. She has a lot of history with this establishment as it waas once 
	owned by her great-grandparents, Art & Lou Lenz. Vincent and Glory DeCleene,
	Betsy's grandparents, ran the bar. The whole family lived upstairs through
	the late 40's and early 50's. After Century Elm was purchased by Ken Loehrke
	in the 70's, Betsy's uncle Bill DeCleene bartended here for many years. Betsy's
	family has gathered here almost weekly throughout her life. It seemed like part
	of her destiny that the Century Elm would once again be in her family. She
	wished she could share this with her grandparents and her uncle, but knows they
	guide her along the way. We hope you enjoy your visit and your food here.</p>
	
	<p id="famLine">We want you to feel like family as well!</p>	
	
	
</body>
<?php include 'footerFile.html' ?>