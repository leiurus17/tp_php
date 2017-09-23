<html>
	<head>
		<title>PHP Load Data MySQL</title>
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
			
			$sql = "LOAD DATA INFILE '$backup_file' INTO TABLE $table_name";
			
			$retval = mysql_query($sql, $conn);
			
			if(! $retval ) {
			    die("Could not load data: " . mysql_error());
			}
			
			echo "Loaded data successfully\n";

			mysql_close($conn);
		?>
	</body>
</html>