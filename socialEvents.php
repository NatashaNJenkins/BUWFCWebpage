<?php 

 include 'header.php';
 include 'functions.php';
 
 $conn = connectToDb();
	$query = "SELECT * FROM `social_events`";
	$response = mysqli_query($conn, $query);
	
	if($response){
		while($row = mysqli_fetch_array($response)){
			echo '<div class="event"><p> <a class="evTitle"> ' . $row['Name'] . ' </a> <br /> Taking place on ' . $row['Date'] . ' <br /> At ' . $row['Location'] . '<br /> From ' . $row['Start_Time'] . ' to ' . $row['End_Time'] . '<br /> Notes: ' .  $row['Details'] . '</p></div>';
		} 
		
	}
 
 include 'footer.php';
?>
