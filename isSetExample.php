<!DOCTYPE html>
<html>
	<head>
		<title>Is Set Example</title>
	</head>
<?
	//post hides the information on the url, makes it more cleaner
	/*
	print("Hello, " . $_POST[ 'firstName'] . " " . $_POST[ 'lastName'] );
	print( "<br>");
	print( "Your age is " . $_POST[ 'age' ] );
	print( "<br>");
	*/
	//$_POST[ "btnSubmit"] = "";
	$myName = "";

	if( isset($myName))
	{
		print("Found the myName variable. It's value is: ");
		print($myName);
	}
	else
	{
		print("I could not find the myName variable.");
	}
?>
</html>