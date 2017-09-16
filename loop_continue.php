<!DOCTYPE html>
<html>
<head>
	<title>PHP Continue Loop</title>
</head>
<body>
	<?php
		$array = array (1,2,3,4,5);
	
		foreach($array as $value) {
			if($value == 4)
				continue;
			echo "Value is $value <br />";
		}
	?>
</body>
</html>