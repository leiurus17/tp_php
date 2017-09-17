<?php
    if(isset($_GET["name"]) || isset($_GET["age"])) {
        echo "Welcome ". $_GET['name'] ."<br />";
        echo "You are ". $_GET['age'] ." years old.";
        
        exit();
    }
?>
<html>
	<head>
		<title>PHP Get Method</title>
	</head>
	<body>
		<form action = "<?php  $_PHP_SELF ?>" method = "GET">
			Name: <input type = "text" name = "name" />
			<br />
			Age: <input type = "text" name = "age" />
			<br />
			<input type = "submit" />
		</form>
	</body>
</html>