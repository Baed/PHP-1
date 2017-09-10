<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<?

		$myHeroes = 
		array("afghan" => array( "name" => "Elia", "age" => 34), 
			"japanese" => array( "name" => "Hanzo", "age" => 20), 
			"canadian" => array( "name" => "Wolverine", "age" => 34), 
			"amazonian" => array( "name" => "Wonder Woman", "age" => 28, "OtherQuality" => "Goddess of Love and War")
		);

		//print( $myHeroes["amazonian"] ); 
		//print( "<br>"); 

		foreach ( $myHeroes as $currentHero) {
			//print( $currentHero["OtherQuality"]);
			print( $currentHero["name"] ); 
			print( "<br>");
			print( $currentHero["age"]);
			print("<br>");


			if( $currentHero["OtherQuality"] != "")
			{

				print( "This person also is a god:");
				print( "<br>");
				print( $currentHero["OtherQuality"]);
				print("<br>");
			}
		}

	?>

</body>
</html>