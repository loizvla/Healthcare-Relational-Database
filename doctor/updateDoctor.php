<?php
include_once ('../config/functions.php');
if (isset($_POST["amka"])) {
	$id = $_POST["amka"];
	$name = $_POST["name"];
	$born = $_POST["born"];
	$specialty = $_POST["specialty"];
	//	echo $check_value;
	if (isset($id) && isset($name)) {
		updateDoctor($id, $name, $born, $specialty);
		header("Location: /doctor/index.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a Patient to update'; ?>