<html>
	<head>
		<title>PHP Creating Database Tables Using Text File</title>
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
			
			$query_file = "sql_query.txt";
			
			$fp  = fopen($query_file, 'r');
			
			$sql = fread($fp, filesize($query_file));
			
			fclose($fp);
			
			$retval = mysql_query($sql, $conn);
			
			if($retval) {
				echo "Table employee_text created successfully\n";
			} else {
				die("Could not create table: ". mysql_error());
			}

			mysql_close($conn);
		?>
	</body>
</html>