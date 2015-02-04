<?php
	include 'header.php';
	include "functions.php";

		$conn = connectToDb();


//matching entered data with that in the data base, 

if(isset($_POST['username']) && $_POST['password']){
	
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
  $query = "SELECT `username`, `password` FROM `users` WHERE `username` = '" . $user . "' AND `password` = '" . $pass . "' ";
  $response = mysqli_query($conn, $query) or trigger_error(mysqli_error().$query);

   if($response){

    while($row = mysqli_fetch_array($response)){
      echo "Welcome " .$row['username']. " to the BUWFC admin page";
	  $_SESSION['buwfclogin'] = $row['username'];		//Create session 
	  header('Location: admin.php');
    }

   } else {

    echo 'Either your username or password is wrong';

   }

  mysqli_close($conn);

}	else {
	?>
	<form action="" method="POST">
	Username: <input type="text" name="username"></input> <br /><br />
	Password: <input type="password" name="password"></input> <br /><br />
	<input type='submit'></input>  <br />
	</form>
	<?php
	}
	include 'footer.php';
?>
