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

	$link = mysql_connect("localhost", "root", "");
if(!$link){	
	die("could not connect :".mysql_error());
	}
else echo("connected");

$db_selected = mysql_select_db("my_db");

 $view ="select * from my_guest";
	
mysql_close($link);

	print(gettype($view));

?>
	</body>
</html>