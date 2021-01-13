<html>
<head>
<meta http-equiv="refresh" content="5">
</head> 
<body>
<?php
$servername = "localhost";
$username = ""; database user name
$password = ""; database password
$dbname = "";   database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//EXPLAIN  ORDER by id DESC LIMIT 33
$sql= " SELECT * FROM `flowrate`";
$sqldata=mysqli_query($conn,$sql);
//$result = $conn->query($sql);
echo "<table border='1'><th>ID</th><th>FLOW</th><th>DATE TIME</th>";
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
//if ($result->num_rows > 0) {
    // output data of each row
	//echo "<table border='1'><th>ID</th><th>FLOW</th><th>DATE TIME</th>";
   // while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['sensor']."</td>";
		echo "<td>".$row['day']."</td>";
		echo "</tr>";
   // }
}
	echo "</table>";
//} else {
   // echo "0 results";
//}
$conn->close();
?>
</body>
</html>
