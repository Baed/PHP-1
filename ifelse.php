<!DOCTYPE html>
<html>
<head>
	<title>If Else</title>
</head>
<body>
	<?
		$myAge = 17;

		if( $myAge < 21)
		{
			if( $myAge <= 5)
			{
				print "Kids 5 and under are free";
			}
			if( $myAge >= 13 && $myAge <= 19 )
			{
				print "You are allowed in the teen center only.";
			}
			else
			{
				print "Sorry you are not allowed in.";
				print "Come back with a  = .";
			}	
		}
		else if( $myAge >= 65)
		{
			print "You qualify for a senior discount.";
		}
		else
		{
			print "Welcome to the show!";
		}
	?>
</body>
</html>