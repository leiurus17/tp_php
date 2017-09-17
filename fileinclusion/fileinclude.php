<html>
	<head>
		<title>PHP Test Include</title>
	</head>
	<body>
	    <!-- The file nomenu.php does not exist. The message inside <p> should still show. -->
		<?php include("nomenu.php")?>
		<p>This is an example to show how to include/require wrong PHP file!</p>
	</body>
</html>