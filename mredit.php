<?php

include "header.php";
include "functions.php";
checkUser();

if (isset($_POST['sub'])){

  $date = $_POST['date'];
  $loc = $_POST['location'];
  $opp = $_POST['opposition'];
  $man = $_POST['man'];
  $mup = $_POST['muppet'];
  $rep = $_POST['report'];  
  
  if($_POST['date']=="" || $_POST['location']=="" || $_POST['opposition']=="" || $_POST['report']){
    echo "please fill in all necessary fields";
  }else{
 

$sql = "INSERT INTO `Match` (`Date`, `Location`, `Opposition`,`Man_of_Match`,`Muppet_of_Match`, `Report`)
                   VALUES ('".$date."', '".$loc."', '".$opp."', '".$man."','".$mup."','".$rep."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
  }

}

?>

<form action="" method="POST">
  Date  <input type="date" name="date"></input> <br><br>
  Location  <input type="text" name="location"></input> <br><br>
  Opposition  <input type="text" name="opposition"></input> <br><br>
  Man of The Match  <input type="text" name="man"></input> <br><br>
  Muppet of The Match  <input type="text" name="muppet"></input> <br><br>
  Report  <textarea  name="report" lable="" rows="20" cols="60"> Enter report details here!
</textarea><br><br>
  <input type="submit" name="sub" value="Save and Send"></input>
</form>

<?php

  include "footer.php";

?>