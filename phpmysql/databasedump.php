<html>
	<head>
		<title>PHP Database Dump</title>
	</head>

	<body>

		<?php
			$dbhost = 'localhost:3306';
			$dbuser = 'root';
			$dbpass = '';
			$dbname = 'test_db';
			
			$backup_file = $dbname .date("Y-m-d-H-i-s") . ".gz";
			
			$command = "mysqldump --opt -h $dbhost -u $dbuser -p $dbpass ". "$dbname | gzip > $backup_file";
			
			system($command);
			
			// Where did the dump file go?
		?>
	</body>
</html>