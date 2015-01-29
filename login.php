<html>

 <head>
	<title>BUWFC</title>
	<link rel="stylesheet" href="styles.css">
 </head>
	
 <body>
	<div id="container">
<?php

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

   if($response){

    while($row = mysqli_fetch_array($response)){
      
      echo "Welcome " .$row['username']. " to the BUWFC admin page";
	
    }

   } else {

    echo 'Either your username or password is wrong';

   }

  mysqli_close($conn);

}

?>

<form >


</div>

</body>
</html>