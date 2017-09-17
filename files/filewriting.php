<?php
    /* Set the file name of the file to be created.
     * If you want to create the file in another place, include the directory path.
     */
    $filename = "newfile.txt"; 
    $file     = fopen($filename, "w"); // Create a new file in the same directory of this PHP file.
    
    if($file == FALSE) {
        echo("Error in opening new file.");
        exit();
    }
    fwrite($file, "This is a a simple test to write into a file.\n"); // Write something to the text file.
    fclose($file);
?>
<html>
	<head>
		<title>Writing a file using PHP</title>
	</head>
	<body>
		<?php 
		  $filename = "newfile.txt";
		  $file     = fopen($filename, "r");
		  
		  if($file == FALSE){
		      echo("Error in opening file.");
		      exit();
		  }
		  
		  $filesize = filesize($filename);
		  $filetext = fread($file, $filesize);
		  
		  fclose($file);
		  
		  echo("File size: $filesize bytes.");
		  echo("<pre>$filetext</pre>");
		  echo("File name: $filename");
		
		?>
	</body>
</html>