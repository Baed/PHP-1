<!DOCTYPE html>
<html>
<head>
	<title>Switchcase</title>
</head>
<body>
	
	<?
	/*
		$myAge = 3;
		//single = sign  compares if myAge is equal to 21

		if( $myAge = 1)
		{
			print("1 yr olds go in room 111");
		}
		else if( $myAge = 2)
		{
			print("2 yr olds go in room B5");
		}
		else if( $myAge = 3)
		{
			print("3 yr olds go in room 76");
		}
		else if( $myAge = 4)
		{
			print("4 yr olds go upstairs");
		}
		else if( $myAge = 5)
		{
			print("5 yr olds are in the green office");
		}
		else
		{
			print("Sorry that kid is too old");
		}
	*/
		$myAge = 5;
		switch ($myAge)
		{
			case 1: print("1 yr olds go in room 111");
				break;
			case 2: print("2 yr olds go in room B5");
				break;
			case 3: print("3 yr olds go in room 76");
				break;
			case 4: print("4 yr olds go upstairs");
				break;
			case 5: print("5 yr olds are in the green office");
				break;														
		}
	?>
	<br>
	<?
		$hero = "supErman";
		$formattedHero = strtolower($hero);
		switch ($formattedHero)
		{
			case "wolverine": print("Logan");
				break;
			case "superman": /*print("Clark");
				break;*/
			case "wonder woman": 
				if($formmatedHero == "superman")
					{
						print("Diana");
					}
				print("{$formattedHero} is stronger");
				break;
			default: print("Not a hero");
				break;												
		}
	
?>	

</body>
</html>