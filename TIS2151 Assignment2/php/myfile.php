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
 //==========================
 // connect to mysql
 	$link = mysql_connect("localhost", "root", "");
if(!$link){	
	die("could not connect :".mysql_error());
	}
else echo("connected");

//make my_db the current database0

$db_selected = mysql_select_db("my_db");

//=================================
if(!$db_selected){
//if we couldn't, then it either doesnt exist, or we cant see it.
$sql ="create database my_db";
if(mysql_query($sql)){
	echo "database my_db created successfully.<br>";
	$db_selected = mysql_select_db("my_db");}
else{

		echo "Error creating database" .mysql_error()."\n";}
	}
	
//sql for creating table
$sql = "create table my_guests (
FirstName VARCHAR(30) NOT NULL,
Lastname VARCHAR(30) NOT NULL,
 Age INT(2),
 Affiliation VARCHAR(30) NOT NULL,
 Email VARCHAR(30) NOT NULL
 
)";

if(mysql_query($sql)){
	echo "Table my_guests created successfully.<br>";
}else{
	echo "Error creating table: ".mysql_error(). "<br>";
}

 ?> 
 </body>
</html>

