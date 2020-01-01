<?php
    include("sessionHandling.php");
	/*
	//get into database and get events
	include("db.php");
	include("queries.php");
	
	//get events by calling function in queries
	$myEvents = getEvents();
	if(isset($myEvents)){
		
	} else{

	}*/
	
?>


<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="WebDevGroup5" content="ElmDevTeam">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" type="text/css" href="calendar.css">
	<link rel="stylesheet" href="footerCSS.css">
	<link rel="stylesheet" href="headerCSS.css">
	<script src="events.js"></script>
	<Title>Centuryelm</Title>
</head>
<body>
	<?php include 'headerFile.php'; ?>
	
	<h1>Centuryelm Events Calendar</h1>
	Check this calendar for upcoming events and specials. For more details <a href="Contact.php">Contacts</a>
	<!--Thinking about making a calendar filled
 	with events here -->
	<?= printCal() ?>
	
	
	<!-- weekday function that turns a number into a weekday and vice versa-->
	<?php
	function weekday($day){
		switch($day){
			case 0:
				return $day = "Sunday";
				break;
			case 1:
				return $day = "Monday";
				break;
			case 2:
				return $day = "Tuesday";
				break;
			case 3:
				return $day = "Wednesday";
				break;
			case 4:
				return $day = "Thursday";
				break;
			case 5:
				return $day = "Friday";
				break;
			case 6:
				return $day = "Saturday";
				break;
			case "Sunday":
				return 0;
				break;
			case "Monday":
				return 1;
				break;
			case "Tuesday":
				return 2;
				break;
			case "Wednesday":
				return 3;
				break;
			case "Thursday":
				return 4;
				break;
			case "Friday":
				return 5;
				break;
			case "Saturday":
				return 6;
				break;
			default:
				return $day = "Week";
				break;
		}
	}
	?>
	
	<!-- printCalendar -->
	<?php
	function printCal(){
		date_default_timezone_set("America/Chicago");
		//use the first day to make the calendar
		$firstDay = date("m/1/Y");
		//Convert the date string into a unix timestamp.
		$unixTimestamp = strtotime($firstDay);
		//Get the day of the week using my PHP's date function.
		$firstWeekDay = date("l", $unixTimestamp);
		$firstWeekDay = weekday($firstWeekDay);
		//this will be use later to make the calendar
        $isFirst = true;
        //last day to know when month ends
        $lastDay = new DateTime('now');
        $lastDay->modify('last day of this month');
        $lastDay = $lastDay->format('d');

		//collect these info to make calendar dynamic
		$day = date('d');
		$month = date('M');
		$year = date('Y');
		$dayCount = 1;?>

        <!-- Make Calendar -->
        <div>
            <table class="calendar">
                <caption><?= $month?> <?= $year?></caption>
                <tr>
                    <?php for($j = 0; $j < 7; $j++){ ?>
                        <td><?= weekday($j)?></td>
                    <?php } ?>
                </tr>
                <?php for($i = 0; $i < 6; $i++){ ?>
                    <tr id="tableRow">
                    <?php for($j = 0; $j < 7; $j++){
                        //assign the days
                        if($j == $firstWeekDay && $isFirst){ ?>
							<!-- make the td clickable-->
                            <td id="<?= $dayCount ?>"><?= $dayCount++;?></td>
                            <?php $isFirst = false;
                        } else if($dayCount > intVal($lastDay)){ ?>
                            <td> </td>
                        <?php } else if(!$isFirst){ ?>
                            <td id="<?= $dayCount ?>"> <?=$dayCount++;?></td>
                        <?php } else{ ?>
                            <td> </td>
                        <?php }
                    } ?>
                    </tr>
                <?php }?>
            </table>
        </div>
		
	<?php }?>
	<!-- This only show when admin wants to update calendar-->
	<form action="events.php" method="POST">
		<div class="hideMe">
			<label for="eventName">Add Event</label>
				<textarea name="eventName" id="eventName" maxlength="100"></textarea>
			<input type="submit" name="submit">
        </div>
	</form>
</body>

<?php include 'footerFile.html'; ?>
</html>