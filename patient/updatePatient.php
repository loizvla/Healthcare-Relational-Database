<?php
include_once ('../config/functions.php');
if (isset($_POST["amka"])) {
	$id = $_POST["amka"];
	$name = $_POST["name"];
	$born = $_POST["born"];
	$gender = $_POST["gender"];
	$insurance = $_POST["insurance"];
	$current_disease = $_POST["current_disease"];
	$allergies = $_POST["allergies"];
	$historian = $_POST["historian"];
	$medicines = $_POST["medicines"];
	$current_situation = $_POST["current_situation"];
	//	echo $check_value;
	if (isset($id) && isset($name)) {
		updatePatient($id, $name, $born, $gender, $insurance, $current_disease, $allergies, $historian, $medicines, $current_situation);
		header("Location: /patient/index.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a Patient to update'; ?>