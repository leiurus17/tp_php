<html>
	<head>
		<title>PHP Select Records using mysql_fetch_array MYSQL_NUM</title>
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
			
			while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
			    echo "EMP ID: {$row[0]} <br />".
			 	     "EMP NAME : {$row[1]} <br />".
			 	     "EMP SALARY : {$row[2]} <br />".
			 	     "----------------------------------<br />";
			}
			
			echo "Fetch data successfully\n";
			
			mysql_close($conn);
		?>
	</body>
</html>
	