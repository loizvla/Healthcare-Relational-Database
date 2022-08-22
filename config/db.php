<?php
try {
	$db = new PDO("mysql:host=localhost;dbname=hospital;port=3307", "root", "");
	// var_dump($db);
	
} catch (Exception $e) {
echo "Connection error... ";
}

?>