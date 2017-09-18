<?php 
    session_start();
    
    if(isset($_SESSION['counter'])) {
        $_SESSION['counter'] += 1;
    } else {
        $_SESSION['counter'] = 1;
    }
    
    $message = "You have visited this page ". $_SESSION['counter'];
    // Demonstrating the Concat/Append of the variable $message by using .=
    $message .= " in this session.";
?>
<html>
	<head>
		<title>Setting up a PHP session</title>
	</head>
	<body>
		<?php echo($message); ?>
	</body>
</html>