<?php
include_once ('../config/functions.php');
if (isset($_POST["amka"])) {
	$id = $_POST["amka"];

	if (isset($id)) {
		deletePatient($id);
		header("Location: /patient/index.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a patient to delete'; ?>