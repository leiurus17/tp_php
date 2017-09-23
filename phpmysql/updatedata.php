<html>
	<head>
		<title>PHP Creating Database Tables</title>
	</head>

	<body>

		<?php
		  if(isset($_POST['update'])) {
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
    			
    			$emp_id     = $_POST['emp_id'];
    			$emp_salary = $_POST['emp_salary'];
    			
    			$sql = "UPDATE employee ".
        			   "SET    emp_salary = $emp_salary ".
        			   "WHERE  emp_id     = $emp_id";
    			
    			mysql_select_db("test_db");
    			
    			$retval = mysql_query($sql, $conn);
    			
    			if(! $retval) {
    			    die("Could not update data: ". mysql_error());
    			}
    			
    			echo "Updated data successfully\n";
    			
    			mysql_close($conn);
		  } else {
		  }
		  
		?>
		<form method = "POST" action = "<?php $_PHP_SELF ?>">
			<table width = "400" border = "0" cellspacing = "1" cellpadding = "2">
				<tr>
					<td width = "100">Employee ID</td>
					<td><input name = "emp_id" type = "text" id = "emp_id"></td>
				</tr>
				<tr>
					<td width = "100">Employee Salary</td>
					<td><input name = "emp_salary" type = "text" id = "emp_salary"></td>
				</tr>
				<tr>
					<td width = "100"> </td>
					<td> </td>
				</tr>
				<tr>
					<td width = "100"> </td>
					<td>
						<input name = "update" type = "submit" id = "update" value = "Update" />
				</tr>
			</table>
		
		
		
		
		</form>
		
	</body>
</html>