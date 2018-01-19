<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sam1</title>
</head>
<body>

	<?php
		$string = 'id:name:age
			1:Ваня:8
			2:Коля:10
			3:Саша:5' 
	 ?>
	 <?php 
	 	$kids = explode("\n", $string);
	 	$firststring = explode(":",array_shift($kids));

	 	foreach ($kids as $kid) {
	 		$persons = explode(":", trim($kid));
	 		$person = array_combine($firststring, $persons);
	 		echo '<pre>';
	 		var_dump($person);
	 		echo '</pre>';
	 	}
	?>
	
</body>
</html>