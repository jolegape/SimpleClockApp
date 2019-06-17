<?php
	if (isset($_POST['normalTime'])) {
		$militaryTime = false;
	}
	if (isset($_POST['militaryTime'])) {
		$militaryTime = true;
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


	<title>SMC Clock Utility</title>
	<script src="js/scripts.js"></script>

</head>
<body id="clockPage" onload="digitalClock(<?php echo $militaryTime; ?>);" onclick="toggleFullscreen();">
	
	<div class="container-fluid h-100">
		<div class="row h-100 align-items-center text-center">
			<div class="col">
				<h1 class="display-1 font-weight-bold" id="clockDisplay">Text goes here</h1>
				<!-- <div id="clockDisplay">Text goes here</div> -->
			</div>
		</div>
	</div>

</body>
</html>