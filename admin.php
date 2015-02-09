<!DOCTYPE html>
<?php
	include 'header.php';
	include "functions.php";
	
	checkUser();
?>

<div>

<form action="editProfiles.php" method="POST">
	  <input type="submit" name="EDIT PROFILES" value="EDIT PROFILES"></input> <br /><br />
</form>
<form action="" method="POST">
	  <input type="submit" name="EDIT EVENTS" value="EDIT EVENTS" ></input> <br /><br />
</form>
<form action="mredit.php" method="POST">
	   <input type="submit" name="EDIT MATCH REPORTS" value="EDIT MATCH REPORTS" ></input> <br /><br />
</form>

</div>

<php
include 'footer.php';
?>


</html>