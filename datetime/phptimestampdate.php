<html>
	<head>
		<title>PHP convert time stamp with date</title>
	</head>

	<body>

		<?php
			print date("m/d/y G.i:s<br />", time());
			print "Today is ";
			print date("j of F Y, \a\\t g.i.a", time());
		?>
	</body>
</html>