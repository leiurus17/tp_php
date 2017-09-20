<html>
	<head>
		<title>Sending HTML email using PHP</title>
	</head>
	<body>
		<?php
		  
		  //@TODO Try on Saturday to send e-mail to gmail from localhost
		
		  $to       = "uzumakinaruto@gmail.com";
		  $subject  = "This is subject";
		  
		  $message  = "<b>This is HTML message.</b>";
		  $message .= "<h1>This is headline.</h1>";
		  
		  $header   = "From:me@example.com \r\n";
		  $header  .= "Cc:uchihaobito@gmail.com \r\n";
		  $header  .= "MIME-Version: 1.0\r\n";
		  $header  .= "Content-type: text/html\r\n";
		  
		  $retval   = mail($to, $subject, $message, $header);
		  
		  if($retval == true) {
		      echo "Message sent successfully...";
		  } else {
		      echo "Message could not be sent...";
		  }
		?>
	</body>
</html>