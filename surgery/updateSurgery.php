<?php
include_once ('../config/functions.php');
if (isset($_POST["id"])) {
	$id = $_POST["id"];
	$description = $_POST['description'];
	$date_and_time = $_POST['date_and_time'];
	$report_practical = $_POST['report_practical'];
	//	echo $check_value;
	if (isset($id)) {
		updateSurgery($id, $description, $date_and_time, $report_practical);
		header("Location: /surgery/index.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a Surgery to update'; ?>