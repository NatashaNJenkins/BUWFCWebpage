<html>

 <head>
	<title>BUWFC</title>
	<link rel="stylesheet" href="styles.css">
 </head>
	
 <body>
	<div id="container">


 

<?php

   session_start();

        $servername = "localhost";
	$username = "nmicic";
	$password = "pa55word";
	$db = "nmicic";

	$tablename = "users";

        $user = $_POST['user'];
	$pass = $_POST['pass']; 

        // Create connection 
	$conn = new mysqli($servername, $username, $password, $db);
		
	// Check connection
	if ($conn->connect_errno>0) {
	    die("Connection failed: " . $conn->connect_error);
	}
// echo "Connected successful";


//matching entered data with that in the data base, 



if(isset($_POST['submit'])){
	
  $query = "select username, password from users where username='$user' and password='$pass' ";
  $response = mysqli_query($conn, $query) or trigger_error(mysqli_error().$query);

    $row = mysqli_fetch_assoc($response);
  
   $_SESSION['user'] = $_POST['user'];
  

  
   if($row != null){

      echo "Welcome " .$_SESSION['user']. " to the BUWFC admin page";
	
 

   } else {
     
     //This part redirects to the specified page
     header('Location: login.html');

   }

  mysqli_close($conn);

}

?>

<form >

   <form action="mredit.php" method="POST">
   Match Reports:<br>
   <input type="submit" name="mredit" value="Go!">
<br>
   </form>

</div>

</body>
</html>