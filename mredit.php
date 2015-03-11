<?php

include "header.php";
include "functions.php";
checkUser();

 $conn = ConnectToDb();


if (isset($_POST['sub'])){

  


  
  if($_POST['date']=="" || $_POST['location']=="" || $_POST['opposition']=="" || $_POST['report']==""){
    echo "please fill in all necessary fields";
  }else{
 
 
  $date = $_POST['date'];
  $loc = $_POST['location'];
  $opp = $_POST['opposition'];
  $man = $_POST['man'];
  $mup = $_POST['muppet'];
  $rep = $_POST['report']; 
    
    //will retrieve all names from the profiles array 
  $idmup = mysqli_query($conn, "SELECT Name, Player_ID FROM Player_Profiles WHERE `Name`='".$mup."'");

  $idman = mysqli_query($conn, "SELECT Name, Player_ID FROM Player_Profiles WHERE `Name`='".$man."'");

  while($row=mysqli_fetch_array($idman,MYSQLI_ASSOC)){
    
    echo $row["Name"];
    echo $row["Player_ID"];
    $man=$row["Player_ID"];

  }

 while($row=mysqli_fetch_array($idmup, MYSQLI_ASSOC)){
    
    echo $row["Name"];
    echo $row["Player_ID"];
    $mup=$row["Player_ID"];

  }


    echo $man;
    echo $mup;

$sql = "INSERT INTO `Match` (`Date`, `Location`, `Opposition`,`Man_of_Match`,`Muppet_of_Match`, `Report`)
                   VALUES ('".$date."', '".$loc."', '".$opp."', '".$man."','".$mup."','".$rep."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


  }

}

?>
<div align=center>
<h1> Add a match report </h1>

<form action="" method="POST">
  Date  <input type="date" name="date"></input> <br><br>
  Location  <input type="text" name="location"></input> <br><br>
  Opposition  <input type="text" name="opposition"></input> <br><br>
  Man of The Match  <select type="text" name="man">

<?php
 $name = mysqli_query($conn, "SELECT Name FROM Player_Profiles");

  while($row=mysqli_fetch_array($name,MYSQLI_ASSOC)){
    
    echo '<option name="nameman">' . $row["Name"] .' </option>';
  }?>
  

</select> <br><br>
  Muppet of The Match  <select type="text" name="muppet">

<?php
  $name = mysqli_query($conn, "SELECT Name FROM Player_Profiles");

  while($row=mysqli_fetch_array($name,MYSQLI_ASSOC)){
    
    echo '<option name="namemup">' . $row["Name"] .' </option>';
  }?>

</select> <br><br>
  Report  <textarea  name="report" lable="" rows="20" cols="60"> Enter report details here!
</textarea><br><br>
  <input type="submit" name="sub" value="Save and Send"></input>
</form>

</div>

<?php

  include "footer.php";
/*  $_POST['names'] */
?>