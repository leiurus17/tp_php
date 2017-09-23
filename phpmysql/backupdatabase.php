<html>
	<head>
		<title>PHP Backup MySQL</title>
	</head>

	<body>

		<?php
			$dbhost = 'localhost:3306';
			$dbuser = 'root';
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
			$table_name  = "employee";
			
			// The path is in XAMPP MySQL? Why?
			
			$backup_file = "./tmp/employee.sql";
			
			$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
			
			$retval = mysql_query($sql, $conn);
			
			if(! $retval ) {
			    die("Could not take data backup: " . mysql_error());
			}
			
			echo "Backedup data successfully\n";

			mysql_close($conn);
		?>
	</body>
</html>