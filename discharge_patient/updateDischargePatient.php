<?php
include_once ('../config/functions.php');
if (isset($_POST["id"])) {
	$id = $_POST["id"];
	$output_diagnosis = $_POST['output_diagnosis'];
	$date_leave = $_POST['date_leave'];
	$medication = $_POST['medication'];
	$activities_are_limited = $_POST['activities_are_limited'];
	$description_of_symptoms = $_POST['description_of_symptoms'];
	//	echo $check_value;
	if (isset($id)) {
		updateDischargePatient($id, $output_diagnosis, $date_leave, $medication, $activities_are_limited, $description_of_symptoms);
		header("Location: /discharge_patient/index.php");
		exit;
	} else echo 'Values are empty';

} else echo 'Choose a Discharge Patient to update'; ?>