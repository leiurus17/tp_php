<html>
	<head>
		<title>PHP Functions with Parameters</title>
	</head>
	<body>
		<?php 
		  function addFunction($num1, $num2) {
		      $sum = $num1 + $num2;
		      
		      echo("$sum <br />");
		  }
		
		  addFunction(22, 22);
		  addFunction(76, 10);
		  addFunction(13, 17);
		?>
	</body>
</html>