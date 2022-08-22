<?php
include_once ('../config/functions.php');

$type = $_POST['type'];
$date_done = $_POST['date_done'];
$finding = $_POST['finding'];

registerLaboratoryTest($type, $date_done, $finding);
header("Location: /laboratory_test/index.php");
exit;
?>