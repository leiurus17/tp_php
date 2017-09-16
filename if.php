<!DOCTYPE html>
<html>
<head>
	<title>PHP Day of Week</title>
</head>
<body>
	
	<?php
		$d = date("D");

		if ($d == "Fri") {
			echo "Have a nice weekend!";
		}
		else {
			echo "Have a nice day!";
		}
	?>

</body>
</html>