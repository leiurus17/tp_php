<?php
    session_start();
    
    if(isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 1;
    } else {
        $_SESSION['counter']++;
    }
    
    $message = "You have visited this page ". $_SESSION['counter'];
    $message .= " in this session.";
    
    echo($message);
?>
<html>
	<head>
		<title>PHP No Cookies Session</title>
	</head>
	<body>
		<p>
			To continue click the following link <br />
			<a href = "nextpage.php?<?php echo htmlspecialchars(SID); ?>"></a>
		</p>
	</body>
</html>