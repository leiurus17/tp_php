<html>
	<head>
		<title>PHP Select Records with Pagination</title>
	</head>

	<body>

		<?php
		    // This code is broken. Hahaha.
		
			$dbhost = 'localhost:3306';
			$dbuser = 'guest';
			$dbpass = '';
			$dbname = 'test_db';
			
			$rec_limit  = 5;
			
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
			
			
			/* Get the total number of records */
			$sql    = "SELECT count(emp_name) FROM employee";
			$retval = "mysql_query($sql, $conn)";
			
			if(!$retval) {
			    die("Could not get data: ". mysql_error());
			}
			

			$row       = mysql_fetch_array($retval, MYSQL_NUM);
			$rec_count = $row[0];
			
			if(isset($_GET{'page'})) {
			    $page   = $_GET{'page'} + 1;
			    $offset = $rec_limit * page; 
			} else {
			    $page   = 0;
			    $offset = 0;
			}
			
			$left_rec = $rec_count - ($page * $rec_limit);
			$sql = "SELECT emp_id, emp_name, emp_salary ".
			 	   "FROM employee ".
			 	   "LIMIT $offset, $rec_limit";
			
			$retval = mysql_query($sql, $conn);
			
			if(!$retval) {
			    die("Could not get data: ". mysql_error());
			}
			
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
			    echo "EMP ID : {$row['emp_id']} <br /> ".
			 	     "EMP NAME : {$row['emp_name']} <br /> ".
			 	     "EMP SALARY : {$row['emp_salary']} <br /> ".
			 	     "---------------------------<br />";
			}
			
			if($page > 0) {
			    $last = $page - 2;
			    echo "<a href = \"". $_SERVER['PHP_SELF'] ."?page=$last\">Last 5 Records</a> |";
			    echo "<a href = \"". $_SERVER['PHP_SELF'] ."?page=$page\">Next 5 Records</a>"; 
			} else if($page == 0) {
			    echo "<a href = \"". $_SERVER['PHP_SELF'] ."?page=$page\">Next 5 Records</a>";
	 	    } else if($left_rec < $rec_limit) {
	     	    $last = $page - 2;
	     	    echo "<a href = \"". $_SERVER['PHP_SELF'] ."?page=$last\">Last 5 Records</a>";
			}
			
			mysql_close($conn);
		?>
	</body>
</html>
	