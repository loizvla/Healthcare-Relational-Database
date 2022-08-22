<?php
include_once ('../config/functions.php');

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

registerPatient($id, $name, $born, $gender, $insurance, $current_disease, $allergies, $historian, $medicines, $current_situation);
header("Location: /patient/index.php");
exit;
?>