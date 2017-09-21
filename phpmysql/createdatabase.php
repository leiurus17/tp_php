<html>
	<head>
		<title>PHP Creating a Database</title>
	</head>

	<body>

		<?php
			$dbhost = 'localhost:3306';
			$dbuser = 'guest';
			$dbpass = '';
			
			$conn   = mysql_connect($dbhost, $dbuser, $dbpass);
			
			if($conn) {
				echo "Connected successfully\n";
			} else {
				die("Could not connect: ". mysql_error());
			}
			
			$sql    = "CREATE DATABASE test_db";
			$retval = mysql_query($sql, $conn);

			if($retval) {
				echo "Database test_db created successfully\n";
			} else {
				die("Could not create database: ". mysql_error());
			}
			
			mysql_close($conn);
		?>
	</body>
</html>