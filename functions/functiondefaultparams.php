<html>
	<head>
		<title>Writing PHP Function which returns value</title>
	</head>
	<body>
		<?php 
		  // Use the assignment operator to set default values
		      function printMe($param = "Uzumaki Naruto!") {
		          print $param;
		      }
		      
		      // Prints "Uchiha Itachi!", overrides the default value of course.
		      printMe("Uchiha Itachi!");
		      
		      // echo can be used without ()
		      echo "<br />";
		      
		      // Prints the default value "Uzumaki Naruto!" dattebayo!
		      printMe();
		?>
	</body>

</html>