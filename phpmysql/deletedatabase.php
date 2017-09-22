<html>
	<head>
		<title>PHP Delete Database Example</title>
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
            
            $sql    = "DROP DATABASE test_db";
            $retval = mysql_query($sql, $conn);
            
            if(!$retval) {
                die("Could not delete table test_db: ". mysql_erro());
            }
            
            echo "Database deleted successfully\n";
        ?>
	</body>
</html>