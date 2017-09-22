<html>
	<head>
		<title>PHP Delete Table Example</title>
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
            
            $sql    = "DROP TABLE employee";
            $retval = mysql_query($sql, $conn);
            
            if(!$retval) {
                die("Could not delete the table employee: ". mysql_erro());
            }
            
            echo "Table deleted successfully\n";
        ?>
	</body>
</html>