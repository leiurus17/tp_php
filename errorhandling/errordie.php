<html>
	<head>
		<title>PHP Error Handling Function</title>
	</head>

	<body>

		<?php
			if(!file_exists("/tmp/test.txt")) {
				die("File not found");
			} else {
				$file = fopen("/tmp/test.txt","r");
				print "Opened file successfully";
			}
			
			// Test of code here.
				
		?>
	</body>
</html>