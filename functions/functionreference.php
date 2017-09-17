<html>
	<head>
		<title>Passing Argument by Reference</title>
	</head>
	<body>
		<?php 
		  // This is a normal function
		  // (Passing by value)
		  function addFive($num){
		      $num += 5;
		  }
		  
		  // This is a function that manipulate the argument itself
		  // (Passing by reference)
		  function addSix(&$num){
		      $num += 6;
		  }
		
		  // The value/variable to test
		  $orignum = 10;
		  
		  // Value will be shown is still 10.
		  addFive($orignum);
		  echo "Original Value is ". $orignum .".<br />";
		
		  // Value will be shown is 16.
		  addSix($orignum);
		  echo "Original Value is ". $orignum .".<br />";
		  
		  ?>
	</body>
</html>