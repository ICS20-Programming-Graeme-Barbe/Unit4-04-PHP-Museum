<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8" />
	    <meta name="description" content="Museum admission" />
	    <meta name="keywords" content="immaculata, ics2o" />
	    <meta name="author" content="Graeme" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Museum admission cost</title>
	</head>
	<body>
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Museum admission cost</h1></center>';
			echo '<img src=./images/museum.jpg width="35%">';
			echo "<center><p><br>Enter your age and what day of the week it is to find out if you are eligible for student pricing or to get in for free</p";
		?>

		<!-- Textfield -->
		<form method = "post">   
			<p>Age</p><input type="number" name="age" step="1" min="0">   
			<br><br>  
			<!-- Drop down menu -->
			<label for="day" class="day">Enter the day</label>
			<select name="day">
				<option value="">Please select the day</option>
				<option value = "Monday">Monday</option>
				<option value = "Tuesday">Tuesday</option>
				<option value = "Wednesday">Wednesday</option>
				<option value = "Thursday">Thursday</option>
				<option value = "Friday">Friday</option>
				<option value = "Saturday">Saturday</option>
				<option value = "Sunday">Sunday</option>
			</select>
			<br><br>
			<input type = "submit" name = "submit" value="Submit">
		</form>
		<br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['submit'])) {  
				$userAge = $_POST['age'];   
				$day = $_POST['day'];
				
				// If statement for user cost of getting into the museum
				if (($userAge == "") or ($day == "")) {
					//Nothing was inputted
					echo "<br>You need to input your age or select the day";
				} else if ($userAge <= 5 or $userAge >= 95) {
					//User gets in for free 
					echo "<br>Congratulations, you get in for free!";
				} else if (($userAge >= 12 and $userAge <= 21) or ($day == "Tuesday" or $day == "Thursday")) {
					//User gets student pricing 
					echo "<br>Congratulations, you get student pricing";
				} else {
					//User pays full price
					echo "<br>You need to pay full price.";
				} 
			}
		?>
	</body>
</html>