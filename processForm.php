<!DOCTYPE html>
<html>
	<head>
		<title>Processed Form</title>
	</head>
	<body>
		<?
			print("Hello, " . $_GET[ 'firstName'] . " " . $_GET[ 'lastName'] );
			print( "<br>");
			print( "Your age is " . $_GET[ 'age' ] );
		?>
		
	</body>
</html>