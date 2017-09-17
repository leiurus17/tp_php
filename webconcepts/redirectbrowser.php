<?php
    if(isset($_POST["location"])) {
        $location = $_POST["location"];
        header("Location:$location");
      
        exit();
    }
?>
<html>
	<head>
		<title>PHP Redirect</title>
	</head>
	<body>
		<p>Choose a site to visit :</p>
		
		<form action = "<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			<select name = "location">
				<option value = "http://tutorialspoint.com">
					Tutorialspoint.com
				</option>
				<option value = "http://www.google.com">
					Google Search Page
				</option>
			</select>
			<br />
			<input type = "submit" />
			
		</form>
	</body>
</html>