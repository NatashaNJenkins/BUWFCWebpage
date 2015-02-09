<!DOCTYPE html>
<html>
	<head>
	<?php
	 include 'header.php';
	 include 'functions.php';
	 ?>
	</head>
	
	<body>
	<h1> Add Player Profile </h1>
	<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	</form>
	<form action = "" method="POST">
		<br><br>
		Name:
		<input type="text" name="Name">
		<br><br>
		Date of Birth:
		<input type="date" name="DOB">
		<br><br>
		Course:
		<input type="text" name="Course">
		<br><br>
		Year of Study:
		<input type="text" name="YearOfStudy">
		<br><br>
		Years of Activity:
		<input type="number" name="YearsOfActivity">
		<br><br>
		Position: 
		<input type="radio" name="Position" value="Striker" checked>Striker
		<input type="radio" name="Position" value="Goal Keeper">Goal Keeper
		<br><br>
		Tag: 
		<input type="radio" name="Tag" value="Fresher">Fresher
		<input type="radio" name="Tag" value="Senior" checked>Senior
		<br><br>
		Hobbies:
		<input type="text" name="Hobbies">
		<br><br>
		<input type="submit" name="sub" value="Submit">
		</form>
		
	<?php 
		if (isset($_POST["sub"])){

	  $name = $_POST["Name"];
	  $dob = $_POST["DOB"];
	  $course = $_POST["Course"];
	  $yrOfStudy = $_POST["YearOfStudy"];
	  $yrsOfActivity = $_POST["YearsOfActivity"];
	  $position = $_POST["Position"];  
	  $tag = $_POST["Tag"];  
	  $hobbies = $_POST["Hobbies"];  
	  

	  $conn = connectToDb();
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO `player_profiles` (`Name`, `Birthday`, `Course`,`YearOfStudy`,`YearsOfActivity`, `Position`, `Tag`, `Hobbies`)
					   VALUES ('".$name."', '".$dob."', '".$course."', '".$yrOfStudy."','".$yrsOfActivity."','".$position."','".$tag."','".$hobbies."')";

	if ($conn->query($sql) === TRUE) {
		echo "New profile created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close(); 


	}
		
		
	 include 'footer.php';
	?>
	</body>
</html>