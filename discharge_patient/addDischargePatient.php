<?php
include_once ('../config/functions.php');

$output_diagnosis = $_POST['output_diagnosis'];
$date_leave = $_POST['date_leave'];
$medication = $_POST['medication'];
$activities_are_limited = $_POST['activities_are_limited'];
$description_of_symptoms = $_POST['description_of_symptoms'];

registerDischargePatient($output_diagnosis, $date_leave, $medication, $activities_are_limited, $description_of_symptoms);
header("Location: /discharge_patient/index.php");
exit;
?>