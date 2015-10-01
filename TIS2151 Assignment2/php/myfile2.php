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
 
 // connect to mysql
 	$link = mysql_connect("localhost", "root", "");
if(!$link){	
	

	die("could not connect :".mysql_error());
	}
else echo("connected");

//make my_db the current database0

$db_selected = mysql_select_db("my_db");
$sql="INSERT INTO my_guests (firstname,lastname,age,affiliation,email) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]','$_POST[affiliation]','$_POST[email]')";

if(mysql_query($sql)){

	echo "Data entered successfully.<br>";
	header("Location:query.php"); 
	
}else{
	echo "Error enter data table: ".mysql_error(). "<br>";
}
mysql_close($link);
 ?> 
 </body>
</html>
