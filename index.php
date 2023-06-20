<!DOCTYPE html>
<html>
<body>

<h1>Hello World!</h1>
<h2>Post Vars</h2>
 <?php
	
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
?>

<h3>Get Vars</h3>
<?php

echo "<pre>";
	print_r($_GET);
	echo "</pre>";
?>
<h4>Server Environment</h4>
<?php

	echo "<pre>";
	print_r($_SERVER);
	echo "</pre>";
?>  
<h5>Heading 5</h5>
<h6>Heading 6</h6>

</body>
</html>
