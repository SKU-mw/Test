<!DOCTYPE html>
<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "<h1>Hello, $name!</h1>";
}  else { echo "<h1> NoName! </h1>"; }
?>
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
