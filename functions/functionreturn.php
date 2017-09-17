<html>
	<head>
		<title>Writing PHP Function which returns value</title>
	</head>
	<body>
		<?php 
		  function addFunction($num1, $num2) {
		      $sum = $num1 + $num2;
		      
		      return $sum;
		  }
		  
		  // Pass the value returned by a function to a variable.
		  $return_value = addFunction(10, 20);
		  echo "Returned value from the function : $return_value";
          echo "<br />";		  
		  // Or you can print out directly the returned value.
		  echo "Another way : ". addFunction(5, 5);
		?>
	</body>
</html>