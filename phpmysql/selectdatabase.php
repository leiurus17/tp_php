<html>
	<head>
		<title>PHP Selecting a Database</title>
	</head>

	<body>

		<?php
			$dbhost = 'localhost:3306';
			$dbuser = 'guest';
			$dbpass = '';
			$dbname = 'test_db';
			
			$conn   = mysql_connect($dbhost, $dbuser, $dbpass);
			
			if($conn) {
				echo "Connected successfully\n";
			} else {
				die("Could not connect: ". mysql_error());
			}
			
			$retval = mysql_select_db($dbname);

			if($retval) {
				echo "Database ". $dbname ." selected successfully\n";
			} else {
				die("Could not select database: ". mysql_error());
			}
			
			mysql_close($conn);
		?>
	</body>
</html>