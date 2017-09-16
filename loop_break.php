<!DOCTYPE html>
<html>
<head>
	<title>PHP Break Loop</title>
</head>
<body>
	<?php
		$i = 0;

		while($i < 10) {
			$i++;
			if( $i == 3)
				break;
		}
		echo ("Loop stopped at i = $i");
	?>
</body>
</html>