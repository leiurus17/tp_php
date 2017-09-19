<?php
	// If the DID upload a file...
	
	if($_FILES['photo']['name']) {
		// If no errors...
		if(!$_FILES['photo']['error']) {
			// Now is the time to modify the future file name and validate the file
			$new_file_name = strtolower($_FILES['photo']['name']); // Rename file
			
			if($_FILES['photo']['size'] > (1024000)) { // Can't be larger than 1 MB
				$valid_file = false;
				$message = 'Oops! Your file\'s size is too large.';
			} else {
				$valid_file = true;
			}
			
			// If the file has passed the test
			if($valid_file) {
				// Move it to where we want it to be
				move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$new_file_name);
				$message = 'Congratulations! Your file was accepted.';
			}
		
		
		}
		
		// If there is an error...
		else {
			// Set that to be the returned message
			$message = 'Ooops! Your upload triggered the following error: '.$_FILES['photo']['error'];
		}
		
	}
	echo($message ."<br />");
	echo($_FILES['photo']['name']."<br />");
	echo($_FILES['photo']['size']."<br />");
	echo($_FILES['photo']['type']."<br />");
	echo($_FILES['photo']['tmp_name']."<br />");
?>