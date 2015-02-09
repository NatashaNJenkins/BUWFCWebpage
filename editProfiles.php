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
	<form>
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
		<input type="submit" value="Submit">
		</form>
		
	<?php 
	
	 
	 $conn = connectToDb();
	 //Send info ro database
		//$query = "SELECT * FROM `player_profiles`";
	//	$response = mysqli_query($conn, $query);
		
		
	 include 'footer.php';
	?>
	</body>
</html>