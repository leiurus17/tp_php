<?php
    if(isset($_REQUEST["name"]) || isset($_REQUEST["age"])) {
        echo "Welcome ". $_REQUEST['name'] ."<br />";
        echo "You are ". $_REQUEST['age']  ." years old.";
        
        exit();
    }
?>
<html>
	<head>
		<title>PHP Request Method</title>
	</head>
	<body>
		<form action = "<?php $PHP_SELF ?>" method = "POST">
			Name: <input type = "text" name = "name" />
			<br />
			Age: <input type = "text" name = "age" />
			<br />
			<input type = "submit" />
		</form>
	</body>
</html>