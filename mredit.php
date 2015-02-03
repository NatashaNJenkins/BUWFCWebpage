<html>
<head>
	<title>BUWFC</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="container">


<?php session_start();


if(!isset($_SESSION['user'])){
  header("login.html");
  exit();
}
else{
   if(isset($_POST['mredit'])){
     
     $mredit=$_POST['mredit'];

   echo 'Welcome, '.$_SESSION['user'].', to your match reports editing area.';

   }
}

?>

<form action="matchcheck.php" method="POST">
  Date:<br>
  <input type=


</div>

</body>
</html>