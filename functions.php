<?php
session_start();
function checkUser() {
if( isset($_SESSION['buwfclogin']) ) {
echo '<div id="adminWidget">You are logged in as ' . $_SESSION['buwfclogin'] . ' !<br /> <a href="logout.php">logout</a></div>';
}
else
echo header('Location: login.php');
}
function connectToDb() {
//DB connection data ++TO ENCAPSULATE
$servername = "localhost";
$username = "nmicic";
$password = "pa55word";
$db = "nmicic";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_errno>0) {
die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
return $conn;
}
?>