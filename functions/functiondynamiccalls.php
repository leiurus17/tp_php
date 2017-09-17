<html>
	<head>
		<title>Dynamic Function Calls</title>
	</head>
	<body>
		<?php 
		
		  /* 
		   * Dynamic Function Calls
           * It is possible to assign function names
           * as strings to variables and then treat these variables
           * exactly as you would the function name itself.
           * Following example depicts this behaviour.
		   */
		  
		  // sayHello is the function name
		  function sayHello() {
		      echo "Hello<br />";
		  }
		  
		  // Call the function name as string ?!
		  $function_holder = "sayHello";
		  $function_holder();
		
		?>
	</body>
</html>