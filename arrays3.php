<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<?

		$myHeroes = array("afghan" => array( "name" => "Elia", "age" => 34), "japanese" => array( "name" => "Hanzo", "age" => 20), "canadian" => array( "name" => "Wolverine", "age" => 34), "amazonian" => array( "name" => "Wonder Woman", "age" => 28, "OtherQuality" => "God of Peace")
		);

		//print( $myHeroes["amazonian"] ); 
		print( "<br>"); 

		foreach ( $myHeroes as $currentHero) {
			# code...
			//print( $currentHero["OtherQuality"]);
			print( $currentHero["name"] ); 
			print( "<br>");
			print( $currentHero["age"]);
			print("<br>");


			if( $myHeroes["OtherQuality"] != "")
			{
				print( "This person also is a god:");
				print( $currentHero["OtherQuality"]);
				print("<br>");
			}
		}

	?>

</body>
</html>