<!DOCTYPE html>
<html>
<head>
	<title>PHP Random Image</title>
</head>
<body>
	<?php
		srand( microtime() * 1000000 );
		$num = rand(1,4);

		switch ($num) {
			case 1:
				$image_file = "php/images/ff.jpg";
				break;
			case 2:
				$image_file = "php/images/gc.jpg";
			case 3:
				$image_file = "php/images/safari.jpg";
				break;
			case 4:
				$image_file = "php/images/ie.jpg";
				break;
		}

		echo "Random Image : <img src=$image_file />";
	?>
</body>
</html>