<?php
include_once ('../config/functions.php');
if (isset($_POST["id"])) {
	$id = $_POST["id"];
	$type = $_POST['type'];
	$date_done = $_POST['date_done'];
	$finding = $_POST['finding'];
	//	echo $check_value;
	if (isset($id)) {
		updateLaboratoryTest($id, $type, $date_done, $finding);
		header("Location: /laboratory_test/index.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a Laboratory Test to update'; ?>