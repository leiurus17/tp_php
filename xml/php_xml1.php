<html>
	<body>
		<?php
	       	$note="
			<note>
             <to>Uzumaki Naruto</to>
             <from>Uchiha Sasuke</from>
             <heading>Mugen Tsukuyomi</heading>
             <body>Please defeat Kaguya</body>
		    </note>";
            $xml = simplexml_load_string($note);
            print_r($xml); 
		?>

	</body>
</html>
