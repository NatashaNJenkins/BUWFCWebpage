<!DOCTYPE html>
<html>
	<head>
	<?php
	 include 'header.php';
	 include 'functions.php';

	 ?>
	</head>
	
	<body>
	<div align=center>
	<h1> Add Player Profile </h1>
	<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	<form>
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
	   </div>
	<?php 
		if (isset($_POST["sub"])){

		  $conn = connectToDb();

		               $name = clean($conn,$_POST['Name']);
		               $dob = clean($conn,$_POST['DOB']);
			       $course = clean($conn,$_POST['Course']);
			       $yrOfStudy = clean($conn,$_POST['YearOfStudy']);
			       $yrsOfActivity =clean($conn,$_POST['YearsOfActivity']);
			       $position = clean($conn,$_POST['Position']);  
			       $tag =clean($conn,$_POST['Tag']);   
			       $hobbies = clean($conn,$_POST['Hobbies']);  



$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	  
		  if($_POST['Name']=="" || $_POST['DOB']=="" || $_POST['Course']=="" || $_POST['YearOfStudy']=="" || $_POST['Hobbies']=="" ||empty($_FILES['filesToUpload']['name'])){
    echo "please fill in all necessary fields";
  }else{

	 
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	//Make reference to path for image in database


// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }



	$sql = "INSERT INTO `Player_Profiles` (`Name`, `Birthday`, `Course`,`YearOfStudy`,`YearsOfActivity`, `Position`, `Tag`, `Hobbies`,`ImageName`)
					   VALUES ('".$name."', '".$dob."', '".$course."', '".$yrOfStudy."','".$yrsOfActivity."','".$position."','".$tag."','".$hobbies."','".$target_file."')";

	if ($conn->query($sql) === TRUE) {
		echo "New profile created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close(); 
	  }

	}
		
		
	 include 'footer.php';
	?>
	</body>
</html>