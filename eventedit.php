<?php

include "header.php";
include "functions.php";
checkUser();

if(isset($_POST['sub'])){


$name = $_POST['name'];
  $date = $_POST['date'];
  $loc = $_POST['loc'];
  $sta = $_POST['start'];
  $fin = $_POST['fin'];
  $det = $_POST['det'];


  if($_POST['name']=="" || $_POST['date']=="" || $_POST['loc']=="" || $_POST['start']=="" || $_POST['det']==""){
    echo "please fill in all the necessary fields";
  }

else{
  $conn = connectToDb();

$sql = "INSERT INTO `Social_Events` (`Name`, `Date`, `Location`,`Start_Time`,`End_Time`, `Details`)
                   VALUES ('".$name."', '".$date."', '".$loc."', '".$sta."','".$fin."','".$det."')";


if ($conn->query($sql) === TRUE) {
    echo "New record event created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

  }

}


?>


<div align=center>
<h1> Add New Events</h1>
<form action="" method="POST">
 <br></br>
  Name:
  <input type="text" name="name"></input> <br><br>
  Date:  
  <input type="date" name="date"></input> <br><br>
  Location: 
  <input type="text" name="loc"></input> <br><br>
  Starts:  
  <input type="time" name="start"></input> <br><br>
  Finishes:  
  <input type="time" name="fin"></input> <br><br>
  Details: 
  <textarea  name="det" rows="20" cols="60"></textarea><br><br>
  <input type="submit" name="sub" value="Save and Send"></input>
</form>

</div>

<?php
?>