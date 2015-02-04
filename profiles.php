<?php 

 include 'header.php';
 include 'functions.php';
 
 $conn = connectToDb();
	$query = "SELECT * FROM `player_profiles`";
	$response = mysqli_query($conn, $query);
	
	if($response)
		while($row = mysqli_fetch_array($response)){
			echo '<div class="profileBox"><center> <p> <div class="placeHolderPic"></div> <br />' . $row['Name'] . '<br />' . $row['Birthday'] . '<br />' . $row['Course'] . '<br />' . $row['YearOfStudy'] . '<br />' . $row['YearsOfActivity'] . '<br />' . $row['Position'] . '<br />' . $row['Tag'] . '<br />' . $row['Hobbies'] . '<br />' . '</p></center> </div>';
		}
 include 'footer.php';
?>
