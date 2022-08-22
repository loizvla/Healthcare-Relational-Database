<?php
include_once ('../config/functions.php');

$id = $_POST["amka"];
$name = $_POST["name"];
$born = $_POST["born"];
$specialty = $_POST["specialty"];

registerDoctor($id, $name, $born, $specialty);
header("Location: /doctor/index.php");
exit;
?>