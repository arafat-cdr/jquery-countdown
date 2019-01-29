<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/jQuery.countdownTimer.css" />
</head>
<body>

	<span id="future_date"></span>



	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/jQuery.countdownTimer.js"></script>
	

	<script>

		$(document).ready(function(){

			// init

			$('#future_date').countdowntimer({
			    dateAndTime : "2019/01/29 17:45:00",
			    labelsFormat : true,
			    //displayFormat : "YODHMS",
			    displayFormat : "ODHMS",
			    timeUp : timeIsUp,
			});

			function timeIsUp(){

			  alert('You are late');
			}
		});
	</script>


</body>
</html>