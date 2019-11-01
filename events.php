<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="WebDevGroup5" content="ElmDevTeam">
	<meta name="robots" content="noindex, nofollow">
	<?php include 'headerFile.html'; ?>
	<Title>Centuryelm</Title>
</head>
<body>
	<h1>Events Calendar</h1>
	<p>Check this calendar for upcoming events and specials. For more details <a href="Contact.php">Contacts</a>
	<br>We plan to put a google calendar below... But for now use this...</p>
	<!--Thinking about making a calendar filled
 	with events here-->
	<TABLE BORDER=5 CELLSPACING=5 CELLPADDING=5>
		<?php
		for($i = 0; $i < 9; $i++){
			if($i == 0){ ?>
				<TR>
					<TD COLSPAN="7" ALIGN=center><B>November 2019</B></TD>
				</TR>
		<?php } else if($i == 1){ ?>
			<TR>
				<TD COLSPAN="7" ALIGN=center><I>Centuryelm Events</I></TD>
			</TR>
		<?php } else if($i == 2){ ?>
			<TR>
				<?php
				for($j = 0; $j < 7; $j++){ ?>
					<TD ALIGN=center><?= weekday($j)?></TD>
				<?php } ?>
			</TR>
		<?php } else{ ?>
			<TR>
				<?php
				for($j = 0; $j < 7; $j++){ ?>
					<TD ALIGN=center>00</TD>
				<?php } ?>
			</TR>
		<?php }?>
	<?php } ?>
	<!-- weekday function -->
	<?php
	function weekday($day){
		switch($day){
			case 1:
				return $day = "Sunday";
				break;
			case 2:
				return $day = "Monday";
				break;
			case 3:
				return $day = "Tuesday";
				break;
			case 4:
				return $day = "Wednesday";
				break;
			case 5:
				return $day = "Thursday";
				break;
			case 6:
				return $day = "Friday";
				break;
			case 7:
				return $day = "Saturday";
				break;
			default:
				return $day = "Week";
			break;
		}
	}
	?>
</body>

<?php include 'footerFile.html'; ?>
</html>
