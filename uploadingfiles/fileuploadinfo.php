<?php
    if(isset($_FILES['image'])) {
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp  = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext  = strtolower(end(explode('.', $_FILES['image']['name'])));
    
        $extensions = array("jpeg", "jpg", "png");
    
        if(in_array($file_ext, $extensions) == FALSE) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152) {
            $errors[] = "File size must be less than 2MB";
        }
        
        if(empty($errors) == TRUE) {
            move_uploaded_file($file_tmp, "images/".$file_name);
            echo "Sucess!";
        } else {
            print_r($errors);
        }
    }

?>
<html>
	<head>
		<title>PHP Upload File Example</title>
	</head>
	<body>
		<form action = "" method = "POST" enctype = "multipart/form-data">
			<input type = "file" name = "image" />
			<input type = "submit" />
			
			<ul>
    			<li>File size: <?php echo $_FILES['image']['size']; ?></li>
    			<li>File type: <?php echo $_FILES['image']['type']; ?></li>
    			<li>Sent file: <?php echo $_FILES['image']['name']; ?></li>
			</ul>
			
		</form>
		
		
	</body>
</html>