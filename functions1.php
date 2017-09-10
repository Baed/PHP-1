<!DOCTYPE html>
<html>
	<head>
		<title>Greeting</title>
	</head>
	<body>
		<?
		$test1 = 99;
		$test2 = 75;
		$test3 = 82;

		$theAverage1 = ($test1 + $test2 + $test3) / 3;
		print("The average score is: {$theAverage1}<br>");


		function getAverage($test1, $test2, $test3)
		{
			$theAverage2 = ($test1 + $test2 + $test3) / 3;
			//print("The average score is: {$theAverage2}<br>");
			print("The average score is: " . $theAverage2 . "<br>");
		}

		getAverage(25,30,20);
		?>

	</body>
</html>