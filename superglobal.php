<!DOCTYPE html>
<html>
<head><title>Super Global</title></head>
<body>
<h2>1. $GLOBALS:</h2>
<?php
	$x = 75;
	$y = 25;
	echo "Value of Global x is $x.<br>";
	echo "Value of Global y is $y.<br>";
	function addition() {
    		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	addition();
	echo "x + y = $z";
?>
<h2>2. $SERVER</h2>
<?php
	echo "The name of this script is: ";
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo "The name of server is: ";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo "The name of host is: ";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo "The referer of the url is: ";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo "The browser name is: ";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo "The name of the script is: ";
	echo $_SERVER['SCRIPT_NAME'];
?> 
</body>
</html>
