<?php 

 include 'header.php';
 
 include 'functions.php';
 
 $conn = connectToDb();
	$query = "SELECT * FROM `Match`";
	$response = mysqli_query($conn, $query);
	
	if($response){
		while($row = mysqli_fetch_array($response)){
			echo '<div class="reportBox"><center><p> Date: ' . $row['Date'] . '<br />' . 'Location: ' . $row['Location'] . '<br /> Opposition: ' . $row['Opposition'] . '<br /> Man of the match: ' . $row['Man_of_Match'] . '<br /> Muppet of match: ' . $row['Muppet_of_Match'] . '<br /> Report: ' . $row['Report'] . '<br /></p></div>';
		} 
		
	}
 
 include 'footer.php';
?>
