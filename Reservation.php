<?php
	//include("db.php");
	include("queries.php");
	include("sessionHandling.php");
	//database stuff here
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$myData = [];
		$myData["First"] = htmlspecialchars($_POST["First"]);
		$myData["Last"] = htmlspecialchars($_POST["Last"]);
		$myData["Time"] = htmlspecialchars($_POST["Time"]);
		$myData["Phone"] = htmlspecialchars($_POST["Phone"]);
		$myData["NumbGuest"] = htmlspecialchars($_POST["NumbGuest"]);
		$myData["Date"] = htmlspecialchars($_POST["Date"]);
		$myData["Special"] = htmlspecialchars($_POST["Special"]);
		//combine first and last name
		$myData["Fullname"] = $myData["First"] . " " . $myData["Last"];
		//check how many people and time
		//call here
		$success = reserve($myData);
	}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="Century Elm Dev" content="WebDevProject">
	<meta name="robots" content="noindex, nofollow">
	<?php include 'headerFile.php'; ?>
	<link rel="stylesheet" type="text/css" href="reservation.css">
	<link rel="stylesheet" href="footerCSS.css">
	<link rel="stylesheet" href="headerCSS.css">
	<Title>Centuryelm</Title>
</head>
<body>
	<h1>Reservation</h1>
	<!-- This section is the title -->

	<!-- This section contains users input -->
	<h2 id="guide">Please fill the form below accurately to enable us to serve you better!</h2>
	<section class="centerMe">

		<form action="Reservation.php" method="POST">
			<div>
				<!-- Name -->
				<label for="First">FullName</label>
				<input type="text" name="First" placeholder="First" id="First" required>
				<label for="Last"></label>
				<input type="text" name="Last" placeholder="Last" id="Last" required>
			</div>
			<div>
				<!-- Phone -->
				<label for="Phone">Phone</label>
				<input type="text" name="Phone" placeholder="123-456-7890" id="Phone" required>
				</div>
			<div>
				<!-- Number of Guest -->
				<label for="NumbGuest">Number of Guests</label>
				<input type="text" name="NumbGuest" placeholder="" id="NumbGuest">
			</div>
			<div>
				<!-- Date -->
				<!-- Possibly add a drop down calendar -->
				<label for="Date">Date</label>
				<input type="text" name="Date" placeholder="12/34/5678" id="Date" required>
			</div>
			<div>
				<!-- Time -->
				<label for="Time">Time</label>
				<select name="Time" id="Time">
					<option value="4">4PM</option>
					<option value="5">5PM</option>
					<option value="6">6PM</option>
					<option value="7">7PM</option>
					<option value="8">8PM</option>
					<option value="9">9PM</option>
					<option value="10">10PM</option>
				</select>
			</div>
			<div>
				<!-- Any Special Request -->
				<label for="Special">Any Special Request</label>
				<!-- In CSS make this box below and pretty -->
				<textarea name="Special" id="Special" placeholder="Slip a 20,000$ ring in a fancy wine bottle for me to propose..." rows="4" cols="50"></textarea>
			</div>
			<div>
				<!-- Submit -->
				<input type="submit" name="submit">
			</div>
		</form>
	</section>

</body>

<?php include 'footerFile.html'; ?>

</html>
