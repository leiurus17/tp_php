<html>
	<head>
		<title>Add Record Into A Table</title>
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
		
		    $sql = "INSERT INTO employee " .
		  		   "(emp_name, emp_address, emp_salary, join_date) ".
		  		   "VALUES ('guest', 'XYZ', 2000, NOW())";
		    
		    mysql_select_db('test_db');
		    
		    $retval = mysql_query($sql,$conn);
		    
		    if(! $retval) {
		        die ("Could not enter data: ". mysql_error());
		    }
		    
		    echo "Entered data successfully\n";
		    
		    mysql_close($conn);
		
		
		?>
	</body>
</html>