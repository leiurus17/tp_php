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
			
			$sql = "SELECT emp_id, emp_name, emp_salary FROM employee";
			mysql_select_db("test_db");
			$retval = mysql_query($sql, $conn);
			
			if(!$retval) {
			    die("Could not get data: ". mysql_error());
			}
			
			while($row = mysql_fetch_assoc($retval)) {
			    echo "EMP ID: {$row['emp_id']} <br />".
			 	     "EMP NAME : {$row['emp_name']} <br />".
			 	     "EMP SALARY : {$row['emp_salary']} <br />".
			 	     "----------------------------------<br />";
			}
			
			echo "Fetch data successfully\n";
			
			mysql_close($conn);
		?>
	</body>
</html>
	