<?php
	$clockTitle = $_POST["clockTitle"];
	if (isset($_POST['normalTime'])) {
		$militaryTime = false;
		$startTime = date("g:i a", strtotime($_POST["startTime"]));
		$warn45 = date("g:i a", strtotime($_POST["45minWarning"]));
		$warn30 = date("g:i a", strtotime($_POST["30minWarning"]));
		$warn10 = date("g:i a", strtotime($_POST["10minWarning"]));
		$finishTime = date("g:i a", strtotime($_POST["finishTime"]));
	}
	if (isset($_POST['militaryTime'])) {
		$militaryTime = true;
		$startTime = $_POST["startTime"];
		$warn45 = $_POST["45minWarning"];
		$warn30 = $_POST["30minWarning"];
		$warn10 = $_POST["10minWarning"];
		$finishTime = $_POST["finishTime"];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
	
	<!-- JS -->
	<script src="js/scripts.js"></script>

	<title>SMC Clock Utility</title>

</head>
<body id="clockPage" onload="digitalClock(<?php echo $militaryTime; ?>);" onclick="toggleFullscreen();">
	
	<div class="container-fluid h-100">
		<div class="row h-100 align-items-center">
			<div class="col-6" id="clockText">
				<p class="text-center py-4 title"><?php echo $clockTitle; ?></p>
				<div class="container">
					<div class="row py-2">
						<div class="col-7 h1 display-4 time-heading">Start Time:</div>
						<div class="col-5 h1 display-4 text-right time"><?php echo $startTime; ?></div>
					</div>
					
					<?php if ("" != trim($_POST["45minWarning"])): ?>
					<div class="row py-2">
						<div class="col-7 h1 display-4 time-heading">45min Warning:</div>
						<div class="col-5 h1 display-4 text-right time"><?php echo $warn45; ?></div>
					</div>
					<?php endif; ?>

					<?php if ("" != trim($_POST["30minWarning"])): ?>
					<div class="row py-2">
						<div class="col-7 h1 display-4 time-heading">30min Warning:</div>
						<div class="col-5 h1 display-4 text-right time"><?php echo $warn30; ?></div>
					</div>
					<?php endif; ?>

					<?php if ("" != trim($_POST["10minWarning"])): ?>
					<div class="row py-2">
						<div class="col-7 h1 display-4 time-heading">10min Warning:</div>
						<div class="col-5 h1 display-4 text-right time"><?php echo $warn10; ?></div>
					</div>
					<?php endif; ?>

					<div class="row py-2">
						<div class="col-7 h1 display-4 time-heading">Finish Time:</div>
						<div class="col-5 h1 display-4 text-right time"><?php echo $finishTime; ?></div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<h4 class="display-4 text-center font-weight-bolder" id="clockDisplay"></h4>
			</div>
		</div>
	</div>

</body>
</html>