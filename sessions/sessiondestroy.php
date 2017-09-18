<?php
    // Of course, start the session first so that we know what we are trying to UNSET. :)
    session_start();
    
    // Unset a single variable
    unset($_SESSION['counter']);
?>
<html>
	<head>
		<title>PHP Destroy Single Variable Session</title>
	</head>
	<body>
		<?php echo("Session is destroyed. Try to open sessionstart.php again"); ?>
	</body>
</html>