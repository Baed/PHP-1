<!DOCTYPE html>
<html>
	<head>
		<title>Processed Form2</title>
	</head>
<?
	//post hides the information on the url, makes it more cleaner
	print("Hello, " . $_POST[ 'firstName'] . " " . $_POST[ 'lastName'] );
	print( "<br>");
	print( "Your age is " . $_POST[ 'age' ] );
	print( "<br>");

	//$_POST[ "btnSubmit"] = "";

	if ($_POST[ "btnSubmit"] != "")
	{
		print( "User was saved successfully. ");
	}
	else if ($_POST[ "btnDelete"])
	{
		print("User was DELETED from the system.");
	}
?>
</html>