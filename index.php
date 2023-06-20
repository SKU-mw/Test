<!DOCTYPE html>
<!-- br@michael-wessel.de -->
<html>

<body>

<h1>Hello World!</h1>

<form method="post" action="welcome.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>
	
	
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
</body>
</html>
