<?php 

 include 'header.php';
 include 'functions.php';
 
 $conn = connectToDb();
	$query = "SELECT * FROM `Social_Events`";
	$response = mysqli_query($conn, $query);
	
	if($response){
		while($row = mysqli_fetch_array($response)){
			echo '<div class="eventBox"><center><p> <a class="evTitle"> ' . $row['Name'] . ' </a> <br /> Taking place on ' . $row['Date'] . ' <br /> At ' . $row['Location'] . '<br /> From ' . $row['Start_Time'] . ' to ' . $row['End_Time'] . '<br /> Notes: ' .  $row['Details'] . '</p></div>';
		} 
		
	}
 
 include 'footer.php';
?>
