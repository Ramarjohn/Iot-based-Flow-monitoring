<?php
$temp = $_GET['sensor'];
$servername = "localhost";
$username = ""; //database user name
$password = ""; //database password 
$dbname = ""; // database name
// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$val = $_GET['sensor'];
$sql = "INSERT INTO flowrate (sensor) VALUES ($val)";
//$sql = "INSERT INTO `flowrate` (`id`, `sensor`, `day`) VALUES (AUTO_INCREMENT,$val, CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "Flow rate Saved Successfully!";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>