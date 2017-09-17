<?php 
if(isset($_POST["name"]) || isset($_POST["age"])) {
        if (preg_match("/[^A-Za-z'-]/",$_POST['name'])) {
          die ("Invalid name and name should be alpha");  
        }
    
    	  echo "Welcome ". $_POST['name'] ."<br />";
    	  echo "You are ". $_POST['age']  ." years old.";
        
    	  exit();
    }		
?>
<html>
	<head>
		<title>PHP HTML Forms</title>
	</head>
	<body>
		<form action = "<?php $_PHP_SELF ?>" method = "POST">
			Name: <input type="text" name="name" />
			<br />
			Age: <input type="text" name="age" />
			<br />
			<input type = "submit" />
		</form>
	</body>
</html>