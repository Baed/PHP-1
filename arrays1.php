<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<?

		$myHeroes = array("Elia", "Hanzo", "Wolverine", "Wonder Woman", "Hulk", "Thor");
		/*
		print( $myHeroes[0] );
		print( $myHeroes[1] );
		print( $myHeroes[2] );
		print( $myHeroes[3] );
		print( $myHeroes[4] );
		print( $myHeroes[5] );
		*/
		//print( $myHeroes[6] ); no effect

		for( $i =0; $i < 6; $i++)
		{
			print( $myHeroes[ $i ]);
			print("<br>");
		}
		for( $i =0; $i < count( $myHeroes); $i++)
		{
			print("<strong>");
			print( $myHeroes[ $i ]);
			print("</strong>");
			//adding <br> outputs new lines in the page output while \n outputs the html file with new lines
			print("<br>\n");
		}
		print("\n");
		for( $i =0; $i < count( $myHeroes); $i++)
		{
			print("<u><em>");
			print( $myHeroes[ $i ]);
			print("</em></u>");
			print("<br>");

		}

		foreach ($myHeroes as $m) 
		{
			# code...
			print( $m );
			print( "<br>");
		}

	?>

</body>
</html>