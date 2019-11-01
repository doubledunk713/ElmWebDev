<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="Century Elm Dev" content="WebDevProject">
	<meta name="robots" content="noindex, nofollow">
	<?php include 'headerFile.html'; ?>
	<Title>Centuryelm</Title>
</head>
<body>
	<section>
		<!-- This section is the title -->
		<h1>Reservation Form</h1>
		Please fill the form below accurately to enable us to serve you better!
	</section>
	<!-- This section contains users input -->
	<form action="Reservation.php" method="POST">
		<div>
			<!-- Name -->
			<label for="First">FullName</label>
			<input type="text" name="FullName" placeholder="First" id="First">
			<label for="Last"></label>
			<input type="text" name="Last" placeholder="Last" id="Last">
		</div>
		<div>
			<!-- Email -->
			<label for="Email">Email</label>
			<input type="text" name="Email" placeholder="Example@email.com" id="Email">
		</div>
		<div>
			<!-- Phone -->
			<label for="Phone">Phone</label>
			<input type="text" name="Phone" placeholder="123-456-7890" id="Phone">
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
			<input type="text" name="Date" placeholder="12/34/5678" id="Date">
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
	<a href="http://validator.w3.org/check/referer">Validate Me</a>
</body>

<?php include 'footerFile.html'; ?>

</html>
