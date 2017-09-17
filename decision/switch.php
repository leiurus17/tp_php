<!DOCTYPE html>
<html>
<head>
	<title>PHP Switch Statement</title>
</head>
<body>
	<?php
		$d = date("D");

		switch ($d) {
			case 'Mon':
				echo "Today is Monday";
				break;
			case 'Tue':
				echo "Today is Tuesday";
				break;
			case 'Wed':
				echo "Today is Wednesday";
				break;
			case 'Thu':
				echo "Today is Thursday";
				break;
			case 'Fri':
				echo "Today is Friday";
				break;
			case 'Sat':
				echo "Today is Saturday";
				break;
			case 'Sun':
				echo "Today is Sunday";
				break;
			default:
				echo "NANI?!";
				break;
		}
	?>

</body>
</html>