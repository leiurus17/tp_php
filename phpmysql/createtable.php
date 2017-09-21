<html>
	<head>
		<title>PHP Creating Database Tables</title>
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
			
			$sql = 'CREATE TABLE employee('.
				   'emp_id      INT           NOT NULL   AUTO_INCREMENT, '.
				   'emp_name    VARCHAR(20)   NOT NULL,                  '.
				   'emp_address VARCHAR(20)   NOT NULL,				     '.
				   'emp_salary  INT			  NOT NULL,				     '.
				   'join_date	TIMESTAMP(6)  NOT NULL,				     '.
				   'PRIMARY KEY (emp_id)
				   )';
			
			$retval = mysql_query($sql, $conn);
			
			if($retval) {
				echo "Table employee created successfully\n";
			} else {
				die("Could create table: ". mysql_error());
			}

			mysql_close($conn);
		?>
	</body>
</html>