<html>
<?php 
 include 'header.php';
 include 'functions.php';
 

 $conn = connectToDb();
	$query = "SELECT * FROM `player_profiles`";
	$response = mysqli_query($conn, $query);
	
	if($response){
		while($row = mysqli_fetch_array($response)){
			echo '<div class="profileBox"><center> <p> 
			<div class="placeHolderPic"><img src="img/eiffel.jpg" alt="" /></div> <br />' 
			.'Name: '. $row['Name'] . '<br />' .'DOB: '. $row['Birthday'] 
			. '<br />' .'Course: '. $row['Course'] . '<br />' .'Year of Study: '. $row['YearOfStudy'] . '<br />' . 'Years of Activity: '.$row['YearsOfActivity'] . 
			'<br />' . 'Position: '.$row['Position'] . '<br />' .'Tag: '. $row['Tag'] . '<br />' .'Hobbies: '. $row['Hobbies'] . '<br />' . '</p></center> </div>';
			
		} 
		
	}
 include 'footer.php';
?>
</html>
