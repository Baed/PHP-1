<!DOCTYPE html>
<html>
	<head>
		<title>Greeting</title>
	</head>
	<body>
		Hello, <br />
		<? 	
			print "<strong>";
			print $_GET["firstname"]; 
			print "<br />";
		 	print $_GET["lastname"]; 
		 	print "</strong>";
		?>
		<? 	
			print "<br />".
			$_GET["firstname"].
			"<br />".
		 	 $_GET["lastname"];
		?>
	</body>
</html>