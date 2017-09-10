<!DOCTYPE html>
<html>
	<head>
		<title>Functions3</title>
	</head>
	<body>
		<? 
		$favoriteColor = "purple";

		function drawInfo($myColor)
		{
			$favoriteColor = $myColor;
		
			print("Your favorite color is: " . $favoriteColor . "<br>");
		}

		drawInfo("yellow");

		print( "your NEW favorite color is: " . $favoriteColor);

		//drawInfo();
		?>

	</body>
</html>