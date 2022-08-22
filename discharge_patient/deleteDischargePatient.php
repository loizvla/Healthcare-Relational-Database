<?php
include_once ('../config/functions.php');
if (isset($_POST["id"])) {
	$id = $_POST["id"];

	if (isset($id)) {
		deleteDischargePatient($id);
		header("Location: /discharge_patient/index.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a Discharge Patient to delete'; ?>