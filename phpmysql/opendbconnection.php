<html>
	<head>
		<title>PHP Opening MySQL Database Connection</title>
	</head>

	<body>

		<?php
			$dbhost = 'localhost:3306';
			$dbuser = 'guest';
			$dbpass = '';
			
			$conn   = mysql_connect($dbhost, $dbuser, $dbpass);
			
			if($conn) {
				echo "Connected successfully";
			} else {
				die("Could not connect: ". mysql_error());
			}
			
			mysql_close($conn);
		?>
	</body>
</html>