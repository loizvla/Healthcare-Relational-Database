<?php
include_once ('../config/functions.php');
if (isset($_POST["amka"])) {
	$id = $_POST["amka"];

	if (isset($id)) {
		deleteDoctor($id);
		header("Location: /doctor/index.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a doctor to delete'; ?>