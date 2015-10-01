<html>
	 <head>
		<title>TIS2151</title>
		<link rel="icon" type="image/png" href="../image/pagecon.png">
		<meta charset=”utf-8”>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.css">
	</head>
 <body>

 
<?php
$servername = "localhost";
$username = "root";
$dbname = "my_db";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *FROM my_guests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  FirstName  : " . $row["FirstName"]. "  LastName  : " . $row["Lastname"]. "  Age  : " . $row["Age"]."  Affiliation  : " . $row["Affiliation"]."    Email  : " . $row["Email"]. "<br>". "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


 ?> 
 </body>
</html>
