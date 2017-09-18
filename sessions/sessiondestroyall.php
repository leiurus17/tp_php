<?php
    // Of course, start the session first so that we know what we are trying to UNSET. :)
    session_start();
    
    // Destroy all session variables
    session_destroy();
?>
<html>
	<head>
		<title>PHP Session Destroy All</title>
	</head>
	<body>
		<?php echo("This page calls session_destroy() method."); ?>
	</body>
</html>