<!DOCTYPE html>
<html>
<head>
	<title>PHP Strings</title>
</head>
<body>
	<?php
		$variable  = "name";
		$literally = 'My $variable will not print!';

		print($literally);
		print "<br />";

		$literally = "My $variable will print!";
		print($literally);
		print "<br />";
		
		$ninja = "Uzumaki Naruto da!";
		print($ninja);
	?>
</body>
</html>